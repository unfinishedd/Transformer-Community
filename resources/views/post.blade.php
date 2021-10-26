@extends('layout')

@section('content')
    <article>
        <h1>
            {!! $post->title !!}
        </h1>


        <p>
            <!-- Hele verhaal volledig doorklikken-->
                <style>a {
                        color: #412517;
                        background-color: transparent;
                        text-decoration: none;
                        }
                </style>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
        
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>

<a href="/">Go back</a>
@endsection