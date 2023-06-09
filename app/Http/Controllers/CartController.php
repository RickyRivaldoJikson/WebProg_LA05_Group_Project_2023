<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart() {
        $cart = session('cart', []);

        return view('cart', compact('cart'), ['title' => 'Cart']);
    }

    public function addToCart() {

    }

    public function removeFromCart() {

    }

    public function checkout() {

    }
}
