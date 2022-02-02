<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Intervention Thermique | Accueil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="../../../../use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
        <div class="inner-header"><a class="inner-brand" href="{{ url('/') }}"><img src="/img/logo.png"
                    alt=""></a></div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav">
                <ul>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a href="{{ url('/') }}"><span
                                class="menu-item-span">Accueil</span></a></li>
                    <li class="menu-item-has-children"><a href="{{ url('/products') }}"><span class="menu-item-span">Produits</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/products') }}">CHAUFFE EAU SOLAIRE</a></li>
                            <li><a href="{{ url('/products') }}">TRAITEMENT DES EAUX</a></li>
                            <li><a href="{{ url('/products') }}">qui-sommes-nous?</a></li>
                            <li><a href="{{ url('/products') }}">Single Product</a></li>
                            <li><a href="{{ url('/products') }}">Checkout</a></li>
                            <li><a href="{{ url('/products') }}">Cart</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a href="{{ url('/contact') }}"><span
                                class="menu-item-span">Contact</span></a></li>
                    <li><a href=""><span class="menu-item-span">qui-sommes-nous?</span></a></li>
                </ul>
            </div>
        </div>
        <div class="extra-nav">
            <ul>
                <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span
                            class="menu-item-span"><i class="fas fa-bars"></i></span></a></li>
            </ul>
        </div>
    </div>
</header> 
<!-- Header end-->
@yield('content')

    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
        <div class="container">
          <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-links widget-light pb-2 mb-4">
                <h3 class="widget-title text-light">Informations</h3>
                <ul class="widget-list">
                  <li class="widget-list-item" style="margin-top: 1em"><i class="fas fa-map-marker-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;">Hay El Wafa, rue 701, n°16 bis AGADIR MAROC</span></li>
                  <li class="widget-list-item" style="margin-top: 1em"><i class="fas fa-envelope"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;">b.intervention@gmail.com </span></li>
                  <li class="widget-list-item" style="margin-top: 1em"><i class="fas fa-phone-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;"><a href="tel:+212 528238223" style="color: rgba(255,255,255,.65)">+212 528238223</a></span></li>
                  <li class="widget-list-item" style="margin-top: 1em"><i class="fas fa-phone-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;"><a href="tel:+212 662767748" style="color: rgba(255,255,255,.65)">+212 662767748</a></span></li>
                  <li class="widget-list-item" style="margin-top: 1em"><i class="fas fa-phone-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;"><a href="tel:+212 662271630" style="color: rgba(255,255,255,.65)">+212 662271630</a></span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-links widget-light pb-2 mb-4">
                <h3 class="widget-title text-light">Notre Compagnie</h3>
                <ul class="widget-list">
                  <li class="widget-list-item" style="margin-top: 1em"><a class="widget-list-link" href="#">Qui Sommes-Nous ?</a></li>
                  <li class="widget-list-item" style="margin-top: 1em"><a class="widget-list-link" href="{{ url('/contact') }}">Contactez-nous</a></li>
                  <li class="widget-list-item" style="margin-top: 1em"><a class="widget-list-link" href="{{ url('/') }}">Nos Marques</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget pb-2 mb-4">
                <h3 class="widget-title text-light pb-1">Newsletter</h3>
                <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                  <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                  </div>
                  <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                  <div class="subscription-status"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-5 bg-darker">
          <div class="container">
            <div class="row pb-2">
              <div class="col-md-6 text-center text-md-end mb-4">
                <div class="mb-3 social"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="https://m.facebook.com/xtramega.agadir/"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="https://www.instagram.com/xtra.mega/?hl=en"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="tel: +212 66308877"><i class="ci-whatsapp"></i></a></div>
              </div>
            </div>
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. 2022 InterventionThermique Maroc</div>
          </div>
        </div>
      </footer>
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
