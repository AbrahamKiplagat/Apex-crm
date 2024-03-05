<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RolesResource\Pages;
use App\Filament\Resources\RolesResource\RelationManagers;
use App\Filament\Resources\RolesResource\RelationManagers\PermissionsRelationManager;
use App\Models\Roles;
use Filament\Forms;
use Spatie\Permission\Models\Role;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RolesResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'eos-role-binding-o';
    protected static ?string $navigationGroup = 'Settings';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Description'),

            Forms\Components\Checkbox::make('completed')
                ->label('Completed'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label('id'),
                TextColumn::make('name')->sortable()->searchable()->label('name'),
                TextColumn::make('guard_name')->sortable()->searchable()->label('guard_name'),
                TextColumn::make('created_at')->dateTime("D-M-Y")->sortable()->searchable()->label('created_at'),

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
            PermissionsRelationManager::class
        ];

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRoles::route('/create'),
            'edit' => Pages\EditRoles::route('/{record}/edit'),
        ];
    }
}
