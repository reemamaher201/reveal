<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reveal Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('site/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('site/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('site/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('site/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

    <!--==========================
    Top Bar
  ============================-->
    @include('parts.TopBar')

    <!--==========================
    Header
  ============================-->
    @include('parts.header')
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2>Making <span>your ideas</span><br>happen!</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
            </div>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url({{ asset('site/img/intro-carousel/1.jpg') }});"></div>
            <div class="item" style="background-image: url({{ asset('site/img/intro-carousel/2.jpg') }});"></div>
            <div class="item" style="background-image: url({{ asset('site/img/intro-carousel/3.jpg') }});"></div>
            <div class="item" style="background-image: url({{ asset('site/img/intro-carousel/4.jpg') }});"></div>
            <div class="item" style="background-image: url({{ asset('site/img/intro-carousel/5.jpg') }});"></div>
        </div>

    </section><!-- #intro -->

    <main id="main">

        @yield('content')

    </main>

    <!--==========================
    Footer
  ============================-->
    @include('parts.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('site/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('site/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('site/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('site/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('site/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/lib/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/lib/sticky/sticky.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('site/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('site/js/main.js') }}"></script>

</body>

</html>
