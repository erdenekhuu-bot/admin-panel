<?php

namespace App\Filament\Resources\SubProductResource\Pages;

use App\Filament\Resources\SubProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubProducts extends ListRecords
{
    protected static string $resource = SubProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
