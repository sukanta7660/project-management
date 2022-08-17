
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/summernote/summernote-bs4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">


    @include('layouts.partial.admin.header')

    @include('layouts.partial.admin.sidebar')

    <div class="content-wrapper" style="min-height: 1203.6px; " >
        @yield('content')
    </div>

    @include('layouts.partial.admin.footer')

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="{{asset('asset')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('asset')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('asset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('asset')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{asset('asset')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('asset')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{asset('asset')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{asset('asset')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('asset')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('asset')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('asset')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('asset')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('asset')}}/dist/js/adminlte.js"></script>
<script src="{{asset('asset')}}/dist/js/pages/dashboard.js"></script>
<script src="{{asset('asset')}}/dist/js/demo.js"></script>
@yield('script')
</body>
</html>
