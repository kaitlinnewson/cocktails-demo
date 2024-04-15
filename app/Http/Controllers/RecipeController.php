<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Exception;

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
        $recipe = Recipe::find($id);

        if ($recipe) {
            return $recipe;
        } else {
            return response()->json([
                'message' => 'Recipe not found.'
            ], 404);
        }
    }

    /**
     * Add a new recipe to the database and associates existing
     * ingredients and equipment based on ids.
     */
    public function addRecipe(Request $request)
    {
        try {
            foreach($request->ingredients as $ingredient) {
                if(!Ingredient::find($ingredient['id'])) {
                    return response()->json([
                        'message' => 'Ingredient not found.'
                    ], 400);
                }
            };

            $recipe = new Recipe();
            $recipe->name = $request->name;
            $recipe->description = $request->description;
            $recipe->short_description = $request->short_description;
            $recipe->img = $request->img;
            $recipe->img_credit = $request->img_credit;
            $recipe->save();

            foreach($request->ingredients as $ingredient) {
                $recipe->ingredients()->attach($ingredient['id'], ['quantity' => $ingredient['quantity']]);
            };

            return response()->json([
                'message' => 'Success.'
            ], 200);
        } catch(Exception $e) {
            return response()->json([
                'message' => 'Invalid request.'
            ], 400);
        }
    }
}
