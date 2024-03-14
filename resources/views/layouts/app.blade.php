<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include("layouts.navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include("layouts.slidebar")
  <!-- /Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    @yield("content")
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include("layouts.footer")

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- InputMask -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>


<script>
  $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()
      $('[data-mask]').inputmask()
      //Date picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
      $('#reservation').daterangepicker();
  });
</script>
</body>
</html>
