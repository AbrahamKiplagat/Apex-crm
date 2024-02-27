<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeedResource\Pages;
use App\Filament\Resources\LeedResource\RelationManagers;
use App\Models\Leed;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeedResource extends Resource
{
    protected static ?string $model = Leed::class;

    protected static ?string $navigationIcon = 'iconoir-leaderboard-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label("id"),
                Tables\Columns\TextColumn::make('user_id')->label("user_id"),
                Tables\Columns\TextColumn::make('description')->label("description"),
                Tables\Columns\TextColumn::make('published_at')->label("published_at"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeeds::route('/'),
            'create' => Pages\CreateLeed::route('/create'),
            'edit' => Pages\EditLeed::route('/{record}/edit'),
        ];
    }
}
