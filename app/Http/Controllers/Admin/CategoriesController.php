<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use App\Actions\CreateCategoryAction;

class CategoriesController extends Controller
{
    protected $createCategoryAction;

    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.add-category');
    }

    public function __construct(CreateCategoryAction $createCategoryAction)
    {
           $this->createCategoryAction = $createCategoryAction;      
    }

    public function store(CategoryFormRequest $request)
    {  
        $this->createCategoryAction->execute($request);
        
        
        return redirect('/admin/category')->with('success','Category Added Successfully');
    }
}
