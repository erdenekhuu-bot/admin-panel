<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubProductResource\Pages;
use App\Filament\Resources\SubProductResource\RelationManagers;
use App\Models\SubProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\MainProduct;

class SubProductResource extends Resource
{
    protected static ?string $model = SubProduct::class;

    protected static ?string $navigationGroup = 'Бүтээгдэхүүн';

    protected static ?string $navigationLabel = 'Загварууд';

    protected static ?string $modelLabel = 'Загварууд';

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Select::make('main_product_id')
                        ->options(MainProduct::all()->pluck('Бүтээгдэхүүн', 'id')),
                    TextInput::make('Загвар')->required(),
                    TextInput::make('Онцлог_шинж')->required(),
                    FileUpload::make('Зураг')->required(),
                    TextInput::make('Үнэ')->numeric()->required(),
                    MarkdownEditor::make('Товч_мэдээлэл')->required(),
                    TextInput::make('Тоон_хэмжээ')->numeric()->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.Бүтээгдэхүүн'),
                TextColumn::make('Загвар'),
                TextColumn::make('Онцлог_шинж'),
                ImageColumn::make('Зураг'),
                TextColumn::make('Үнэ')->numeric(),
                TextColumn::make('Товч_мэдээлэл')->wrap(),
                TextColumn::make('Тоон_хэмжээ')->numeric(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSubProducts::route('/'),
            'create' => Pages\CreateSubProduct::route('/create'),
            'edit' => Pages\EditSubProduct::route('/{record}/edit'),
        ];
    }
}