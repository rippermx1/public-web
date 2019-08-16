@extends('layouts.app')

@section('main')
    <!-- Main Wrapper start -->
    <main>
        <!-- Hero start -->
        <section id="hero">
            <div class="hero-area hero-overlay-bg h2-hero-bg pos-rel" data-background="img/hero/h2-slider-bg-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="breadcrumb-caption">
                                <h2>Contact</h2>
                                <ul class="list-inline">
                                    <li class="from-page-name">Home -</li>
                                    <li class="page-name"><a class="page-name-link" href="about.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end -->
        <!-- contact us start -->
        <div class="contacts-map">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-sm-12">
                        <map name="#">
                            <img class="img" src="img/map/map.jpg" alt="">
                        </map>
                    </div>
                </div>
            </div>
            <div class="container pt-50 pb-55">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contacts-widget mb-30">
                            <h2 class="contact-title">Contact with us:</h2>
                            <span>For support or any question: <br>
                                    Email us at support@xilo.com</span>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="contacts-widget contacts-widget-2">
                            <h2 class="contact-title">Xilo Studio, USA</h2>
                            <span>501 Sliverside Road, Suite 105, <br>
                                    Wilmington, Delaware 19809 <br>
                                    USA</span>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="contacts-widget contacts-widget-2">
                            <h2 class="contact-title">Xilo Studio, UK</h2>
                            <span>B-222, First Floor, <br>
                                    Okhla Industrial Area, Phase-1 <br>
                                    New Delhi in - 110020</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form-area">
                            <h2>Get In Touch</h2>
                            <span>Please Call <strong>+1993755 93 41</strong> if you urgent</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                        <form id="contacts-form" class="conatct-post-form mb-40" action="#">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-icon contacts-name">
                                        <input type="text" placeholder="Your Name.... ">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-icon contacts-email">
                                        <input type="email" placeholder="Your Email....">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-icon contacts-message">
                                            <textarea name="comments" id="comments" cols="30" rows="10"
                                                      placeholder="Your Comments...."></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="btn btn-bg-salmon" type="submit">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact us end -->
    </main>
    <!-- Main Wrapper end -->
@endsection