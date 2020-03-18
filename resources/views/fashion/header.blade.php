<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Custom Theme files -->
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="{{ asset('css/shop.css') }}" type="text/css" rel="stylesheet" media="all">
    
    @yield('css')

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Owl-Carousel-CSS -->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.html">fh
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                        <select class="form-control input-lg" name="category">
                            <option value="all">Search our store</option>
                            <optgroup label="Mens">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Trousers</option>
                            </optgroup>
                            <optgroup label="Womens">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tunics">Tunics</option>
                            </optgroup>
                            <optgroup label="Girls">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tops">Tops</option>
                            </optgroup>
                            <optgroup label="Boys">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Sweat Shirts</option>
                            </optgroup>
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        @guest
                            <a class="text-dark login_btn align-self-center mx-3" href="#exampleModal1" data-toggle="modal" data-target="#exampleModal1">
                                <i class="far fa-user"></i>
                            </a>

                            <a class="text-dark login_btn align-self-center mx-3" href="/fashion/login" >
                                <i class="fa fa-user"></i>
                            </a>
                        @else
                            
                            <a class="text-dark login_btn align-self-center mx-3" href="#logoutModal" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-user"></i>
                            </a>
                                   
                        @endguest
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Coats</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Suits & Blazers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jackets</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Trousers</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Trousers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Suits & Blazers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Coats & Jackets</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jackets</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Coats</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Suits & Blazers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jackets</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Trousers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Dresses</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Skirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jeans</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Tunics</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Dresses</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Tunics</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Skirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jeans</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Dresses</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Skirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jeans</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Tunics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kids Clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3 ">
                                            <span class="bg-light">Boy's Clothing</span>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Coats</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Suits & Blazers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jackets</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item mt-4" href="/fashion/shoppingsearch">T-Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Coats</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Suits & Blazers</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jackets</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <span>Girl's Clothing</span>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Dresses</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Tunics</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Skirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jeans</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Midi</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item  mt-4" href="/fashion/shoppingsearch">Tunics</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Skirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">T-shirts</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Dresses</a>
                                            <a class="dropdown-item" href="/fashion/shoppingsearch">Jeans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fashion/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fashion/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fashion/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
    <!-- //header -->


@yield('banner')
@yield('breadcrumbs')
@yield('content')

@include('fashion.footer')
@yield('script')