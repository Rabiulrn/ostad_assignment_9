<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsConroller extends Controller
{
    public function index(){
        $data = DB::table('projects')->get();
        // dd($data);
        return view("pages.projects",["data"=>$data]);
       }
}
