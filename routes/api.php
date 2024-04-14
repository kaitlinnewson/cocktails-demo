<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/recipe/{id}', [RecipeController::class, 'getRecipe']);

Route::post('/recipe', [RecipeController::class, 'addRecipe']);
