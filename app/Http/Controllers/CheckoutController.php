<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Courier;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function viewCheckout() {
		$order = Order::find($orderID);

		return view('checkout') -> with ('order', $order);
	}

	public function processCheckout(Request $request) {
		$validatedCheckoutData = $request -> validate(['payment_method' => 'required', 'card_number' => 'required_if: payment_method, credit_debit_card', 'exp_date' => 'required_if: payment_method, credit_debit_card', 'cvv' => 'required_if: payment_method, credit_debit_card']);

		redirect('/checkout/success') -> with('success', 'Payment success!');
		// the with() method is used to flash data to the session, making it available to the next request. In this case 'success' key in the route ('/checkout/success') is set with a value of 'Payment processed successfully."
	}
}
