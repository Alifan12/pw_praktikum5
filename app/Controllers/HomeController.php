<?php

namespace App\Controllers;

class HomeController extends BaseController
{
  public function index()
  {
    return view('homecontroller/home');
  }

  public function about()
  {
    return view('homecontroller/about');
  }

  public function home()
  {
    return view('homecontroller/homeNavbar');
  }
}