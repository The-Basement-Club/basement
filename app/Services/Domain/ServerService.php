<?php

namespace App\Services\Domain;

use App\Credential;
use App\Events\RemovalOfServerKeyRequested;
use App\Events\ServerKeyCreationRequested;
use App\Events\ServerPowerOffRequested;
use App\Events\ServerPowerOnRequested;
use App\Events\ServerRebootRequested;
use App\Events\ServerShutdownRequested;
use Kregel\Basement\Server;
use Kregel\Basement\ServerServiceContract;
use Kregel\Basement\SshKey;
use App\Server as ServerRecord;

class ServerService implements ServerServiceContract
{
    /**
     * @var Credential
     */
    protected $credential;

    public function __construct(Credential $credential)
    {
        $this->credential = $credential;
    }

    public function createServer(array $config): Server
    {
        $serverRecord = ServerRecord::create($config);

        return new Server($serverRecord->toArray());
    }

    public function createServerKey(array $config): SshKey
    {
        event(new ServerKeyCreationRequested($config));

        return new SshKey();
    }

    public function removeServerKey($identifier): void
    {
        event(new RemovalOfServerKeyRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    public function deleteServer(int $identifier): void
    {
        event(new ServerPowerOffRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    public function powerOnServer(int $identifier): void
    {
        event(new ServerPowerOnRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    public function powerOffServer(int $identifier): void
    {
        event(new ServerPowerOffRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    public function shutdownServer(int $identifier): void
    {
        event(new ServerShutdownRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    public function rebootServer(int $identifier): void
    {
        event(new ServerRebootRequested(ServerRecord::firstWhere('id', $identifier)));
    }

    /**
     * @inheritDoc
     */
    public function findAllRegions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function findAllSizes(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function findAllServers(): array
    {
        return $this->credential->servers()->paginate(100)->items();
    }

    /**
     * @inheritDoc
     */
    public function findAllSshkeys(): array
    {
        return [];
    }
}
