<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GARO ESTATE | Register page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/normalize.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/fontello.css">
        <link href="<?= base_url() ?>assets/user/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/user/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/user/assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/price-range.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/user/assets/css/responsive.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <!--<script src="<?= base_url() ?>assets/user/assets/js/jquery-1.10.2.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js" type="text/javascript"></script>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

       
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> your@company.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <!--End top header -->

         <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <?php if(isset($_SESSION['user_id'])){ ?>
                        <button class="navbar-btn nav-button" onclick="logout()" data-wow-delay="0.4s">Logout</button>
                        <?php }else{ ?>
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('<?php echo base_url(); ?>index.php/users')" data-wow-delay="0.4s">Login</button>
                        <?php } ?>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="" data-wow-delay="0.1s">
                            <a href="<?php echo base_url() ?>index.php/tours" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home</a>
                        </li>

                       
                        <!--<li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Contact</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->


          