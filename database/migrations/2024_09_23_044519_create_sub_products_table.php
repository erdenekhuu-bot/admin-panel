<?php

use App\Models\MainProduct;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MainProduct::class)->constrained();
            $table->mediumText('Загвар')->default('')->nullable();
            $table->mediumText('Онцлог_шинж')->default('')->nullable();
            $table->mediumText('Зураг')->nullable();
            $table->mediumInteger('Үнэ')->default(0)->nullable();
            $table->mediumText('Товч_мэдээлэл')->default('')->nullable();
            $table->mediumInteger('Тоон_хэмжээ')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_products');
    }
};