<?php

namespace App\Filament\Resources\ContactusResource\Pages;

use App\Filament\Resources\ContactusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactus extends EditRecord
{
    protected static string $resource = ContactusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
