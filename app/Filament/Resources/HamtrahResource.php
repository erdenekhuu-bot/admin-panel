<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HamtrahResource\Pages;
use App\Filament\Resources\HamtrahResource\RelationManagers;
use App\Models\Hamtrah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HamtrahResource extends Resource
{
    protected static ?string $model = Hamtrah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Харилцагчид';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Нэр'),
                TextColumn::make('Утасны_дугаар')->numeric(),
                TextColumn::make('Хатрах_хүсэлт')->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListHamtrahs::route('/'),
            'create' => Pages\CreateHamtrah::route('/create'),
            'edit' => Pages\EditHamtrah::route('/{record}/edit'),
        ];
    }
}