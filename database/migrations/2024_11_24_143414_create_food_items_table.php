<?php

use App\Models\FoodItemType;
use App\Models\Restaurant;
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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restaurant::class);
            $table->foreignIdFor(FoodItemType::class);
            $table->string('name', 128);
            $table->string('photo', 128);
            $table->string('ingredients', 256);
            $table->decimal('price', places: 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
