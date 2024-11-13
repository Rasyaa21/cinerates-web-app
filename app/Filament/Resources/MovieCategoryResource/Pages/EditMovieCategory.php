<?php

namespace App\Filament\Resources\MovieCategoryResource\Pages;

use App\Filament\Resources\MovieCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovieCategory extends EditRecord
{
    protected static string $resource = MovieCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
