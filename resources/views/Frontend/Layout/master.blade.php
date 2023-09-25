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

	<script src='{{asset('Frontend')}}/bundles/91ba43600f7f89a977bde9e658a693a2235799cb.js'></script>

			<script type="text/javascript">
		// Slider
		jQuery('.owl-carousel').owlCarousel({
			loop:true,
			autoplay:true,
			margin:10,
			nav:true,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsiveClass: true,
			items:1,
			dots:false,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2
				}
			}
		});
     </script>


</body>

<!-- Mirrored from brief-demo.netlify.app/home-2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:10:44 GMT -->
</html>
