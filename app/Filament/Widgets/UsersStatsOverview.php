<?php

namespace App\Filament\Widgets;

use App\Models\Organization;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('Total number of users in the system')
                ->chart([User::count()])
                ->color  ('success')
                ->descriptionIcon('heroicon-o-users'),
            Stat::make('Total Number of Organizations', Organization::count())
                ->description('Total number of Organizations in the system')
                ->chart([Organization::count()])
                ->color  ('danger')
                ->descriptionIcon('codicon-organization'),
        ];
    }

    protected function styles(): array
    {
        return [
            'wrapper' => 'max-width: 200px;', // Adjust the max-width as needed
        ];
    }
}
