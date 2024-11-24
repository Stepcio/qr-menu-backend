<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodItem extends Model
{
    protected $fillable = ['name', 'ingredients', 'photo', 'price', 'restaurant_id', 'type_id'];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(FoodItemType::class);
    }
}
