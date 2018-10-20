<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Katy Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dist/sweetalert2.min.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
  </head>
  <body>
    <div class="container">
        <h4>Demo</h4><a class="btn btn-info" id="demoSwal" href="#">Sample Alert</a>
    </div>
    <!-- Essential javascripts for application to work-->
    <script src="{{  url('backend/js/jquery-3.2.1.min.js' )}}"></script>
    <script src="{{  url('backend/js/popper.min.js')}} "></script>
    <script src="{{  url('backend/js/bootstrap.min.js')}} "></script>
    <script src="{{  url('backend/js/main.js')}} "></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{  url('backend/js/plugins/pace.min.js')}} "></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{  url('backend/js/plugins/chart.js')}} "></script>
    <script type="text/javascript" src="{{  url('dist/sweetalert2.min.js')}} "></script>
    <script type="text/javascript" src="{{ url('backend/js/plugins/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('backend/js/plugins/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{  url('frontend/js/style.js')}} "></script>
  </body>
</html>