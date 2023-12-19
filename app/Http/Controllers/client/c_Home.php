<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class c_Home extends Controller
{
    public function index()
    {
        $featured_products = [
            'all' => Models\Product::where('featured', true)->get(),
            'men' => Models\Product::where('featured', true)->where('category_id', 1)->get(),
            'women' => Models\Product::where('featured', true)->where('category_id', 2)->get()
        ];

        $blogs = Models\Blog::orderBy('id', 'desc')->limit(3)->get();

        // foreach ($featured_products['all'] as $value) {
        //     var_dump($value->productImages[0]->path);

        //     exit;
        // }
        //dd($featured_products['all']);

        return view('client.main', compact('featured_products', 'blogs'));

        //dd($featured_men_products);
        // return \App\Models\Product::find(1)->productImages;
    }
}
