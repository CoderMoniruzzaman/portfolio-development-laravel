<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use App\HomePage;
use App\Cv;
use App\Slider;
use App\Category;
use App\Contact;
use Mail;
use App\Mail\ContactMessage;
class FrontendController extends Controller
{

  public function welcome()
  {   $cvs = Cv::get()->where('file_status', 1);
      $homepages = HomePage::get()->where('status', 1);
      return view('welcome',compact('homepages','cvs'));
  }

  public function work()
  {
      $products = Product::all();
      $categoreies = Category::where('status', 1)->get();
      $sliders = Slider::orderBy('created_at', 'DESC')->get();
      return view('work',compact('sliders','categoreies','products'));
  }

  public function workview($id)
  {
      $products_info = Product::findOrFail($id);
      $multiple_photos = json_decode($products_info->slider_image, true);
      return view('workview',compact('products_info','multiple_photos'));

  }

  public function service()
  {
      return view('service');
  }

  public function resume()
  {
    $cvs = Cv::get()->where('file_status', 1);
    return view('resume',compact('cvs'));
  }


  public function blog()
  {
      return view('blog');
  }

  public function contact()
  {
      return view('contact');
  }


  public function contactinsert(Request $request)
  {
    Contact::insert($request->except('_token') + [
        'created_at' => Carbon::now()
    ]);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->Subject;
        $message = $request->message;
        Mail::to('moniruzzaman.freelancer@gmail.com')->send(new ContactMessage($name, $email, $subject, $message));
        return back()->with('status', 'Message Sent Successfully');
  }



  public function notfound()
  {
      return view('maintainance');
  }








}
