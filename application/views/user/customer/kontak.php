<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kontak</title>
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
    .inihuruf {
        color: #CD5C5C;
    }
        .iniprofil {
        color: yellow;
        font-size: 16px
    }
        .inikotanya {
        color: yellow;
        font-size: 15px;
    }
            .inihuruf {
        color: white;
        font-size: 45px;
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
                                    <a href="<?=base_url('beranda_userC')?>">
                                     <h3 class="adit">JASTIPIN AJA </h3>
                                     <h4 class="inistyleui">Customer</h4>
                                 </a>
                             </div>
                         </div>
                         <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                  <ul id="navigation">
                                        <li><a  href="<?=base_url('beranda_userC')?>">Beranda</a></li>
                                        
                                        <!-- <li><a href="<?=base_url('StatusPesanan')?>">Status Pesanan</a></li> -->
                                        <li><a href="#">Status Pesanan <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?=base_url('StatusPesanan')?>">Belum Bayar</a></li>
                                            <li><a href="<?=base_url('StatusPesanan/status_diproses')?>">Pesanan diproses</a></li>
                                            <li><a href="<?=base_url('StatusPesanan/status_selesai')?>">Pesanan selesai</a></li>
                                            <li><a href="<?=base_url('StatusPesanan/status_batal')?>">Pesanan dibatalkan</a></li>

                                        </ul>
                                        </li>

                                        <li><a href="#">Pembayaran <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?=base_url('Transfer')?>">Transfer</a></li>
                                                <!-- <li><a href="<?=base_url('Uploadbukti')?>">Upload Bukti</a></li> -->
                                            </ul>
                                        </li>


                                        <li><a class="active" href="javascript:void(0)">Kontak</a></li>
                                        
                                        <li><a href="<?=base_url('tentang_userC')?>">Tentang </a></li>
                                        <li></li>

                                        <span class="inikotanya">Alamat anda di kota <?php
                                        $alamat=$this->session->alamat;
                                        echo "$alamat";  ?></span>
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


                                            <a href="" class="adit">
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


                                            <span class="iniuserdata"><?php
                                            $email=$this->session->email;
                                            echo "$email";  ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <div align="center">
                                        <a class="fa fa-user iniprofil  " href="<?=base_url('ProfilCustomer/detail')?>"> Profil
                                            <br>

                                        </a>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                            <a href="<?php echo site_url('auth_user/logout'); ?>" class="inistyle">
                                                <span>Logout</span>
                                            <?php } ?>
                                        </a>
                                    </a>




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
<div class="inibackground">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100"><br><br><br><br><br>
                    <h1 class="inihuruf">Hubungi Kami</h1>
                </div>
            </div>
        </div>
        </div>
    </div>
<!-- bradcam_area_end -->
<div align="center">
    <img height="600" width="600" src="<?php echo site_url('assets/') ?>img/sayonara.jpg" alt="" class="img-fluid">
    <h2>Hubungi call center dibawah ini apabila ada yang ingin ditanyakan kepada kami</h2>
</div>


<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">







        <div class="row">
            <div class="col-12">
            </div>

            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Jl. Sariasih 204 Blok 08, Sarijadi, Sukasari, Bandung Jawa, Barat</h3>
                        <p>Bandung, BDO 40151</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>Hubungi +62 853 7775 2597 atau +62 878 5453 1421</h3>
                        <p>Senin 09.00 WIB s.d Jum'at 16.00 WIB</p>
                    </div>
                </div>
            </div>

                        <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>jastipinaja@gmail.com</h3>
                        <p>Kirimkan email anda, bila terdapat kendala</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
</section>
<!-- ================ contact section end ================= -->

<!-- footer -->
<footer class="footer footer_bg_1">
</footer>
<!-- footer -->
<!-- link that opens popup -->

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

            <!-- <p class="doen_have_acc">Belum punya akun? <a class="dont-hav-acc" href="#test-form2"><b>Klik disini</b></a></p> -->
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirm password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Sign Up</button>
                    </div>
                </div>
            </form>
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