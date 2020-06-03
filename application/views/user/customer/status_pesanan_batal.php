<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pesanan yang dibatalkan</title>
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
        color: red;
        font-size: 20px;
    }
    .iniprofil {
        color: yellow;
        font-size: 16px
    }
    .besarinhuruf {
        font-size: 18px;
        color: purple;
    }
    .lebihbesar {
        color: black;
        font-size: 25px;
    }
    .inihuruf {
        color: white;
        font-size: 45px;
    }
        .inikotanya {
        color: yellow;
        font-size: 15px;
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
                                       <h3 class="adit">JASTIPIN AJA</h3>
                                       <h4 class="inistyleui">Customer</h4>
                                   </a>
                               </div>
                           </div>
                           <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                  <ul id="navigation">
                                    <li><a href="<?=base_url('beranda_userC')?>">Beranda</a></li>

                                    <!-- <li><a href="<?=base_url('StatusPesanan')?>">Status Pesanan</a></li> -->

                                    <li><a class="active" href="#">Status Pesanan <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?=base_url('StatusPesanan')?>">Belum Bayar</a></li>
                                            <li><a href="<?=base_url('StatusPesanan/status_diproses')?>">Pesanan diproses</a></li>
                                            <li><a href="<?=base_url('StatusPesanan/status_selesai')?>">Pesanan selesai</a></li>
                                            <li><a href="javascript:void(0)">Pesanan dibatalkan</a></li>

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
                                echo "$email";  ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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
                    <h1 class="inihuruf">Pesanan yang dibatalkan</h1>
                </div>
            </div>
        </div>
        <div class="row">




        </div>
    </div>
</div>

<div class="card">

    <div class="card-body">

        <div class="table-responsive-sm">
         <table class="table table-hover" id="example">
            <thead align="center">
                <tr>
                    <!-- <th scope="col">No</th>  -->
    <!-- <th scope="col">Id Pengguna</th> -->
    <!-- <th scope="col" >Nama Traveler</th> -->
    <th scope="col">Id Pesanan</th>
    <th scope="col" >Nama Barang</th>
    <th scope="col" >Tanggal Pemesanan</th>
    <th scope="col" >Berat Barang</th>
    <th scope="col">Status Pesanan</th>


    <!-- <th scope="col">Status Pembayaran</th> -->


    <!-- <th scope="col" >Action</th> -->


</tr>
</thead>
<tbody align="center">
    <?php


                        // $no = 1; 
    foreach ($pesanan as $row): ?>
        <tr>
            <!-- <td><b><?php echo $no.'.';?></b></td> -->
            <td><?php echo $row['id_pesanan']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['tgl_pesan']; ?></td>
            <td><?php echo $row['jumlah_barang']; ?></td>
            <td><?php echo $row['status_barang']; ?></td>

<!--                                 <td><b><?php echo "Rp".number_format( $row['harga']).",-";?></b></td>
    <td><b><?php echo "Rp".number_format( $row['harga_barang']).",-";?></b></td> -->
    <!-- <td><?php echo $row['status_pembayaran']; ?></td> -->
<!--     <td>
        <a class="genric-btn danger medium" href="<?=base_url('Uploadbukti/bukti/' . $row['id_pesanan']); ?>">Upload</a>
    </td> -->
<!-- <td>
        <a class="genric-btn danger medium" href="<?=base_url('StatusPesanan/updatestatus/' . $row['id_pesanan']); ?>">Ubah</a>
    </td> -->




<!--                           <td>
                                    <button class="iniestetika"><a href="<?=base_url('')?>">Nitip dong</a></button>
                                </td> -->

                            </tr>
                            <?php

                            ?>
                            

                        <?php endforeach; ?>
                    </tbody>

                    <footer class="footer footer_bg_1">

                    </footer>
                    <!-- footer -->
                    <!-- link that opens popup -->


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