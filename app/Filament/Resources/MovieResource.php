<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieResource\Pages;
use App\Filament\Resources\MovieResource\RelationManagers;
use App\Models\Movie;
use App\Models\MovieImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovieResource extends Resource
{
    protected static ?string $model = Movie::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('movie_name')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('movie_desc')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('release_date')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'category')
                    ->required(),
                Forms\Components\TextInput::make('like_count')
                    ->required(),
                Forms\Components\TextInput::make('rating')
                    ->required(),
                Forms\Components\TextInput::make('screen_time')
                    ->required()
                    ->hint('minute'),
                Forms\Components\Select::make('parental_guide_id')
                    ->relationship('parentalGuide', 'pg_name')
                    ->required(),
                Forms\Components\Select::make('director_id')
                    ->relationship('director', 'name')
                    ->required(),
                Forms\Components\Toggle::make('is_popular')
                    ->required(),
                Forms\Components\Repeater::make('images')
                    ->relationship('image')
                    ->schema([
                    Forms\Components\FileUpload::make('movie_poster')
                        ->required(),
                    Forms\Components\FileUpload::make('movie_trailer')
                        ->required()
                        ->maxSize(102400)
                        ->helperText('Max file size is 100 MB.'),
                    Forms\Components\FileUpload::make('image')
                        ->required()
                    ])
                    ->columnSpanFull()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image.movie_poster')
                    ->label('movie_poster'),
                Tables\Columns\TextColumn::make('movie_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('director.name'),
                Tables\Columns\TextColumn::make('category.category')
                    ->sortable()
                    ->label('Category'),
                Tables\Columns\TextColumn::make('rating')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_popular'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category.category')
                    ->relationship('category', 'category')
                    ->multiple()
                    ->label('Category'),
                Tables\Filters\SelectFilter::make('is_popular')
                    ->options([
                        true => 'Popular',
                        false => 'Tidak Popular'
                    ])
                    ->label('Is Popular'),
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
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovie::route('/create'),
            'edit' => Pages\EditMovie::route('/{record}/edit'),
        ];
    }
}
