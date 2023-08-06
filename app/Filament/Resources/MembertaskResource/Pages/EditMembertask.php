<?php

namespace App\Filament\Resources\MembertaskResource\Pages;

use App\Filament\Resources\MembertaskResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembertask extends EditRecord
{
    protected static string $resource = MembertaskResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
