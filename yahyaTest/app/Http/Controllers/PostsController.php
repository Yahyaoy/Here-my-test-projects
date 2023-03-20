<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug){
        $posts = Post::where('slug',$slug)->first();
//        $posts   = DB::table('posts')->where('slug',$slug)->first();
//        dd($post);
//    $posts =[
//        'yahya'=>'my name is yahya khalid',
//        'mutaz'=>'my name is mutaz saleh'
//    ];

//    if(!array_key_exists($post,$posts)){
//        abort(404,"soory");
//    }
    return view('post',[
        'post'=>$posts
    ]);
    }
}
