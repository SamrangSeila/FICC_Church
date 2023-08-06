<?php

namespace App\Filament\Resources\OtherformemberResource\Pages;

use App\Filament\Resources\OtherformemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOtherformembers extends ListRecords
{
    protected static string $resource = OtherformemberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
