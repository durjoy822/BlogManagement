@extends('Frontend.Layout.master')
@section('title')
blog-category
@endsection
@section('content')
<style>
    .post_count{

    }
</style>
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
                        <h2 >Blog  Category: <span class="text-danger btn btn-primary"> {{$category->name}}</span> </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- Post -->
                @if ($posts->count()==null)
                <h2 class="text-danger post_count text-center" style="padding: 53px 0px">Category post not found!</h2>
                @else
                @foreach ($posts as $post )
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="{{route('blog.details',['id'=>$post->id])}}">{{$post->title}}</a></h2>
                            <p>{!! $post->summary!!}</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</time>
                            <a href="#" class="author"><span class="name">{{$post->creator}}</span><img src="{{asset($creator->image)}}" alt="" /></a>
                        </div>
                    </header>
                    <a href="{{route('blog.details',['id'=>$post->id])}}" class="image featured"><img src="{{asset($post->thumbnail)}}" style="height:300px" alt="" /></a>
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
                @endif


                <!-- Pagination -->
                <div class="blog-pagination numeric-pagination clearfix ">
                    <div class="px-4">{{ $posts ->links("pagination::bootstrap-5") }}</div>
            </div>
            </div> <!-- End col-8 -->

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
