<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembertaskResource\Pages;
use App\Filament\Resources\MembertaskResource\RelationManagers;
use App\Models\Membertask;
use App\Models\Usertype;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembertaskResource extends Resource
{
    protected static ?string $model = Membertask::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('description')->required(),
                DateTimePicker::make('datetime')->required(),
                TextInput::make('location'),
                Select::make('usertype_id')
                        ->options(
                            Usertype::pluck('title','id')
                        ),
                        TextInput::make('remark')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('id'),
                TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('datetime'),
                TextColumn::make('location'),
                TextColumn::make('usertype_id'),
                TextColumn::make('remark')
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
            'index' => Pages\ListMembertasks::route('/'),
            'create' => Pages\CreateMembertask::route('/create'),
            'edit' => Pages\EditMembertask::route('/{record}/edit'),
        ];
    }    
}
