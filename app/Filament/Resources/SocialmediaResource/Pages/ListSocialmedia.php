<?php

namespace App\Filament\Resources\SocialmediaResource\Pages;

use App\Filament\Resources\SocialmediaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialmedia extends ListRecords
{
    protected static string $resource = SocialmediaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
