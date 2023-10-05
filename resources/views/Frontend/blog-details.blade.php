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
                            <p>Category: {{$postDetails->Category->name}}</p>
                            <h2><a href="#">{{$postDetails->title}}</a></h2>
                            <p>{!!$postDetails->summary!!}</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2017-01-14">{{ \Carbon\Carbon::parse($postDetails->created_at)->format('F j, Y') }}</time>
                            <a href="#" class="author"><span class="name">{{$postDetails->creator}}</span><img src="{{asset($creator->image)}}" alt="" /></a>
                        </div>
                    </header>
                    <div class="image featured"><img src="{{asset($postDetails->thumbnail)}}" style="width:284 px; height:350px " alt="" /></div>
                        <div>
                            {!!$postDetails->content!!}
                        </div>
                        <footer>

                            <ul class="stats">
                                <li><a href="#">General</a></li>
                                <li><a href="#" class="icon fa fa-heart">28</a></li>
                                <li><a href="#" class="icon fa fa-comment">128</a></li>
                            </ul>
                        </footer>
                    </article>
                    <div class="post-related post-block">
                        <h4 class="heading"><span>You Might Also Like</span></h4>
                        <div class="related">
                            <ul class="row">
                                @foreach ($LatestPosts as $post )
                                <li class="item col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumb">
                                        <a href="{{route('blog.details',$post->id)}}"><img src="{{asset($post->thumbnail)}}" style="height: 157px" alt="post relate"></a>
                                    </div>
                                    <h5 class="item-title">
                                        <a href="{{route('blog.details',$post->id)}}">{{$post->title}}</a>
                                    </h5>
                                    <time class="published" datetime="2017-10-06">
                                        {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                                    </time>
                                </li>
                                @endforeach
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
            </div><!-- End-col-md-4 -->
        </div> <!-- End row -->
    </div> <!-- End Container -->
@endsection
