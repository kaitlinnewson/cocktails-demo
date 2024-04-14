<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
       'name',
       'description',
       'img',
       'img_credit',
       'type',
       'unit'
    ];

    public function recipe(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class, 'recipes_ingredients', 'recipes_id', 'ingredients_id');
    }
}
