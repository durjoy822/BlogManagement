<!-- Core JS -->
    <!-- build:js {{asset('Admin')}}/assets/vendor/js/core.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{asset('Admin')}}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('Admin')}}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('Admin')}}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('Admin')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset('Admin')}}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('Admin')}}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{asset('Admin')}}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{asset('Admin')}}/assets/js/dashboards-analytics.js"></script>

     <!-- for login Page  -->
     <link rel="stylesheet" href="{{asset('Admin')}}/assets/vendor/css/pages/page-auth.css" />
     <!-- for login page Helpers -->
     <script src="{{asset('Admin')}}/assets/vendor/js/helpers.js"></script>
     <!--toster-->
     <script src="{{asset('Admin')}}/assets/js/ui-toasts.js"></script>
     <!--toster cdn-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     <script>
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





