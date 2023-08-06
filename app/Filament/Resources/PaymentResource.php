<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;

use App\Models\Payment;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;
    public static function query($query)
    {
        return $query->where('id', auth()->user()->id);
    }

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('payment')->required(),
                TextInput::make('reason')->required(),
                TextInput::make('remark')->required(),

                // Select::make('name')
                //         ->options(
                //             User::pluck('name','id')
                //         )


                // TextInput::make('name', function ($user) {
                //     $currentUser = Filament::user();

                //     return $currentUser->name;
                // }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // $user = auth()->user()->name,
                TextColumn::make('id'),
                TextColumn::make('payment'),
                TextColumn::make('reason'),
                TextColumn::make('remark'),
                TextColumn::make('user.name'),

                // Select::make('user_id')
                // ->options(
                //     User::pluck('name','id'),
                // )
                // Your other fields...
                TextColumn::make('name', function ($record) {
                    // Get the current logged-in user
                    $currentUser = User::auth()->user()->name;

                    // Customize how you want to display the user information
                    return $currentUser->name;
                }),

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
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
