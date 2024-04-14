<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function featured()
    {
        $featured = DB::table('recipes')
        ->select('id', 'name', 'short_description', 'img')
        ->where('featured', true)
        ->get();

        return view('home', [
            'featured' => $featured
        ]);
    }
}
