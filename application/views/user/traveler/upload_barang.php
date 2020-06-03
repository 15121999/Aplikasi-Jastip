<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upload Jadwal</title>
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
    .inipesan {
        color: red;
        font-size: 12px;
        font-family: calibri;
    }
    .iniprofil {
        color: yellow;
        font-size: 16px
    }
    .inihuruf {
        color: white;
        font-size: 45px;
    }
</style>

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
                                            <li><a  href="<?=base_url('beranda_userT')?>">Beranda</a></li>

                                            <li><a class="active" href="javascript:void(0)">Upload Jadwal</a></li>

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
                                        <span class="iniuserdata"><?php
                                        $email=$this->session->email;
                                        echo "$email";  ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div align="center">
                                            <a class="fa fa-user iniprofil" href="<?=base_url('ProfilTraveler/detail')?>"> Profil
                                                <br>

                                            </a>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;

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


    <!-- bradcam_area_start -->
    <!-- Start Sample Area -->

    <div class="inibackground">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100"><br><br><br><br><br>
                        <h1 class="inihuruf">Publikasikan Keberangkatan Anda</h1>
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
                            <h3 class="mb-30">Halaman Publikasi</h3>

                            <?php echo form_open_multipart('Uploadbarang/create'); ?>
                            <div class="mt-10">
                                <input type="hidden" id="id_jadwal" name="id_jadwal" placeholder=""
                                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                class="single-input">
                            </div>

                            <div class="mt-10">
                                <dt class="col-sm-4"></dt>

                                <input type="hidden" name="id_pengguna" value="<?php
                                $id=$this->session->id;
                                echo "$id";  ?>" placeholder=""
                                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                class="single-input" readonly>
                            </div>


<!--                                 <div class="mt-10">
                                    <dt class="col-sm-4">Gambar barang 1</dt>

                                    <input type="file" name="gmbr1" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>

                            <div class="mt-10">
                                <textarea name="ketgmbr1" class="single-textarea" placeholder="Keterangan barang 1 berisi lokasi tempat barang dijual, jenis barang apa yag direkomedasikan" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Message'" required></textarea>
                            </div>



                                <div class="mt-10">
                                    <dt class="col-sm-4">Gambar barang 2</dt>

                                    <input type="file" name="gmbr2" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>

                            <div class="mt-10">
                                <textarea name="ketgmbr2" class="single-textarea" placeholder="Keterangan barang 2 berisi lokasi tempat barang dijual, jenis barang apa yag direkomedasikan" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Message'" required></textarea>
                            </div> -->




<!--                             <div class="input-group-icon mt-10">
                                <dt class="col-sm-4">Jenis Barang</dt>

                                <div class="icon"></div>
                                <div class="form-select" id="default-select"">
                                    <select name="jenis">
                                        <option value="">--Pilih--</option>
                                        <option value="Barang oleh-oleh">Barang oleh-oleh</option>
                                        <option value="Makanan kering">Makanan kering</option>
                                    </select>
                                </div> -->



                                <div class="mt-10">
                                    <dt class="col-sm-4">Harga Jasa barang per-kg</dt>

                                    <input type="text" min="0" name="harga" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                    <?php if (!empty(validation_errors())): ?>
                                    <?= form_error('harga', '<large class="text-danger pl-3">', '</large>'); ?>
                                    <?php endif; ?>
                                </div>


                                <div class="input-group-icon mt-10">
                                    <dt class="col-sm-4">Maksimal Berat</dt>
                                    <div class="icon"></div>
                                    <div class="input-group-icon mt-1">
                                      <label class="sr-only" for="inlineFormInputGroup"></label>
                                      <div class="form-select" id="default-select"">
                                          <select name="maks_berat">
                                            <option value="">--Pilih--</option>
                                            <option value="1 Kg">1</option>
                                            <option value="2 Kg">2</option>
                                            <option value="3 Kg">3</option>
                                            <option value="4 Kg">4</option>
                                            <option value="5 Kg">5</option>
                                            <option value="6 Kg">6</option>
                                            <option value="7 Kg">7</option>
                                            <option value="8 Kg">8</option>
                                            <option value="9 Kg">9</option>
                                            <option value="10 Kg">10</option>
                                        </select>
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Kg</div>
                                      </div>
                                  </div>
                              </div>
                          </div>

 <!-- 
                          <div class="mt-10">
                            <dt class="col-sm-4">Upload Foto Barang</dt>

                            <input type="file" name="foto_barang" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div> -->


