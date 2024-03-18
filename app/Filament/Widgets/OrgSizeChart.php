<?php

namespace App\Filament\Widgets;

use App\Models\Organization;
use Filament\Widgets\ChartWidget;

class OrgSizeChart extends ChartWidget
{
    protected static ?string $heading = 'The Comparison of Organization by Size';
    protected static string $color = 'success';

    protected function getData(): array
    {
        $organizations = Organization::orderBy('orgsize')->get();

        $labels = [];
        $data = [];

        // foreach ($organizations as $organization) {
        //     $labels[] = $organization->industry; // Change to orgsize for horizontal display
        //     $data[] = $organization->name;
        // }
        foreach ($organizations as $organization) {
            // Truncate the organization name to a certain length
            $truncatedName = strlen($organization->name) > 10 ? substr($organization->name, 0, 10) . '...' : $organization->name;
            $labels[] = $truncatedName;
            $data[] = $organization->orgsize;
        }
        return [
            'datasets' => [
                [
                    'label' => 'Organization Names',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
