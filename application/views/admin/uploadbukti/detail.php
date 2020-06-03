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
          <h5 class="panel-title">Detail Bukti Pembayaran</h5>
          <div class="heading-elements">
          </div>
        </div>
        <?php
        foreach ($detail as $row): ?>
          <hr> 
          <div class="row print">
            <div class="col-sm-3" id="foto">
              <?php if (!empty($row['bukti_pembayaran'])) { ?>
                <img width="100%" height="250" class="text-center" src="<?=site_url('assets/buktipembayaran/'.$row['bukti_pembayaran'])?>" alt="Foto">
              <?php } else { ?>
                <img width="100%" height="250" class="text-center" src="<?=site_url('assets/buktipembayaran/')?>" alt="Foto">
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
                  <td>Nama Bank</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['nama_bank']; ?></td>
                </tr>
                <tr>
                  <td>No. Rekening</td>
                  <td width="1%">:</td>
                  <td> <?php echo $row['nomor_rekening']; ?></td>
                </tr>
            <tr>
              <td>Status Pembayaran</td>
              <td width="1%">:</td>
              <td><?php echo $row['status_pembayaran']; ?></td>
            </tr>
            <tr>
              <td>Rekening Tujuan</td>
              <td width="1%">:</td>
              <td> <?php echo $row['rekening_tujuan']; ?></td>
            </tr>
          </table>
        <?php endforeach; ?>
      </div>

      <div class="col-sm-2">
        <a class="btn btn-success pull-right mb hp" href="<?=site_url('Uploadbukti_admin')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a>
      </div>

      <div>
        <a href="<?php echo site_url('Uploadbukti_admin/konfirmasi/' . $row['id_upload']); ?>" class="btn btn-success btn-sm float-left mr-1" role="button"><i class="fas fa-check"></i> Konfirmasi</a>
        </div>

        <div>
         <a href="<?php echo site_url('Uploadbukti_admin/unkonfirmasi/' . $row['id_upload']); ?>" class="btn badge-danger btn-sm " role="button"><i class="fas fa-times"></i> Belum Dikonfirmasi</a>
        </div>

      </div>
      <br>
    </div>

  </div>
</div>
</body>
</html>