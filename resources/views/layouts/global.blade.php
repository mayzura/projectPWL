<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Toko Buku | @yield('title-page')</title>
  <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}   ">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}  ">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}  ">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }} ">

  @yield('header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.navbar')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('starter-page')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('starter-page')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
   @yield('content')
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>  
</div>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}  "></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}  "></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}  "></script>
<!-- Select2 -->
<script src=" {{ asset('assets/plugins/select2/select2.full.min.js') }}  "></script>
<script>$('.select2').select2()</script>

@yield('footer')


{{-- <script>
    $("#menu-sidebar a").click(function() {
        $("a").removeClass('active');
        $(this).addClass("active");
    });
</script> --}}
</body>
</html>
