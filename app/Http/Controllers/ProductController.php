<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use App\Product;
use App\Category;
use App\Slider;
class ProductController extends Controller
{

//slider
  public function sliderview()
  { $sliders = Slider::all();
    return view('editsite/work/slider',compact('sliders'));
  }

  public function sliderinsert(Request $request)
    {
        $request->validate([
          'slidername' => 'required',
          'slider_image' => 'required|mimes:jpg,png|max:2048',
          'slider_image*' => 'required',
        ]);

        $last_inserted_id = Slider::insertGetId([
        'slidername' => $request->slidername,
        'created_at' => Carbon::now()
      ]);

      if($request->hasFile('slider_image',)){
        $photo_to_upload = $request->slider_image;
        $filename = $last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
        Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/slider/'.$filename));
        Slider::find($last_inserted_id)->update([
          'slider_image' => $filename,
        ]);
      }
      return back()->with('sliderstatus','Slider Added Successfully!');
    }


    public function sliderdestroy($id)
    {
      $delete_file = Slider::findOrFail($id)->slider_image;
      unlink(base_path('public/uploads/slider/'.$delete_file));
      Slider::find($id)->delete();
      return back()->with('sliderdeletestatus','Slider Deleted Successfully!');
    }

    public function slideredit($id)
    {
      $old_info = Slider::findOrFail($id);
      return view('editsite/work/editslider',compact('old_info'));
    }

    public function editsliderinsert(Request $request)
    {
      if($request->hasFile('slider_image')){
        if (Slider::find($request->id)->slider_image == 'defaultsliderphoto.jpg') {
          $photo_to_upload = $request->slider_image;
          $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();
          Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/slider/'.$filename));
          Slider::find($request->id)->update([
            'slider_image' => $filename,
          ]);
        }

        else {
          $delete_this_file = Slider::find($request->id)->slider_image;
          unlink(base_path('public/uploads/slider/'.$delete_this_file));

          $photo_to_upload = $request->slider_image;
          $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();
          Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/slider/'.$filename));
          Slider::find($request->id)->update([
            'slider_image' => $filename,
          ]);
        }
      }

      Slider::find($request->id)->update([
        'slidername' => $request->slidername,
      ]);
      return back()->with('editsliderstatus','Slider Editted Successfully!');
    }

//////////////////////////////////////////////// End Slider ////////////////////////////////////////

//work
  public function producthome()
  { $products = Product::all();
    $categoreies = Category::orderBy('created_at', 'DESC')->get();
    $deleteds = Product::onlyTrashed()->orderBy('id', 'DESC')->get();
    return view('editsite/work/product',compact('products','categoreies','deleteds'));
  }


