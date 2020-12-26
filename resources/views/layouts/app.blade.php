<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laratition | Home</title>
    <!-- MDB icon -->
    <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:90,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- css doodle -->
    <script src="https://unpkg.com/css-doodle@0.8.5/css-doodle.min.js"></script>
    <!-- css -->
    @yield('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>

<body class="bg">
    <div class="spinner-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <!-- Start of project here-->
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg fixed-top white scrolling-navbar">
            <a class="navbar-brand" href="{{ route('welcome') }}">Laratition</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active-linkb ">
                        <a class="nav-link" href="{{ route('welcome') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('competitions') }}">Competitions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('submissions') }}">Submissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('leaderboard') }}">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('community') }}">Community</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li> -->
                    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
                </ul>
                @guest
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item mr-2">
                        <button class="login-register-btn"><a href="{{ route('login') }}">Login</a></button>
                    </li>
                    <li class="nav-item">
                        <button class="login-register-btn"><a href="{{ route('register') }}">Register</a></button>
                    </li>
                </ul>
                @endguest

                @auth
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item" style="margin-right: -1.7rem; margin-top: .4rem;">
                        <a class="nav-link red-text waves-effect waves-light animated tada infinite"> <span>1</span>
                            <i class="fas fa-envelope" style="margin-right: 0px;"></i>
                        </a>
                    </li>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/images/user.svg') }}" class="rounded-circle z-depth-0" alt="avatar image">
                            {{ auth()->user()->username }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                            <a class="dropdown-item" href="primary-user.html"><i class="fas fa-user-circle"></i>My Account</a>
                            <a class="dropdown-item" href="#"><i class="fas red-text fa-envelope animated tada infinite"> 1</i>Notifications</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i>Settings</a>
                            <a class="dropdown-item" href="login-register.html"><i class="fas fa-sign-out-alt"></i>sign-out</a>
                        </div>
                    </li>
                </ul>
                @endauth
            </div>
        </nav>
        <!--/.Navbar -->
    </header>
    @yield('content')

    <!-- start of the footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4"></div>
                <div class="col-sm-12 col-md-3">
                    <ul class="footer-list">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('competitions') }}">Challenges</a></li>
                        <li><a href="{{ route('leaderboard') }}">Leaderboard</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <ul class="footer-list">
                        <li><a href="{{ route('community') }}">Community</a></li>
                        <li><a href="{{ route('mentors') }}">Mentors</a></li>
                        <li><a href="{{ route('submissions') }}">Solutions</a></li>
                    </ul>
                </div>
                <div id="footer-icons" class="col-sm-12 col-md-2">
                    <ul>
                        <li><a href="#">
                                <svg xmlns="http://www.w3.org/1000/svg" width="20" height="20">
                                    <path fill="#FFF" d="M18.896 0H1.104C.494 0 0 .494 0 1.104v17.793C0 19.506.494 20 1.104 20h9.58v-7.745H8.076V9.237h2.606V7.01c0-2.583 1.578-3.99 3.883-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.597-1.496 1.47v1.928h2.989l-.39 3.018h-2.6V20h5.098c.608 0 1.102-.494 1.102-1.104V1.104C20 .494 19.506 0 18.896 0z" /></svg>
                            </a></li>
                        <li><a href="#">
                                <svg xmlns="http://www.w3.org/1000/svg" width="21" height="20">
                                    <path fill="#FFF" d="M10.333 0c-5.522 0-10 4.478-10 10 0 5.523 4.478 10 10 10 5.523 0 10-4.477 10-10 0-5.522-4.477-10-10-10zm3.701 14.077c-1.752.12-5.653.12-7.402 0C4.735 13.947 4.514 13.018 4.5 10c.014-3.024.237-3.947 2.132-4.077 1.749-.12 5.651-.12 7.402 0 1.898.13 2.118 1.059 2.133 4.077-.015 3.024-.238 3.947-2.133 4.077zM8.667 8.048l4.097 1.949-4.097 1.955V8.048z" /></svg>
                            </a></li>
                        <li><a href="#">
                                <svg xmlns="http://www.w3.org/1000/svg" width="21" height="18">
                                    <path fill="#FFF" d="M20.667 2.797a8.192 8.192 0 01-2.357.646 4.11 4.11 0 001.804-2.27 8.22 8.22 0 01-2.606.996A4.096 4.096 0 0014.513.873c-2.649 0-4.595 2.472-3.997 5.038a11.648 11.648 0 01-8.457-4.287 4.109 4.109 0 001.27 5.478A4.086 4.086 0 011.47 6.59c-.045 1.901 1.317 3.68 3.29 4.075a4.113 4.113 0 01-1.853.07 4.106 4.106 0 003.834 2.85 8.25 8.25 0 01-6.075 1.7 11.616 11.616 0 006.29 1.843c7.618 0 11.922-6.434 11.662-12.205a8.354 8.354 0 002.048-2.124z" /></svg>
                            </a></li>
                        <li><a href="#">
                                <svg xmlns="http://www.w3.org/1000/svg" width="20" height="20">
                                    <path fill="#FFF" d="M10 0C4.478 0 0 4.477 0 10c0 4.237 2.636 7.855 6.356 9.312-.088-.791-.167-2.005.035-2.868.182-.78 1.172-4.97 1.172-4.97s-.299-.6-.299-1.486c0-1.39.806-2.428 1.81-2.428.852 0 1.264.64 1.264 1.408 0 .858-.545 2.14-.828 3.33-.236.995.5 1.807 1.48 1.807 1.778 0 3.144-1.874 3.144-4.58 0-2.393-1.72-4.068-4.177-4.068-2.845 0-4.515 2.135-4.515 4.34 0 .859.331 1.781.745 2.281a.3.3 0 01.069.288l-.278 1.133c-.044.183-.145.223-.335.134-1.249-.581-2.03-2.407-2.03-3.874 0-3.154 2.292-6.052 6.608-6.052 3.469 0 6.165 2.473 6.165 5.776 0 3.447-2.173 6.22-5.19 6.22-1.013 0-1.965-.525-2.291-1.148l-.623 2.378c-.226.869-.835 1.958-1.244 2.621.937.29 1.931.446 2.962.446 5.522 0 10-4.477 10-10S15.522 0 10 0z" /></svg>
                            </a></li>
                        <li><a href="#">
                                <svg xmlns="http://www.w3.org/1000/svg" width="21" height="20">
                                    <path fill="#FFF" d="M10.333 1.802c2.67 0 2.987.01 4.042.059 2.71.123 3.976 1.409 4.1 4.099.048 1.054.057 1.37.057 4.04 0 2.672-.01 2.988-.058 4.042-.124 2.687-1.386 3.975-4.099 4.099-1.055.048-1.37.058-4.042.058-2.67 0-2.986-.01-4.04-.058-2.717-.124-3.976-1.416-4.1-4.1-.048-1.054-.058-1.37-.058-4.041 0-2.67.01-2.986.058-4.04.124-2.69 1.387-3.977 4.1-4.1 1.054-.048 1.37-.058 4.04-.058zm0-1.802C7.618 0 7.278.012 6.211.06 2.579.227.56 2.242.394 5.877.345 6.944.334 7.284.334 10s.011 3.057.06 4.123c.166 3.632 2.181 5.65 5.816 5.817 1.068.048 1.408.06 4.123.06 2.716 0 3.057-.012 4.124-.06 3.628-.167 5.651-2.182 5.816-5.817.049-1.066.06-1.407.06-4.123s-.011-3.056-.06-4.122C20.11 2.249 18.093.228 14.458.06 13.39.01 13.049 0 10.333 0zm0 4.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.339-9.87a1.2 1.2 0 10-.001 2.4 1.2 1.2 0 000-2.4z" /></svg>
                            </a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <ul id="footer-last-links">
                            <li><a href="#">Terms of Service</a><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 copyright">&copy; Copyright of the interprise</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of the footer -->
    <!-- End of project here-->



    <!-- custom js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Your custom scripts (optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>