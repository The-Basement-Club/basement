<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Kregel\Basement\Events\Completed;
use Kregel\Basement\Events\Running;
use Kregel\Basement\Events\Failed;
use Kregel\Basement\Events\Requested;
use App\Listeners;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Requested\ScriptExecutionRequestedEvent::class => [],
        Requested\ServerKeyDeletionRequestedEvent::class => [],
        Requested\ServerKeyCreationRequestedEvent::class => [],
        Requested\ServerCreationRequestedEvent::class => [],
        Requested\ServerDeletionRequestedEvent::class => [
            Listeners\Requested\ServerDeletionRequested::class,
        ],
        Requested\ServerPowerOffRequestedEvent::class => [],
        Requested\ServerPowerOnRequestedEvent::class => [],
        Requested\ServerRebootRequestedEvent::class => [],
        Requested\ServerShutdownRequestedEvent::class => [],
        Running\ScriptExecutionRunningEvent::class => [],
        Running\ServerKeyDeletionRunningEvent::class => [],
        Running\ServerKeyCreationRunningEvent::class => [],
        Running\ServerCreationRunningEvent::class => [],
        Running\ServerDeletionRunningEvent::class => [],
        Running\ServerPowerOffRunningEvent::class => [],
        Running\ServerPowerOnRunningEvent::class => [],
        Running\ServerRebootRunningEvent::class => [],
        Running\ServerShutdownRunningEvent::class => [],
        Failed\ScriptExecutionFailedEvent::class => [],
        Failed\ServerKeyDeletionFailedEvent::class => [],
        Failed\ServerKeyCreationFailedEvent::class => [],
        Failed\ServerCreationFailedEvent::class => [],
        Failed\ServerDeletionFailedEvent::class => [],
        Failed\ServerPowerOffFailedEvent::class => [],
        Failed\ServerPowerOnFailedEvent::class => [],
        Failed\ServerRebootFailedEvent::class => [],
        Failed\ServerShutdownFailedEvent::class => [],
        Completed\ScriptExecutionCompletedEvent::class => [],
        Completed\ServerKeyDeletionCompletedEvent::class => [],
        Completed\ServerKeyCreationCompletedEvent::class => [],
        Completed\ServerCreationCompletedEvent::class => [],
        Completed\ServerDeletionCompletedEvent::class => [],
        Completed\ServerPowerOffCompletedEvent::class => [],
        Completed\ServerPowerOnCompletedEvent::class => [],
        Completed\ServerRebootCompletedEvent::class => [],
        Completed\ServerShutdownCompletedEvent::class => [],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
