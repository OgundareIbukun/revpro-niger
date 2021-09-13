
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Forgot Password | RevOps Local</title>
    <meta name="roleId" content="0">
    <meta name="app_url" content="">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{--<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="../../assets/css/font-awesome.css" rel="stylesheet" type="text/css" />--}}
    <link href=".../../assets/css/adminLTE.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Core Css -->
    <link href="../../assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Animate.css Css -->
    <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="../../assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../assets/css/themes/allthemes.css" rel="stylesheet" />

    <!-- Demo Purpose Only -->
    <link href="../../assets/css/demo/setting-box.css" rel="stylesheet" />
    <!--Vue CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">




    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .body{
            background: url('assets/images/tombstone.png');
            overflow: hidden;
            background-repeat : no-repeat;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>
<body class="hold-transition login-page body">
<div class="login-box">
    <div align="center"><img style="width:280px" src="assets/images/portallogo.png" /></div><br/>
    <div class="login-logo">
        <!-- <a href="#"><h5>Revenue Management System</h5></a> -->
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Forgot Password</p>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

        <div id="app" data-app >
            <app></app>
        </div>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<div align="center"><img style="width:100px" src="assets/images/revpower.png" /></div><br/>

<script src="../../assets/plugins/jquery/dist/jquery.min.js"></script>

{{--<script src="../../assets/js/bootstrap.js"></script>--}}
<!-- Jquery Core Js -->
{{--<script src="../../assets/plugins/jquery/dist/jquery.min.js"></script>--}}

<!-- JQuery UI Js
<script src="../../assets/plugins/jquery-ui/jquery-ui.js"></script>-->

<!-- Bootstrap Core Js -->
<script src="../../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- Metis Menu Js -->
<script src="../../assets/plugins/metisMenu/dist/metisMenu.js"></script>

<!-- Jquery Slimscroll Js -->
<script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<script src="../../assets/plugins/chartjs/dist/Chart.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

