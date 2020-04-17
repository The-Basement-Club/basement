<?php

namespace App;

use Laravel\Sanctum\PersonalAccessToken as Model;

class PersonalAccessToken extends Model
{
    public const SCOPE_CREATE_SERVER = 'server:create';
    public const SCOPE_UPDATE_SERVER = 'server:update';
    public const SCOPE_DELETE_SERVER = 'server:delete';
    public const SCOPE_READ_SERVER = 'server:read';
    public const SCOPE_POWER_SERVER_REBOOT_SERVER = 'server:power-reboot';
    public const SCOPE_POWER_SERVER_SHUTDOWN_SERVER = 'server:power-shutdown';
    public const SCOPE_POWER_SERVER_ON_SERVER = 'server:power-on';
    public const SCOPE_POWER_SERVER_OFF_SERVER = 'server:power-off';

    public const SCOPE_CREATE_SCRIPT = 'script:create';
    public const SCOPE_UPDATE_SCRIPT = 'script:update';
    public const SCOPE_DELETE_SCRIPT = 'script:delete';
    public const SCOPE_READ_SCRIPT = 'script:read';
    public const SCOPE_EXECUTE_SCRIPT = 'script:execute';

    public const SCOPE_READ_USER = 'user';
    public const SCOPE_READ_USER_EMAIL = 'user:email';

    public const SCOPE_CREATE_SSH_KEY = 'ssh-key:create';
    public const SCOPE_UPDATE_SSH_KEY = 'ssh-key:update';
    public const SCOPE_DELETE_SSH_KEY = 'ssh-key:delete';
    public const SCOPE_READ_SSH_KEY = 'ssh-key:read';

    public const ALL_SCOPES = [
        self::SCOPE_CREATE_SERVER,
        self::SCOPE_UPDATE_SERVER,
        self::SCOPE_DELETE_SERVER,
        self::SCOPE_READ_SERVER,
        self::SCOPE_POWER_SERVER_REBOOT_SERVER,
        self::SCOPE_POWER_SERVER_SHUTDOWN_SERVER,
        self::SCOPE_POWER_SERVER_ON_SERVER,
        self::SCOPE_POWER_SERVER_OFF_SERVER,
        self::SCOPE_CREATE_SCRIPT,
        self::SCOPE_UPDATE_SCRIPT,
        self::SCOPE_DELETE_SCRIPT,
        self::SCOPE_READ_SCRIPT,
        self::SCOPE_EXECUTE_SCRIPT,
        self::SCOPE_READ_USER,
        self::SCOPE_READ_USER_EMAIL,
        self::SCOPE_CREATE_SSH_KEY,
        self::SCOPE_UPDATE_SSH_KEY,
        self::SCOPE_DELETE_SSH_KEY,
        self::SCOPE_READ_SSH_KEY,
    ];
}
