<?php

namespace App\Filament\Resources\WatchlistResource\Pages;

use App\Filament\Resources\WatchlistResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWatchlist extends EditRecord
{
    protected static string $resource = WatchlistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
