<?php

namespace App\Filament\Resources\OrganizationResource\Widgets;

use App\Models\Organization;
use App\Models\User;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrganizationChartWidget extends ChartWidget
{

    protected static ?string $heading = 'Organizations by Size';

    protected function getData(): array
    {
         $organizations = Organization::groupBy('orgsize')
            ->selectRaw('orgsize, count(*) as count')
            ->pluck('count', 'orgsize');

        return [
            'labels' => $organizations->keys(),
            'datasets' => [
                [
                    Stat::make("OrgSize", User::count())


                ],
                    'label' => 'Number of Organizations',
                    'data' => $organizations->values(),
                ],
            ];

    }

    protected function getType(): string
    {
        return 'bar';
    }
}
