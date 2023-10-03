<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>hightech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
      <!-- responsive-->
      <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('frontend/images/loading.gif')}}" alt="" /></div>
      </div>
      <!-- end loader -->

      
      <!-- header -->
      @include('frontend.includes.header')
      <!-- end header -->


      <!-- start slider section -->
      <!-- @include('frontend.includes.slide') -->
      <!-- end slider section -->


      <!-- we_do -->
      @include('frontend.includes.we')
      <!-- end we_do -->


      <!-- about -->
      @include('frontend.includes.about')
      <!-- end about -->


      <!-- portfolio -->
      @include('frontend.includes.portimage')
      <!-- end portfolio -->
  

      <!-- contact -->
      @include('frontend.includes.contact')
      <!-- contact -->


      <!-- footer -->
      @include('frontend.includes.footer')
      <!-- end footer -->


      <!-- Javascript files-->
      <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('frontend/js/custom.js')}}"></script>
   </body>
</html>