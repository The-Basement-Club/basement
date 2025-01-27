<?php

declare(strict_types=1);

namespace App\Contracts\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface DomainServiceContract
{
    public function createDomain(string $domain): array;

    public function getDomains(int $limit = 10, int $page = 1): LengthAwarePaginator;

    public function getDns(string $domain, string $type = 'A', int $limit = 10, int $page = 1): LengthAwarePaginator;

    public function deleteDnsRecord(string $domain, string $dnsRecordId): void;

    public function createDnsRecord(
        string $domainIdentifier,// This might be domain.com
        string $targetDomain, // this might be subdomain.domain.com
        string $value, // this might be an ip address

        string $type = 'A',
        string $ttl = '300',
        string $comment = ''
    ): void;
}
