<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class RecipeController extends Controller
{
    //
    public function recipe($id)
    {
        $recipe = DB::table('recipes')
        ->select('name', 'short_description', 'description', 'img')
        ->where('id', $id)
        ->first();

        $ingredients = DB::table('recipes_ingredients')
        ->select('name', 'unit', 'quantity', 'type')
        ->join('ingredients', 'recipes_ingredients.ingredients_id', '=', 'ingredients.id')
        ->where('recipes_ingredients.recipes_id', $id)
        ->get();

        View::share('title', $recipe->name);
        View::share('subtitle', $recipe->short_description);

        return view('recipe', [
            'recipe' => $recipe,
            'ingredients' => $ingredients
        ]);
    }
}
