<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Boto | Photography HTML Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Boto Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/fresco.css" />
    <link rel="stylesheet" href="css/slick.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
                    <a href="./index.html" class="site-logo">
                        <img src="img/logo.png" class="ms-0" style="width: 200px; height:200px" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 order-3 order-sm-3">
                    <div class="header__switches">
                        <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                        <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <nav class="main__menu">
                <ul class="nav__menu">
                    <li><a href="{{ route('index') }}" class="menu--active">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer class="footer__section">
        <div class="container">
            <div class="footer__copyright__text">
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | Mohamed Reda Elbadawy <i class="fa fa-heart"
                    aria-hidden="true"></i>
            </div>
        </div>
    </footer>
    <!-- Footer Section end -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fresco.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
