<?php

namespace App\Filament\Resources\BlogcategoryResource\Pages;

use App\Filament\Resources\BlogcategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogcategory extends EditRecord
{
    protected static string $resource = BlogcategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
