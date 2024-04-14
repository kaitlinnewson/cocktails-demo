<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function getRecipe($id)
    {
        return Recipe::find($id);
    }

    /**
     * Add a new recipe to the database.
     */
    public function addRecipe(Request $request): RedirectResponse
    {
        $recipe = new Recipe();

        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->short_description = $request->short_description;
        $recipe->img = $request->img;
        $recipe->img_credit = $request->img_credit;

        $recipe->save();
        return redirect('/');
    }
}
