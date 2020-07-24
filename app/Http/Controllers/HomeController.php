<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contactemail()
    {
        $contacts = Contact::orderBy('id', 'DESC')->latest()->paginate(8);
        return view('editsite/contact/email',compact('contacts'))->with('i',(request()->input('page',1)-1)*8);
    }

    public function destroy($id)
    {
      Contact::find($id)->delete();
      return back()->with('deletestatus','Message Deleted successfully');
    }

    public function readmessagestatus($contact_id)
   {
     if(Contact::find($contact_id)->readstatus == 1){
        Contact::find($contact_id)->update([
         'readstatus' => 2
       ]);
     }
     $single_contact_info = Contact::findOrFail($contact_id);
       return view('editsite/contact/emailview',compact('single_contact_info'));
   }

}
