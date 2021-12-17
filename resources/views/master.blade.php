<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/templates/yoo_avion/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>@yield('title', 'Title')</title>
    <!-- Font Sahel -->
    <link rel="stylesheet" href="{{asset('css/font-sahel.css')}}">
    <!-- Font SahelFD -->
    <link rel="stylesheet" href="{{asset('css/font-sahel-fd.css')}}">
    <!-- All -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
    <!-- Theme RTL style -->
    <link rel="stylesheet" href="{{asset('css/adminlte-rtl.css')}}">
    <!-- bootstrap-rtl -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('POS_HEAD')
</head>

<body class="hold-transition sidebar-mini layout-fixed rtl">
    @yield('POS_BEGIN')
    <div class="wrapper">
        <!-- Navbar -->
        @include('navbar')
        <!-- Main Sidebar Container -->
        @include('sidebar')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid ">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('content-header')</h1>
                        </div>
                        <div class="col-sm-6">
                            @yield('content-breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        @include('footer')
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte.js')}}"></script>
    <!-- script -->
    <script src="{{asset('js/script.js')}}"></script>

    @yield('POS_END')
</body>

</html>