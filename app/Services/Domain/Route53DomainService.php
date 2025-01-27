<?php

namespace App\Services\Domain;

use App\Contracts\Services\Route53ServiceContract;
use App\Models\Credential;
use Aws\Api\DateTimeResult;
use Aws\Route53\Route53Client;
use Aws\Route53Domains\Route53DomainsClient;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;

class Route53DomainService implements Route53ServiceContract
{

protected $client;
protected $domainsClient;

    /**
     * @param Credential $credential
     */
    public function __construct(Credential $credential)
    {
        $this->client = new Route53Client([
            'version' => 'latest',
            'region' => $credential->settings['region'],
            'credentials' => [
                'key' => $credential->access_token,
                'secret' => $credential->secret_key,
            ],
        ]);

        $this->domainsClient = new Route53DomainsClient([
            'version' => 'latest',
            'region' => $credential->settings['region'],
            'credentials' => [
                'key' => $credential->access_token,
                'secret' => $credential->secret_key,
            ],
        ]);
    }

    public function getTlds(): array
    {
        return iterator_to_array($this->domainsClient->getIterator('ListPrices', ['MaxItems' => 1000]))['Prices'];
    }

    public function getDomains(int $limit = 10, int $page = 1): LengthAwarePaginator
    {
        $registrarData = iterator_to_array($this->domainsClient->listDomains()->getIterator())['Domains'];

        $domains = array_map(
            function ($domain) use ($registrarData) {
                $registrarDomainData = array_filter($registrarData, fn ($data) => $data['DomainName'] == trim($domain['Name'], "\."));
                return array_merge($domain, Arr::first($registrarDomainData) ?? []);
            },
            iterator_to_array($this->client->getIterator('ListHostedZones'))
        );

        return new \Illuminate\Pagination\LengthAwarePaginator(
            array_map(fn ($domain) => [
                'id' => $domain['Id'],
                'name' => $domain['Name'],
                'domain' => $domain['Name'],
                'expires_at' => $expiry = Carbon::parse($domain['Expiry']->format('Y-m-d H:i:s')),
                'created_at' => $expiry->copy()->subYear(),
                'auto_renew' => $domain['AutoRenew'],
            ], $domains),
            $totalCount = count($domains),
            $totalCount,
            $page
        );
    }

    public function getDomainNs(string $domain): array
    {
        $dns = $this->getDns($domain);

        $sourceOfAuthority = Arr::first(array_filter($dns->items(), fn ($record) => stripos($record['Type'], 'NS') === 0));

        if (empty($sourceOfAuthority)) {
            return [];
        }

        return array_map(fn ($record) => $record['Value'], $sourceOfAuthority['ResourceRecords']);
    }

    public function updateDomainNs(string $domain, array $nameservers): array
    {
        // TODO: Implement updateDomainNs() method.
    }

    public function searchDomain(string $domain): array
    {
        // TODO: Implement searchDomain() method.
    }

    public function registerDomain(string $domain, int $years = 1): array
    {
        // TODO: Implement registerDomain() method.
    }

    public function renewDomain(string $domain, int $years = 1): array
    {
        // TODO: Implement renewDomain() method.
    }

    public function createDomain(string $domain): array
    {
        // TODO: Implement createDomain() method.
    }

    public function getDns(string $domain, string $type = 'A', int $limit = 10, int $page = 1): LengthAwarePaginator
    {
        if (str_contains($domain, '.')) {
            // So, conventionally, I want to be able to put in a domain here, and AWS requires the hosted zone id.
            $domain = cache()->remember('route53.dns.'.$domain, now()->addHour(), fn () => iterator_to_array($this->client->getIterator('ListHostedZones', [
                'DNSName' => $domain,
            ]))[0]['Id'] ?? null);
        }

        $items = iterator_to_array($this->client->getIterator('ListResourceRecordSets', ['HostedZoneId' => $domain]));

        $items = array_map(fn ($record) => [
            'id' => md5($record['Type'] . $record['Name']),
            'name' => $record['Name'],
            'type' => $record['Type'],
            'comment' => $record['SetIdentifier'] ?? null,
            'ttl' => $record['TTL'],
            'content' => array_map(fn ($r) => $record['Type'] == 'MX' ? explode(' ', $r['Value'])[1] : $r['Value'], $record['ResourceRecords']),
            'priority' => $record['Type'] == 'MX' ? explode(' ', $record['ResourceRecords'][0]['Value'])[0] : null,
            'geolocation' => $record['GeoLocation'] ?? null,
        ], $items);

        return new \Illuminate\Pagination\LengthAwarePaginator(
            $items,
            $totalCount = count($items),
            $totalCount,
            $page
        );
    }

    public function deleteDnsRecord(string $domain, string $dnsRecordId): void
    {
        $records = $this->getDns($domain);

        $record = Arr::first(array_filter($records->items(), fn ($record) => $record['id'] == $dnsRecordId));

        if (empty($record)) {
            throw new \DomainException('Record not found');
        }

        $this->client->changeResourceRecordSets([
            'HostedZoneId' => $domain,
            'ChangeBatch' => [
                'Changes' => [
                    [
                        'Action' => 'DELETE',
                        'ResourceRecordSet' => [
                            'Name' => $record['name'],
                            'Type' => $record['type'],
                            'TTL' => $record['ttl'],
                            'SetIdentifier' => $record['comment'],
                            'ResourceRecords' => array_map(
                                fn ($value) => ['Value' => $value],
                                $record['content']
                            ),
                            'GeoLocation' => $record['geolocation'] ?? null,
                        ],
                    ],
                ],
            ],
        ]);
    }

    public function createDnsRecord(
        string $domainIdentifier,
        string $targetDomain,
        string $value,
        string $type = 'A',
        string $ttl = '300',
        string $comment = '',
    ): void {
        $this->client->changeResourceRecordSets([
            'HostedZoneId' => $domainIdentifier,
            'ChangeBatch' => [
                'Changes' => [
                    [
                        'Action' => 'CREATE',
                        'ResourceRecordSet' => [
                            'Name' => $targetDomain,
                            'Type' => $type,
                            'TTL' => $ttl,
                            'ResourceRecords' => [
                                [
                                    'Value' => $value,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }
}