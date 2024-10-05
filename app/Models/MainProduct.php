<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MainProduct extends Model
{
    use HasFactory;
    protected $table='main_products';
    protected $fillable=['Бүтээгдэхүүн','Онцлог_шинж','Зураг','Үнэ','Товч_мэдээлэл','Тоон_хэмжээ'];

    public function category(): HasMany
    {
        return $this->HasMany(SubProduct::class);
    }

    public function image(): HasMany
    {
        return $this->HasMany(ProductImage::class);
    }
}