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
    public function CreateDonor()
    {
        return view('admin.donor.create_donor');
    }
}
