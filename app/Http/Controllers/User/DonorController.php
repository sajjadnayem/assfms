<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function DonorProfile()
    {
        return view('donor.donor-profile');
    }
    public function Donation()
    {
        return view('donor.donation');
    }
    public function CreateDonation()
    {
        return view('donor.create-donation');
    }
    public function ViewDonation()
    {
        return view('donor.view-donation');
    }
}
