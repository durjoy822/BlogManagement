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
							<a href="{{route('blog.details',$post->id)}}" class="feat-more">read more</a>
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
								<h2><a href="{{route('blog.details', ['id'=>$post->id])}}">{{$post->title}}</a></h2>
								<p>{!!$post->summary!!}</p>
							</div>
							<div class="meta">
								<time class="published" datetime="2017-01-14">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</time>
								<a href="#" class="author"><span class="name">{{$post->creator}}</span><img src="{{asset($creator->image)}}" alt="" /></a>
							</div>
						</header>
						<a href="{{route('blog.details', ['id'=>$post->id])}}" class="image featured"><img style="height:300px" src="{{asset($post->thumbnail)}}" alt="" /></a>
						<p>{!! substr($post->content, 0, 300)!!}..</p>
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
						<section class="category " >
							<h2 class="title">Categories</h2>
                            <ul>
                                <li class="category" >
                                    @foreach ($categories as $category )
                                    <h6>
                                       <a href="{{route('blog.category',$category->id)}}">
                                        <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                        {{$category->name}}
                                       </a>
                                       <span class="text-danger"> &nbsp;(08)</span>
                                    </h6>
                                    @endforeach
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
                                @foreach ($LatestPosts as  $post)
								<li>
									<article>
										<header>
											<h3><a href="{{route('blog.details',$post->id)}}">{{$post->title}}</a></h3>
											<time class="published" datetime="2017-01-14">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</time>

										</header>
										<a href="{{route('blog.details',$post->id)}}" class="image"><img src="{{asset($post->thumbnail)}}" alt="" /></a>
									</article>
								</li>
                                @endforeach
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
