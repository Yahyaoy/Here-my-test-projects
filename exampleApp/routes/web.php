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

app()->bind('example',function (){
    return \App\Models\Example();
});

Route::get('/', function () {
    $example = resolve('example');
    ddd($example);
});







//
//Route::get('/about', function () {
//    $article = App\Models\Article::latest('excerpt')->get();
//    return view('about', [
//        'articles' => $article
//    ]);
//});
//
//Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
//Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
//Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
//Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
//Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
//Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');
