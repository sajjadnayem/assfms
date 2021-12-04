<?php


namespace App\Http\Controllers\Admin;

use App\Models\Crisis;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Admin\AdminController;

class AdminController extends Controller
{
    public function Crisis()
    {
        return view('admin.pages.crisis');
    }
    public function CreateCrisis()
    {
        $categorylist = Category::all();
        return view ('admin.pages.create-crisis', compact('categorylist'));
    }
    public function ViewCrisis()
    {
        $crisislist= Crisis::with('category')->get();
        return view('admin.pages.view-crisis' , compact('crisislist'));
    }
    public function CrisisStore(Request $request)
    { 
        // dd($request->all());
        //for validation
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'amount'=>'required',
            'details'=>'required',
            'location'=>'required',
        ]);
        //dd($request->all());
        Crisis::create([
            'name'=>$request->name,
            'type'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
        ]);
        return redirect()->back()->with('success', 'crisis has been created successfully');
    }
}
