<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@section('title', 'Mabolo National High School')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/animate/animate.css">
  <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/css-hamburgers/hamburgers.min.css"> -->
  <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/animsition/css/animsition.min.css"> -->
  <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/select2/select2.min.css"> -->
  <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/daterangepicker/daterangepicker.css"> -->
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<!-- <link href="demo/demo.css" rel="stylesheet" /> -->

</head>
<body>
  <div id="app">
    @yield('content')
  </div>

<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
	<script src="js/main.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="demo/demo.js"></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

  });
</script>
</body>
</html>
