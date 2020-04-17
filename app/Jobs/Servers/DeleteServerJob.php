<?php

namespace App\Jobs\Servers;

use App\Events\Completed\ServerDeletionCompletedEvent;
use App\Events\Failed\ServerDeletionFailedEvent;
use App\Events\Running\ServerDeletionRunningEvent;
use App\Server;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteServerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function handle()
    {
        try {
            event(new ServerDeletionRunningEvent($this->server));
            $this->server->delete();
            event(new ServerDeletionCompletedEvent($this->server));
        } catch (\Throwable $throwable) {
            event(new ServerDeletionFailedEvent($this->server));
        }
    }
}
