<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function redirectCategory(Category $category) {
        if ($category -> name === 'clothes') {
            return redirect() -> route('clothes.view');
        }

        elseif ($category -> name === 'figure') {
            return redirect() -> route('figure.view');
        }

        elseif ($category -> name === 'keychain') {
            return redirect() -> route('keychain.view');
        }

        elseif ($category -> name === 'stationary') {
            return redirect() -> route('stationary.view');
        }

        else {
            return redirect() -> route('manga.view');
        }
    }
}
