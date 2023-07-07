<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Beauty Reviewer</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('Frontend/images/BeautyLogo1.png')}}">
    <!-- Bootstrap -->
    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('Frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Style -->
    <link href="{{ asset('Frontend/css/style.css') }}" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/0df239cf7a.js" crossorigin="anonymous"></script>
    
   
</head>

<body>
    @include('Frontend.LayoutFE.header')
    
    <!-- @include('Frontend.LayoutFE.slider') -->
    <section>
        <div class="container">
            <div class="row">
                
                
                    @yield('content')
                
            </div>
        </div>
    </section>
    @include('Frontend.LayoutFE.footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('Frontend/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('Frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('Frontend/js/menumaker.js')}}"></script>
    <!-- sticky header -->
    <script src="{{ asset('Frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('Frontend/js/sticky-header.js')}}"></script>
    <script type="text/javascript">
                $('.account').click(function(){
                    var checklogin= "{{Auth::check()}}";
                    console.log(checklogin);
                    if(checklogin)
                    {
                        //alert('da dang nhap');
                        
                    }
                    else
                    {
                        alert('yeu cau dang nhap');
                        //$(this).addclass('form');
                        //$("#hide").show();
                        return false;
                        
                    } 
                })
                $(document).ready(function() {
                    var checkLogin = <?php echo json_encode(Auth::check()); ?>; // Sử dụng PHP để truyền trạng thái đăng nhập vào biến JavaScript

                    if (checkLogin) {
                        $(".loginregister").hide(); // Hiển thị class "logout" nếu đã đăng nhập
                    } else {
                        $(".loginregister").show(); // Ẩn class "logout" nếu chưa đăng nhập
                        //alert('Vui lòng đăng nhập hoặc chưa đăng ký');
                    }
                    return false;
                });
                $(document).ready(function() {
                    var checkLogin = <?php echo json_encode(Auth::check()); ?>; // Sử dụng PHP để truyền trạng thái đăng nhập vào biến JavaScript

                    if (checkLogin) {
                        $(".logout").show(); // Hiển thị class "logout" nếu đã đăng nhập
                    } else {
                        $(".logout").hide(); // Ẩn class "logout" nếu chưa đăng nhập
                        //alert('Vui lòng đăng nhập hoặc chưa đăng ký');
                    }
                    return false;
                });
                                // $("#hide").hide();
                // $('.logout').click(function(){
                //     var checklogin= "{{Auth::check()}}";
                //     // console.log(checklogin);
                    
                //     if(checklogin)
                //     {
                //         alert('da dang nhap');
                        
                //     }
                //     else
                //     {
                //         alert('vui long dang nhap hoac chua dang ky');
                //         //$(this).addclass('form');
                //         $("#hide").show();
                //         return false;
                        
                //     }
                    
                // })

    </script>

    @yield('js')
</body>

</html>
