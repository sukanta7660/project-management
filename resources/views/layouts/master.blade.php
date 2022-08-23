
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') || Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">


    @include('layouts.partial.admin.header')

    @include('layouts.partial.admin.sidebar')

    <div class="content-wrapper" style="min-height: 1203.6px; " >
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
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
<script src="{{asset('asset')}}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{asset('asset')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('asset')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('asset')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('asset')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('asset')}}/dist/js/adminlte.js"></script>
<script src="{{asset('asset')}}/dist/js/pages/dashboard.js"></script>
<script src="{{asset('asset')}}/dist/js/demo.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        $('.select2').select2()
    } );
</script>
@yield('script')
</body>
</html>
