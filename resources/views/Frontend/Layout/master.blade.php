@include('Frontend.Layout.head')
<body >


	<!-- preloader -->
	<div id="preloader">
		<div id="status"> <img src="{{asset('Frontend')}}/27559686edc48f7274c7120f7c51cf802078cf6e/940ca/images/preloader.gif" height="64" width="64" alt=""> </div>
	</div>


	<!--Navigation-->
	@include('Frontend.Layout.navbar')
	<!-- End navigation -->


	<!-- Slider -->
	@yield('content')
    <!-- End Main -->
    @include('Frontend.Layout.footer')

    <!--script-->
    @include('Frontend.layout.script')

	


</body>

<!-- Mirrored from brief-demo.netlify.app/home-2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:10:44 GMT -->
</html>
