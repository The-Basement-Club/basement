<?php

namespace App\Http\Middleware;

use App\Models\Credential;
use App\Models\Domain;
use App\Models\DomainRecord;
use App\Models\JobBatch;
use App\Models\Server;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $modelsAndEvents = [
            Credential::class => [],
            Domain::class => [],
            DomainRecord::class => [],
            Server::class => [],
            JobBatch::class => [],
        ];

        $modelsAndEvents = array_map(
            fn ($model, $key) => [
                'model' => $key,
                'events' => (new $key)->dispatchesEvents,
            ],
            $modelsAndEvents,
            array_keys($modelsAndEvents)
        );

        return array_merge(parent::share($request), [
            'models_and_events' =>  $modelsAndEvents
        ]);
    }
}
