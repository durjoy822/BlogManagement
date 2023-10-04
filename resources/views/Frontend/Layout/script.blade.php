<!--page js-->
<script src='{{asset('Frontend')}}/bundles/91ba43600f7f89a977bde9e658a693a2235799cb.js'></script>

<!--toster cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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


        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('success') }}");
        @endif
            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
            @if(Session::has('login'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("{{ session('login') }}");
        @endif


     </script>
