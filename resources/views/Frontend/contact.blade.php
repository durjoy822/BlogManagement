@extends('Frontend.Layout.master')
@section('title')
   contact
@endsection
@section('content')
    <div id="main" class="top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--////////////////////////////////////Container-->
                    <div id="container">
                        <div class="wrap-container">
                            <!-- Content-Box -->
                            <section class="content-box contact-form">
                                <div class="row wrap-box"><!--Start Box-->
                                    <h3 class="text-center">Contact Form</h3>
                                    <div class="contact-form ">
                                        <form action="{{route('message.store')}}" id="contactForm" method="post" >
                                            @csrf
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-left">
                                                <div class="form-group">
                                                    <input name="name" id="name" type="text" placeholder="Name"
                                                        required="required" />

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-right">
                                                <div class="form-group">
                                                    <input id="email" name="email" type="email" placeholder="Email"
                                                        required="required" />

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad-right">
                                                <div class="form-group">
                                                    <input id="subject" name="subject" type="text" placeholder="Subject"
                                                        required="required" />

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                <div class="form-group">
                                                    <textarea name="message" name="message" id="message" placeholder="Message" required></textarea>

                                                </div>
                                                <div id="success"></div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                                <div class="form-group contactus-btn">
                                                    <button type="submit" class="cntct-btn"> Send Message </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div> <!-- End col-8 -->

                <div class="col-md-4">
                    <div class="sidebar" id="sidebar">
                        <!-- About -->
                        <section class="blurb">
                            <h2 class="title">ABOUT ME</h2>

                            <a href="single-post.html" class="image"><img class="img-responsive"
                                    src="{{asset('Frontend')}}/6bd1c010c306435cc65f24db8d1b3aea1a594034/e4ead/images/aboutme.jpg"
                                    alt="about me" /></a>
                            <div class="author-widget">
                                <h4 class="author-name">Catherine Doe</h4>
                                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id
                                    lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at
                                    phasellus sed ultricies.</p>
                            </div>
                            <div class="social">
                                <ul class="icons">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-soundcloud"></i> </a></li>

                                </ul>
                            </div>
                        </section>
                    </div> <!-- End Sidebar -->
                </div><!-- End-col-md-4 -->
            </div><!-- End-col-md-4 -->
        </div> <!-- End row -->
    </div>
    <!-- End Container -->
@endsection
