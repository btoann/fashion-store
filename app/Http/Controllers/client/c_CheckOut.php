<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models;

class c_CheckOut extends Controller
{
    public function index()
    {
        $cart = [
            'content' => Cart::content(),
            'total' => Cart::total(),
            'subtotal' => Cart::subtotal(),
        ];

        return view('client.checkOut.checkOut', compact('cart'));
    }

    public function addOrder(Request $request)
    {
        if ($request->payment_method == 2) {   // payment method: cod
            return back()->with('payment_method_warning', 'Paypal is not supported yet!');
        }

        $order = Models\Order::create($request->all());

        $cart = [
            'content' => Cart::content(),
            'total' => Cart::total(),
            'subtotal' => Cart::subtotal(),
        ];

        foreach ($cart['content'] as $product)
        {
            $data = [
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $product->qty,
                'amount' => $product->price,
                'total' => $product->price * $product->qty,
            ];

            Models\OrderDetail::create($data);
        }

        $this->sendMail($order, $cart['total'], $cart['subtotal']);

        Cart::destroy();

        return "success!";
    }

    private function sendMail($order, $total, $subtotal)
    {
        $mail_to = $order->email;
        
        Mail::send('client.checkOut.mailer', compact('order', 'total', 'subtotal'), function ($message) use ($mail_to) {
            $message->from('toannb.it@gmail.com', 'All Store');
            $message->to($mail_to, $mail_to);
            $message->subject('Order notification');
        });
    }
}
