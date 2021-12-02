<?php

namespace App\Http\Controllers\Volunteer;

use App\Models\Category;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteerController extends Controller
{
  public function VolunteerProfile()
  {
      return view('volunteer.volunteer_profile');
  }
  public function CreateVolunteer()
  {
      return view('volunteer.create_volunteer');
  }
  public function ViewVolunteer()
  {
    $volunteerlist = Volunteer::all();
     return view('volunteer.view_volunteer', compact('volunteerlist'));
  }
  public function StoreVolunteer(Request $request)
  {
        //step 1: check image exist in this request.
        $image_name=null;

        if($request->hasFile('volunteer_image'))
        {
              // step 2: generate file name
            $image_name=date('Yhmdis').'.'.$request->file('volunteer_image')->getClientOriginalExtension();

             //step 3 : store into project directory

            $request->File('volunteer_image')->storeAs('/volunteers',$image_name);
        }
      //for validation
    $request->validate([
      'name'=>'required',
      'email'=>'required',
      'address'=>'required',
      'age'=>'required',
      'occupation'=>'required',
      'phn_number'=>'required',
      
    ]);
    //dd($request->all());
    Volunteer::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'city'=>$request->city,
      'address'=>$request->address,
      'gender'=>$request->gender,
      'age'=>$request->age,
      'occupation'=>$request->occupation,
      'education'=>$request->education,
      'phn_number'=>$request->phn_number,
      'image'=>$image_name,
    ]);
    return redirect()->back()->with('success','Volunteer has registered successfully.');
  }
}
