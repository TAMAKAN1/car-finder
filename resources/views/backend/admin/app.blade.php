<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('assets/images/xs/22.jpg')}}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CAR FINDER">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Car Finder</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    <style>
        body{
            background:#fff;
        }
    </style>
    @yield('style')
</head>

<body class="theme-green rtl">

    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p>Please wait...</p>
            <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
        </div>
    </div> -->



    @include('backend.admin.nav')
    @include('backend.admin.sidebar')





    <section class="content home">
        

@yield('content')

       
    </section>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/charts/sparkline.js')}}"></script>

  
    @yield('script')

</body>
</html>