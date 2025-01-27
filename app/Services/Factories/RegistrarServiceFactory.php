<?php

declare(strict_types=1);

namespace App\Services\Factories;

use App\Contracts\Services\RegistrarServiceContract;
use App\Models\Credential;
use App\Services\Domain\Route53DomainService;
use App\Services\Registrar\CloudflareRegistrarService;
use App\Services\Registrar\NamecheapService;

class RegistrarServiceFactory
{
    public function make(Credential $credential): RegistrarServiceContract
    {
        return match ($credential->service) {
            Credential::NAMECHEAP => new NamecheapService($credential),
            Credential::CLOUDFLARE => new CloudflareRegistrarService($credential),
            Credential::ROUTE53 => new Route53DomainService($credential),
        };
    }
}
