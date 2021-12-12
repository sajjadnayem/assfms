<?php


namespace App\Http\Controllers\Admin;

use App\Models\Cause;
// use App\Models\Crisis;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Admin\AdminController;

class AdminController extends Controller
{
    public function Cause()
    {
        return view('admin.pages.cause');
    }
    public function CreateCause()
    {
        $categorylist = Category::all();
        return view ('admin.pages.create-cause', compact('categorylist'));
    }
    public function ViewCause()
    {
        $causeslist= Cause::with('category')->get();
        return view('admin.pages.view-cause' , compact('causeslist'));
    }
    public function StoreCause(Request $request)
    { 

        $image_name=null;
        if($request->hasfile('cause_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('cause_image')->getClientOriginalExtension();
            $request->file('cause_image')->storeAs('/uploads/causes',$image_name);

        }
        //dd($request->all());
        //for validation
        $request->validate([
            'name'=>'required',
            'amount'=>'required',
            'details'=>'required',
            'location'=>'required',
        ]);
        //dd($request->all());
        Cause::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
            'raised_amount'=>$request->raised_amount,
             'image'=>$image_name,
        ]);
        return redirect()->back()->with('success', 'crisis has been created successfully');
    }
}
