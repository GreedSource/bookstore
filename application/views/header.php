<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/plugins/images/favicon.png">
    <title>LibrosYuc</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?=base_url()?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?=base_url()?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?=base_url()?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?=base_url()?>assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?=base_url()?>assets/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?=base_url()?>assets/html/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    .titulodiv {
        background: #D5D8DC;


    }

    .botona {
        background: #EB6004;
        color: #fff;
        margin-top: -140px;
        width: 85%;
        height: 50px;


    }

    .borde2 {
        border-style: outset;
        border-width: 2px;
        border-top: none;
        border-left: none;
        border-right: none;
        border-color: #000;
    }
    .borde3 {
        
        border-width: 1px;
        border-top: none;
        border-left: none;
        border-right: none;
        
    }
    #form 
    {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p 
{
  text-align: center;
}

#form label 
{
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
</style>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
            
                 <!-- /Logo -->
                 <ul class="nav navbar-top-links navbar-right pull-right" style="background:#2E86C1;">
                
                <li>
                    <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                </li>

                <li>
                    <a class="profile-pic" href="#"> <img src="<?=base_url()?>assets/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                </li>
            </ul>
                

                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li style="margin-top:10px; margin-right:20px;">
                        <h4 style="color: #566573; margin-top:5px;">Help Center</h5>
                        
                    </li>
                    <li style="margin-top:10px; margin-right:10px;">
                    <h4 style="color: #566573; margin-top:5px;">Our Support</h5>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="center p-20 borde2" style="margin-top:180px;">
                    <center>
                        <button onclick="location.href='libro'" class="btn botona  btn-block waves-effect waves-light text-center">+ Agregar Libro</button>
                    </center>
                </div>

                <ul class="nav borde2" id="side-menu">
                    <li>
                        <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li class="borde2">
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>

                </ul>
                <div class="center p-20">
                    <center>
                        <button class="btn btn-danger  btn-block waves-effect waves-light text-center">Cerrar Sesión</button>
                    </center>
                </div>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title titulodiv borde3">
                    <div class="col-md-12">
                        <h2>Browse Available Books</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                