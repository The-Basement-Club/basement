<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\DomainsExpiringSoon;
use App\Nova\Metrics\TotalDomainsCount;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array<int, \Laravel\Nova\Card>
     */
    public function cards(): array
    {
        return [
            new TotalDomainsCount,
            new DomainsExpiringSoon,
        ];
    }
}
