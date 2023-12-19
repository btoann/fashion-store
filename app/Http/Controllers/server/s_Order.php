<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class s_Order extends Controller
{
    /**
     *  pagination quantity
    */
    private $__pagination_qty = 20;
    
    /**
     *  index
    */
    public function index()
    {
        $orders = [
            "all" => Models\Order
                ::orderBy('id', 'desc')
                ->paginate($this->__pagination_qty),
            "sumQty" => Models\Order::get()->count(),
            "sumPrice" => Models\OrderDetail::get()->sum('total'),
            "sumProduct" => Models\OrderDetail::get()->sum('quantity')
        ];

        return view('server.order.dashboard', compact('orders'));
    }


}
