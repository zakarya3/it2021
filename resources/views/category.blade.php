<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="../../../../use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/plugins.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/template.css">
    </head>
    <body>
        <!-- Preloader-->
<div class="page-loader">
    <div class="page-loader-inner">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<header class="header header-transparent">
    <div class="container-fluid">
        <!-- Brand-->
        <div class="inner-header"><a class="inner-brand" href="index.html"><img src="/img/logo.png"
                    alt=""></a></div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav">
                <ul>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a href="index.html"><span
                                class="menu-item-span">Accueil</span></a></li>
                    <li class="menu-item-has-children"><a href="#"><span class="menu-item-span">Produits</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid.html">CHAUFFE EAU SOLAIRE</a></li>
                            <li><a href="shop-grid.html">TRAITEMENT DES EAUX</a></li>
                            <li><a href="shop-grid.html">qui-sommes-nous?</a></li>
                            <li><a href="shop-grid.html">Single Product</a></li>
                            <li><a href="shop-grid.html">Checkout</a></li>
                            <li><a href="shop-grid.html">Cart</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a href="contact.html"><span
                                class="menu-item-span">Contact</span></a></li>
                    <li><a href="about.html"><span class="menu-item-span">qui-sommes-nous?</span></a></li>
                </ul>
            </div>
        </div>
        <div class="extra-nav">
            <ul>
                <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span
                            class="menu-item-span"><i class="ti-menu"></i></span></a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header end-->
        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" style="background-image: url(/img/solar-cell-farm-power-station-alternative-energy-from-sun.jpg) !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Nos produits</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->

            <!-- Features-->
            <section class="module divider-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 m-auto text-center">
                            <h3>Catégories</h3>
                            <p class="lead">Ils nous font confiance De nombreuses entreprises et institutions nous accordent leur confiance pour gérer et accompagner leurs projets.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="feature-thumb"><img src="img/features/1.jpg" alt=""></div>
                                <div class="feature-content">
                                    <h6>Web Design</h6>
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p><a class="feature-link" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="feature-thumb"><img src="img/features/2.jpg" alt=""></div>
                                <div class="feature-content">
                                    <h6>Plugin Development</h6>
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p><a class="feature-link" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="feature-thumb"><img src="img/features/3.jpg" alt=""></div>
                                <div class="feature-content">
                                    <h6>Theme Development</h6>
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p><a class="feature-link" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature end-->
            <!-- Clients end-->
            @extends('layouts.footer')
            
            <a class="scroll-top" href="#top"><i class="fas fa-arrow-up"></i></a>
        </div>
    
        <!-- Scripts-->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
        <script src="/js/plugins.min.js"></script>
        <script src="/js/custom.min.js"></script>
    </body>
</html>
