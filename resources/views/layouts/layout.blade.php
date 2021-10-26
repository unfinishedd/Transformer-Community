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
            font-family: "Open Sans", sans-serif
        }
    </style>

</head>


<body class="w3-theme-l5">
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
    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">
                <!-- Profile -->
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">My Profile</h4>
                        <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
                    </div>
                </div>
                <br>

                <!-- Accordion -->
                <div class="w3-card w3-round">
                    <div class="w3-white">
                        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                        <div id="Demo1" class="w3-hide w3-container">
                            <p>Some text..</p>
                        </div>
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                        <div id="Demo2" class="w3-hide w3-container">
                            <p>Some other text..</p>
                        </div>
                        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br>
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Interests -->
                <div class="w3-card w3-round w3-white w3-hide-small">
                    <div class="w3-container">
                        <p>Interests</p>
                        <p>
                            <span class="w3-tag w3-small w3-theme-d5">liefde</span>
                            <span class="w3-tag w3-small w3-theme-d4">depressief</span>
                            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                            <span class="w3-tag w3-small w3-theme-d2">Games</span>
                            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                            <span class="w3-tag w3-small w3-theme">Games</span>
                            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                            <span class="w3-tag w3-small w3-theme-l2">Food</span>
                            <span class="w3-tag w3-small w3-theme-l3">Design</span>
                            <span class="w3-tag w3-small w3-theme-l4">Art</span>
                            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                        </p>
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

                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">1 min ago</span>
                    <h4>John Doe</h4><br>
                    <hr class="w3-clear">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-half">
                            <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                        </div>
                        <div class="w3-half">
                            <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                        </div>
                    </div>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Like</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comment</button>
                </div>

                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">16 min ago</span>
                    <h4>Jane Doe</h4><br>
                    <hr class="w3-clear">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Like</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comment</button>
                </div>

                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">32 min ago</span>
                    <h4>Angie Jane</h4><br>
                    <hr class="w3-clear">
                    <p>Have you seen this?</p>
                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Like</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comment</button>
                </div>

                <!-- End Middle Column -->
            </div>

            <!-- Right Column -->
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

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p>Friend Request</p>
                        <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
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