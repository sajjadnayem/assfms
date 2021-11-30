<?php

namespace App\Http\Controllers\User;

use App\Models\Donor;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $donationlist=Donation::all();
        return view('donor.view-donation', compact('donationlist'));
    }
    public function StoreDonation(Request $request)
    {
        Donation::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phn_number'=>$request->phn_number,
            'type'=>$request->type,
            'amount'=>$request->amount,
       ]);
       return redirect()->back()->with('success','Thanks For Your Donation');
    }

    public function CreateDonor()
    {
        return view('donor.create_donor');
    }
    public function ViewDonorProfile()
    {
        $donorlist = Donor::all();
        return view('donor.view_donor', compact('donorlist'));
    }
    public function StoreDonor(Request $request)
    {
        Donor::create([

            'name'=>$request->name,
            'email'=>$request->email, 
            'address'=>$request->address,
            'city'=>$request->city,    
            'phn_number'=>$request->phn_number,
            'gender'=>$request->gender,
            'occupation'=>$request->occupation,
            // 'image'=>$image_name,
        ]);
        return redirect()->back()->with('success','Donor has registered successfully.');
    }
}
