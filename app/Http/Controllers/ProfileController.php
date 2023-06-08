<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewProfile($userID) {
        $app_user = AppUser::find($userID);

        return view('profile', compact('app_user'));
    }
}
