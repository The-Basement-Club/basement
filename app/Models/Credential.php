<?php

namespace App\Models;

use App\Events\Models\Credential\CredentialCreated;
use App\Events\Models\Credential\CredentialCreating;
use App\Events\Models\Credential\CredentialDeleted;
use App\Events\Models\Credential\CredentialDeleting;
use App\Events\Models\Credential\CredentialUpdated;
use App\Events\Models\Credential\CredentialUpdating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Credential extends Model
{
    /** @use HasFactory<\Database\Factories\CredentialFactory> */
    use HasFactory;
    public const DIGITAL_OCEAN = 'digital-ocean';

    public const CLOUDFLARE = 'cloudflare';

    public const NAMECHEAP = 'namecheap';
    public const ROUTE53 = 'route53';
    public const TYPE_SERVER = 'server';

    public const TYPE_DOMAIN = 'domain';

    public $dispatchesEvents = [
        'created' => CredentialCreated::class,
        'creating' => CredentialCreating::class,
        'deleting' => CredentialDeleting::class,
        'deleted' => CredentialDeleted::class,
        'updating' => CredentialUpdating::class,
        'updated' => CredentialUpdated::class,
    ];

    public $hidden = [
        'api_key',
        'access_token',
        'refresh_token'
    ];

    public $fillable = [
        'name',
        'type',
        'service',
        'api_key',
        'secret_key',
        'access_token',
        'refresh_token',
        'settings',
        'enabled_on',
    ];

    protected function casts(): array
    {
        return [
            'settings' => 'json',
            'enabled_on' => 'datetime:Y-m-d',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function getPublicKey(): string
    {
        $publicKeyFile = $this->settings['pub_key_file'];

        if (! file_exists($publicKeyFile)) {
            file_put_contents($publicKeyFile, $this->settings['pub_key'] ?? '');
            chmod($publicKeyFile, 0600);
        }

        return $publicKeyFile;
    }

    public function getPrivateKey(): string
    {
        $privateKeyFile = $this->settings['private_key_file'];

        if (! file_exists($privateKeyFile)) {
            file_put_contents($privateKeyFile, $this->settings['private_key'] ?? '');
            chmod($privateKeyFile, 0600);
        }

        return $privateKeyFile;
    }

    public function getPasskey(): string
    {
        return decrypt($this->settings['pass_key'] ?? '');
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
