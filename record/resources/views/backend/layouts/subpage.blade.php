<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
  </head>
  <body>
 <!-- ======= Header ======= -->
  @include('backend.includes.header')
 <!-- ======= End Header ======= -->

          @yield('content')
          
           <!-- ======= Footer ======= -->
          @include('backend.includes.footer')
           <!-- ======= End Footer ======= -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.pie.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>