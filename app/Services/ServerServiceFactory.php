<?php

namespace App\Services;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Services\Domain\ServerService as DomainServerService;
use Kregel\Basement\Credential;
use Kregel\Basement\DigitalOcean\ServerService;
use Kregel\Basement\ServerServiceContract;

class ServerServiceFactory implements ServerServiceFactoryContract
{
    public function make(Credential $credential): ServerServiceContract
    {
        switch ($credential->type) {
            case 'digitalocean':
                // I question whether or not this is the _best_ way to do this... I think I'd rather only have to pass in the credential to the server service :thinking:
                return new ServerService($credential);
            case 'basement':
                return new DomainServerService($credential);
        }
    }
}
