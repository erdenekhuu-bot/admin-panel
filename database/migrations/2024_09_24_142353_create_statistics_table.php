<?php

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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('Жил')->default(0)->nullable();
            $table->mediumInteger('Нийт_айл_өрх')->default(0)->nullable();
            $table->mediumText('Хэмнэсэн_цахилгаан')->default(0)->nullable();
            $table->mediumText('Бууруулсан_нүүрс_хүчлийн_хий')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
