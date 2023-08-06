<?php

namespace App\Filament\Resources\BlogcategoryResource\Pages;

use App\Filament\Resources\BlogcategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogcategories extends ListRecords
{
    protected static string $resource = BlogcategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
