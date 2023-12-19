<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class c_Category extends Controller
{
    /**
     *  pagination quantity
    */
    private $__pagination_qty = 1;

    /**
     *  index
    */
    public function show($id)
    {
        $categories = Models\Category::all();
        $categories = [
            'all' => $categories,
            'this' => $categories[array_search( $id, array_column ($categories->toArray(), 'id'))]
        ];

        $products = [
            "this_category" => Models\Product
                ::where('category_id', $id)
                ->orderBy('created_at', 'desc')
                ->paginate($this->__pagination_qty)
        ];

        //dd($categories);

        return view('client.category.show', compact('categories', 'products'));
    }

    /**
     *  pagination request
    */
    public function pagination(Request $request, $id)
    {
        if($request->ajax())
        {
            $categories = [
                'this' => Models\Category::findOrFail($id)
            ];
            $products = [
                "this_category" => Models\Product
                    ::where('category_id', $categories['this']->id)
                    ->orderBy('created_at', 'desc')
                    ->paginate($this->__pagination_qty)
            ];

            return view('client.category.pagination', compact('categories', 'products'))->render();
        }
    }
}
