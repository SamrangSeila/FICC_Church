<?php

namespace App\Filament\Resources\UsertypeResource\Pages;

use App\Filament\Resources\UsertypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsertypes extends ListRecords
{
    protected static string $resource = UsertypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
