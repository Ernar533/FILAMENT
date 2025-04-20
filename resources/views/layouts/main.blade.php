<html lang="en"><head>
    <title>{{config('seo.title')}} @if (isset($pageTitle)) | {{$pageTitle}}  @endif </title>
    <meta name="description" content="{{config('seo.description')}}  @if (isset($pageTitle)) | {{$pageTitle}}  @endif ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/advanced.css">
  <style type="text/css" id="operaUserStyle"></style></head>
  <body>
    

    <div class="wrap">

     @include('blocks.header')

     <section class="site-section pt-5">
        <div class="container">
            @yield('content')
        </dev>
    </section>

    @include('blocks.footer')
      
    
    </div>
    
    <!-- loader -->
    <div id="loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"></circle></svg></div>

    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/jquery.stellar.min.js"></script>

    
    <script src="/assets/js/main.js"></script>
  
</body></html>