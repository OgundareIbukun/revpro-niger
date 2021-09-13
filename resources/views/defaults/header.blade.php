<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="roleId" content="{{ Auth::user()->role_id }}">
    <meta name="app_url" content="{{ env('APP_URL') }}">
    <meta name="irs" content="{{ env('IRS_CODE') }}">
    <title>RevOps - Niger State & LGA Harmonized Revenue Portal | Admin System </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <script> window.State = @json([ 'id'=> @env('STATE_ID')  ]) </script>
    <script> window.permission = @json(   Auth::user()->load('permissions')->permissions->pluck('id')  ) </script>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/LOGO_ICON.png" type="image/x-icon">

    <!-- Google Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Animate.css Css -->
    <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <link href=".../../assets/css/adminLTE.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome Css -->
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="../../assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet" />

    <!-- Switchery Css -->
    <link href="../../assets/plugins/switchery/dist/switchery.css" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="../../assets/plugins/metisMenu/dist/metisMenu.css" rel="stylesheet" />

    <!-- Pace Loader Css -->
    <link href="../../assets/plugins/pace/themes/white/pace-theme-flash.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet" />

    <link href="../../../assets/plugins/wait-me/src/waitMe.css" rel="stylesheet" />


    <!-- Jquery Datatables Css -->
    <link href="../../assets/plugins/DataTables/media/css/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../assets/css/themes/allthemes.css" rel="stylesheet" />


    <!-- C3 Chart Css -->
    <link href="../../assets/plugins/c3/c3.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">


{{--<link rel="stylesheet" href="../../assets/css/flatpickr.css">--}}



    <!--Vue CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: 'Poppins',sans-serif !important;
        }



    </style>



</head>
<body>
<div class="all-content-wrapper">
    <!-- Top Bar -->
    <header>
        <nav class="navbar navbar-default">

            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="material-icons">swap_vert</i>
                    </button>
                    <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                        <i class="material-icons">menu</i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="#">
                        <span class="logo-minimized">NRP</span>
                        <span class="logo"><img style="width:150px;margin-top: -10px;" src="assets/images/revops-small.png" /></span>

                    </a>
                    <!-- #END# Logo -->
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                                <i class="material-icons">menu</i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown email-menu">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">schedule</i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="body">
                                    <a href="javascript:void(0);">
                                        Last Login: {{date('D, j F  h:i:s a',strtotime('+1 hour',strtotime(Auth::user()->lastLog))) }}
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- User Menu -->
                        <li class="dropdown user-menu">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../assets/images/avatars/face2.jpg" alt="User Avatar" />
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">
                                    <img src="../../assets/images/avatars/face2.jpg" alt="User Avatar" />
                                    <div class="user">
                                        {{ Auth::user()->name }}
                                        <div class="title">{{ Auth::user()->role->name }}</div>
                                    </div>
                                </li>
                                <li class="footer">
                                    <div class="row clearfix">
                                        <div class="col-xs-7">
                                            <a href="{{env('APP_URL')}}/home#/changepassword" class="btn btn-default btn-sm btn-block">Change password</a>
                                        </div>
                                        <div class="col-xs-5">

                                            <a class="btn btn-default btn-sm btn-block" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# User Menu -->
                        <li class="pull-right">
                            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- #END# Top Bar   -->