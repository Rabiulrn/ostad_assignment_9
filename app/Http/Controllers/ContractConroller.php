<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractConroller extends Controller
{
    public function index(){
        return view("pages.contract");
       }
}
