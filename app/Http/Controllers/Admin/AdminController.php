<?php


namespace App\Http\Controllers\Admin;

use App\Models\Cause;
// use App\Models\Crisis;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
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
        return redirect()->back()->with('success', 'Cause has been created successfully');
    }
    public function CauseView($cause_id)
    {
        $cause=Cause::find($cause_id);
        return view('admin.pages.view_cause_details',compact('cause'));
    
    }
    public function DeleteCause($cause_id)
    {
        Cause::find($cause_id)->delete();
        return redirect()->back()->with('success',"Cause has been deleted");
    }
    public function EditCause($cause_id)
    {
        $cause=Cause::find($cause_id);
        $categorylist=Category::all();
        return view('admin.pages.edit_cause', compact('cause','categorylist'));
    }
    public function CauseUpdate(Request $request,$cause_id)
    {


        $cause=Cause::find($cause_id);

        // Product::where('column','value')->udpate([
        //    'column'=>'request form field name'
        // ]);

        $image_name=$cause->image;
            //  step 1: check image exist in this request.
        if($request->hasFile('cause_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $request->file('cause_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('cause_image')->storeAs('/causes',$image_name);

        }


        $cause->update([
            // field name from db || field name from form
            'name'=>$request->name,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
            'raised_amount'=>$request->raised_amount,
            'image'=>$image_name,

        ]);
        return redirect()->route('manage.cause')->with('success','Cause Updated Successfully.');

    }
}
