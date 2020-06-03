<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
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
    .iniestetika {
     font-size: 30px;
     background-color: yellow;
     font-family:'Roboto',sans-serif;
 }
 .iniaturform {
     font-size: 18px;
     margin-top: 10px;

 }
 .inibackground {
    background-color: #663399;
    color: white;
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
                                     <h3 class="adit">JASTIPIN AJA </h3>
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


                             <a href="<?php echo site_url('auth_user/logout'); ?>" class="adit">


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


<!-- bradcam_area_start -->
<!-- Start Sample Area -->

<div class="inibackground">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100"><br><br><br><br><br>
                    <h1 class="inibackground">Pendaftaran Sebagai Traveler</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sample-text-area iniaturform">


    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Form Pendaftaran</h3>

                        <?php echo form_open_multipart('DaftarTraveler/create'); ?>
                        <div class="mt-10">
                            <input type="hidden" id="kode_traveler" name="kode_traveler" placeholder="Kode Traveler"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div>

                        <div class="mt-10">
                            <dt class="col-sm-4">Nama Lengkap</dt>

                            <input type="text" name="nama_lengkap" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div>

                        <div class="mt-10">
                            <dt class="col-sm-4">Email</dt>

                            <input type="email" name="email" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input" value="<?= set_value('email'); ?>">
                           <?php if (!empty(validation_errors())): ?>
                             <?= form_error('email', '<large class="text-danger pl-3">', '</large>'); ?>
                        <?php endif; ?>
                            
                        </div>

                        <div class="mt-10">
                            <dt class="col-sm-4">Password</dt>

                            <input type="password" minlength="5" name="password" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div>

                        <div class="mt-10">
                            <dt class="col-sm-4">Alamat</dt>

                            <input type="text" name="alamat" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div>
                        
                        <div class="input-group-icon mt-10" required>
                            <dt class="col-sm-4">Jenis Kelamin</dt>

                            <div class="icon"></div>
                            <div class="form-select" id="default-select" required>
                                <select name="jenis_kelamin" required>
                                    <option value="">--Pilih--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                            <div class="mt-10">
                                <dt class="col-sm-6">Nomor Handphone (WhatsApp)</dt>

                                <input type="text" minlength="11" maxlength="12" name="nomor_hp" placeholder=""
                                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                class="single-input">
                            <?php if (!empty(validation_errors())): ?>
                             <?= form_error('nomor_hp', '<large class="text-danger pl-3">', '</large>'); ?>
                        <?php endif; ?>
                            </div>

                            <div class="mt-10">
                                <dt class="col-sm-4">Nomor Rekening</dt>

                                <input type="text" minlength="10" maxlength="16" name="nomor_rekening" placeholder=""
                                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                class="single-input">
                                <?php if (!empty(validation_errors())): ?>
                             <?= form_error('nomor_rekening', '<large class="text-danger pl-3">', '</large>'); ?>
                        <?php endif; ?>
                            </div>

                            <div class="input-group-icon mt-10" required>
                                <dt class="col-sm-4">Nama Bank</dt>
                                <div class="icon"></div>
                                <div class="form-select" id="default-select" required>
                                    <select name="nama_bank" required>
                                        <option value="">--Pilih--</option>
                                        <option value="BNI">Bank BNI</option>
                                        <option value="BRI">Bank BRI</option>
                                        <option value="BCA">Bank BCA</option>
                                        <option value="BTPN">Bank BTPN</option>
                                        <option value="Mega">Bank Mega</option>
                                        <option value="Mandiri">Bank Mandiri</option>
                                        <option value="Permata">Bank Permata</option>
                                        <option value="BNI Syariah">Bank BNI Syariah</option>
                                        <option value="BRI Syariah">Bank BRI Syariah</option>
                                        <option value="Mandiri Syariah">Bank Mandiri Syariah</option>
                                        <option value="Muamalat">Bank Muamalat</option>
                                    </select>
                                </div>
                            </div>

                                <div class="mt-10">
                                    <dt class="col-sm-4">Nama Pemilik Rekening</dt>

                                    <input type="text" name="nama_pemilik" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>

                                <div class="mt-10">
                                    <dt class="col-sm-5">Link channel youtube anda</dt>

                                    <input type="text" name="channel" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>


                                <div class="mt-10">
                                    <dt class="col-sm-4">Upload Scan KTP Anda</dt>

                                    <input type="file" name="foto_ktp" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>

                                
                                <div class="form-group text-right">
                                    <td>
                                        <a href="<?=base_url('PilihanDaftar')?>" class="btn btn-success"> Kembali</a>
                                    </td>
                                    <button type="submit" value="upload" class="btn btn-primary"> Konfirmasi Sebagai Traveler</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </section>

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