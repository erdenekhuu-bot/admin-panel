<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainProductResource\Pages;
use App\Filament\Resources\MainProductResource\RelationManagers;
use App\Models\MainProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MainProductResource extends Resource
{
    protected static ?string $model = MainProduct::class;

    protected static ?string $navigationGroup = 'Бүтээгдэхүүн';

    protected static ?string $navigationLabel = 'Ц - Халаагуур';

    protected static ?string $modelLabel = 'Ц - Халаагуур';

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    TextInput::make('Бүтээгдэхүүн')->required(),
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
                TextColumn::make('Бүтээгдэхүүн'),
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
                Tables\Actions\Action::make('Category')
                    ->color('gray')
                    ->icon('heroicon-o-cpu-chip')
                    ->url(fn(MainProduct $record)=>route('filament.admin.resources.sub-products.create',['main_product_id'=>$record->id])),
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
            'index' => Pages\ListMainProducts::route('/'),
            'create' => Pages\CreateMainProduct::route('/create'),
            'edit' => Pages\EditMainProduct::route('/{record}/edit'),
        ];
    }
}