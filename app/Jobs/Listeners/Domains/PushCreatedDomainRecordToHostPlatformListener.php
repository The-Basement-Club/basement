<?php

namespace App\Jobs\Listeners\Domains;

use App\Contracts\Services\DomainServiceContract;
use App\Events\Models\DomainRecord\DomainRecordCreated;
use App\Events\Models\DomainRecord\DomainRecordDeleted;
use App\Events\Models\DomainRecord\DomainRecordUpdated;
use App\Models\Domain;
use App\Nova\Credential;
use App\Services\Domain\CloudflareDomainService;
use App\Services\Factories\DomainServiceFactory;

class PushCreatedDomainRecordToHostPlatformListener
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected DomainServiceFactory $domainServiceFactory
    ) {
    }

    /**
     * Handle the event.
     */
    public function handle(DomainRecordCreated | DomainRecordDeleted | DomainRecordUpdated $event): void
    {
        if ($event instanceof DomainRecordCreated) {
            $this->createRelatedDomainRecord($event);
        } elseif ($event instanceof DomainRecordUpdated) {
            $this->updateRelatedDomainRecord($event);
        } elseif ($event instanceof DomainRecordDeleted) {
            $this->deleteRelatedDomainRecord($event);
        }
    }

    protected function deleteRelatedDomainRecord(DomainRecordDeleted $event): void
    {
        $record = $event->model;

        $service = $this->getDomainService($record->domain);

        $service->deleteDnsRecord($this->getCloudflareCredential($record->domain), $record->record_id);
    }

    protected function updateRelatedDomainRecord(DomainRecordUpdated $event): void
    {
        /** @var \App\Models\DomainRecord $record */
        $record = $event->model;

        $service = $this->getDomainService($record->domain);

        $service->updateDnsRecord($this->getCloudflareCredential($record->domain), $record->toArray());
    }

    protected function createRelatedDomainRecord(DomainRecordCreated $event): void
    {
        $record = $event->model;

        $service = $this->getDomainService($record->domain);

        $service->createDnsRecord($record->domain->cloudflare_id, $this->matchDomainRecordBody($record));
    }

    protected function getDomainService(Domain $domain): DomainServiceContract
    {
        if ($domain->cloudflare_id) {
            return new CloudflareDomainService($this->getCloudflareCredential($domain));
        }

        return $this->domainServiceFactory->make($domain->credential);
    }

    protected function getCloudflareCredential(Domain $domain): \App\Models\Credential
    {
        /** @var Credential $user */
        $user = $domain->credential->user;
        return $user->credentials()->where('service', \App\Models\Credential::CLOUDFLARE)->firstOrFail();
    }

    protected function matchDomainRecordBody(\App\Models\DomainRecord $record)
    {
        return [
            'zone_id' => $record->domain->cloudflare_id,
            'type' => $record->type,
            'name' => $record->name,
            'content' => $record->value,
            'ttl' => $record->ttl,
            'priority' => $record->priority,
            'proxied' => $record->proxied_through_cloudflare,

        ];
    }
}
