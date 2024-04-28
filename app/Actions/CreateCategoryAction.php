<?php
namespace App\Actions;

use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;


class CreateCategoryAction
{
    public function execute(CategoryFormRequest $request)
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
          return $category;
        
    }
}