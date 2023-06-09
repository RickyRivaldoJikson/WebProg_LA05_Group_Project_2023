<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function viewWishlist($userID) {
        $user = User::find($userID);
        $wishlist = $user -> wishlist() -> with('product') -> get();
        // with('product') loads product model for each wishlist

        return view('wishlist', ['title' => 'Wishlist', 'wishlist' => $wishlist]);
    }

    public function addToWishlist(Request $request, $userID) {
        $user = User::find($userID);
        $product = $request -> input('productID');

        $wishlist = new Wishlist();
        $wishlist -> user -> userID = $userID;
        $wishlist -> product -> productID = $productID;
        $wishlist -> save();

        return response() -> json(['message' => 'Product added to the wishlist!']);
    }

    public function removeFromWishlist (Request $request) {
        $user = User::find($userID);
        $product = $request -> input('productID');

        WishlistProduct::where('userID', $app_user) -> where('productID', $product) -> delete();

        return response() -> json(['message' => 'Product removed from the wishlist!']);
    }
    // mahasiswa_2.blade.php
    // ada $mahasiswa di dalam root mahasiswa_2.blade.php, lalu return mahasiswa_2.blade.php dengan $mahasiswa diganti dengan array data $items_list
    // paling berguna kalau sudah connect dengan database
}
