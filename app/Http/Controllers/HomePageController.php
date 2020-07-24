<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use App\HomePage;

class HomePageController extends Controller
{
  public function homepageview()
  {
    $deleted_home_pages = HomePage::onlyTrashed()->orderBy('id', 'DESC')->get();
    $home_page_contents = HomePage::orderBy('id', 'DESC')->get();
    return view('editsite/homepage/homepageview', compact('home_page_contents','deleted_home_pages'))->with('i',(request()->input('page',1)-1)*8);
  }

  public function addhomecontent()
  {
    return view('editsite/homepage/addhomecontent');
  }

  public function addhomeinsert(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'address' => 'required',
      'freelance' => 'required',
      'age' => 'required',
      'description_one' => 'required',
      'description_two' => 'required',
    ]);


    $last_inserted_id = HomePage::insertGetId([
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'address' => $request->address,
         'freelance' => $request->freelance,
         'age' => $request->age,
         'description_one' => $request->description_one,
         'description_two' => $request->description_two,
         'facebook' => $request->facebook,
         'twitter' => $request->twitter,
         'skype' => $request->skype,
         'linkedin' => $request->linkedin,
         'stack' => $request->stack,
         'github' => $request->github,
         'created_at' => Carbon::now()
       ]);

       if($request->hasFile('profile_pic',)){
         $photo_to_upload = $request->profile_pic;
         $filename = $last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();

         Image::make($photo_to_upload)->save(base_path('public/uploads/pro_photos/'.$filename));
         HomePage::find($last_inserted_id)->update([
           'profile_pic' => $filename,
         ]);
       }

      return back()->with('status','Homepage Content Added Successfully!');
    }

  public function changehomepage($homepage_id)
     {
       $homepages = HomePage::all();
         foreach ($homepages as $homepage) {
           HomePage::findOrFail($homepage->id)->update([
             'status' =>2,
           ]);
         }

       if (HomePage::find($homepage_id)->status == 2) {
         HomePage::findOrFail($homepage_id)->update([
               'status' => 1,
             ]);
       }
       return back();
     }


  public function destroy($id)
     {
       HomePage::find($id)->delete();
       return back()->with('deletestatus','Post Trashed successfully');
     }

  public function homepagerestore($id)
       {
         HomePage::onlyTrashed()->where('id', $id)->restore();
         return back();
       }

  public function forcedelete($id)
    {
      if ($delete_this = HomePage::onlyTrashed()->find($id)->profile_pic == 'defaultphoto.jpg') {
          HomePage::onlyTrashed()->find($id)->forceDelete();
      }

      else {
        $delete_this = HomePage::onlyTrashed()->find($id)->profile_pic;
        unlink(base_path('public/uploads/pro_photos/'.$delete_this));
        HomePage::onlyTrashed()->find($id)->forceDelete();
      }
      return back()->with('pardeletestatus','HomePage Parmanent Deleted Successfully!');

    }

  public function editview($id)
    {
      $old_info = HomePage::findOrFail($id);
      return view('editsite/homepage/edithomapage',compact('old_info'));
    }

  public function edit(Request $request)
    {
      if($request->hasFile('profile_pic')){
        if (HomePage::find($request->id)->profile_pic == 'defaultphoto.jpg') {
          $photo_to_upload = $request->profile_pic;
          $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();
          Image::make($photo_to_upload)->save(base_path('public/uploads/pro_photos/'.$filename));
          HomePage::find($request->id)->update([
            'profile_pic' => $filename,
          ]);
        }
        else {
          $delete_this_file = HomePage::find($request->id)->profile_pic;
          unlink(base_path('public/uploads/product_photos/'.$delete_this_file));

          $photo_to_upload = $request->profile_pic;
          $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();

          Image::make($photo_to_upload)->save(base_path('public/uploads/pro_photos/'.$filename));
          HomePage::find($request->id)->update([
            'profile_pic' => $filename,
          ]);
        }
      }

      HomePage::find($request->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'freelance' => $request->freelance,
        'age' => $request->age,
        'description_one' => $request->description_one,
        'description_two' => $request->description_two,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'skype' => $request->skype,
        'linkedin' => $request->linkedin,
        'stack' => $request->stack,
        'github' => $request->github,
      ]);
      return back()->with('editstatus','HomePage Editted Successfully!');
    }

  public function singleview($id)
    {
      $HomePage_single_info = HomePage::findOrFail($id);
      return view('editsite/homepage/singleviewhomepage',compact('HomePage_single_info'));
    }

}
