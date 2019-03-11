<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <style media="screen">
  </style>

  @yield('css')
  <script src="js/modernizr-2.7.1.js"></script>

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="/favicon.ico">
</head>

<body>
  @include('includes.nav')
  <!-- END nav -->

  @yield('content')

  @include('includes.footer')





    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      new WOW().init();
      $(document).ready(function(){
       $("a").on('click', function(event) {
         if (this.hash !== "") {
           event.preventDefault();
           var hash = this.hash;
           $('html, body').animate({
             scrollTop: $(hash).offset().top
           }, 700, function(){
             window.location.hash = hash;
           });
         }
       });
      });
    </script>
    @yield('js')
    <script type="text/javascript">
    $(document).ready(function(){
    var scrollTop = 0;
    if($(window).width()<=770){
      $('#nav').addClass('unscroll');
      $('#logo-w').addClass('logo-w');
    }
    $(window).scroll(function(){
      scrollTop = $(window).scrollTop();
       $('.counter').html(scrollTop);
      if (scrollTop >= 200) {
        $('#nav').addClass('unscroll');
        $('#logo-w').addClass('logo-w');
      } else if (scrollTop < 200) {
        if($(window).width()>770){
          $('#nav').removeClass('unscroll');
          $('#logo-w').removeClass('logo-w');
        }

      }
    });
    });
    </script>
    <script>
    function dropdown() {
      document.getElementById("childDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
    </body>
</html>
