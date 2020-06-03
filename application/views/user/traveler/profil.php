<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profil</title>
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
        .inijudul {
            color: navy;
            font-size: 18px;
            font-family: arial; 
        }
        .iniprofil {
            color: yellow;
            font-size: 16px
        }
        .inihuruf {
            color: white;
            font-size: 45px;
        }
        .inichannel {
            color: orange;
            font-size: 17px;
        }
        .hurufedit {
            color: black;
            font-size:18px;
            font-family: timesnewroman;
        }
        .gantifoto {
            font-size:15px;
            color: red;
            font-family: timesnewroman;
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
                                    <li><a href="<?=base_url('beranda_userT')?>">Beranda</a></li>

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
                    <h1 class="inihuruf">Profil Saya</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->

<!-- ================ contact section end ================= -->

<!-- footer -->
<div class="card inijudul">
    <div class="card-header">
        <h3>Data Diri Saya </h3>

        
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>

        <?php endif; ?>






        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-fluid" alt="Cinque Terre" width="300" height="245" src="<?=base_url('assets/foto/') . $detail['foto_ktp']; ?>">
                            <div align="center"> 
                                <h5 class="gantifoto">Foto KTP anda</h5>
                            </div>

                        </div>
                        <div class="col-md-9 mt-sm-20">
                            <div class="table-responsive-sm">
                                <div>
                                    <div class="panel-body">
                                        <table width="60%" class="hurufedit">
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['nama_lengkap']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="100%">Email</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['jenis_kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Handphone</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['nomor_hp']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Rekening</td>
                                                <td width="10%">:</td>
                                                <td width="10%"><?php echo $detail['nomor_rekening']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Bank</td>
                                                <td width="10%">:</td>
                                                <td width="10%"> <?php echo $detail['nama_bank']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemilik Rekening</td>
                                                <td width="10%">:</td>
                                                <td width="10%"><?php echo $detail['nama_pemillik']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Channel YouTube</td>
                                                <td width="10%">:</td>
<!--                        <td width="10%">:</td>
    <td width="10%"><?php echo $detail['channel']; ?></td> -->
    <td width="10%"><a class="inichannel" target="blank" href="<?php echo $detail['channel']; ?>">Link YouTube anda</a></td>
</tr>
<!--  -->
</table>
</div>
</div>
</div>



</div>
<br>

</div>
<br>
<br>
<td>
    <a class="genric-btn danger radius" href="<?=base_url('Beranda_userT'); ?>">Kembali ke halaman utama</a>
</td>
<td>
    <a href="<?=base_url('ProfilTraveler/edit'); ?>" class="genric-btn info radius" role="button"><i class="fas fa-pen"></i> Edit Data Diri</a>
</td>

</div>
</div>
</div>

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