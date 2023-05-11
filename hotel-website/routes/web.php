<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\TheController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});
Auth::routes();
// Route::get('home', function () {
//     return view ('home');
// });
// Route::get('about', function () {
//     return view ('about');
// });
Route::get('/Home',[PagesController::class,'site']);
Route::get('/project',[MyController::class,'proposal']);

Route::get('/user',[TheController::class,'users']);

Route::get('/post',[PostController::class,'posts']);
Route::get('/create',[PostController::class,'create']);
Route::post('/store',[PostController::class,'store']);
Route::get('/index',[PostController::class,'index']);
Route::get('/show/{id}',[PostController::class,'show']);
Route::delete('/delete/{id}',[PostController::class,'delete']);
Route::get('/update/{id}',[PostController::class,'update']);
Route::put('/update/{id}',[PostController::class,'up']);

Route::resource('/visitors', VisitorsController::class);




