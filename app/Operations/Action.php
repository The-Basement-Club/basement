<?php

namespace App\Operations;

use App\Script;
use App\Server;
use App\User;
use DealerInspire\Operations\Operation;

abstract class Action extends Operation
{
    protected $table = 'server_actions';

    public abstract function run();

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function script()
    {
        return $this->belongsTo(Script::class);
    }

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
