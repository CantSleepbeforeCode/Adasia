<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
  public function redirect()
  {
    return redirect()->route('home-page');
  }

  public function index()
  {
    return view('landingPage.homePage.index');
  }

  public function comingSoon()
  {
    return view('landingPage.comingSoon');
  }
}
