<?php

namespace App\Filament\Resources\ParentalGuideResource\Pages;

use App\Filament\Resources\ParentalGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParentalGuides extends ListRecords
{
    protected static string $resource = ParentalGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
