<?php

use App\Models\AppUser;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Shipping;
use App\Models\Transaction;
use App\Models\WishlistProduct;

use App\Http\Controllers\WishlistController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// dengan use App\Http\Controllers\PageController di paling atas untuk mengakses fungsi di PageController untuk view page dan fitur dari aplikasi

Route::get('/', [HomeController::class, 'viewHomepage']) -> name('homepage');
Route::get('/login', [UserController::class, 'login']) -> name('login');
Route::post('/login', [UserController::class, 'auth']) -> name('login.submit'); // authenticate user to go to user pages and admin to go to admin pages with features that only admins can access
Route::get('/register', [UserController::class, 'register']) -> name('register');
Route::post('/register', [UserController::class, 'storeUserData']) -> name('register.submit'); // store inputted user data to database
Route::get('/about', [AboutUsController::class, 'viewAboutUs']) -> name('about-us');

// Admin Routes
Route::middleware(['auth', 'admin']) -> group(function () {
    // Route::get('/homepage', [AllController::class, 'homepage']) -> name('homepage');

    Route::prefix('/products') -> group(function() {
        Route::get('/', [ProductController::class, 'viewProducts']) -> name('products');
        Route::post('/', [ProductController::class, 'storeProduct']) -> name('products.store'); // store inputted product data to database
        Route::get('/create', [ProductController::class, 'createProduct']) -> name('products.create'); // input product data and post products based on the inputted product data
        Route::get('/{productID}/edit', [AllController::class, 'editProduct']) -> name('products.edit'); // input product data to update/edit
        Route::put('/{productID}', [AllController::class, 'updateProduct']) -> name('products.update'); // update product based on inputted product data for updates
        Route::delete('/{productID}', [AllController::class, 'deleteProduct']) -> name('products.delete');
    });

    // Route::get('/transactions', [AllController::class, 'viewTransactions']) -> name('transactions.view');
});

// Customer Routes
Route::middleware(['auth', 'customer']) -> group(function () {
    // Route::get('/homepage', [AllController::class, 'homepage']) -> name('homepage');
    Route::get('/products', [ProductController::class, 'viewProducts']) -> name('products');

    Route::prefix('/cart') -> group(function() {
        Route::get('/', [CartController::class, 'viewCart']) -> name('cart.view');
        Route::get('/{cartID}/add', [CartController::class, 'addToCart']) -> name('cart.add');
        Route::delete('/{cardID}/checkout', [CartController::class, 'editProduct']) -> name('cart.edit');
        Route::put('/{cartID}/update', [CartController::class, 'updateCart']) -> name('cart.update');
    });

    Route::prefix('/wishlist') -> group(function() {
        Route::get('/', [WishlistController::class, 'viewWishlist'])->name('wishlist.view');
        Route::get('/{wishlistID}/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
        Route::get('/{wishlistID}/delete', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.delete');
    });
});

Route::get('/search', [AllController::class, 'search'])->name('search');



/*
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::prefix('/product')->group (function () {
    Route::prefix('/{productID}/cart') -> group (function ($productID) {
        Route::get('/', [CartController::class, 'viewCart'])->name('cart.view');
        Route::get('/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::get('/remove', [CartController::class, 'removeFromCart'])->name('cart.delete');
    });
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::prefix('/auth') -> group (function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [UserController::class, 'storeUserData'])->name('register.submit');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'auth'])->name('login.submit');
});

Route::prefix('/checkout') -> group (function () {
    Route::get('/', function() {
        return view('checkout');
    })->name('checkout');

    Route::get('/success', function () {
        return view('payment-success');
    })->name('payment.success');

    Route::get('/summary', function () {
        return view('payment-summary');
    })->name('payment.summary');
});

Route::prefix('/order/{orderID}', function ($orderID) {
    Route::get('/', function() {
        return view('order');
    })->name('order');

    Route::get('/details', function() {
        return view('order-detail');
    })->name('order.detail');
});
*/


// Route::get('/register', [App\Http\Controllers\PageController::class, 'register']);
// atau
// Route::get('/register', [PageController::class, 'register']); // dengan use App\Http\Controllers\PageController di paling atas

/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) -> name('home');
*/
