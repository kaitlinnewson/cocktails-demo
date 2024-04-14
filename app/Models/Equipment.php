<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
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
    ];

    public function recipe(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class, 'recipes_equipment', 'recipes_id', 'equipment_id');
    }
}
