<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/prettyphoto/css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/hover/hoverex-all.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @yield('css')

    <!-- =======================================================
      Template Name: Solid
      Template URL: https://templatemag.com/solid-bootstrap-business-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>

<!-- Fixed navbar -->
@include('includes.navbar')

@yield('content')

<!-- *****************************************************************************************************************
   FOOTER
   ***************************************************************************************************************** -->
@include('includes.footer')

<div id="copyrights">
    <div class="container">
        <p>
            &copy; Copyrights <strong>Solid</strong>. All Rights Reserved
        </p>
        <div class="credits">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/solid-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            Created with Solid template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
    </div>
</div>
<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/lib/php-mail-form/validate.js') }}"></script>
<script src="{{ asset('assets/lib/prettyphoto/js/prettyphoto.js') }}"></script>
<script src="{{ asset('assets/lib/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('assets/lib/hover/hoverdir.js') }}"></script>
<script src="{{ asset('assets/lib/hover/hoverex.min.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('js')

</body>
</html>
