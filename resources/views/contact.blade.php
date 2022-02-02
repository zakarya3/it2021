@extends('layouts.headfoot')
@section('content')
<div class="wrapper">
    <!-- Hero-->
    <section class="maps-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.4567344031966!2d-9.558888685032391!3d30.423151881746147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b63b49061fdf%3A0x99653ed0bc031997!2sIntervention%20Th%C3%A9rmique!5e0!3m2!1sen!2sma!4v1633619784001!5m2!1sen!2sma" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- Map end-->

    <!-- Services-->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-email"></span></div>
                        <div class="icon-box-title">
                            <h6>Drop us a line</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-wallet"></span></div>
                        <div class="icon-box-title">
                            <h6>Commercial</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-headphone-alt"></span></div>
                        <div class="icon-box-title">
                            <h6>Support</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="ti-map-alt"></span></div>
                        <div class="icon-box-title">
                            <h6>Visit our office</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                        </div>
                        <div class="icon-box-link"><a href="#">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services end-->

    <!-- Form-->
    <section class="module divider-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 m-auto text-center">
                    <h1>Contact Us.</h1>
                    <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-MY="60px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="contact-form" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Name" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" rows="12" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="text-center">
                                    <input class="btn btn-circle btn-brand" type="submit" value="Send Message">
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- Ajax response-->
                    <div class="ajax-response text-center" id="contact-response"></div>
                </div>
            </div>
        </div>
    </section>
@endsection