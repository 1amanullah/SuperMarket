<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
// use App\Http\Requests\CategoryFormRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.add-category');
    }

    public function store(Request $request)
    {
       $request->validate([
            'name'=>'required',
            'status'=>'required',
            'image'=>'mimes:png,jpg',
            'description' => 'required',
        ]);
  
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/categories'),$imageName);
       

        $category = new Category;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->image = $imageName;
        $category->description = $request->description;

        
        // $category->save();
        dd($request->category);
        // return redirect('/admin/category')->with('message','Category Added Successfully');
    }
}
