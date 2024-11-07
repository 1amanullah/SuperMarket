<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use App\Actions\CreateCategoryAction;
use App\Actions\UpdateCategoryAction;
use App\Actions\FilterCategoryAction;

class CategoriesController extends Controller
{
    protected $createCategoryAction;
    protected $updateCategoryAction;
    protected $filterCategoryAction;

    public function __construct(CreateCategoryAction $createCategoryAction, UpdateCategoryAction $updateCategoryAction, FilterCategoryAction $filterCategoryAction)
    {
        $this->createCategoryAction = $createCategoryAction; 
        $this->updateCategoryAction = $updateCategoryAction;     
        $this->filterCategoryAction = $filterCategoryAction;

    }

    public function index(Request $request)
    {
        
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    public function bulkAction(CategoryFormRequest $request, FilterCategoryAction $filterCategoryAction)
    {

        $categories =   $this->filterCategoryAction->execute($request);
        
        return view('categories.index',compact('categories'));

    }

    public function create()
    {
        return view('admin.category.create-category');
    }   

    public function store(CategoryFormRequest $request)
    {  
        $this->createCategoryAction->execute($request);
        
        
        return redirect('/admin/category')->with('success','Category Added Successfully');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.edit-category',compact('categories'));
    }

    public function update(CategoryFormRequest $request,$id)
    {
        
        $this->updateCategoryAction->execute($request,$id);
        return redirect('/admin/category')->with('success','Category Updated Successfully');
    }

}
