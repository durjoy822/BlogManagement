<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class='navbar-brand' href='index.html'><img src="{{asset('Frontend')}}/10fb8ea3421c6fbf36315e0dad88ec2e1d9ac693/3aee6/images/logo.png" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="main_nav">
            <div class=" pull-right hidden-xs hidden-sm">
                <ul class="nav social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>

            </div>
            <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{route('home')}}" >Home </a></li>
                    <li><a href="{{route('home')}}" >All blog category </a>
						<ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a href='{{route('blog.category')}}'>{{$category->name}}</a></li>
                            @endforeach
						</ul>
					</li>
                </li>
                <li><a href='{{route('blog.category')}}'>Audio</a></li>
                <li><a href='{{route('blog.category')}}'>Video</a></li>

                {{-- <li><a href='{{route('blog.details')}}'>post</a></li> --}}

                <li><a href='{{route('contact')}}'>contact</a></li>

            </ul>
        </div>
    </div>
</nav>
