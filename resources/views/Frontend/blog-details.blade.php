@extends('Frontend.Layout.master')
@section('title')
blog-details
@endsection
@section('content')
<div id="main" class="top-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="#">women camping hiking travel</a></h2>
                            <p>Leo reco dolor amet nullam consequat etiam feugiat</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">November 1, 2017</time>
                            <a href="#" class="author"><span class="name">CATHERINE DOE</span><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                        </div>
                    </header>
                    <div class="image featured"><img src="{{asset('Frontend')}}/4bf284e26c018f9425f060084cc646b882907e4e/3352b/images/large-post01.jpg" alt="" /></div>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl.
                        Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
                        ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.
                        Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                        <div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
                        <p>Leo reco dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        <blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Leo reco dolor sit amet vultatup duista.</p></blockquote>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
                        <h2>Heading 1</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipLeo reco dolor sit amet.</p>
                        <h2>Heading 2</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
                        <h2>Heading 3</h2>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
                        <p>Leo reco dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        <p><code>Stet clita kasd gubergren, no sea takimata sanctus est Leo reco dolor sit amet.</code></p>
                        <p>Leo reco dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Leo reco dolor sit amet.</p>
                        <div class="note">
                            <ol>
                                <li>Leo reco</li>
                                <li>Sit amet vultatup nonumy</li>
                                <li>Duista sed diam</li>
                            </ol>
                            <div class="clear"></div>
                        </div>

                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>

                        <footer>

                            <div class="social actions">
                                <ul class="icons">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i> </a></li>


                                </ul>
                            </div>

                            <ul class="stats">
                                <li><a href="#">General</a></li>
                                <li><a href="#" class="icon fa fa-heart">28</a></li>
                                <li><a href="#" class="icon fa fa-comment">128</a></li>
                            </ul>
                        </footer>
                    </article>


                    <!-- Pagination -->
                    <ul class="actions pagination">
                        <li><a href="#" class="disabled button big previous">Previous Post</a></li>
                        <li><a href="#" class="button big next">Next Post</a></li>
                    </ul>
                    <div class="post-related post-block">
                        <h4 class="heading"><span>You Might Also Like</span></h4>
                        <div class="related">
                            <ul class="row">
                                <li class="item col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumb">
                                        <a href="#"><img src="{{asset('Frontend')}}/b80bf8a16f6952a0c64caf5345af0d780ac015a7/24884/images/relate-post01.jpg" alt="post relate"></a>
                                    </div>
                                    <h5 class="item-title">
                                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                                    </h5>
                                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumb">
                                        <a href="#"><img src="{{asset('Frontend')}}/6ffdc87e6e6ae9755ed06acc494ac797359ce963/5c1d1/images/relate-post02.jpg" alt="post relate"></a>
                                    </div>
                                    <h5 class="item-title">
                                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                                    </h5>
                                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                                </li>
                                <li class="item col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumb">
                                        <a href="#"><img src="{{asset('Frontend')}}/63e1192cba590ec85d1c090bffec7a3bf4dbbe74/cda41/images/relate-post03.jpg" alt="post relate"></a>
                                    </div>
                                    <h5 class="item-title">
                                        <a href="#">Seitan High Life reprehenderit consectetur cupidatat kogi</a>
                                    </h5>
                                    <time class="published" datetime="2017-10-06">October 7, 2017</time>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Blog Comments Begins -->
                    <div class="blog-comments">
                        <div class="blog-comment-main">
                            <h3>4 Comments</h3>
                            <div class="blog-comment">
                                <a class="comment-avtar"><img src="{{asset('Frontend')}}/8955e4aaceaa05ec35ff65521af5363b5ad32973/ab4ee/images/avtar-comment.jpg" alt="image"></a>
                                <div class="comment-text">
                                    <h3>CATHERINE DOE</h3>
                                    <h5>Avril 13, 2017 at 21:11 am</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                    <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                                <div class="blog-comment clearfix">
                                    <a class="comment-avtar"><img src="{{asset('Frontend')}}/8955e4aaceaa05ec35ff65521af5363b5ad32973/ab4ee/images/avtar-comment.jpg" alt="image"></a>
                                    <div class="comment-text">
                                        <h3>Edward Doe</h3>
                                        <h5>Avril 13, 2017 at 21:11 am</h5>
                                        <p>using Lorem IpLeo reco is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <a class="comment-avtar"><img src="{{asset('Frontend')}}/8955e4aaceaa05ec35ff65521af5363b5ad32973/ab4ee/images/avtar-comment.jpg" alt="image"></a>
                                <div class="comment-text">
                                    <h3>CATHERINE DOE</h3>
                                    <h5>Avril 13, 2017 at 21:11 am</h5>
                                    <p>packages and web page editors now use Lorem IpLeo reco as their default model text, and a search for 'lorem ipLeo reco' will uncover many web site</p>
                                    <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                                <div class="blog-comment clearfix">
                                    <a class="comment-avtar"><img src="{{asset('Frontend')}}/8955e4aaceaa05ec35ff65521af5363b5ad32973/ab4ee/images/avtar-comment.jpg" alt="image"></a>
                                    <div class="comment-text">
                                        <h3>Edward Doe</h3>
                                        <h5>Avril 13, 2017 at 21:11 am</h5>
                                        <p>packages and web page editors now use Lorem IpLeo reco as their default model text, and a search for 'lorem ipLeo reco' will uncover many web site</p>
                                        <a href="javascript:void(0)" class="comment-reply"> Reply <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Pagination Ends -->
                    <!-- Blog Contact Form Begins -->
                    <div class="contact-form pad-top-big pad-bottom-big">
                        <h3>Leave A Reply</h3>
                        <form>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-left">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-right">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="form-group">
                                    <textarea placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="form-group contactus-btn">
                                    <a href="javascript:void(0)" class="cntct-btn"> Post Comment </a>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

                        </div>
                    </div>
                    <!-- Blog Contact Form Ends -->

                </div> <!-- End col-8 -->

                <div class="col-md-4">
                    <div class="sidebar" id="sidebar">
                        <!-- About -->
                        <section class="blurb">
                            <h2 class="title">ABOUT ME</h2>

                            <a href="single-post.html" class="image"><img class="img-responsive" src="{{asset('Frontend')}}/6bd1c010c306435cc65f24db8d1b3aea1a594034/e4ead/images/aboutme.jpg" alt="about me" /></a>
                            <div class="author-widget">
                                <h4 class="author-name">Catherine Doe</h4>
                                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
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

                        <!-- Mini Posts -->
                        <section>
                            <h2 class="title">POPULAR POSTS</h2>
                            <div class="mini-posts">

                                <!-- Mini Post -->
                                <article class="mini-post">
                                    <header>
                                        <h3><a href="#">Vitae sed condimentum</a></h3>
                                        <time class="published" datetime="2017-10-20">October 20, 2017</time>
                                        <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/9f7b8cddc227ce575e95a5e0e8036d2affa7bd61/4c6fd/images/side-post01.jpg" alt="" /></a>
                                </article>

                                <!-- Mini Post -->
                                <article class="mini-post">
                                    <header>
                                        <h3><a href="#">Rutrum neque accumsan</a></h3>
                                        <time class="published" datetime="2017-10-19">October 19, 2017</time>
                                        <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/2ddeb695c93f356c216e80357c3c7053c714e8e3/f5240/images/side-post02.jpg" alt="" /></a>
                                </article>

                                <!-- Mini Post -->
                                <article class="mini-post">
                                    <header>
                                        <h3><a href="#">Odio congue mattis</a></h3>
                                        <time class="published" datetime="2017-10-18">October 18, 2017</time>
                                        <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/e0cd1cb786eea86edcefa4d134a4e8db0bad9f8b/51722/images/side-post03.jpg" alt="" /></a>
                                </article>

                                <!-- Mini Post -->
                                <article class="mini-post">
                                    <header>
                                        <h3><a href="#">Vitae sed condimentum</a></h3>
                                        <time class="published" datetime="2017-10-20">October 20, 2017</time>
                                        <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/9f7b8cddc227ce575e95a5e0e8036d2affa7bd61/4c6fd/images/side-post01.jpg" alt="" /></a>
                                </article>
                            </div>
                        </section>
                        <!-- Posts List -->
                        <section>
                            <h2 class="title">LATEST POSTS</h2>
                            <ul class="posts">
                                <li>
                                    <article>
                                        <header>
                                            <h3><a href="#">adventure cliffs climb climber</a></h3>
                                            <time class="published" datetime="2017-10-20">October 20, 2017</time>
                                        </header>
                                        <a href="#" class="image"><img src="{{asset('Frontend')}}/36ce118d10e6ec7d10650942d388d5c0fd108b08/e0b11/images/small-side-post01.jpg" alt="" /></a>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <header>
                                            <h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
                                            <time class="published" datetime="2017-10-15">October 15, 2017</time>
                                        </header>
                                        <a href="#" class="image"><img src="{{asset('Frontend')}}/75de56c7f92e6948888a18d482137ceb4d05abc9/56abd/images/small-side-post02.jpg" alt="" /></a>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <header>
                                            <h3><a href="#">green and white convertible coupe on day time</a></h3>
                                            <time class="published" datetime="2017-10-10">October 10, 2017</time>
                                        </header>
                                        <a href="#" class="image"><img src="{{asset('Frontend')}}/684b1b28d633e9544cb5f26bf92d7f6f7d9e59df/d48b1/images/small-side-post03.jpg" alt="" /></a>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <header>
                                            <h3><a href="#">green and white convertible coupe on day time</a></h3>
                                            <time class="published" datetime="2017-10-10">October 10, 2017</time>
                                        </header>
                                        <a href="#" class="image"><img src="{{asset('Frontend')}}/eaf0d42e8a129f20c1bdc9a2ba4ba29cd20fedbb/09583/images/small-side-post04.jpg" alt="" /></a>
                                    </article>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <div class="widget HTML">
                                <h2 class="title">INSTGRAM</h2>
                                <div class="widget-content">
                                    <div class="instagram-feeds row-gallery">
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/42cd81bc6fdf02b168a6c7731d6d41614c096b42/e5a9a/images/instagram01.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/2be5117f0f8791105eaa8f6225940dc85de3d501/05e6b/images/instagram02.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/c4b5d84463de168990caf785b476171e2933bbe7/2ec3b/images/instagram03.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/2a98d70ce3ed39151b234625df6e89fdf723ed34/06daf/images/instagram04.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/434639103b5df129424f68274416a82923e2a1b9/d319f/images/instagram05.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/a33e2f5ca15a1a696a91663f30a66f33867114d4/7a887/images/instagram06.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/e3c5b50e266fd4d6371d64136ca97e0c194a807e/ef3f4/images/instagram07.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/ae08e2764ca18872d1665a7608bbaeacb6e54797/0858e/images/instagram08.jpg" alt="Instagram Image"></a>
                                        <a href="#" class="col-sm-4 col-xs-3"><img src="{{asset('Frontend')}}/42cd81bc6fdf02b168a6c7731d6d41614c096b42/ee714/images/instagram09.jpg" alt="Instagram Image"></a>
                                    </div>
                                </div>
                            </div>
                        </section> <!-- End inta -->

                    </div> <!-- End Sidebar -->
                </div><!-- End-col-md-4 -->
            </div><!-- End-col-md-4 -->
        </div> <!-- End row -->
    </div> <!-- End Container -->
@endsection
