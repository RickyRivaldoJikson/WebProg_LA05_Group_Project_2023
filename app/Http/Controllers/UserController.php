<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register() {
		return view('register', ['title' => 'Register']);
	}

    public function storeUserData() {
        $validatedInput = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8', // user must input minimum 8 characters for password to provide adequate security and prevent easy guess by attackers
            'role' => 'required|in:customer,admin',
            'phone' => 'required',
            'address' => 'required',
        ]);


        $duplicateUsername = User::where('username', $validatedData['username']) -> exists();
        if ($duplicateUsername) {
            return back() -> withErrors(['username' => 'The username has already been taken.']) -> withInput();
        }

        $duplicateEmail = User::where('email', $validatedData['email']) -> exists();
        if ($duplicateEmail) {
            return back() -> withErrors(['email' => 'The email has already been taken.']) -> withInput();
        }

        $user = new User();
        $user -> username = $validatedInput['username'];
        $user -> email = $validatedInput['email'];
        $user -> password = Hash::make($validatedInput['password']);
        $user -> role = $validatedInput['role'];
        $user -> save();
        // $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['role'] = $request->input('role');

        // User::create($validatedData);

        return redirect('/login') -> with('success', 'Your account is successfully registered. You can now log in.');
    }

    public function login() {
        return view('login', ['title' => 'Login']);
    }

    public function auth() {

    }

    public function viewProfile($userID) {
        $user = User::find($userID);

        return view('profile', compact('user'), ['title' => 'Profile']);
    }
}
