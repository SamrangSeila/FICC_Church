<?php

namespace App\Filament\Resources\SocialmediaResource\Pages;

use App\Filament\Resources\SocialmediaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialmedia extends EditRecord
{
    protected static string $resource = SocialmediaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
