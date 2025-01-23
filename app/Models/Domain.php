<?php

namespace App\Models;

use App\Events\Models\Domain\DomainCreated;
use App\Events\Models\Domain\DomainCreating;
use App\Events\Models\Domain\DomainDeleted;
use App\Events\Models\Domain\DomainDeleting;
use App\Events\Models\Domain\DomainUpdated;
use App\Events\Models\Domain\DomainUpdating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Domain extends Model
{
    /** @use HasFactory<\Database\Factories\DomainFactory> */
    use HasFactory;

    public $dispatchesEvents = [
        'created' => DomainCreated::class,
        'creating' => DomainCreating::class,
        'deleting' => DomainDeleting::class,
        'deleted' => DomainDeleted::class,
        'updating' => DomainUpdating::class,
        'updated' => DomainUpdated::class,
    ];

    public $fillable = [
        'name',
        'verification_key',
        'cloudflare_id',
        'domain_id',
        'registered_at'
    ];

    protected function casts(): array
    {
        return [
            'registered_at' => 'datetime:Y-m-d',
            'expires_at' => 'datetime:Y-m-d',
        ];
    }

    public function credential(): BelongsTo
    {
        return $this->belongsTo(Credential::class);
    }

    public function records(): HasMany
    {
        return $this->hasMany(DomainRecord::class);
    }
}
