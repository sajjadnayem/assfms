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
        return view('admin.donor.donor-profile');
    }
    public function Donation()
    {
        return view('admin.donor.donation');
    }
    public function CreateDonation()
    {
        return view('admin.donor.create-donation');
    }
    public function ViewDonation()
    {
        $donationlist=Donation::all();
        return view('admin.donor.view-donation', compact('donationlist'));
    }
    public function StoreDonation(Request $request)
    {
        //for validation
         $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phn_number'=>'required',
            'type'=>'required',
            'amount'=>'required',
        ]);
        //dd($req->all());
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
        return view('admin.donor.create_donor');
    }
    public function ViewDonorProfile()
    {
        $donorlist = Donor::all();
        return view('admin.donor.view_donor', compact('donorlist'));
    }
    public function StoreDonor(Request $request)
    {
        //for image upload
        $image_name=null;
        //step 1: check image exist in this request.
        if($request->hasFile('donor_image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $request->file('donor_image')->getClientOriginalExtension();
             //step 3 : store into project directory
            $request->file('donor_image')->storeAs('/uploads/donors',$image_name);
        }
        //for validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required',
        ]);
        // dd($req->all());
        Donor::create([
            'name'=>$request->name,
            'email'=>$request->email, 
            'address'=>$request->address,
            'city'=>$request->city,    
            'phn_number'=>$request->phn_number,
            'gender'=>$request->gender,
            'occupation'=>$request->occupation,
            'image'=>$image_name,
        ]);
        return redirect()->back()->with('success','Donor has registered successfully.');
    }
}
