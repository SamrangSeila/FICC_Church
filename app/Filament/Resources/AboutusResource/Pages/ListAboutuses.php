<?php

namespace App\Filament\Resources\AboutusResource\Pages;

use App\Filament\Resources\AboutusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutuses extends ListRecords
{
    protected static string $resource = AboutusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
