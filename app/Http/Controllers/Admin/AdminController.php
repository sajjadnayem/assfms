<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Crisis()
    {
        return view('admin.pages.crisis');
    }
    public function CreateCrisis()
    {
        return view ('admin.pages.create-crisis');
    }
}
