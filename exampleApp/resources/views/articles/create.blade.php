@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Title</label>

                    <div class="control">
                        <input class="input @error('title') is-danger @enderror"
                               type="text"
                               name="title"
                               id="title"
                               value="{{old('title')}}"
                               placeholder="title input">

                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label">Excerpt</label>

                    <div class="control">
                        <input class="input @error('excerpt') is-danger @enderror"
                               type="text"
                               name="excerpt"
                               id="excerpt"
                               value="{{old('excerpt')}}"
                               placeholder="excerpt input">

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Body</label>

                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror"
                                  type="text"
                                  name="body"
                                  id="body"
                                  placeholder="Body input">
                            {{old('body')}}
                        </textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>


                <div class="field">
                    <label class="label">Tags</label>

                    <div class="select is-multiple control">
                        <select
                            name="tags[]"
                            multiple
                            id=""
                        >
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error('tags')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>


                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>
@endsection
