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
        Schema::create('sanals', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Нэр')->default('')->nullable();
            $table->mediumInteger('Утасны_дугаар')->default(0)->nullable();
            $table->mediumText('Санал_хүсэлт')->default('')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanals');
    }
};