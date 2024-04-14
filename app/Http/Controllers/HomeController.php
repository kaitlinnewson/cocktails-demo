<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class HomeController extends Controller
{
    //
    public function featured()
    {
        $featured = Recipe::where('featured', true)->get();

        return view('home', [
            'featured' => $featured
        ]);
    }
}
