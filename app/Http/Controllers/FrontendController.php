<?php

namespace App\Http\Controllers;

use App\Models\Jobtype;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function home()
  {
      return view('frontend.home');
  }
  public function jobsearchpage()
  {
      return view('frontend.jobsearchpage');
  }
  public function tasklistingpage()
  {
      return view('frontend.tasklistingpage');
  }
  public function jobpage()
  {
      return view('frontend.jobpage');
  }
  public function singletaskpage()
  {
      return view('frontend.singletaskpage');
  }
  public function contactpage()
  {
      return view('frontend.contactpage');
  }
  public function blogpage()
  {
      return view('frontend.blogpage');
  }
  public function loginpage()
  {
      return view('frontend.loginpage');
  }
  public function registerpage()
  {
      return view('frontend.registerpage');
  }
  public function errorpage()
  {
      return view('frontend.errorpage');
  }
  public function userprofilepage()
  {
      return view('frontend.userprofilepage');
  }
}
