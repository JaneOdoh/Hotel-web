<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function proposal(){


        //passing of parameters to view from the controller
        $title="MY FIRST LARAVEL COURSE";
        $page="PAGE ONE";
        //THERE ARE two ways to do this 1 using the with keyword and 2 using compact key word
        //with
        return view('index.project.project')->with('title',$title)->with('page',$page);
//using compact
        // return view('index.project.project',compact('title'));
    }
    
}
