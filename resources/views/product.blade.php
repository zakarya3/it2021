@extends('layouts.headfoot')
@section('content')
<div class="wrapper">
    <!-- Hero-->
    <section class="module-page-title bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title-desc">
                        <h1 class="page-title-heading">Classic Chair</h1>
                        <!--p This theme will shake your world.-->
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Produits</a></li>
                        <li class="breadcrumb-item active">Classic Chair</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header end-->

    <!-- Product-->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="shop-single-item-photos"><a class="shop-single-item-popup" href="img/shop/5.jpg"><img src="img/shop/5.jpg" alt=""></a>
                        <ul class="shop-single-item-gallery">
                            <li><a class="shop-single-item-popup" href="img/shop/1.jpg"><img src="img/shop/1.jpg" alt=""></a></li>
                            <li><a class="shop-single-item-popup" href="img/shop/2.jpg"><img src="img/shop/2.jpg" alt=""></a></li>
                            <li><a class="shop-single-item-popup" href="img/shop/3.jpg"><img src="img/shop/3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-single-item">
                        <h2 class="shop-single-item-title">Classic Chair</h2>
                        <div class="shop-single-item-rating"><span class="star-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span><a href="#">(Category)</a></div>
                        <div class="shop-single-item-description">
                            <p>Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern personalized look.</p>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><a class="btn btn-block btn-dark" href="#">Ajouter au panier</a></div>
                        </div>
                        <hr class="m-t-30 m-b-30">
                        <div class="info-list">
                            <li><span class="info-list-title">SKU:</span><span>213496</span></li>
                            <li><span class="info-list-title">Category:</span><span><a href="#">Interior</a></span></li>
                            <li><span class="info-list-title">Tags:</span><span><a href="#">Chair</a>, <a href="#">Interior</a></span></li>
                        </div>
                        <hr class="m-t-30 m-b-30">
                        <div class="info-list">
                            <li><span class="info-list-title">Share:</span><span>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul></span></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product end-->

    <!-- Tabs-->
    <section class="module no-gutter p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#shop-description">
                                <h6>Description</h6></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#shop-info">
                                <h6>Additional information</h6></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-tab-content tab-content">
                        <div class="tab-pane fade show active" id="shop-description">
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>
                            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.</p>
                        </div>
                        <div class="tab-pane fade" id="shop-info">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <td>Compositions</td>
                                        <td>Jeans</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>44, 46, 48</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>Somebrand</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tabs end-->

    <!-- Related Products-->
    <section class="module divider-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 m-auto text-center">
                    <h5>You may also like:</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-MY="40px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel shop-carousel">
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/1.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Classic Chair</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/2.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Thermo Flask</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/3.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Folder Calendar</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/4.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Amber Body Lotion</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/5.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Solo Headphones</h6><span class="shop-item-price">00.00</span>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/6.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Ceramic Watch</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/7.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Wooden Bathroom Set</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/8.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Plain Glass Bottle</h6>
                            </div>
                        </div>
                        <div class="shop-grid-item">
                            <div class="shop-item-thumb"><a href="#"><img src="img/shop/9.jpg" alt=""></a>
                                <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Plus de détails</a></div>
                            </div>
                            <div class="shop-item-captions">
                                <h6 class="shop-item-title">Plain Glass Bottle</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection