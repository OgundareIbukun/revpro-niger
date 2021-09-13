<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>RevOps - Niger State & LGA Harmonized Revenue Portal | Admin System Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href=".../../assets/css/adminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/images/ICON_LOGO.png" type="image/x-icon">

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
            background: url('assets/images/revops-background.jpg');
            overflow: hidden;
            background-repeat : no-repeat;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;




        }

        @media screen and (max-width: 767px) {
            .margn-t {
                padding-top: 250px;
            }
        }

        @media screen and (max-width: 991px) {
            .margn-t {
                padding-top: 200px;
            }
        }
            @media screen and (min-width: 992px) {
                .margn-t {
                    padding-top: 130px;
                }
        }

    </style>

</head>
<body class="hold-transition login-page body">
  <div  class="mt-sx-300 mt-sm-200 mt-md-120"></div>
<div class="login-box "  >
    <div align="center"><img style="width:280px" src="assets/images/portallogo.png" /></div>
    <div class="login-logo">
        <!-- <a href="#"><h5>Revenue Management System</h5></a> -->
    </div><!-- /.login-logo -->
    <div class="login-box-body"  >
        <p class="login-box-msg">Log In</p>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="Email" name="email" required   autocomplete="" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"><strong></strong></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" id="Password"
                       required autocomplete="current-password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong class="text-danger" >{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <!-- <div class="checkbox icheck">
                      <label>
                        <input type="checkbox"> Remember Me
                      </label>
                    </div>  -->
                </div><!-- /.col -->
                <div align="center" class="col-xs-4">
                    <input type="submit" style="background-color:#00b4e3;" class="btn btn-primary btn-block btn-flat" value="Log in" />
                </div><!-- /.col -->
            </div>
        </form>

        <a href="/main#/forgotpassword">Forgot Password</a><br>
    </div>

        <div align="center"  style="padding-top:100px" ><a  target="_blank" href="https://www.weevilcompany.com" />Powered by: Weevil Company.</div><br/>


    {{--</div><!-- /.login-box-body -->--}}
</div><!-- /.login-box -->
{{--<div align="center"  style="padding-top:-100px"><img style="width:90px;height:100px;padding-top: -50px" src="assets/images/revpower.png" /></div><br/>--}}

<script src="../../assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
</body>
</html>
