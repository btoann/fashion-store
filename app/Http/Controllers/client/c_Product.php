<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models;

class c_Product extends Controller
{
    public function show($id)
    {
        $product = Models\Product::findOrFail($id);

        $related_products = Models\Product
            ::where('category_id', $product->category_id)
            ->where('tag', $product->tag)
            ->orderBy('created_at', 'desc')->limit(4)
            ->get();

        return view('client.product.detail', compact('product', 'related_products'));
    }

    public function postComment(Request $request)
    {
        Models\ProductComment::create($request->all());

        return redirect()->back();
    }

    public function list()
    {
        return view('client.product.list');
    }
}
