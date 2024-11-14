<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParentalGuideResource\Pages;
use App\Filament\Resources\ParentalGuideResource\RelationManagers;
use App\Models\ParentalGuide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParentalGuideResource extends Resource
{
    protected static ?string $model = ParentalGuide::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("pg_name")
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make("pg_rate")
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("pg_name")
                    ->searchable(),
                Tables\Columns\TextColumn::make("pg_rate")
                    ->sortable()
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
            'index' => Pages\ListParentalGuides::route('/'),
            'create' => Pages\CreateParentalGuide::route('/create'),
            'edit' => Pages\EditParentalGuide::route('/{record}/edit'),
        ];
    }
}
