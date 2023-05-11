<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function site(){
    $nome= "MY FIRST LARAVEL COURSE";

    return view ('pages.home')-> with('nome', $nome);

  
    


  }
}
