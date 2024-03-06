<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>
<body>
@include('front.layout.navbar')
    @yield('content')
@include('front.layout.script')
@include('front.layout.footer')
</body>
</html>
