<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Good;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Query\Builder;
use mysqli;

class CatalogController extends Controller
{
    public function get_categories()
    {
        $goods_count = DB::table('all_products')
            ->whereNotNull('category')
            ->where(function (Builder $query) {
                $query
                    ->whereNull('status')
                    ->orWhere('status', '!=', 'invalide');
            })
            ->count();
        $categories_res = DB::table('all_products')
            ->select('category')
            ->whereNotNull('category')
            ->groupBy('category')
            ->get();
        $categories = array();
        foreach ($categories_res as $category) {
            $subcategories = DB::table('all_products')
                ->select('subcategory')
                ->where('category', '=', $category->category)
                ->where(function (Builder $query) {
                    $query
                        ->whereNull('status')
                        ->orWhere('status', '!=', 'invalide');
                })
                ->groupBy('subcategory')
                ->get();
            foreach ($subcategories as $subcategory) {
                $categories[$category->category][] = $subcategory;
            }
        }
        arsort($categories);

        return view('catalog.categories')->with(['categories' => $categories, 'goods_count' => $goods_count]);
    }

    // public function get_goods(?$category)
    // {
    //     $goods = DB::table('all_products')
    //         ->select('*')
    //         ->whereNotNull('category')
    //         ->where(function (Builder $query) {
    //             $query
    //                 ->whereNull('status')
    //                 ->orWhere('status', '!=', 'invalide');
    //         })
    //         ->paginate(15);
    //         $images = [];
    //         foreach ($goods as $good) {
    //             $images[$good->id][] = json_decode($good->images, 1);
    //             $good->images = $images;
    //         }
    //     return view('catalog.index')->with(['goods' => $goods, 'images' => $images]);
    // }
}
