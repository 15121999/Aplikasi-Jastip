<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div class="card-body">
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Detail Informasi Data Customer</h5>
          <div class="heading-elements">
          </div>
        </div>
        <?php
        foreach ($detail as $row): ?> 
          <hr>
          <div class="row print">
            <div class="col-sm-3" id="foto">
              <?php if (!empty($row['foto_ktp'])) { ?>
                <img width="100%" height="250" class="text-center" src="<?=site_url('assets/foto/'.$row['foto_ktp'])?>" alt="Foto">
              <?php } else { ?>
                <img width="100%" height="250" class="text-center" src="<?=site_url('assets/foto/')?>" alt="Foto">
              <?php } ?>
            </div>
            <div class="col-sm-7" id="data">

              <table width="100%">
                <tr>
                  <td width="150px">Nama Lengkap</td>
                  <td width="5px">:</td>
                  <td> <?php echo $row['nama_lengkap']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['email']; ?></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['password']; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['alamat']; ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td width="1%">:</td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                  <td>Nomor Handphone</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['nomor_hp']; ?></td>
                </tr>
                <tr>
                  <td>Nomor Rekening</td>
                  <td width="1%">:</td>
                  <td><?php echo $row['nomor_rekening']; ?></td>
                </tr>
                <tr>
                  <td>Nama Bank</td>
                  <td width="1%">:</td>
                  <td><?php echo $row['nama_bank']; ?></td>
                </tr>
                <tr>
                  <td>Nama Pemilik</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['nama_pemillik']; ?></td>
                </tr>
                <tr>  
                 <td>Status</td>
                 <td width="1%">:</td>
                 <td> <?php echo $row['is_active']; ?></td>
               </tr>
             </table>
           <?php endforeach; ?>
         </div>
         <div class="col-sm-2">
          <a class="btn btn-success pull-right mb hp" href="<?=site_url('Customer')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>