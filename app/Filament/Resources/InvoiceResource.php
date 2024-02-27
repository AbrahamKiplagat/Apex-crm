<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('invoice_number')
                    ->label('Invoice Number')
                    ->required(),

                BelongsToSelect::make('deal_id')
                    ->relationship('deal', 'id',)
                    ->label('Deal')
                    ->required(),

                BelongsToSelect::make('contact_id')
                    ->relationship('contact', 'id',)
                    ->label('Contact')
                    ->required(),

                BelongsToSelect::make('quote_id')
                    ->relationship('quote', 'id',)
                    ->label('Quote')
                    ->required(),

                DatePicker::make('invoice_date')
                    ->label('Invoice Date')
                    ->required(),

                Datepicker::make('due_date')
                    ->label('Due Date')
                    ->required(),

                TextInput::make('total')
                    ->label('Total')
                    ->required(),

                Select::make('status')
                    ->options(['draft', 'sent', 'accepted', 'paid', 'cancelled'])
                    ->label('Status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice_number'),
                TextColumn::make('deal.stage')->label('Deal'),
                TextColumn::make('contact.phone')->label('Contact'),
                TextColumn::make('quote.status')->label('Quote'),
                TextColumn::make('invoice_date')->sortable(),
                TextColumn::make('due_date')->sortable(),
                TextColumn::make('total')->sortable(),
                TextColumn::make('status')
                    ->sortable(),

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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
