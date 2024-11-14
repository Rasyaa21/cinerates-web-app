<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WatchlistResource\Pages;
use App\Filament\Resources\WatchlistResource\RelationManagers;
use App\Models\Watchlist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WatchlistResource extends Resource
{
    protected static ?string $model = Watchlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('movie_id')
                    ->relationship('movie', 'movie_name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'id')
                    ->required(),
                Forms\Components\Toggle::make('is_watched')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('movie.movie_name')
                    ->sortable()
                    ->searchable()
                    ->label('Movie'),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->searchable()
                    ->label('Username'),
                Tables\Columns\TextColumn::make('user.id')
                    ->label('User_id'),
                Tables\Columns\ToggleColumn::make('is_watched')
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
            'index' => Pages\ListWatchlists::route('/'),
            'create' => Pages\CreateWatchlist::route('/create'),
            'edit' => Pages\EditWatchlist::route('/{record}/edit'),
        ];
    }
}
