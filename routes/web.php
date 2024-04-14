<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

Route::get('/', [HomeController::class, 'featured']);

Route::controller(RecipeController::class)->group(function () {
    Route::get('/recipe/{id}', 'recipe');
});

Route::view('/resources', 'resources', ['title' => 'Resources']);
