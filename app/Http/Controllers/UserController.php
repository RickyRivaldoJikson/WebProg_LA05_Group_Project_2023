<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewRegister() {
		return view('register');
	}

    public function viewLogin() {
        return view('login');
    }

    public function viewProfile($userID) {
        $app_user = AppUser::find($userID);

        return view('profile', compact('app_user'));
    }
}
