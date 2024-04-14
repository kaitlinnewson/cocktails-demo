<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, boolean>
     */

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'img',
        'img_credit',
        'featured'
    ];

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class, 'recipes_ingredients', 'recipes_id', 'ingredients_id')->withPivot('quantity');
        ;
    }

    public function equipment(): BelongsToMany
    {
        return $this->belongsToMany(Equipment::class, 'recipes_equipment', 'recipes_id', 'equipment_id');
    }

}
