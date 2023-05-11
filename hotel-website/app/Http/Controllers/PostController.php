<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class PostController extends Controller
{



    
// // public function posts(){
// //     return Post::all();
// }
public function create(){
    return view('posts.create');
//    Post::create($request->all());
}
public function store(Request $request){
    $post=new Post();
    $post->head=$request->input('head');
    $post->body=$request->input('body');
    $post->save();



}
public function index(){
    $posts=Post::all();
    return view('posts.index')->with('posts', $posts);
    
   
}
public function show($id){
  $posts=Post::find($id);
    return view('posts.show')->with('posts', $posts);
    
   
}
public function delete($id){
    $post=Post::find($id);
    $post->delete();
    return redirect()->back();

}
// public function update($id){
//     $post=Post::find($id);
    
// }
// public function update($id){
//     $post=Post::where('id',3)->update(['head'=>'God please']);
    
   
//     return redirect()->back();
// }
public function update($id){
    $post=Post::find($id);
    return view('posts.edit')->with('post',$post);
    

}

public function up(Request $request,$id){
$post=Post::find($id);
$post->head=$request->input('head');
$post->body=$request->input('body');
$post->save();
return redirect('/index');

}

}

