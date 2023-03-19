<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        if(\request('tag')){
            $article = Tag::where('name',\request('tag'))->firstOrFail()->articles;
        }else{
        $article = Article::latest()->get();
        }
        return view('articles.index',['article'=>$article]);
}

    public function show(Article $article){
//        $article = Article::findOrFail($articleId);
        return view('articles.show',['article'=>$article]);
    }

    public function create(){
        return view('articles.create',[
            'tags' => Tag::all()
        ]);
    }

    public function store(){
        $this->validateAritcle();
        $article =new Article(\request(['title','excerpt','body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(\request('tags'));
        return redirect(route('articles.index'));
    }

    public function edit(Article $article){
//        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article){
        $article->update($this->validateAritcle());

        return redirect($article->path());

    }


    public function validateAritcle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags'=> 'exists:tags,id'
        ]);
    }

}
