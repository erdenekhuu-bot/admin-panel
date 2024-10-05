<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubProduct extends Model
{
    use HasFactory;
    protected $table='sub_products';
    protected $fillable=['main_product_id','Загвар','Онцлог_шинж','Зураг','Үнэ','Товч_мэдээлэл','Тоон_хэмжээ'];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(MainProduct::class,'main_product_id');
    }
}