<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory;
    protected $table='product_images';
    protected $fillable=['main_product_id','Зураг_1','Зураг_2','Зураг_3','Зураг_4','Зураг_5','Зураг_6'];

    public function image(): BelongsTo 
    {
        return $this->BelongsTo(MainProduct::class);
    }
}