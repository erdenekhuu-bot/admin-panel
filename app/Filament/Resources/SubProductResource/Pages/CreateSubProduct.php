<?php

namespace App\Filament\Resources\SubProductResource\Pages;

use App\Filament\Resources\SubProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubProduct extends CreateRecord
{
    protected static string $resource = SubProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}