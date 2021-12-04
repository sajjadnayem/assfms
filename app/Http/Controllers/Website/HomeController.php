<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('website.fixed.home');
    }
    public function Signup()
    {
        return view('website.pages.signup');
    }
}
