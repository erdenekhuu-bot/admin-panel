<?php

namespace App\Filament\Resources\HamtrahResource\Pages;

use App\Filament\Resources\HamtrahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHamtrah extends EditRecord
{
    protected static string $resource = HamtrahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
