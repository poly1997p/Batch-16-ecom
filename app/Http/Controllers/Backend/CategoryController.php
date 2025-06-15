<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryCreate(){
       return view('backend.category.create') ;
    }

    public function categoryStore(Request $request){

     $category= new Category();

     $category-> name = $request->name;
     $category-> slug = Str::slug($request->name);
     $category-> image = $request->image;
    
     if(isset($request->image)){
        $imageName = rand().'-category-'.'.'.$request->image->extension();
        $request->image->move('backend/images/category/',$imageName );
        $category->image = $imageName;
     }

     $category->save();
     return redirect('/admin/category/list');
    }

    public function categoryList(){
     $categories= category:: all();
     
      return view('backend.category.list', compact('categories'));
    }

    public function categoryDelete($id){

      $category = category::find($id);

if($category->image && file_exists('backend/images/category/'.$category->image)){

   unlink('backend/images/category/'.$category->image);
}

      $category->delete();

      return redirect()->back();
    }
}
