<?php

namespace App\Filament\Resources\MovieImageResource\Pages;

use App\Filament\Resources\MovieImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMovieImages extends ListRecords
{
    protected static string $resource = MovieImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
