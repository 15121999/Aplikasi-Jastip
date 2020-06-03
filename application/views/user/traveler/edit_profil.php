<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edit Profil</title>
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
                 <a href="<?=base_url('beranda_userT')?>">
                  <h3 class="adit">JASTIPIN AJA </h3>
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
          <h1 class="inihuruf">Edit Profil</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- bradcam_area_end -->
<!-- ================ contact section start ================= -->



<div class="whole-wrap">
 <div class="container box_1170">
  <div class="section-top-border">
   <div class="row">
    <div class="col-lg-8 col-md-8">
     <h3 class="mb-30">Form Edit Profil</h3>

     <?php echo form_open_multipart('ProfilTraveler/edit'); ?>

     <!-- <h5>*apabila anda merubah email saat edit profil, diwajibkan untuk melakukan login ulang</h5> -->
    

     <div class="mt-10">
      <input type="hidden" id="id" name="id" placeholder="id"
      onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
      class="single-input">
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Nama Lengkap</dt>

      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $edit['nama_lengkap']; ?>" required>
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Email</dt>

      <input type="text" class="form-control" id="email" name="email" value="<?php echo $edit['email']; ?>" required readonly>
      <?php if (!empty(validation_errors())): ?>
        <?= form_error('email', '<large class="text-danger pl-3">', '</large>'); ?>
      <?php endif; ?>
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Alamat</dt>

      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $edit['alamat']; ?>" required>
    </div>

    <div class="input-group-icon mt-10">
      <dt class="col-sm-4">Jenis Kelamin</dt>

      <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $edit['jenis_kelamin']; ?>" readonly>
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Nomor Handphone (WhatsApp)</dt>

      <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?php echo $edit['nomor_hp']; ?>" required>
    </div>


    <div class="mt-10">
      <dt class="col-sm-4">Nomor Rekening</dt>

      <input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" value="<?php echo $edit['nomor_rekening']; ?>" readonly>
    </div>


    <div class="mt-10">
      <dt class="col-sm-4">Nama Bank</dt>

      <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?php echo $edit['nama_bank']; ?>" readonly>
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Nama Pemilik Rekening</dt>
      <input type="text" class="form-control" id="nama_pemillik" name="nama_pemillik" value="<?php echo $edit['nama_pemillik']; ?>" readonly>
    </div>

    <div class="mt-10">
      <dt class="col-sm-4">Channel YouTube</dt>
      <input type="text" class="form-control" id="nama_pemillik" name="channel" value="<?php echo $edit['channel']; ?>" readonly>
    </div>


    <br>
    <div class="form-group text-right">
     <td>
      <a class="genric-btn danger radius" href="<?=base_url('ProfilTraveler/detail'); ?>">Kembali</a>
    </td>
    <button type="submit" value="upload" class="genric-btn info radius">Update Data</button>

  </div>
</div>
</form>
</div>
</div>

</div>

</div>






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