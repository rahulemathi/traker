<?php

namespace App\Filament\Resources\MileagesResource\Pages;

use App\Filament\Resources\MileagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMileages extends EditRecord
{
    protected static string $resource = MileagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
