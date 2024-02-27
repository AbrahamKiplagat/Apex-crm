<?php

namespace App\Filament\Resources\LeedResource\Pages;

use App\Filament\Resources\LeedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeeds extends ListRecords
{
    protected static string $resource = LeedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
