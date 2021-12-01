<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CreateCategory()
    {
        return view('admin.pages.create_category');
    }
    public function CategoryList()
    {
        $categorylist = Category::all();
        return view('admin.pages.category_list', compact('categorylist'));
    }
    public function StoreCategory(Request $request)
    {
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details,
        ]);
        return redirect()->back()->with('success','category has been created successfully');
    }
}
