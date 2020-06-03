<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sebagai apakah anda mendaftar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/gijgo.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style type="text/css">
        .adit {
            color: orange;
            font-family: calibri;
            font-size: 30px;
        }
        .inibackground {
            background-color: #6A5ACD;
        }
        .iniestetika {
        	font-size: 30px;
        	background-color: yellow;
        	font-family:'Roboto',sans-serif;
            color: black;
        }

    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="<?=base_url('beranda_user')?>">
                                    <h3 class="adit">JASTIPIN AJA</h3>
                                </a>
                            </div>
                        </div>
                         <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="<?=base_url('beranda_user')?>">Beranda</a></li>
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                        <li><a href="<?=base_url('kontak_user')?>">Kontak</a></li>
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                        <li><a href="<?=base_url('tentang_user')?>">Tentang </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                         <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                                       <div class="log_chat_area d-flex align-items-center">

                                <?php 
                                $user_session = $this->session->userdata('id');
                                 ?>
                               <?php if (!$user_session) { ?>

                                      <a href="#test-form" class="login popup-with-form">
                                    <div class="adit">

                                    <span></span>
                                </div>

                                <a href="" class="adit">
                                    <div class="">

                                    <span></span>
                                </div>
                            </a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;

                                <a href="#test-form2" class="login popup-with-form">
                                    <div class="adit">

                                    <span></span>
                                </div>
                                </a>
                                        
                                   <?php }  else { ?>

<!-- 
                                 <a href="<?php echo site_url('auth_user/logout'); ?>" class="adit">


                                                                    <span>Logout</span>
                                                            
                                                                </a> -->
                                                                <a href="#test-form" class="login popup-with-form">
                                    <div class="adit">

                                    <span>Masuk</span>
                                </div>

                                        <a class="adit">
                                            <div class="">

                                                <span class="adit">|</span>
                                            </div>
                                        </a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;

                                <a href="<?=base_url('PilihanDaftar')?>" class="login">
                                    <div class="adit">

                                    <span>Daftar</span>
                                </div>
                                </a>
                                   <?php } ?>


                               

                              
                                                         

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    
        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
                <h3>Sebagai apa anda ingin mendaftar ?</h3>
                         &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;

                            <br><br><br><br><br>
                <div>
                	<span>
                        <button type="button" class="btn btn-warning btn-lg iniestetika"><a href="<?=base_url('DaftarTraveler')?>">Traveler</a></button>
                         &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;                         
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;                         
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                		<button type="button" class="btn btn-warning btn-lg iniestetika"><a href="<?=base_url('DaftarCustomer')?>">Customer</a></button>
                	</span>
                </div>

            </div>
            <form id="test-form" action="<?=base_url('auth_user/process')?>" method="post" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Masuk Akun </h3>

            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <input id="email" name="email" type="text" placeholder="Masukkan email" required="">
                </div>
                <div class="col-xl-12 col-md-12">
                    <input id="password" name="password" type="password" placeholder="Masukkan password" required="">
                </div>
                <div class="col-xl-12">
                    <button type="submit" value="Login" name="login" class="boxed_btn_orange">Login</button>
                </div>
            </div>

            <!-- <p class="doen_have_acc">Belum punya akun? <a class="dont-hav-acc" href="#test-form2"><b>Klik disini</b></a></p> -->
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" action="<?=base_url('daftar_user/create')?>" method="post" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Daftar Akun</h3>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <input name="n_lengkap" type="text" placeholder="Masukkan Nama Lengkap anda" required>
                </div>
                <div class="col-xl-12 col-md-12">
                    <input name="no_hp" type="text" placeholder="Masukkan No Handphone anda" required>
                </div>
                <div class="col-xl-12 col-md-12">
                    <input name="alamat" type="text" placeholder="Masukkan Alamat anda" required>
                </div>
                <div class="col-xl-12 col-md-12">
                    <input name="username" type="text" placeholder="Masukkan username anda" required>
                </div>
                <div class="col-xl-12 col-md-12">
                    <input name="email" type="email" placeholder="Masukkan email anda" required>
                </div>
                <div class="col-xl-12 col-md-12">
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="boxed_btn_orange" onclick="window.location.href="<?=base_url('daftar_user/create')?>"> Daftar Sekarang</button>

                    </div>
                    </div>
                    </div>
                    </div>
                    </form>

        <!-- link that opens popup -->
    
        <!-- form itself end-->
        
        <!-- form itself end -->
    
        <!-- JS here -->
        <script src="<?php echo site_url('assets/') ?>js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/popper.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/bootstrap.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/owl.carousel.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/isotope.pkgd.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/ajax-form.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/waypoints.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.counterup.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/scrollIt.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/wow.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/nice-select.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.slicknav.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/plugins.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="<?php echo site_url('assets/') ?>js/contact.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.form.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/jquery.validate.min.js"></script>
        <script src="<?php echo site_url('assets/') ?>js/mail-script.js"></script>
    
        <script src="<?php echo site_url('assets/') ?>js/main.js"></script>
    </body>
    
    </html>