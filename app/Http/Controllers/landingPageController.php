<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
  public function redirect()
  {
    return redirect('Home-Page');
  }

  public function index()
  {
    return view('landingPage.homePage.index');
  }
}
