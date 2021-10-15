<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="../../../../use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/plugins.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/template.css" rel="stylesheet">
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
            <section class="module-cover parallax text-center fullscreen" data-background="/img/yellow-safety-helmet-solar-cell-panel-min.jpg"
                data-overlay="0.6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Climat parfait avec une famille heureuse</strong></h1>
                            <p class="m-b-40">Notre mission est de vous faciliter la vie avec un climat <br> confortable
                                dans votre maison.</p>
                            <p><a class="btn btn-lg btn-circle btn-brand" href="#">Nos produits</a><a
                                    class="btn btn-lg btn-circle btn-outline-new-white" href="#">à propos de nous</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->
    
            <!-- About-->
            <section class="module divider-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h1>Services</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-mY="30px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-bar-chart"></span></div>
                                <div class="icon-box-title">
                                    <h6>Commercialisation</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>L'achat, la vente l'importation, la commercialisation et la distribution de tous
                                        produit Thermique et leur pièce de rechange et de raccordement tel que (Chauffe-eau
                                        solaire électrique à gaz ou gasoil aussi que chauffage domestique).</p>
                                </div>
                                <div class="icon-box-link"><a href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-pulse"></span></div>
                                <div class="icon-box-title">
                                    <h6>Chauffage</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>Chaudières, brûleurs, gaz, gasoil, chauffage, climatisation, vapeur hydraulique,
                                        tuyauterie PPR pompes, piscines, industrielles. <br> Froid industriel et commercial.
                                        Travaux de Climatisation et électroménager</p>
                                </div>
                                <div class="icon-box-link"><a href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-settings"></span></div>
                                <div class="icon-box-title">
                                    <h6>Travaux</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>L'électricité, bâtiment, industriel, automation, régulation, station de pompage,
                                        installation naval, dépannage, entretien, électronique, bobinage, éclairage
                                        publique, signalisation, poste de transformation, électricité générale basse moyenne
                                        et haute tension ou privé. </p>
                                </div>
                                <div class="icon-box-link"><a href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-hummer"></span></div>
                                <div class="icon-box-title">
                                    <h6>Réparations</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>L'étude l'exécution l'exploitation, l'entretien, le montage, la réparation de toutes
                                        installations publiques et privés, utilisant l'électricité ou mettant en oeuvre des
                                        dispositifs Thermique.</p>
                                </div>
                                <div class="icon-box-link"><a href="#">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About end-->
    
            <!-- Portfolio-->
            <section class="module p-b-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h1>Activités</h1>
                            <p class="lead">See how your users experience your website in realtime or view trends to see any
                                changes in performance over time.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="40px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="filters serif">
                                <li><a class="current" href="#" data-filter="*">All</a></li>
                                <li><a href="#" data-filter=".chauffage">Chauffage</a></li>
                                <li><a href="#" data-filter=".commerce">Commerce</a></li>
                                <li><a href="#" data-filter=".pompage">Pompage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row row-portfolio" data-columns="3">
                        <div class="grid-sizer"></div>
                        <div class="portfolio-item commerce">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img src="/img/portfolio/16544.jpg" alt=""></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Commercialisation</h6><span
                                        class="portfolio-item-subtitle serif">Commerce</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                        <div class="portfolio-item chauffage">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img src="/img/portfolio/18966220.jpg" alt="">
                                </div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Panneau Solaire</h6><span
                                        class="portfolio-item-subtitle serif">Chauffage</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                        <div class="portfolio-item pompage">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img
                                        src="/img/portfolio/2012.i607.040_water_filtration_system_isometric_composition.jpg"
                                        alt=""></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Osmose</h6><span
                                        class="portfolio-item-subtitle serif">Pompage</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                        <div class="portfolio-item chauffage">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img src="/img/portfolio/33271.jpg" alt=""></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Chaudière</h6><span
                                        class="portfolio-item-subtitle serif">Chauffage</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                        <div class="portfolio-item pompage">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img src="/img/portfolio/Wavy_Bus-30_Single-01.jpg"
                                        alt=""></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Entretien Piscine</h6><span
                                        class="portfolio-item-subtitle serif">Pompage</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                        <div class="portfolio-item chauffage">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><img src="/img/portfolio/OLQE6N0.jpg" alt=""></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title">Climatisation</h6><span
                                        class="portfolio-item-subtitle serif">Chauffage</span>
                                </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio end-->
            <!-- Clients-->
            <section class="module bg-gray p-t-0 p-b-40" style="margin-top: 15em;">
                <div class="container">
                    <div class="space" data-MY="-60px"></div>
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h1>Partenaires</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="40px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="owl-carousel clients-carousel">
                                <div class="client"><img src="/img/clients/2560px-Samsung_Logo.svg.png" alt="">
                                </div>
                                <div class="client"><img src="/img/clients/giordano.png" alt=""></div>
                                <div class="client"><img src="/img/clients/waternet.png.700x700_q85_upscale.png"
                                        alt=""></div>
                                <div class="client"><img src="/img/clients/logo.png" alt=""></div>
                                <div class="client"><img src="/img/clients/logo2.png" alt=""></div>
                                <div class="client"><img src="/img/clients/1608166979141_carrier-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clients end-->
            @extends('layouts.footer')
            
            <a class="scroll-top" href="#top"><i class="ti-arrow-up"></i></a>
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
