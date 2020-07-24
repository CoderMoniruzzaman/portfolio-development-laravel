<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cv;
class CvController extends Controller
{
  public function cvview()
  {
      $files = Cv::orderBy('id', 'DESC')->get();
      $deleted_cvs = Cv::onlyTrashed()->orderBy('id', 'DESC')->get();
      return view('cv/cv',compact('files','deleted_cvs'))->with('i',(request()->input('page',1)-1)*8);
  }

  public function addcvinsert(Request $request)
  {
    $request->validate([
        'name' => 'required',
        'file' => 'required|mimes:pdf,doc,docx,xlx,csv|max:2048',
      ]);

      $last_inserted_id = Cv::insertGetId([
      'name' => $request->name,
      'created_at' => Carbon::now()
    ]);



    if($request->hasFile('file')){
          $pdf_upload = $request->file;
          $pdf_name = $request->name;
          $filename = $pdf_name.".".$pdf_upload->getClientOriginalExtension();
            $upload = $request->file->move(public_path('uploads/files'), $filename);
            if($upload){
              Cv::find($last_inserted_id)->update([
              	'file' => $filename,
              ]);
        }
      return back()->with('status','File Added Successfully!');
    }
  }

  public function changecv($file_id)
    {
      $docs = Cv::all();
        foreach ($docs as $doc) {
          Cv::findOrFail($doc->id)->update([
            'file_status' =>2,
          ]);
        }

      if (Cv::find($file_id)->file_status == 2) {
        Cv::findOrFail($file_id)->update([
              'file_status' => 1,
            ]);
      }
      return back();
    }

    public function downloadcv($id)
      {
          $files = Cv::findOrFail($id)->get()->where('file_status', 1);
          foreach ($files as $file) {
            $filename = $file->file;
          }
          $myFile = public_path('/uploads/files/').$filename;
        	return response()->download($myFile);
      }


    public function destroy($id)
    {
      Cv::find($id)->delete();
      return back()->with('success','Post deleted successfully');
    }

    public function filerestore($id)
      {
        Cv::onlyTrashed()->where('id', $id)->restore();
        return back();
      }

      public function forcedeletefile($id)
        {
            $delete_this_file = Cv::onlyTrashed()->find($id)->file;
            unlink(public_path('uploads/files/') . $delete_this_file);

            Cv::onlyTrashed()->find($id)->forceDelete();
            return back()->with('perstatus','File Parmanent Deleted Successfully!');
        }

        public function fileedit($id)
          {
            $old_info = cv::findOrFail($id);
            return view('cv/edit',compact('old_info'));
          }



          public function editcvinsert(Request $request)
            {
              if($request->hasFile('file')){
                if(Cv::find($request->id)->file == 'mydoc.pdf'){
                  $pdf_upload = $request->file;
                  $pdf_name = $request->name;
                  $filename = $pdf_name.".".$pdf_upload->getClientOriginalExtension();
                    $upload = $request->file->move(public_path('uploads/files'), $filename);
                    if($upload){
                      Cv::find($request->id)->update([
                        'file' => $filename,
                  ]);

                }
              }

              else{
                $delete_this_file = Cv::find($request->id)->file;
                unlink(public_path('uploads/files/') . $delete_this_file);

                $pdf_upload = $request->file;
                $filename = $request->name.".".$pdf_upload->getClientOriginalExtension();

                $upload = $request->file->move(public_path('uploads/files'), $filename);
                if($upload){
                  Cv::find($request->id)->update([
                    'file' => $filename,
              ]);
            }
      }

   }

   Cv::find($request->id)->update([
         'name' => $request->name,
       ]);

return back()->with('editstatus','Cv Editted Successfully!');
 }

}
