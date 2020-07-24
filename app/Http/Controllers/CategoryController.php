<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
class CategoryController extends Controller
{


  public function categoryview()
  {
    $categoreies = Category::orderBy('created_at', 'DESC')->get();
    return view('editsite/work/category', compact('categoreies'));
  }

  public function categoryinsert(Request $request)
    {

      $request->validate([
        'category_name' => 'required|unique:categories,category_name',
      ]);

      if (isset($request->status)) {
        Category::insert([
        'category_name' => $request->category_name,
        'status' => true,
        'created_at' => Carbon::now()
        ]);
      }
      else {
        Category::insert([
        'category_name' => $request->category_name,
        'status' => false,
        'created_at' => Carbon::now()
        ]);
      }

      return back()->with('categorystatus','Category Added Successfully!');
    }


    public function changecategory($id)
       {

        if ($categories = Category::find($id)->status) {
          Category::findOrFail($id)->update([
                'status' => 0,
          ]);
        }

        else {
          Category::findOrFail($id)->update([
                'status' => 1,
          ]);
        }
        return back();
       }


       public function destroy($id)
          {
            Category::find($id)->delete();
            return back()->with('deletestatus','Category Deleted successfully');
          }


}
