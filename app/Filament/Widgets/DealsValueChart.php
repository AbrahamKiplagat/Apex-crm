<?php

namespace App\Filament\Widgets;

use App\Models\Deal;
use Filament\Widgets\ChartWidget;

class DealsValueChart extends ChartWidget
{
    protected static ?string $heading = 'Deal Revenue Distribution Across Deal Stages';
    protected static string $color = 'warning';

    protected function getData(): array
    {
        $deals =Deal::all();

        
        $labels = [];
        $data = [];
        foreach ($deals as $deal) {
            // Add the contact's first name to the labels array
            $labels[] =$deal->stage;
            // Add placeholder data (0) for each contact
            $data[] =$deal->value ;
        }
        return [
            'datasets' => [
                [
                    'label' => 'Deal revenue against a stage',
                    'data' => $data,
                    'backgroundColor' => self::$color,
                ],
            ],
            'labels' => $labels,
            'options' => [
                'scales' => [
                    'yAxes' => [
                        [
                            'ticks' => [
                                'stepSize' => 0.01, // Set the step size for the y-axis ticks
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }


    protected function getType(): string
    {
        return 'bar';
    }
}
