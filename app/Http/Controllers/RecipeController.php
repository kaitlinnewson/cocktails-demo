<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    //
    public function recipe($id)
    {
        $recipe = Recipe::find($id);
        $ingredients = Recipe::find($id)->ingredients;
        $equipment = Recipe::find($id)->equipment;
        $glassware = $equipment->where('type', 'glassware')->first();
        $garnish = $ingredients->where('type', 'garnish');

        return view('recipe', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'garnish' => $garnish,
            'glassware' => $glassware
        ]);
    }
}
