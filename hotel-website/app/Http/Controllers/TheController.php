<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class TheController extends Controller
{
    public function users(){
        // $data=[
        //     'name'=>"Jane Odoh",
        //     'email'=>"johnlfifdnnij2@gmail.com",
        //     'password'=>bcrypt("gdiajdjk")

        // ];
        // User::Create($data);
        $jane= User::all();
        return $jane;
        // return DB::select('select * from users');

        // DB::insert ('insert into users(name,email,password) values (?,?,?)',["joyous","joysocfcial@gmail.com","Haloween"];
    // );
   
    
    
        


    }
   
}
