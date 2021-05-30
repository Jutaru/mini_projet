<!DOCTYPE html>
<!--
	Delex by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8"/>

  <link rel="shortcut icon" type="image/png" href="hh.png">

  <!-- Site Title-->
  <title>SJE BLOG</title>

  <!-- Mobile Specific Metas-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <!-- Google-fonts -->
  <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <!-- Fonts-style -->
  <link rel="stylesheet" href="css/styles.css"/>
  <!-- Fonts-style -->
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <!-- Modal-Effect -->
  <link href="css/component.css" rel="stylesheet">
  <!-- owl-carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
  <!-- Template Styles-->
  <link rel="stylesheet" href="css/style.css"/>
  <!-- Template Color-->
  <link rel="stylesheet" type="text/css" href="css/blue.css" media="screen" id="color-opt" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
        <div class="loader">
            Please Wait....
        </div>
    </div> 
    <!-- End Preloader -->

    @yield('content')


    <footer>
        <div class="footer-bottom text-center"> <!-- Footer-copyright -->
        <p>©2021 Sup'com Junior Entreprise <a href="http://sje.com"></a></p>
        </div>
    </footer>

    <!-- scripts -->
     <script src="js/jquery.min.js"></script>
     <script src="js/jquery.easing.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/classie.js"></script>
     <script src="js/modalEffects.js"></script>
     <script src="js/waypoints.min.js" type="text/javascript"></script>
     <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
     <script src="js/SmoothScroll.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.nav.js"></script>                                                     
     <script type="text/javascript" src="js/owl.carousel.min.js"></script>
     <script src="js/app.js"></script>
    <script type="text/javascript" src="js/switcher.js"></script>
  </body>
</html>



<style type="text/css">
  @charset "UTF-8";

  @font-face {
    font-family: "icon-font";
    src:url("../fonts/icon-font.eot");
    src:url("../fonts/icon-font.eot?#iefix") format("embedded-opentype"),
      url("../fonts/icon-font.woff") format("woff"),
      url("../fonts/icon-font.ttf") format("truetype"),
      url("../fonts/icon-font.svg#icon-font") format("svg");
    font-weight: normal;
    font-style: normal;

  }

  [data-icon]:before {
    font-family: "icon-font" !important;
    content: attr(data-icon);
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  [class^="icon-"]:before,
  [class*=" icon-"]:before {
    font-family: "icon-font" !important;
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .icon-arrow-streamline-target:before {
    content: "a";
  }
  .icon-caddie-shopping-streamline:before {
    content: "b";
  }
  .icon-coffee-streamline:before {
    content: "d";
  }
  .icon-clock-streamline-time:before {
    content: "c";
  }
  .icon-design-graphic-tablet-streamline-tablet:before {
    content: "e";
  }
  .icon-design-pencil-rule-streamline:before {
    content: "f";
  }
  .icon-ink-pen-streamline:before {
    content: "g";
  }
  .icon-magic-magic-wand-streamline:before {
    content: "h";
  }
  .icon-settings-streamline-2:before {
    content: "i";
  }
  .icon-speech-streamline-talk-user:before {
    content: "j";
  }
  .icon-streamline-umbrella-weather:before {
    content: "k";
  }
</style>