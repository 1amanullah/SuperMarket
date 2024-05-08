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
    
          $category->save();
          // dd($category);
          return $category;
        
    }
    
}

class UpdateCategoryAction
{

  public function execute(CategoryFormRequest $request,$id)
  {

    $validatedData = $request->validated();
    $category = Category::findOrFail($id);
    
    $category->name = $validatedData['name'];
    $category->status = $validatedData['status'];
    if($request->hasFile('image'))
    {
       //delete old image 
       if($imageName)
       {
         $imagePath = public_path('images/categories' . $imageName);
         if(file_exists($imagePath))
         {
            unlink($imagePath);
         }
       }

      $imageName = time().'.'.$request->image->extention();
      $request->image->move(public_path('images/categories'),$imageName);
      $category->image = $imageName;
    }

    $category->descriprion = $validatedData['description'];
    // dd($category);

    // $category->save();
    return $category;

  }

}



