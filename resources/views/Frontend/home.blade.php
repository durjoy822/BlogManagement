@extends('Frontend.Layout.master')
@section('title')
Home
@endsection
@section('content')
<div class="clearfix"></div>
	<div class="slider container">
		<div class="featured-area">

			<div class="owl-carousel owl-theme">
            @foreach ($posts as $post)
				<div class="feat-item item">
					<img src='{{asset($post->thumbnail)}}' alt="slide 1" style="width:284 px; height:350px ">
					<div class="feat-overlay">
						<div class="feat-inner">

							<h2><a href="single-post.html">{{$post->title}}</a></h2>
							<a href="#" class="feat-more">read more</a>
						</div>
					</div>

				</div>
            @endforeach
			</div> <!-- End owl-carousel -->
		</div> <!-- End featured-area -->
	</div><!-- End slider -->
	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- Post -->
                    @foreach ( $posts as $post)
                    <article class="post">
						<header>
                            <div class="title">
                                <p >category: {{$post->Category->name}}</p>
								<h2><a href="single-post.html">{{$post->title}}</a></h2>
								<p>{!!$post->summary!!}</p>
							</div>
							<div class="meta">
								<time class="published" datetime="2017-01-14">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</time>
								<a href="#" class="author"><span class="name">{{$post->creator}}</span><img src="{{asset($creator->image)}}" alt="" /></a>
							</div>
						</header>
						<a href="{{route('blog.details', ['id'=>$post->id])}}" class="image featured"><img src="{{asset($post->thumbnail)}}" alt="" /></a>
						<p>{{ substr($post->content, 0, 300)}}..</p>
						<footer>
							<ul class="actions">
								<li><a href="{{route('blog.details',['id'=>$post->id])}}" class="button big">Continue Reading</a></li>
							</ul>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon fa fa-heart">28</a></li>
								<li><a href="#" class="icon fa fa-comment">128</a></li>
							</ul>
						</footer>
					</article>
                    @endforeach


					<!-- Pagination here  -->

					 <div class="blog-pagination numeric-pagination clearfix ">
                                <div class="px-4">{{ $posts ->links("pagination::bootstrap-5") }}</div>
                        </div>
				</div>
                 <!-- End col-8 -->

				<div class="col-md-4">
					<div class="sidebar" id="sidebar">
						<!-- About -->
						<section class="blurb">
							<h2 class="title">ABOUT ME</h2>

							<a href="single-post.html" class="image"><img class="img-responsive" src="{{asset('Frontend')}}/6bd1c010c306435cc65f24db8d1b3aea1a594034/e4ead/images/aboutme.jpg" alt="about me" /></a>
							<div class="author-widget">
								<h4 class="author-name">Catherine Doe</h4>
								<p>Mauris adsfsdfa dfasdfasf afsdasdf neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
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
						<section class="category " style="margin: 50px 0px">
							<h2 class="title">Categories</h2>
                            <ul>
                                <li class="category" >
                                    @foreach ($categories as $category )
                                    <h6>
                                       <a href="">
                                        <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                        {{$category->name}}
                                       </a>
                                       <span class="text-danger"> &nbsp;(08)</span>
                                    </h6>
                                    @endforeach
                                <li class="category" >
                                    <h6>
                                       <a href=""> <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                      Audio
                                       </a>
                                       <span class="text-danger"> &nbsp;(08)</span>
                                    </h6>
                                </li>
                                <li class="category" >
                                    <h6>
                                       <a href=""> <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                      Video
                                       </a>
                                       <span class="text-danger"> &nbsp;(08)</span>
                                    </h6>
                                </li>
                            </ul>
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

					</div>
                     <!-- End Sidebar -->
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
