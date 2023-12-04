<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders() {
        $orders = Order::where('status', '!=', 0)->get();

        return view('admin.orders.index')->with([
            'orders' => $orders
        ]);
    }
}
