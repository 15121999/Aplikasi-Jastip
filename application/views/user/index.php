<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jastipin Aja</title>
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

    <style type="text/css">
        .adit {
            color: orange;
            font-family: calibri;
            font-size: 30px;
        }
        .inibackground {
            background-color: #663399;
        }
        .inihuruf {
            color: orange;
            font-size: 40px;
        }
        .inibackgroundutama {
            background-color: blue;
        }
        .inihuruf2 {
            color: #FF4500;
        }
        .putih {
            color: white
        }
        .popuptext {
            color: white;
        }
        .underline {
            color: orange;
        }
    </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- header-start -->
        <header>
            <div class="inibackgroundutama">
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
                                            <li><a class="active" href="javascript:void(0)">Beranda</a></li>
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

                                            <span>Masuk</span>
                                        </div>

                                        <a href="javascript:void(0)" class="adit">
                                            <div class="">

                                                <span>|</span>
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
                                        
                                    <?php }  else { ?>


<!--                                      <a href="<?php echo site_url('auth_user/logout'); ?>" class="adit">


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
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->

    <div class="inibackground">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-6">
                    <div class="illastrator_png"><br><br><br><br><br><br>

                        <h1 class="inihuruf">Aplikasi Jasa Titip Barang Oleh-Oleh yang Terpercaya dan Pelayanan Memuaskan</h1><br><br><br>

                    </div>

                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="slider_info">
                    </div>

                </div>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>

    <div class="col-xl-12">
        <div class="section_title text-center mb-100">
            <h1>Selamat Datang di Aplikasi Jasa Titip Barang Oleh-Oleh</h1>
        </div>
    </div>
</div>
</div>



<div align="center">
    <img height="400" width="400" src="<?php echo site_url('assets/') ?>img/travel.jpg" alt="" class="img-fluid">
</div>

<br>
<br>
<br>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <h2 class="mb-30">Mengapa harus memilih Jastipin Aja ?</h2><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Pertama</h4><br>
                        <h5 class="inihuruf2">Jastipin Aja merupakan aplikasi jasa titip berbasis web yang membantu para customer yang menginginkan barang di suatu daerah yang kebetulan terdapat traveler yang ingin pergi ke daerah tersebut dan melakukan penitipan barang</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Kedua</h4><br>
                        <h5 class="inihuruf2">Setiap proses barang yang dititipkan pada traveler, kami sebagai developer dapat memantau status barang yang dititipkan. Kami juga menerapkan prinsip transparan dalam proses bisnis sehingga setiap proses barang yang terjadi, customer juga mengetahui status barang tersebut </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Ketiga</h4><br>
                        <h5 class="inihuruf2">Jastipin Aja menjamin barang yang dititipkan pada traveler dapat sampai kepada tangan customer sesuai waktu yang diperlukan. Sehingga, apabila terjadi sesuatu diluar proses bisnis aplikasi ini customer dapat melaporkannya di bagian menu kontak yang dapat dihubungi sebagai media pengaduan customer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30"></h3>
                <div class="row">
                    <div class="row col-md-4">
                        <img src="<?php echo site_url('assets/') ?>img/satu.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="row col-md-10">
                        <h3 class="">Daftar dirimu sekarang juga sebagai Customer</h3><br>
                    </div>
                </div>
            </div>

        </div>
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30"></h3>
                <div class="row">
                    <div class="row col-md-4">
                        <img src="<?php echo site_url('assets/') ?>img/dua.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="row col-md-10">
                        <h3 class="">Daftar dirimu sekarang juga sebagai Traveler</h3><br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="inibackground">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100"><br><br><br>
                    <h1 class="putih">Sebelum anda dapat menggunakan aplikasi jasa titip kami, dimohon untuk mendaftarkan diri sebagai anggota dengan mengikuti segala peraturan kami</h1>
                    <h2 class="adit">Terima Kasih Atas Kerjasama Anda</h2>
                </div>
            </div>
        </div>



        <div class="row">




        </div>
    </div>
</div>



<div class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h1>Keunggulan Jastipin Aja</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon">
                        <i class="flaticon-art-and-design"></i>
                    </div>
                    <h3>Kualitas Terbaik</h3>
                    <p>
                       Semua Produk dan Kualitasnya akan dipastikan baik dan terjangkau
                   </p>
               </div>
           </div>
           <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="single_course text-center">
                <div class="icon blue">
                    <i class="flaticon-business-and-finance"></i>
                </div>
                <h3>Cepat</h3>
                <p>
                    Semua Pemesanan Akan sampai dengan cepat dengan ekspetasi para customer
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-6">
            <div class="single_course text-center">
                <div class="icon">
                    <i class="flaticon-premium"></i>
                </div>
                <h3>Aman</h3>
                <p>
                   Barang akan sampai dengan kondisi yang sama di foto
               </p>
           </div>
       </div>
       <div class="col-xl-3 col-md-6 col-lg-6">
        <div class="single_course text-center">
            <div class="icon gradient">
                <i class="flaticon-crown"></i>
            </div>
            <h3>Terjamin</h3>
            <p>
               Barang dipastikan akan sampai ke tangan customer sesuai permintaan customer
           </p>
       </div>
   </div>
</div>
</div>
</div>


<!-- footer -->
<footer class="footer footer_bg_1">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="<?php echo site_url('assets/') ?>img/bdg2.jpg" alt="" width="100%" height="250">
                            </a>
                        </div>
                        <p>
                            JASTIPIN AJA adalah aplikasi penyedia jasa titip barang oleh oleh yang terpercaya 
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Kontak 
                        </h3>
                        <ul>
                            <p>+62 853 7775 2597</p>
                            <p>atau</p>
                            <p>+62 878 5453 1421</p>
                            <p>Senin 09.00 WIB s.d Jum'at 16.00 WIB</p>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Alamat
                        </h3>
                        <p>
                            <p>Jl. Sariasih 204 Blok 08, Sarijadi, Sukasari, Bandung Jawa, Barat</p>
                            <p>Bandung, BDO 40151</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer -->


<!-- form itself end-->
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
                    <h5><button type="submit" value="Login" name="login" class="boxed_btn_orange">Login</button></h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-12 col-md-12" align="left">
                    <h5 class="popuptext">Belum terdaftar ? <a href="<?=base_url('PilihanDaftar')?>" class="underline">Klik disini</a></h5>
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