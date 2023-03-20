<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Route::get('/yahyaooy',function(){
//   return "hello world";
//});
//
//Route::get('/foo',function(){
//   return  ['foo'=>'yahya'];
//});

//Route::get('/',function(){
//    $name = request(' me');
//   return view('test',['n'=>$name]);
//});

//Route::get('/posts/{post}',function($post){
//    $posts =[
//        'yahya'=>'my name is yahya khalid',
//        'mutaz'=>'my name is mutaz saleh'
//    ];
//
//    if(!array_key_exists($post,$posts)){
//        abort(404,"soory");
//    }
//    return view('post',[
//        'post'=>$posts[$post]
//    ]);
//});


Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
