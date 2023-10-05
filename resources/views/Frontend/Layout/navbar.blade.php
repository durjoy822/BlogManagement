<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class='navbar-brand' href='index.html'><img src="{{asset($settings->light_logo)}}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="main_nav">
            <div class=" pull-right hidden-xs hidden-sm">
                <ul class="nav social-links navbar-nav">
                    <li><a href="{{$settings->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$settings->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$settings->instagram_link}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{$settings->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="{{$settings->google_plus_link}}"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    <li class="bg-info"><a href="{{route('user.auth')}}"><i class="fa fa-user text-danger " aria-hidden="true"></i></a></li>


                </ul>

            </div>
            <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{route('home')}}" >Home </a></li>
                    <li><a href="{{route('home')}}" >All blog category </a>
						<ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a href='{{route('blog.category',['id'=>$category->id])}}'>{{$category->name}}</a></li>
                            @endforeach
						</ul>
					</li>
                </li>

                {{-- <li><a href='{{route('blog.details')}}'>post</a></li> --}}

                <li><a href='{{route('contact')}}'>contact</a></li>


            </ul>
        </div>

    </div>
</nav>
