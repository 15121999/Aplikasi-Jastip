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
    .inihuruf{
        color: white;
    }
    .iniestetika {
        font-size: 15px;
        background-color: orange;
        font-family: timesnewroman;
    }
    .inibackground2 {
        background-color: #9932CC;
    }
    .iniapaansih {
        color: black;
    }
    .iniapalagi {
        background-color: darkgray;
    }
    .inikenapa {
        color: #1E90FF;
    }
    .inidetail {
        font-size: 15px;
        background-color: #32CD32;
        font-family: timesnewroman;
    }
    .iniprofil {
        color: yellow;
        font-size: 16px
    }
    .inikotanya {
        color: yellow;
        font-size: 15px;
    }
    .inibaru {
        font-size: 20px;
        font-family: goudystout;
    }
    .bgvideo {
        background-color: white;
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
                                        <li><a class="active" href="javascript:void(0)">Beranda</a></li>
                                        
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


                                        <li><a href="<?=base_url('kontak_userC')?>">Kontak</a></li>
                                        
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
                                        <a class="fa fa-user iniprofil" href="<?=base_url('ProfilCustomer/detail')?>"> Profil
                                            <br>

                                        </a>
                                    </div>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;

                                    <a href="<?php echo site_url('auth_user/logout'); ?>" class="inistyle">
                                        <span>Logout</span>
                                    </a>




                                <?php } ?>

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

<!-- slider_area_start -->

<div class="inibackground">
<br>
<br>
<br>
<br>

</div>



<br>
<div align="center" class="bgvideo">
    <br>
<iframe width="600" height="250" src="https://www.youtube.com/embed/zZL8NPHaWY0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="600" height="250" src="https://www.youtube.com/embed/585Ooags5uw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<br>
<br>
<br>
<br>

</div>

<div class="row">



</div>

<div class="inibackground">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100"><br><br><br><br><br><br><br>
                    <h1 class="inihuruf">Daftar traveler yang telah mempublikasikan keberangkatannya ke kota tujuan berdasarkan alamat anda</h1>
                </div>
            </div>
        </div>
        <div class="row">




        </div>
    </div>
</div>




</div>




<!-- bradcam_area_end -->

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<br>

<!-- <form action="index.php" method="get">
    <label>Cari Kota Tujuan :</label>
    <input type="text" name="cari">
    <input class="genric-btn danger medium" type="submit" value="Cari">
</form> -->


<!-- <div align="center">
    <a class="btn btn-danger col-md-6 inibaru" href="<?=base_url('Beranda_userC/tampilsemua'); ?>">Tampilkan Semua Daftar Traveler Yang Mempublikasikan Jadwalnya</a>
    </div> -->


<br>
<div>
    <div class="container">
        <tr>

<?php echo form_open('Beranda_userC/sortir') ?>
<div class="input-group">
    <div class="input-group-prepend col-md-4">
        <select name="pilih" class="form-control">
        <option>-- Urutkan harga --</option>
        <option value="1">Harga Terendah s/d Harga Tertinggi</option>
        <option value="2">Harga Tertinggi s/d Harga Terendah</option>
    </select>

    </div>
        <button type="submit" name="cek" value="Cari" class="btn btn-secondary input-group-text" id="btnGroupAddon"><i class="fa fa-search"></i></button>
  </div>
    </div>

<br>



</div>



    <div class="card-body">

        <div class="table-responsive-sm">
           <table class="table table-hover" id="example">
            <thead>
                <tr align="center">

                    <!-- <th scope="col">Id Traveler</th> -->

                    <th scope="col">Nama Traveler</th>

                    <!-- <th scope="col">Jenis</th> -->
                    <th scope="col">Maksimal Berat</th>
                    <th scope="col" >Jadwal Keberangkatan</th>
                    <th scope="col" >Jadwal Kedatangan</th>
                    <th scope="col" >Waktu Kedatangan</th>

                    <th scope="col" >Kota Asal</th>
                    <th scope="col" >Kota Tujuan</th>
                    <th scope="col" >Harga Jasa Barang per-kg</th>
                    <th scope="col" >Titip Sekarang</th>
                    <th scope="col" >Detail Traveler</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($customer as $row): ?>
                    <tr align="center">


                        <!-- <td><?php echo $row['id_pengguna']; ?></td> -->
                        <td><?php echo $row['nama_lengkap']; ?></td>

                        <!-- <td><?php echo $row['jenis']; ?></td> -->
                        <td><?php echo $row['maks_berat']; ?></td>                 
                        <td><?php echo $row['jadwal_keberangkatan']; ?></td>
                        <td><?php echo $row['jadwal_kedatangan']; ?></td>
                        <td><?php echo $row['waktu_kedatangan']; ?></td>

                        <td><?php echo $row['kota_asal']; ?></td>
                        <td><?php echo $row['kota_tujuan']; ?></td>
                        


                        <td>
                            <?php echo "Rp".number_format( $row['harga']).",-";?>
                        </td>                

                        <td>
                            <a class="genric-btn info medium" href="<?=base_url('Beranda_userC/pesan/' . $row['id_pengguna']); ?>">Nitip</a>
                        </td>
                        <td>
                            <a class="genric-btn danger medium" href="<?=base_url('Beranda_userC/detail/' . $row['id_pengguna']); ?>">Detail</a>
                        </td>
                        

                    </tr>
                    <?php

                    ?>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>







<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <h3 class="mb-30"></h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo site_url('assets/') ?>img/abc.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-9 mt-sm-20"><br>
                    <h3 class="iniapaansih">Sebagai customer, anda dapat melakukan penitipan barang kepada traveler berdasarkan kota tujuan tempat barang itu berada.</h3>
                </div>
            </div>
        </div>
        <div class="section-top-border text-right">
            <h3 class="mb-30"></h3>
            <div class="row">
                <div class="col-md-9"><br><br>
                    <h1 class="inikenapa">Kami selalu mengupayakan yang terbaik kepada pelanggan. Karena, kepuasan pelayanan kepada pelanggan merupakan kewajiban kami.</h1>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo site_url('assets/') ?>img/aiueo.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<section class="sample-text-area">
    <div class="container box_1170">
        <div align="center">
            <img height="600" width="500" src="<?php echo site_url('assets/') ?>img/nego.jpg" alt="" class="img-fluid">
            <h2>Negosiasikan harga barang anda dengan traveler</h2>
        </div>
    </div>
</section>
<br>




<!-- footer -->
<footer class="footer footer_bg_1">



    <!-- footer -->
    <footer class="footer footer_bg_1">




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