<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialmediaResource\Pages;
use App\Filament\Resources\SocialmediaResource\RelationManagers;
use App\Models\Socialmedia;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialmediaResource extends Resource
{
    protected static ?string $model = Socialmedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('link')->required(),
                FileUpload::make('image')->required()
                        ->image()
                        ->imageResizeMode('cover')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title'),
                TextColumn::make('link'),
                ImageColumn::make('image')
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
            'index' => Pages\ListSocialmedia::route('/'),
            'create' => Pages\CreateSocialmedia::route('/create'),
            'edit' => Pages\EditSocialmedia::route('/{record}/edit'),
        ];
    }    
}
