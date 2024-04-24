<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryFormRequest;

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

    public function store(CategoryFormRequest $request)
    {
           $validatedData = $request->validated();
           $category = new Category;
           $category->name = $validatedData['name'];
           $category->status = $validatedData['status'];
           
           if($request->hasFile('image'))
           {
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              
              $file->move('uploads/categories/',$filename);
              $category->image = $filename;
             
           }


          $category->description = $validatedData['description'];

          $category->status = $request->status == true ? 'active':'inactive';

          $category->save();

          return redirect('/admin/category')->with('message','Category Added Successfully');
    }
}
