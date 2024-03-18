<?php
namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Deal;
use Filament\Widgets\ChartWidget;


class DealsNamesChart extends ChartWidget
{
    protected static ?string $heading = 'Probability Distribution by First Name';
    protected static string $color = 'accent';

    protected function getData(): array
    {
        // Get all contacts
        $contacts = Contact::all();
        $deals =Deal::all();
        // Initialize arrays for labels (first names) and data (probability distribution)
        $labels = [];
        $data = [];

        // Iterate over each contact
        foreach ($contacts as $contact) {
            // Add the contact's first name to the labels array
            $labels[] = $contact->first_name;

            // Add placeholder data (0) for each contact
            // $data[] = ;
        }
        foreach ($deals as $deal) {
            // Add the contact's first name to the labels array

            // Add placeholder data (0) for each contact
            $data[] =$deal->probability ;
        }

        // Return the data in the required format
        return [
            'datasets' => [
                [
                    'label' => 'Probability against a specified name',
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
