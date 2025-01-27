<?php

namespace App\Nova\Actions;

use App\Jobs\FetchDomainsForCredential;
use App\Jobs\FetchRegistrarForCredential;
use App\Models\Credential;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\PendingBatch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Bus;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\ActionResponse;
use Laravel\Nova\Contracts\BatchableAction;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class SyncRegistrarResourcesFromCredential extends Action implements ShouldQueue
{
    use Batchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Perform the action on the given models.
     *
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        if ($this->batch()) {
            $this->batch()->add(
                $models->map(fn(Credential $model) => new FetchRegistrarForCredential($model))
                    ->toArray()
            );
        } else {
            Bus::batch(
                $models->map(fn(Credential $model) => new FetchRegistrarForCredential($model))->toArray()
            )
                ->name('Sync Resources From Credential')
                ->dispatch();
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Register `then`, `catch` and `finally` event on batchable job.
     */
    public function withBatch(ActionFields $fields, PendingBatch $batch): void
    {
        //
    }
}
