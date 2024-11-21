<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieCategoryResource\Pages;
use App\Filament\Resources\MovieCategoryResource\RelationManagers;
use App\Models\MovieCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovieCategoryResource extends Resource
{
    protected static ?string $model = MovieCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("category")
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make("category_desc")
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make("sort_order")
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("category")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make("category_desc"),
                Tables\Columns\TextColumn::make("sort_order")
                    ->numeric(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMovieCategories::route('/'),
            'create' => Pages\CreateMovieCategory::route('/create'),
            'edit' => Pages\EditMovieCategory::route('/{record}/edit'),
        ];
    }
}
