<?php

use App\Models\FoodItem;
use App\Models\Menu;
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
        Schema::create('food_item_menu', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FoodItem::class);
            $table->foreignIdFor(Menu::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_item_menu');
    }
};
