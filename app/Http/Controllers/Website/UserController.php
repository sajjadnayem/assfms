<?php

namespace App\Http\Controllers\website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        Public function DonorRegistration()
        {
            $categorylist = Category::all();
            return view('admin.donor.create_donor', compact('categorylist'));
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
            User::create([
                'name'=>$request->name,
                'email'=>$request->email, 
                'address'=>$request->address,
                'city'=>$request->city,    
                'phn_number'=>$request->phn_number,
                'gender'=>$request->gender,
                'occupation'=>$request->occupation,
                'password'=>bcrypt($request->password),
                'image'=>$image_name,
            ]);
            return redirect()->back()->with('success','Donor has registered successfully.');
        }
        public function DonorLogin(Request $request)
        {
            $userInfo=$request->except('_token');
        //    $credentials['email']=$request->user_email;
        //    $credentials['password']=$request->user_password;
        //    dd($credentials);
        //    $credentials=$request->only('user_email','user_password');
            if(Auth::attempt($userInfo)){
                return redirect()->back()->with('message', 'Login successful');
            }
            else{
                return redirect()->back()->with('error','Invalid user credentials');
            }
        }
        public function DonorLogout()
        {
            Auth::logout();
            return redirect()->route('website')->with('message', 'Logging out');

        }
        
}
