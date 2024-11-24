<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodItemType extends Model
{
    protected $fillable = ['name'];

    public function foodItems(): HasMany
    {
        return $this->hasMany(FoodItem::class);
    }
}
