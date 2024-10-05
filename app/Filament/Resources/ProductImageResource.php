<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductImageResource\Pages;
use App\Filament\Resources\ProductImageResource\RelationManagers;
use App\Models\ProductImage;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\MainProduct;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Nette\Utils\ImageColor;

class ProductImageResource extends Resource
{
    protected static ?string $model = ProductImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Бүтээгдэхүүн';

    protected static ?string $navigationLabel = 'Ц - Халаагуур Зураг';

    protected static ?string $modelLabel = 'Ц - Халаагуур Зураг';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                     Select::make('main_product_id')
                        ->options(MainProduct::all()->pluck('Бүтээгдэхүүн', 'id'))
                        ->required(),
                     FileUpload::make('Зураг_1')->required(),
                     FileUpload::make('Зураг_2')->required(),
                     FileUpload::make('Зураг_3')->required(),
                     FileUpload::make('Зураг_4')->required(),
                     FileUpload::make('Зураг_5')->required(),
                     FileUpload::make('Зураг_6')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('image.Бүтээгдэхүүн'),
                ImageColumn::make('Зураг_1'),
                ImageColumn::make('Зураг_2'),
                ImageColumn::make('Зураг_3'),
                ImageColumn::make('Зураг_4'),
                ImageColumn::make('Зураг_5'),
                ImageColumn::make('Зураг_6'),
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
            'index' => Pages\ListProductImages::route('/'),
            'create' => Pages\CreateProductImage::route('/create'),
            'edit' => Pages\EditProductImage::route('/{record}/edit'),
        ];
    }
}