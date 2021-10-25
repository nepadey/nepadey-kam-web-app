<?php

namespace App\Http\Controllers;

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
}
