<?php

namespace Tests\Unit\Services;

use Brick\Money\Tests\AbstractTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnsureDomainServicesImplementConsistentReturnTypeArrays extends AbstractTestCase
{
    use RefreshDatabase;

    public function test()
    {
        $services = [
            \App\Services\Registrar\CloudflareRegistrarService::class,
            \App\Services\Registrar\NamecheapService::class,
            \App\Services\Domain\Route53DomainService::class,
        ];

        foreach ($services as $service) {
            $this->assertMethodReturnsArray($service, 'getTlds');
            $this->assertMethodReturnsArray($service, 'getDomainNs', 'example.com');
            $this->assertMethodReturnsArray($service, 'updateDomainNs', 'example.com', ['ns1.example.com', 'ns2.example.com']);
            $this->assertMethodReturnsArray($service, 'searchDomain', 'example.com');
            $this->assertMethodReturnsArray($service, 'registerDomain', 'example.com');
            $this->assertMethodReturnsArray($service, 'renewDomain', 'example.com');
        }
    }
}