
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Invoice | RevPro Local</title>
    <meta name="roleId" content="0">
    <meta name="app_url" content="">
    <meta name="csrf-token" content=" ">
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


        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .bk-btn {
            height: 52px;
            width: 52px;
            background-color: #4CAF50;
            border-radius: 50%;
        }

        .bk-btn .bk-btn-triangle {
            position: relative;
            top: 13px;
            left: 10.4px;
            width: 0;
            height: 0;
            border-top: 13px solid transparent;
            border-bottom: 13px solid transparent;
            border-right: 13px solid white;
        }

        .bk-btn .bk-btn-bar {
            position: relative;
            background-color: white;
            height: 7.8px;
            width: 13px;
            top: -3.64px;
            left: 22.88px;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact !important;
                /* Chrome, Safari */
                color-adjust: exact !important;
                /*Firefox*/
            }

            .no-print,
            .no-print * {
                display: none !important;
            }
        }


        .watermark {
            width: auto;
            height: auto;
            display: block;
            position: relative;
        }

        .watermark::after {
            content: "";
            background: url(https://staging.revenue.ng/assets/images/birs.png);
            background-size: 700px 700px;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.05;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
        }



    </style>

</head>
<body class="hold-transition login-page body">
<div class="login-box">
    <div align="center"><img style="width:280px" src="assets/images/portallogo.png" /></div><br/>
    <div class="login-logo">
        <!-- <a href="#"><h5>Revenue Management System</h5></a> -->
    </div><!-- /.login-logo -->
    <div class="">

        <div id="app" data-app >
            <app></app>
        </div>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->


<script src="../../assets/plugins/jquery/dist/jquery.min.js"></script>

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