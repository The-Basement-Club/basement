<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method null|Server firstWhere(string $param, $value);
 * @method Server create(array $data);
 */
class Server extends Model
{
    public $fillable = [
        'name',
        'threads',
        'memory',
        'is_hypervisor',
        'collect_metrics',
        'uses_client',
        'has_backup',
        'is_powered_on',
        'ip_address',
        'ip_v6_address',
        'kernel',
        'distro',
        'boot_disk',
        'filesystem_format',
        'cost_in_cents',
        'credential_id',
        'user_id',
        'locked_at',
        'locked_by_action_id',
    ];
}
