<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutConroller extends Controller
{
   public function index(){
    return view("pages.about");
   }
}
