<?php

namespace App\Http\Controllers\Admin;

use App\Models\Crisis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function ViewCrisis()
    {
        $crisislist = Crisis::all(); 
        return view('admin.pages.view-crisis' , compact('crisislist'));
    }
    public function CrisisStore(Request $request)
    {
        //dd($request->all());
        Crisis::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
        ]);
        return redirect()->back()->with('success', 'crisis has been created successfully');
    }
}