<!--                         <div class="mt-10">
                            <dt class="col-sm-4 fa fa-plane"> Kota Tujuan</dt>

                            <input type="text" name="kota_tujuan" placeholder=""
                            onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                            class="single-input">
                        </div> -->
                        <div class="input-group-icon mt-10">
                            <dt class="col-sm-4 fa fa-plane"> Kota Asal</dt>
                            <div class="icon"></div>
                            <div class="form-select" id="default-select" required>
                                <select name="kota_asal" required="">
                                    <option value="">--Pilih Kota Asal--</option>
                                    <option value="Banda Aceh">Banda Aceh</option>
                                    <option value="Medan">Medan</option>
                                    <option value="Padang">Padang</option>
                                    <option value="Pekanbaru">Pekanbaru</option>
                                    <option value="Tanjung Pinang">Tanjung Pinang</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Palembang">Palembang</option>
                                    <option value="Pangkalpinang">Pangkalpinang</option>
                                    <option value="Banda Lampung">Bandar Lampung</option>
                                    <option value="Serang">Serang</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Semarang">Semarang</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Denpasar">Denpasar</option>
                                    <option value="Mataram">Mataram</option>
                                    <option value="Kupang">Kupang</option>
                                    <option value="Tanjungselor">Tanjungselor</option>
                                    <option value="Pontianak">Pontianak</option>
                                    <option value="Palangkaraya">Palangkaraya</option>
                                    <option value="Banjarmasin">Banjarmasin</option>
                                    <option value="Samarinda">Samarinda</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Manado">Manado</option>
                                    <option value="Mamuju">Mamuju</option>
                                    <option value="Palu">Palu</option>
                                    <option value="Makassar">Makassar</option>
                                    <option value="Kendari">Kendari</option>
                                    <option value="Sofifi">Sofifi</option>
                                    <option value="Ambon">Ambon</option>
                                    <option value="Manokwari">Manokwari</option>
                                    <option value="Jayapura">Jayapura</option>
                                </select>
                            </div>



                            <div class="input-group-icon mt-10">
                                <dt class="col-sm-4 fa fa-plane"> Kota Tujuan</dt>
                                <div class="icon"></div>
                                <div class="form-select" id="default-select" required>
                                    <select name="kota_tujuan" required="">
                                        <option value="">--Pilih Kota Tujuan--</option>
                                        <option value="Banda Aceh">Banda Aceh</option>
                                        <option value="Medan">Medan</option>
                                        <option value="Padang">Padang</option>
                                        <option value="Pekanbaru">Pekanbaru</option>
                                        <option value="Tanjung Pinang">Tanjung Pinang</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Pangkalpinang">Pangkalpinang</option>
                                        <option value="Banda Lampung">Banda Lampung</option>
                                        <option value="Serang">Serang</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Denpasar">Denpasar</option>
                                        <option value="Mataram">Mataram</option>
                                        <option value="Kupang">Kupang</option>
                                        <option value="Tanjungselor">Tanjungselor</option>
                                        <option value="Pontianak">Pontianak</option>
                                        <option value="Palangkaraya">Palangkaraya</option>
                                        <option value="Banjarmasin">Banjarmasin</option>
                                        <option value="Samarinda">Samarinda</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Manado">Manado</option>
                                        <option value="Mamuju">Mamuju</option>
                                        <option value="Palu">Palu</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Kendari">Kendari</option>
                                        <option value="Sofifi">Sofifi</option>
                                        <option value="Ambon">Ambon</option>
                                        <option value="Manokwari">Manokwari</option>
                                        <option value="Jayapura">Jayapura</option>
                                    </select>
                                </div>










                                <div class="mt-10">
                                    <dt class="col-sm-4">Jadwal Keberangkatan</dt>

                                    <input type="date" name="jadwal_keberangkatan" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input" min="<?=date('Y-m-d')?>">
                                </div>


                                <div class="mt-10">
                                    <dt class="col-sm-4">Jadwal Kedatangan</dt>

                                    <input type="date" name="jadwal_kedatangan" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input" min="<?=date('Y-m-d')?>">
                                </div>


                                <div class="mt-10">
                                    <p class="">Format waktu yang digunakan adalah format 12 Jam</p>

                                    <dt class="col-sm-4">Waktu Kedatangan</dt>

                                    <input type="time" name="waktu_kedatangan" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                                </div>


                                <div class="form-group text-right">

                                    <button type="submit" value="upload" class="btn btn-primary"> Publikasikan</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <br>
                <br>

                <p class="inipesan">*dalam penentuan harga barang per-kg, traveler tidak diperbolehkan memasukkan nominal angka yang tidak masuk akal<br>
                apabila traveler tetap tidak menghiraukan pesan ini, kami sebagai admin akan menindaklanjuti permasalahan ini</p>



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