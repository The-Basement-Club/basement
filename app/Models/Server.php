<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    /** @use HasFactory<\Database\Factories\ServerFactory> */
    use HasFactory;

    public $fillable = [
        'credential_id',
        'server_id',
        'name',
        'ip_address',
        'ip_address_v6',
        'internal_ip_address',
        'internal_ip_address_v6',
        'os',
        'username',
        'last_ping_at',
        'booted_at',
    ];

    public function credential()
    {
        return $this->belongsTo(Credential::class);
    }
}
