<?php

namespace App\Filament\Resources\LeedResource\Pages;

use App\Filament\Resources\LeedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeed extends EditRecord
{
    protected static string $resource = LeedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
