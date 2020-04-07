<?php

namespace App\Http\Controllers;

use App\Http\Requests\Server\IndexRequest;
use App\Http\Requests\Server\PowerOffRequest;
use App\Http\Requests\Server\PowerOnRequest;
use App\Http\Requests\Server\RebootRequest;
use App\Http\Requests\Server\RegionsRequest;
use App\Http\Requests\Server\ShutdownRequest;
use App\Http\Requests\Server\SizesRequest;
use App\Http\Requests\Server\SshKeysRequest;
use App\Http\Requests\Server\StoreRequest;
use App\Http\Resources\ServerResource;
use App\Services\ServerServiceFactory;
use Kregel\Basement\Credential;

class ServerController extends Controller
{
    protected $serverServiceFactory;

    public function __construct(ServerServiceFactory $serverServiceFactory)
    {
        $this->serverServiceFactory = $serverServiceFactory;
    }

    public function store(StoreRequest $request, Credential $credential)
    {
        $server = $this->serverServiceFactory->make($credential)->createServer($request->validated());

        return ServerResource::make([$server]);
    }

    public function index(IndexRequest $request, Credential $credential)
    {
        $servers = $this->serverServiceFactory->make($credential)->findAllServers();

        return ServerResource::make($servers);
    }

    public function powerOn(PowerOnRequest $request, Credential $credential, $identifier)
    {
        $this->serverServiceFactory->make($credential)
            ->powerOnServer($identifier);
    }

    public function powerOff(PowerOffRequest $request, Credential $credential, $identifier)
    {
        $this->serverServiceFactory->make($credential)
            ->powerOffServer($identifier);
    }

    public function shutdown(ShutdownRequest $request, Credential $credential, $identifier)
    {
        $this->serverServiceFactory->make($credential)
            ->shutdownServer($identifier);
    }

    public function regions(RegionsRequest $request, Credential $credential)
    {
        return $this->serverServiceFactory->make($credential)
            ->findAllRegions();
    }

    public function sizes(SizesRequest $request, Credential $credential)
    {
        return $this->serverServiceFactory->make($credential)
            ->findAllSizes();
    }

    public function sshKeys(SshKeysRequest $request, Credential $credential)
    {
        return $this->serverServiceFactory->make($credential)
            ->findAllSshKeys();
    }

    public function reboot(RebootRequest $request, Credential $credential, $identifier)
    {
        $this->serverServiceFactory->make($credential)
            ->rebootServer($identifier);
    }
}
