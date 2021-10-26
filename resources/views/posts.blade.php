@extends ('layout')

@section('banner')
    <h1>Nice<h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article class="{{$loop-> even ? 'foobar' : ''}}">
            <h1>
                <style>a {
                        color: #090808;
                        background-color: transparent;
                        text-decoration: none;
                        }
                </style>

                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>

            <p>
                <style>a {
                        color: #412517;
                        background-color: transparent;
                        text-decoration: none;
                        }
                </style>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
            </p>
            
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection