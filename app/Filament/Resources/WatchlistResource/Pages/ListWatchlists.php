<?php

namespace App\Filament\Resources\WatchlistResource\Pages;

use App\Filament\Resources\WatchlistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWatchlists extends ListRecords
{
    protected static string $resource = WatchlistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
