<?php

namespace App\Filament\Resources\SanalResource\Pages;

use App\Filament\Resources\SanalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSanal extends EditRecord
{
    protected static string $resource = SanalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
