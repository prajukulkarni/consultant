<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
  {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}
  {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}
  {!!Html::style('bower_components/jvectormap/jquery-jvectormap.css')!!}
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
 
 <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 @yield('style')
</head>
<body>
  <section id="container" class="">
@include('layouts.header.header')

 
    <!--header end-->

    <!--sidebar start-->
@include('layouts.sidebars.sidebar')
    <!--sidebar end-->
    <section id="main-content">
      @yield('content')
    </section>
    <!--main content start-->

    <!--main content end-->
  </section>

{!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
{!!Html::script('bower_components/fastclick/lib/fastclick.js')!!}
{!!Html::script('dist/js/adminlte.min.js')!!}
{!!Html::script('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')!!}
{!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
{!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
{!!Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')!!}
{!!Html::script('bower_components/chart.js/Chart.js')!!}
{!!Html::script('dist/js/pages/dashboard2.js')!!}
{!!Html::script('dist/js/demo.js')!!}
</body>
</html>
