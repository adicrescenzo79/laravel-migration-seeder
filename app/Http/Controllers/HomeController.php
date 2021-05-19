<?php

namespace App\Http\Controllers;
use App\Travel_package;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $title = 'Home';
    $travelPackages = Travel_package::all();
    return view('home', compact('travelPackages'))->with('title', $title);
  }
}
