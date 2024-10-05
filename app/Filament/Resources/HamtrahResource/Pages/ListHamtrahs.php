<?php

namespace App\Filament\Resources\HamtrahResource\Pages;

use App\Filament\Resources\HamtrahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHamtrahs extends ListRecords
{
    protected static string $resource = HamtrahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
