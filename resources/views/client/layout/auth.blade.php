<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <base href="{{ asset('/') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>@yield('title') | AllStore</title>

    <!-- vendor css -->
    <link href="resources/server/lib/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="resources/server/lib/Ionicons/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="resources/server/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="resources/server/css/katniss.css" type="text/css">
  </head>

  <body>

    
{{-- Body --}}
@yield('body')


    <script src="resources/server/lib/jquery/jquery.js"></script>
    <script src="resources/server/lib/popper.js/popper.js"></script>
    <script src="resources/server/lib/bootstrap/bootstrap.js"></script>
  </body>
</html>
