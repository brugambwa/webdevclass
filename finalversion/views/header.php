<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="http://thevectorlab.net/flatlab/img/favicon.png">

        <title>Final Project</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo URL; ?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/style-responsive.css" rel="stylesheet" />

        <link href="<?php echo URL; ?>public/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/assets/data-tables/DT_bootstrap.css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </head>
    <body class="full-width">

        <section id="container" class="">
            <!--header start-->
            <header class="header white-bg">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bar"></span>
                        <span class="fa fa-bar"></span>
                        <span class="fa fa-bar"></span>
                    </button>
                    <!--logo start-->
                    <a href="" class="logo">Final <span>Project</span></a>
                    <!--logo end-->
                    <div class="horizontal-menu navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo URL; ?>">Dashboard</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"> Applications <b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo URL . 'index.php?page=newapp'; ?>">New Application</a></li>
                                    <li><a href="<?php echo URL . 'index.php?page=apps'; ?>">Applications</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu">
                            <!-- user login dropdown start-->
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="username"><?php echo 'Hello '.$_SESSION['full_name']; ?></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="<?php echo URL . 'index.php?page=logout'; ?>"><i class="fa fa-key"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <!-- user login dropdown end -->
                        </ul>
                    </div>

                </div>

            </header>
            <!--header end-->
            <!--sidebar start-->
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">