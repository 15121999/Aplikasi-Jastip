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
    .inistyle {
        color: orange;
        font-size: 20px;

    }
    .inistyleui {
        color: yellow;
        font-size: 20px;
    }
    .iniuserdata {
        font-size: 15px;
        color: yellow;
    }
    .inibackground2 {
        background-color: #663399;
    }
    .inikenapa {
        color: white;
    }
        .iniprofil {
        color: yellow;
        font-size: 16px
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
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="<?=base_url('beranda_userT')?>">
                                     <h3 class="adit">JASTIPIN AJA</h3>
                                     <h4 class="inistyleui">Traveler</h4>
                                 </a>
                             </div>
                         </div>
                         <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="javascript:void(0)">Beranda</a></li>
                                        
                                        <li><a href="<?=base_url('Uploadbarang')?>">Upload Jadwal</a></li>


                                        <li><a href="#">Daftar Pesanan <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?=base_url('Daftar_pesananT')?>">Belum Bayar</a></li>
                                                <li><a href="<?=base_url('Daftar_pesananT/telahbayar')?>">Sudah Bayar</a></li>
                                                <li><a href="<?=base_url('Daftar_pesananT/telahselesai')?>">Pesanan Selesai</a></li>
                                                <li><a href="<?=base_url('Daftar_pesananT/dibatalkan')?>">Dibatalkan</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="<?=base_url('kontak_userT')?>">Kontak</a></li>
                                        
                                        <li><a href="<?=base_url('tentang_userT')?>">Tentang </a></li>                                
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center"><br>
                                <?php 
                                $user_session = $this->session->userdata('id');
                                ?>
                                <?php if (!$user_session) { ?>

                                  <a href="#test-form" class="login popup-with-form">
                                    <div class="adit">

                                        <span>Masuk</span>
                                    </div>

                                    <a href="" class="adit">
                                        <div class="">

                                            <span>|</span>
                                        </div>
                                    </a>


                                    <a href="<?=base_url('PilihanDaftar')?>" class="login">
                                        <div class="adit">

                                            <span>Daftar</span>
                                        </div>
                                    </a>

                                <?php }  else { ?>




                                    <span class="iniuserdata"><?php
                                    $email=$this->session->email;
                                    echo "$email";  ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <div align="center">
                                        <a class="fa fa-user iniprofil" href="<?=base_url('ProfilTraveler/detail')?>"> Profil
                                            <br>

                                        </a>
                                    </div>&nbsp;&nbsp;&nbsp;

                                    <a href="<?php echo site_url('auth_user/logout'); ?>" class="inistyle">
                                        <span>Logout</span>
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
    <div class="inibackground2"><br><br><br><br>

    </div>
    <!-- slider_area_start -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30"></h3>
                <div class="row">
                    <div class="col-md-3">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/vGjVu8zW66o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <img src="<?php echo site_url('assets/') ?>img/publikasi.jpg" alt="" class="img-fluid"> -->
                    </div>
                    <div class="col-md-9 mt-sm-20"><br><br> 
                        <h1 class="iniapaansih">Publikasikan keberangkatan anda</h1>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



    <div class="inibackground">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-top-border text-right">
                        <h3 class="mb-30"></h3>
                        <div class="row">
                            <div class="col-md-7"><br><br>
                                <h1 class="inikenapa">Tawarkan diri anda sebagai traveler sekarang juga, liburan sekaligus mendapatkan uang</h1>
                            </div>
                            <div class="col-md-3">
                                <img src="<?php echo site_url('assets/') ?>img/waw.jpg" alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="row">



        </div>
    </div>
    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses">
                        <h3 class="second_title"><b>Pertanyaan</b> dan <b>jawaban</b> yang kemungkinan akan terpikirkan oleh anda sebelum menjadi traveler di Jastipin Aja ?</h3>
                    </div>
                    <div class="outline_courses_info">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="flaticon-question"></i> Apa yang harus saya lakukan pertama kali ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Pastikan terlebih dahulu jadwal keberangkatan dan jadwal kedatangan yang akan dipublikasikan sebelum anda mempublikasikan sebagai traveler. Setelah jadwal keberangkatan dan kedatangan telah pasti, anda hanya perlu mengisi semua ketentuan yang disediakan di menu Upload Jadwal di atas
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="flaticon-question"></i>Cara mengetahui jika customer menitip barang ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Jika ada customer yang ingin menitip barang pada anda, maka akan terdapat informasi data pesanan di menu Daftar pesanan diatas
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading_5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                            <i class="flaticon-question"></i> Bagaimana saya mendapatkan uang dari jasa ini ?<span></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion">
                                    <div class="card-body">
                                        Setelah customer melakukan penitipan barang, customer akan melakukan transfer ke rekening admin terlebih dahulu sebelum dilanjutkan ke rekening traveler 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="flaticon-question"></i>Cara negosiasi harga jasa dari barang pesanan ?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Anda dapat bernegosiasi dengan customer menggunakan via WhatsApp yang akan dilampirkan pada keterangan customer
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading_4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                            <i class="flaticon-question"></i> Bagaimana cara mengupdate status pesanan ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                                    <div class="card-body">
                                        Di menu Daftar Pesanan juga terdapat opsi untuk mengupdate status pesanan barang yang dititipkan pada anda 
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            JASTIPIN AJA adalah aplikasi penyedia jasa penitipan barang yang menghubungkan traveler dan customer
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
                            Call Us
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
                            Address
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
                    <input id="email" name="email" type="text" placeholder="Masukkan email">
                </div>
                <div class="col-xl-12 col-md-12">
                    <input id="password" name="password" type="password" placeholder="Masukkan password">
                </div>
                <div class="col-xl-12">
                    <button type="submit" value="Login" name="login" class="boxed_btn_orange">Login</button>
                </div>
            </div>

            <p class="doen_have_acc">Belum punya akun? <a class="dont-hav-acc" href="#test-form2"><b>Klik disini</b></a></p>
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