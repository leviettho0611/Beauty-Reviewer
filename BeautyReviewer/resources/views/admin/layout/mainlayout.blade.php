<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ asset('Admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('Admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
    @include('admin.layout.header')

    @include('admin.layout.leftsidebar')
       <div class="page-wrapper">         
        @yield('content')
       </div>
       @include('admin.layout.footer')
    </div>            
    
    <script src="{{ asset('Admin/assets/libs/jquery/dist/jquery.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/assets/extra-libs/sparkline/sparkline.js') }}"></script> </script>
    <script src="{{ asset('Admin/dist/js/waves.js') }}"></script> </script>
    <script src="{{ asset('Admin/dist/js/sidebarmenu.js') }}"></script> </script>
    <script src="{{ asset('Admin/dist/js/custom.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/assets/libs/chartist/dist/chartist.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script> </script>
    <script src="{{ asset('Admin/dist/js/pages/dashboards/dashboard1.js') }}"></script> </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor'); </script>
    </body>

</html>