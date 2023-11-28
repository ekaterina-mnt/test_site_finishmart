<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Good;
use mysqli;

class SearchController extends Controller
{
    public function get_search_goods(Request $request)
    {
        $fragment = $request->input('fragment');
        
        // $goods = DB::table('all_products')->select('*')->where('title', 'LIKE', $fragment);
        $goods = Good::select('*')->where('title', 'LIKE', "%" . $fragment . "%")->paginate(12);
        $images = [];
        foreach ($goods as $good) {
            $images[$good->id][] = json_decode($good->images, 1);
            $good->images = $images;
        }
        return view('catalog.search')->with(['goods' => $goods, 'fragment' => $fragment]);
    }
}
