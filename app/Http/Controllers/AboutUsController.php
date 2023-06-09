<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function viewAboutUs() {
        return view('about-us', ['title' => 'About Us']);
    }
}
