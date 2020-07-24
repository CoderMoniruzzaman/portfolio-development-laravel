<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class ResumeController extends Controller
{
  public function resumeview(){
    return view('editsite/resume/resumeview');
  }



  
}
