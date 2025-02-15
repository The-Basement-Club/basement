<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Credential extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Credential>
     */
    public static $model = \App\Models\Credential::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'settings',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            Text::make('name')->sortable(),
            BelongsTo::make('user')->sortable(),
            Select::make('type')->options([
                'registrar' => 'Registrar',
                'domain' => 'Domain',
                'server' => 'Server',
            ])->sortable(),
            Select::make('service')->options([
                'cloudflare' => 'Cloudflare',
                'namecheap' => 'Namecheap',
                'route53' => 'Route53',
                'digitalocean' => 'DigitalOcean',
            ])->sortable(),
            Text::make('api_key')->sortable()->hideFromIndex(),
            Text::make('secret_key')->hideFromIndex(),
            Text::make('access_token')->hideFromIndex(),
            Text::make('refresh_token')->hideFromIndex(),

            Code::make('settings')->json(),
            Date::make('enabled_on'),

            HasMany::make('Domains'),
            HasMany::make('Servers'),
        ];
    }

    /**
     * Get the cards available for the resource.
     *
     * @return array<int, \Laravel\Nova\Card>
     */
    public function cards(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array<int, \Laravel\Nova\Filters\Filter>
     */
    public function filters(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array<int, \Laravel\Nova\Lenses\Lens>
     */
    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array<int, \Laravel\Nova\Actions\Action>
     */
    public function actions(NovaRequest $request): array
    {
        return [
            new Actions\SyncServerResourcesFromCredential,
            new Actions\SyncRegistrarResourcesFromCredential,
            new Actions\SyncDomainResourcesFromCredential,
        ];
    }
}
