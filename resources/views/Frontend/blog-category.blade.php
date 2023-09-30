@extends('Frontend.Layout.master')
@section('title')
blog-category
@endsection
@section('content')

<div id="main" style="margin-top:14px">
    <div class="container">
        <div class="row post " style="margin: 0px ; padding:20px 0px" >
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body  " style="padding-left: 19px;">
                        <h6>
                          <span> Home</span>
                          <i class="fa fa-forward" aria-hidden="true"></i>
                            <span>All video</span>
                        </h6>
                        @foreach ($postCategories as  $postCategory  )

                        <h2 >Blog  Category: <span class="text-danger btn btn-primary"> {{$postCategory ->Category->name}}</span> </h2>
                        @endforeach
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="single-post.html">women camping hiking travel</a></h2>
                            <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">November 1, 2017</time>
                            <a href="#" class="author"><span class="name">CATHERINE DOE</span><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                        </div>
                    </header>
                    <a href="single-post.html" class="image featured"><img src="{{asset('Frontend')}}/4bf284e26c018f9425f060084cc646b882907e4e/3352b/images/large-post01.jpg" alt="" /></a>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="single-post.html" class="button big">Continue Reading</a></li>
                        </ul>
                        <ul class="stats">
                            <li><a href="#">General</a></li>
                            <li><a href="#" class="icon fa fa-heart">28</a></li>
                            <li><a href="#" class="icon fa fa-comment">128</a></li>
                        </ul>
                    </footer>
                </article>

                <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="single-post.html">2 girls hugging each other outdoor during daytime</a></h2>
                            <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">October 25, 2017</time>
                            <a href="#" class="author"><span class="name">CATHERINE DOE</span><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                        </div>
                    </header>
                    <a href="single-post.html" class="image featured"><img src="{{asset('Frontend')}}/263ef793f330f075186494191143906f24533639/e97d5/images/large-post02.jpg" alt="" /></a>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="single-post.html" class="button big">Continue Reading</a></li>
                        </ul>
                        <ul class="stats">
                            <li><a href="#">General</a></li>
                            <li><a href="#" class="icon fa fa-heart">28</a></li>
                            <li><a href="#" class="icon fa fa-comment">128</a></li>
                        </ul>
                    </footer>
                </article>

                <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="single-post.html">food salad Healthy lunch</a></h2>
                            <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">October 22, 2017</time>
                            <a href="#" class="author"><span class="name">CATHERINE DOE</span><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                        </div>
                    </header>
                    <a href="single-post.html" class="image featured"><img src="{{asset('Frontend')}}/6e75c3fb673d0bb8be79c701b4929c1fc15c24eb/21746/images/large-post03.jpg" alt="" /></a>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="single-post.html" class="button big">Continue Reading</a></li>
                        </ul>
                        <ul class="stats">
                            <li><a href="#">General</a></li>
                            <li><a href="#" class="icon fa fa-heart">28</a></li>
                            <li><a href="#" class="icon fa fa-comment">128</a></li>
                        </ul>
                    </footer>
                </article>
                <!-- Pagination -->
                 <div class="blog-pagination numeric-pagination clearfix">
                        <ul class="pagination  ">
                          <li><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                        <div class="page-count pull-right">
                          <span>Page 1 of 12</span>
                        </div>
                    </div>
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
                                    <time class="published" datetime="2017-01-14">October 20, 2017</time>
                                    <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                </header>
                                <a href="#" class="image"><img src="{{asset('Frontend')}}/9f7b8cddc227ce575e95a5e0e8036d2affa7bd61/4c6fd/images/side-post01.jpg" alt="" /></a>
                            </article>

                            <!-- Mini Post -->
                            <article class="mini-post">
                                <header>
                                    <h3><a href="#">Rutrum neque accumsan</a></h3>
                                    <time class="published" datetime="2017-01-14">October 19, 2017</time>
                                    <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                </header>
                                <a href="#" class="image"><img src="{{asset('Frontend')}}/2ddeb695c93f356c216e80357c3c7053c714e8e3/f5240/images/side-post02.jpg" alt="" /></a>
                            </article>

                            <!-- Mini Post -->
                            <article class="mini-post">
                                <header>
                                    <h3><a href="#">Odio congue mattis</a></h3>
                                    <time class="published" datetime="2017-01-14">October 18, 2017</time>
                                    <a href="#" class="author"><img src="{{asset('Frontend')}}/0ec005ed0443e9a8d1c16f2bccbc9c76cb66e0f5/aaa2d/images/author-avatar.png" alt="" /></a>
                                </header>
                                <a href="#" class="image"><img src="{{asset('Frontend')}}/e0cd1cb786eea86edcefa4d134a4e8db0bad9f8b/51722/images/side-post03.jpg" alt="" /></a>
                            </article>

                            <!-- Mini Post -->
                            <article class="mini-post">
                                <header>
                                    <h3><a href="#">Vitae sed condimentum</a></h3>
                                    <time class="published" datetime="2017-01-14">October 20, 2017</time>
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
                                        <time class="published" datetime="2017-01-14">October 20, 2017</time>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/36ce118d10e6ec7d10650942d388d5c0fd108b08/e0b11/images/small-side-post01.jpg" alt="" /></a>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <header>
                                        <h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
                                        <time class="published" datetime="2017-01-14">October 15, 2017</time>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/75de56c7f92e6948888a18d482137ceb4d05abc9/56abd/images/small-side-post02.jpg" alt="" /></a>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <header>
                                        <h3><a href="#">green and white convertible coupe on day time</a></h3>
                                        <time class="published" datetime="2017-01-14">October 10, 2017</time>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/684b1b28d633e9544cb5f26bf92d7f6f7d9e59df/d48b1/images/small-side-post03.jpg" alt="" /></a>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <header>
                                        <h3><a href="#">green and white convertible coupe on day time</a></h3>
                                        <time class="published" datetime="2017-01-14">October 10, 2017</time>
                                    </header>
                                    <a href="#" class="image"><img src="{{asset('Frontend')}}/eaf0d42e8a129f20c1bdc9a2ba4ba29cd20fedbb/09583/images/small-side-post04.jpg" alt="" /></a>
                                </article>
                            </li>
                        </ul>
                    </section>

                </div> <!-- End Sidebar -->
            </div><!-- End-col-md-4 -->
        </div> <!-- End row -->
    </div> <!-- End Container -->
    <div id="instagram-footer">
    </div>

    <!--back-to-top-->

    <div id="back-to-top">
        <a href="#top"><i class="fa fa-arrow-up"></i></a>
    </div>


</div>
@endsection
