<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models;

class c_Cart extends Controller
{
    public function index()
    {
        $cart = [
            'content' => Cart::content(),
            'total' => Cart::total(),
            'subtotal' => Cart::subtotal(),
        ];

        return view('client.cart.list', compact('cart'));
    }

    public function add($id)
    {
        $product = Models\Product::findOrFail($id);

        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount ?? $product->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages,
            ],
        ]);

        //dd(Cart::content());

        return back();
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);

        return back();
    }

    public function destroy()
    {
        Cart::destroy();

        return back();
    }

    public function update($rowId, $act)
    {
        return back();
    }
}
