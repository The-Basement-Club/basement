<?php

namespace App\Models;

use App\Events\Models\DomainRecord\DomainRecordCreated;
use App\Events\Models\DomainRecord\DomainRecordCreating;
use App\Events\Models\DomainRecord\DomainRecordDeleted;
use App\Events\Models\DomainRecord\DomainRecordDeleting;
use App\Events\Models\DomainRecord\DomainRecordUpdated;
use App\Events\Models\DomainRecord\DomainRecordUpdating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property \App\Models\Domain $domain
 */
class DomainRecord extends Model
{
    /** @use HasFactory<\Database\Factories\DomainRecordFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'ttl',
        'content',
        'comment',
        'tags',
        'value',
        'timeout',
        'record_id',
        'proxied_through_cloudflare',
        'priority',
    ];
    public $dispatchesEvents = [
        'created' => DomainRecordCreated::class,
        'creating' => DomainRecordCreating::class,
        'deleting' => DomainRecordDeleting::class,
        'deleted' => DomainRecordDeleted::class,
        'updating' => DomainRecordUpdating::class,
        'updated' => DomainRecordUpdated::class,
    ];

    protected function casts(): array
    {
        return [
            'ttl' => 'integer',
            'timeout' => 'integer',
            'proxied_through_cloudflare' => 'boolean',
        ];
    }

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
