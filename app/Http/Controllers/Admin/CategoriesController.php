<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/categories'),$imageName);

          }

          $category->image = $imageName;
          $category->description = $validatedData['description'];
    
        // $category->save();
        dd($category);
        return redirect('/admin/category')->with('success','Category Added Successfully');
    }
}
