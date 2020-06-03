<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upload Bukti</title>
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
    .inikotanya {
        color: yellow;
        font-size: 15px;
    }
    .inihuruf {
        color: white;
        font-size: 45px;
    }
    .besarindikit {
        font-size: 20px;
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
                    <h1 class="inihuruf">Upload Bukti Pembayaran</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->

<!-- ================ contact section end ================= -->

<!-- footer -->



<section class="sample-text-area iniaturform">


    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Rincian total harga</h3>
                        <hr>
                        <?php if (!empty(validation_errors())): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <?php echo form_open_multipart('Uploadbukti/create'); ?>


                        <?php 

                        $total=0;
                        $hasil=0;
                        $ongkos=0.1;
                        $jumlah=0;
                        foreach ($bukti as $row): ?>

                            <?php  
                            $total=$total+$row['harga']+$row['harga_barang'];
                            $hasil=$total*$ongkos;
                            $jumlah=$hasil+$total;
                            ?>


                            <table width="70%">
                             <tr>
                              <td>Harga Jasa Barang Per-Kg</td>
                              <td>:</td>
                              <td><?php echo "Rp".number_format( $row['harga']).",-";?></td>
                          </tr>
                          <tr>
                              <td>Harga Barang Per-Kg</td>
                              <td>:</td>
                              <td><?php echo "Rp".number_format( $row['harga_barang']).",-";?></td>
                          </tr>
                          <tr>
                              <td>Tambahan biaya admin(10%)</td>
                              <td>:</td>
                              <td><?php echo "Rp".number_format($hasil ).",-";?></td>
                          </tr>
<!--                           <tr>
                              <td>Total (harga barang dan harga jasa per-kg)</td>
                              <td>:</td>
                              <td><?php echo "Rp".number_format($total ).",-";?></td>
                          </tr> -->
                          <tr class="besarindikit">
                              <td><b>Jumlah yang harus anda bayarkan</b></td>
                              <td>:</td>
                              <td><b><?php echo "Rp".number_format($jumlah ).",-";?></b></td>
                          </tr>
                          <!--  -->
                      </table>

                      <br>
                      <hr>

                      <h3 class="mb-30">Rekening Tujuan</h3>


                      <div class="container">



                        <table width="70%">

                            <h4>Bank BRI Syariah</h4>

                            <tr>
                                <td>Nomor Rekening</td>
                                <td>:</td>
                                <td>1037964235</td>
                            </tr>
                            <tr>
                                <td>Nama Pemilik Rekening</td>
                                <td>:</td>
                                <td>MUHAMMAD FIKRI ADITYA</td>
                            </tr>
                        </table>
                        <br>
                        <br>

                        <table width="70%">

                            <h4>Bank BNI</h4>
                            <tr>
                                <td>Nomor Rekening</td>
                                <td>:</td>
                                <td>0387107158</td>
                            </tr>
                            <tr>
                                <td>Nama Pemilik Rekening</td>
                                <td>:</td>
                                <td>LUTHFI FAIRUZA ADRIANTO</td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-defination">

                    </div>
                </div>
            </div>
        </div>


        <hr>
        <h3 class="mb-10">Form upload bukti</h3>


        <div class="mt-10">
            <input type="hidden" id="id_upload" name="id_upload" placeholder=""
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
            class="single-input">
        </div>



        <div class="mt-10">
            <dt class="col-sm-4"></dt>

            <input type="hidden" name="id_pesanan" value="<?php echo $row['id_pesanan']; ?>" placeholder=""
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="single-input" readonly>
        </div>

        <div class="mt-10">
            <dt class="col-sm-4"></dt>

            <input type="hidden" name="id_traveler" value="<?php echo $row['id_traveler']; ?>" placeholder=""
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="single-input" readonly>
        </div>

        <div class="mt-10">
            <dt class="col-sm-4"></dt>

            <input type="hidden" name="id_pengguna" value="<?php
            $id=$this->session->id;
            echo "$id";  ?>" placeholder=""
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
            class="single-input" readonly>
        </div>

        <div class="mt-10">
            <dt class="col-sm-4"></dt>

            <input type="hidden" name="nomor_rekening" placeholder="" value="<?php echo $row['nomor_rekening']; ?>" 
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" readonly
            class="single-input">
        </div>

        <div class="mt-10">
            <dt class="col-sm-4"></dt>

            <input type="hidden" name="nama_bank" placeholder="" value="<?php echo $row['nama_bank']; ?>" 
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" readonly
            class="single-input">
        </div>

<!--         <div class="mt-10">
            <dt class="col-sm-4">No Rekening Tujuan</dt>

            <input type="text" name="rekening_tujuan" placeholder="" value="" 
            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
            class="single-input">
        </div> -->
        <dt class="col-sm-4">No Rekening Tujuan</dt>
        <br>
        <div class="container">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rekening_tujuan" id="inlineRadio1" value="Bank BRI Syariah 1037964235">
              <h4 class="form-check-label" for="inlineRadio1">1037964235 (BRI Syariah)</h4>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rekening_tujuan" id="inlineRadio2" value="Bank BNI 0387107158">
              <h4 class="form-check-label" for="inlineRadio2">0387107158 (BNI)</h4>
          </div>
      </div>



<!--         <div class="input-group-icon mt-10">
            <dt class="col-sm-4">Rekening Tujuan</dt>

            <div class="icon"></div>
            <div class="form-select" id="default-select"">
                <select name="rekening_tujuan">
                    <option value="">--Pilih Rekening Tujuan--</option>
                    <option value="Bank BRI Syariah 1037964235">Bank BRI Syariah</option>
                    <option value="Bank BNI 0387107158">Bank BNI</option>
                </select>
            </div> -->


            <br>


            <div class="mt-10">
                <dt class="col-sm-4">Upload Bukti Pembayaran</dt>

                <input type="file" name="bukti_pembayaran" placeholder=""
                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                class="single-input">
            </div>
<br>
<br>
<br>

            <div class="form-group text-left">
                <td>
                    <a class="btn btn-danger" href="<?=base_url('StatusPesanan'); ?>">Kembali</a>
                </td>
                <button type="submit" value="upload" class="btn btn-primary"> Upload Bukti</button>
            </div>
        </div>
    </form>

<?php endforeach;  ?>
</div>

</div>

</section>



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