<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Transformers Community</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
    </style>

</head>

@yield('navbar')

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

        <!-- The Grid -->
        <div class="w3-row">

            <!-- Left Column -->
            <div class="w3-col m3">

                @yield('left-col')

                <!-- Middle Column -->
                <div class="w3-col m7">

                    <div class="w3-row-padding">
                        <div class="w3-col m12">
                            <div class="w3-card w3-round w3-white">
                                <div class="w3-container w3-padding">
                                    <h6 class="w3-opacity">Transformers Community</h6>
                                    <p contenteditable="true" class="w3-border w3-padding">Status: Feeling great</p>
                                    <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Post</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')




                    <!-- End Middle Column -->
                </div>



                    @yield('right-col')

                    <div class="w3-card w3-round w3-white w3-center">
                        <div class="w3-container">
                            <p>Friend Request</p>
                            <img src="{{asset('images/female-icon.jpg')}}" alt="Avatar" style="width:50%"><br>
                            <span>Jane Doe</span>
                            <div class="w3-row w3-opacity">
                                <div class="w3-half">
                                    <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                                </div>
                                <div class="w3-half">
                                    <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                        <p>ADS</p>
                    </div>
                    <br>

                    <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
                        <p><i class="fa fa-bug w3-xxlarge"></i></p>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
        <br>

        <!-- Footer -->




        <!--
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Transformers Community</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <a href="{{ route('login') }}" class="btn btn-info">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>

            </div>
        </div>
    </nav>
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <!--    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
          -->
        @if (Route::has('register'))
        <!--     <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                       @endif
            @endauth
        </div>
        @endif


        <div class="container">
            @yield('content')
        </div>



    </div>
-->
        <script>
            // Toggle between hiding and showing blog replies/comments
            document.getElementById("myBtn").click();

            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            function likeFunction(x) {
                x.style.fontWeight = "bold";
                x.innerHTML = "✓ Liked";
            }
        </script>



        <footer>
            @yield('footer')
        </footer>

</body>


</html>