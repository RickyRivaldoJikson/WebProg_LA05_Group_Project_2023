<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder() {
        $order = Order::find($orderID);

        return view('order', compact('order'));
    }
}
