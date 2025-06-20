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
    $imageName = $category->image;
    if($request->hasFile('image'))
    {
       //delete old image 
       if($imageName)
       {
         $imagePath = public_path('images/categories/' . $imageName);
         if(file_exists($imagePath))
         {
            unlink($imagePath);
         }
       }

      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('images/categories'),$imageName);
      $category->image = $imageName;
    }

    $category->description = $validatedData['description'];
    // dd($category);

    $category->save();
    return $category;

  }  

  

}


class BlukAction
{

  public function execute(CategoryFormRequest $request)
  {

    $action = $request->input('action');
    $selectedIds = $request->input('selected_ids');

    if(!$selectedIds)
    {
      return redirect()->route('category')->with('error','No categories selected');
    }

    switch($action)
    {
      case 'Active':
        Category::whereIn('id',$selectedIds)->update(['status' => 'Active']);
        return redirect()->route('category')->with('success','Selected categories activated.');

      case 'Inactive':
        Category::whereIn('id',$selectedIds)->update(['status' => 'Inactive']);
        return redirect()->route('category')->with('success','Selected categories deactivated.');
        
      default:
       return redirect()->route('category')->with('error','Invalid action selelcted');
    }

  }
}


