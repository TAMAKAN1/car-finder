<?php

namespace App\Http\Controllers;

use App\Car;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
  
    public function index()
    {
        return view('backend.category.add');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = '/backend/' . '/category_image/' . $filename;
            $file->move(public_path() . "/backend/" . "/category_image/", $filename);
            Category::create([
                'category_name' => $request->category_name,
                'image' => $path,
            ]);
        }
        else{
            Category::create([
                'category_name' => $request->category_name,
            ]);
        }
       
       toastr()->success('تمت إضافة فئة');
       return redirect()->back();

    }
    public function delete(Category $category){
        $category->delete();
        $image_path = public_path().$category->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        toastr()->success('تم الحذف');
        return redirect()->back();
      }
      public function update(Request $request,Category $category){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = '/backend/' . '/category_image/' . $filename;
            $file->move(public_path() . "/backend/" . "/category_image/", $filename);
       }
       else{
           $path=$category->image;
       }
      $category->update([
        'name'=>$request->category_name,
        'image'=>$path ,
   
          ]);

          toastr()->success('محدث');
          return redirect()->back();
       
      }


}
