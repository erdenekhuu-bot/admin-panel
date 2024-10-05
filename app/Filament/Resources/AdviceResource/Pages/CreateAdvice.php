<?php

namespace App\Filament\Resources\AdviceResource\Pages;

use App\Filament\Resources\AdviceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvice extends CreateRecord
{
    protected static string $resource = AdviceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
