<?php

namespace App\Http\Controllers\Website;

use App\Models\Cause;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Home()
    {
        $crisislist=Cause::all();
        // dd($crisislist);
        $volunteerlist=Volunteer::all();
        // dd($volunteerlist);
        return view('website.fixed.home',compact('crisislist', 'volunteerlist'));
    }
    public function CreateDonor()
    {
        return view('admin.donor.create_donor');
    }
    public function CauseDetails($cause_id)
    {
        $cause=Cause::find($cause_id);
        return view('website.pages.cause_details', compact('cause'));
    }
}
