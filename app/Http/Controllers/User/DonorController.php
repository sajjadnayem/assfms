<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Registration()
    {
        return view('user.registration');
    }
    public function DonorLogin()
    {
        return view('user.donorlogin');
    }
}
