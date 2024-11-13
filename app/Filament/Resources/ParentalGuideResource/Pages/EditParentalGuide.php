<?php

namespace App\Filament\Resources\ParentalGuideResource\Pages;

use App\Filament\Resources\ParentalGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParentalGuide extends EditRecord
{
    protected static string $resource = ParentalGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
