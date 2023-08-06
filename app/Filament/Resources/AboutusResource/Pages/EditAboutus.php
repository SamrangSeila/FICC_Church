<?php

namespace App\Filament\Resources\AboutusResource\Pages;

use App\Filament\Resources\AboutusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutus extends EditRecord
{
    protected static string $resource = AboutusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