  public function productinsert(Request $request)
  {
    request()->validate([
        'name' => 'required',
        'product_description' => 'required',
        'product_link' => 'required',
        'product_video_link' => 'required',
        'category_id' => 'required',
        'product_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'slider_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

      $last_inserted_id =  Product::insertGetId([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'product_description' => $request->product_description,
        'product_link' => $request->product_link,
        'product_video_link' => $request->product_video_link,
        'created_at' => Carbon::now()
      ]);

      if($request->hasfile('product_image')){
        $photo_to_upload = $request->product_image;
        $filename = $last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
        Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/product_photos/'.$filename));
        Product::find($last_inserted_id)->update([
          'product_image' => $filename,
        ]);
      }

      if ($request->hasFile('slider_image')) {
        if ($files = $request->file('slider_image')) {
            $flag=0;
             foreach($files as $img) {
               $new_photo_name = $last_inserted_id."-".$flag.".".$img->getClientOriginalExtension();
               $destinationPath ='public/uploads/product_photos/sliders/'.$new_photo_name;
              Image::make($img)->resize(620,525)->save(base_path($destinationPath));
              $flag++;
              $data[] = $new_photo_name;
              }
             $imagemodel= new Product();
             $imagemodel->where('id', $last_inserted_id)->update([
             'slider_image' => json_encode($data)
             ]);
         }
      }

      return back()->with('status','Product Added Successfully!');
  }

  public function editview($id)
  {
    $old_info = Product::findOrFail($id);
    $multiple_photos = json_decode($old_info->slider_image, true);
    return view('editsite/work/workedit',compact('old_info','multiple_photos'));
  }

  public function editproduct(Request $request)
  {
    if($request->hasFile('product_image')){
      if (Product::find($request->id)->product_image == 'defaultproductphoto.jpg') {
        $photo_to_upload = $request->product_image;
        $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();
        Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/product_photos/'.$filename));
        Product::find($request->id)->update([
          'product_image' => $filename,
        ]);
      }

      else {
        $delete_this_file = Product::find($request->id)->product_image;
        unlink(base_path('public/uploads/product_photos/'.$delete_this_file));

        $photo_to_upload = $request->product_image;
        $filename = $request->id.".".$photo_to_upload->getClientOriginalExtension();
        Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/product_photos/'.$filename));
        Product::find($request->id)->update([
          'product_image' => $filename,
        ]);
      }
    }
    Product::find($request->id)->update([
      'name' => $request->name,
      'product_description' => $request->product_description,
      'product_link' => $request->product_link,
      'product_video_link' => $request->product_video_link,
    ]);
    return back()->with('editstatus','Product Editted Successfully!');
  }




  public function editproductsingle(Request $request,$single_photo,$single_id)
  {
    if(empty($request->slider_image )){
        return back()->with('alert', 'Please Upload Image File!!!');
      }
      //delete previous photo
        if(!empty($single_photo)){
            unlink(base_path('public/uploads/product_photos/sliders/'.$single_photo));
        //copy file to folder
          $file_name = pathinfo($single_photo, PATHINFO_FILENAME); // take only file_name
          $extension = "";
          foreach($request->slider_image as $photos) {
             $extension= $photos->getClientOriginalExtension();
             $file_name_new=$file_name.".".$extension ;
             $photo_to_upload=$photos;
            Image::make($photo_to_upload)->resize(620,525)->save(base_path('public/uploads/product_photos/sliders/'.$file_name_new));
          }
        }

      // search all the images for single id
     $single_product_info = Product::findOrFail($single_id);
     $multiple_photos = json_decode($single_product_info->slider_image, true);
     $photos_new_db[]="";
     $i=0;

    // search matching photos with database
     foreach($multiple_photos as $photos) {
       if($photos===$single_photo){
         $photos_new_db[$i]=$file_name_new;
         $i++;
       }
       else{
         $photos_new_db[$i]=$photos;
         $i++;
       }
     }

     $imagemodel= new Product();
     $imagemodel->where('id', $single_id)->update([
       'slider_image' => json_encode($photos_new_db)
     ]);
    return back()->with('editstatus', 'Product Updated successfully!');
  }

  public function deleteproductsingle($single_photo,$single_id){

      // search all the images for single id
         $single_product_info = Product::findOrFail($single_id);
         $multiple_photos = json_decode($single_product_info->slider_image, true);
         $photos_match[]="";
         $photos_new_db[]="";
          $i=0;
          $j=0;

          // search matching photos
         foreach($multiple_photos as $photos) {
           if($photos===$single_photo){
             $photos_match[$i]=$photos; // for delete from folder
             $i++;
           }
           else{
             $photos_new_db[$j]=$photos; // for save in database
             $j++;
           }
         }

         // delete from folder
         foreach($photos_match as $photos) {
              unlink(base_path('public/uploads/product_photos/sliders/'.$photos));
         }

         // delete from database
         $imagemodel= new Product();
         if (in_array(null, $photos_new_db, true) || in_array('', $photos_new_db, true)) {

           $imagemodel->where('id', $single_id)->update([
             'slider_image' => "defaultsliderphoto.jpg"
           ]);
         }
         else{
           $imagemodel->where('id', $single_id)->update([
             'slider_image' => json_encode($photos_new_db)
           ]);
         }
        return back()->with('deletestatus', 'Product Deleted successfully!');
  }

  public function workdestroy($id)
  {
    Product::find($id)->delete();
    return back()->with('delete','Post deleted successfully');
  }

  public function workrestore($id)
  {
    Product::onlyTrashed()->where('id', $id)->restore();
    return back()->with('restore','Post restore successfully');
  }

  public function forcedelete($id)
  {
    $single_product_info = Product::onlyTrashed()->find($id);
    $multiple_photos = json_decode($single_product_info->slider_image, true);
     if(!empty($multiple_photos)){
       foreach($multiple_photos as $photos) {
          unlink(public_path('uploads/product_photos/sliders/'.$photos));
       }
     }

     if ($delete_this_file = Product::onlyTrashed()->find($id)->product_image == 'defaultproductphoto.jpg') {
       Product::onlyTrashed()->find($id)->forceDelete();
     }
     else {
       $delete_this_file = Product::onlyTrashed()->find($id)->product_image;
       unlink(public_path('uploads/product_photos/') . $delete_this_file);
       Product::onlyTrashed()->find($id)->forceDelete();
     }
     return back()->with('deletestatus', 'Product Deleted successfully!');
  }

}
