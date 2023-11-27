<?php

namespace App\Filament\Resources\MileagesResource\Pages;

use App\Filament\Resources\MileagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMileages extends ListRecords
{
    protected static string $resource = MileagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
