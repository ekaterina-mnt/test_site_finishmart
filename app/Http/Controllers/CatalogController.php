<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use mysqli;

class CatalogController extends Controller
{
    public function get_categories()
    {
        $categories = DB::table('all_products')->select('category')->groupBy('category')->get();

        return view('catalog.categories')->with('categories', $categories);
    }
}