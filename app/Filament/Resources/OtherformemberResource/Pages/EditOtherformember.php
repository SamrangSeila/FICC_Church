<?php

namespace App\Filament\Resources\OtherformemberResource\Pages;

use App\Filament\Resources\OtherformemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherformember extends EditRecord
{
    protected static string $resource = OtherformemberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
