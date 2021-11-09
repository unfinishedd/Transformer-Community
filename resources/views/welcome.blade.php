@extends('layouts.layout')


@section('content')
<!--  POSTS  -->


@foreach($posts as $post)

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <img src="{{url('/images/male-icon.jpg')}}" alt="" class="w3-left w3-circle w3-margin-right" style="width:60px">
    <span class="w3-right w3-opacity">{{ $post->updated_at }}</span>
    <h4>{{ $post->title}}</h4><br>
    <hr class="w3-clear">
    <p>{{ $post->excerpt }}</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <br>
        <h7>
            By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h7>
        
        <div class="w3-half">
            <img src="" style="width:100%" alt="" class="w3-margin-bottom">
        </div>
    </div>

    <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>

    <p class="w3-right"><a href="/posts/{{ $post->slug }}" target="_blank"><button class="w3-button w3-white w3-border"><b><i class="fa fa-lees-meer"></i>Lees meer</b></button></a></p>
</div>



@endforeach

@endsection



@section('navbar')

<body class="w3-theme-l5">
    <!--  NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-light c-bg-purple c-tw">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{url('/images/TC.svg')}}" alt="" width="35" height="30" class="d-inline-block align-text-top">
                <span style="font-size: 16px; font-family: DN Pro DN Pro Bold;color: #FC9C72;">TRANSFORMERS<span style="font-size: 12px;color: #806CFF;">COMMUNITY</span></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link c-tw" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-tw" href="/register">Word Transformer!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-tw" href="#">Over Ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-tw" href="footer">Contact</a>
                    </li>
                </ul>

                <div class="d-flex justify-content-end align-items-center">
                    @if (Route::has('login'))
                    <div class="d-flex align-items-center">
                        @auth
                                     <div>{{ Auth::user()->name }}</div>
                        @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn c-titles-font c-link-cw">Register</a>
                        @endif
                        <a href="{{ route('login') }}" class="btn c-titles-font c-imp-button m-2">Login</a>
                               
                        @endauth
                    </div>
                    @endif
                </div>

                <!-- Settings Dropdown -->
                <div class="">
                    @auth




                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <button class= "btn c-titles-font c-imp-button m-2">{{ __('Log Out') }}</button>
                        </x-dropdown-link>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @endsection




    @section('right-col')
    <!--DIT KOMT RECHTS-->


    <!-- EVENTS -->
    <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-center">
            <div class="w3-container">
                <p>Upcoming Events:</p>
                <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                <p><strong>Holiday</strong></p>
                <p>Friday 15:00</p>
                <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
            </div>
        </div>
        <br>


        @endsection


        @section('left-col')
        <!--DIT KOMT LINKS-->


        <!-- CATEGORIES -->

        <div class="w3-container">
            <div class="card bg-light mb-3">
                <div class="card-header bg-light-dark text-black text-uppercase">categories</div>
                <ul class="list-group category_block">
                    @foreach($categories as $category)
                    <li class="list-group-item"><a href="">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>


        <!-- Alert Box -->
        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                <i class="fa fa-remove"></i>
            </span>
            <p><strong>Hey!</strong></p>
            <p>Mensen kijken naar je profiel. Login om te weten wie er naar kijkt.</p>
        </div>

        <!-- End Left Column -->
    </div>


    @endsection


    @section('footer')
    <!--  FOOTER  -->

    <footer class="w3-container w3-theme-d3 w3-padding-16">
        <h5>Contact</h5>
    </footer>

    <footer class="w3-container w3-theme-d5">
        <p>Powered by <a href="/" target="_blank">Transformers Community</a></p>
    </footer>

    @endsection