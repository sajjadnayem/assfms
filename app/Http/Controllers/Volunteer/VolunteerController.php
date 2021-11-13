<?php

namespace App\Http\Controllers\Volunteer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function Registration()
    {
        return view ('volunteer.volunteer-registration');
    }
    public function VolunteerLogin()
    {
        return view ('volunteer.volunteerlogin');
    }
}
