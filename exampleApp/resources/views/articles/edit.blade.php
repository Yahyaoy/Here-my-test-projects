@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Article</h1>

            <form action="/articles/{{$article->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Excerpt</label>

                    <div class="control">
                        <textarea class="input" type="text" name="excerpt" id="excerpt" >{{$article->excerpt}} </textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Body</label>

                    <div class="control">
                        <textarea class="input" type="text" name="body" id="body" >{{$article->body}}</textarea>
                    </div>
                </div>

                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>
@endsection
