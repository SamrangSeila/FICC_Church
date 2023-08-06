<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmountResource\Pages;
use App\Filament\Resources\AmountResource\RelationManagers;
use App\Models\Amount;
use App\Models\Payment;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmountResource extends Resource
{
    protected static ?string $model = Amount::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                TextColumn::make('payment_total'),
                TextColumn::make('donation_total'),
                TextColumn::make('total'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAmounts::route('/'),
            'create' => Pages\CreateAmount::route('/create'),
            'edit' => Pages\EditAmount::route('/{record}/edit'),
        ];
    }
}
