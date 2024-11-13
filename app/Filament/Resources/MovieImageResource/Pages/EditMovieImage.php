<?php

namespace App\Filament\Resources\MovieImageResource\Pages;

use App\Filament\Resources\MovieImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovieImage extends EditRecord
{
    protected static string $resource = MovieImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
