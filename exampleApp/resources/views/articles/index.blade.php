@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">

            @forelse($article as $a)
            <div id="content">
                <div class="title">
                    <a href="{{$a->path()}}">
                        <h2>{{$a->title}}</h2>
                    </a>
                </div>

                <p><img src="../img/banner.jpg"
                            alt=""
                            class="image image-full"
                        />
                    </p>

                    {!! $a->excerpt !!}
                </div>

            @empty
                <p>No relevant articles yet.</p>

            @endforelse
        </div>
    </div>


@endsection
