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
            'id'=>$request->id,
            'name'=>$request->name,
            'type'=>$request->type,
            'amount'=>$request->amount,
        ]);
        return redirect()->back();
    }
}
