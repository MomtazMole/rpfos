<!DOCTYPE html>
<html lang="en">

<head>
@notifyCss
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Food Hunter</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">


    <!-- start header -->
    @include('Backend.Partials.header')
    <!-- end header -->

    <!-- main body start -->
    <div id="layoutSidenav">

        <!-- start navbar -->
        <div id="layoutSidenav_nav">
            @include('Backend.Partials.navbar')
        </div>
        <!-- end navbar -->



        <div id="layoutSidenav_content">
            <!-- start content -->
            <main>
            @include('notify::components.notify')
                @yield('content')               
            </main>
            <!-- end content -->

            <!-- footer start -->
            @include('Backend.Partials.footer')
            <!-- footer end -->
        </div>
    </div>
    <!-- end main body -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/assets/demo/chart-area-demo.js"></script>
    <script src="{{url('/')}}/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/js/datatables-simple-demo.js"></script>
    @notifyJs
</body>

</html>