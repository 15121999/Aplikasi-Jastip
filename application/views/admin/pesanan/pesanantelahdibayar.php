<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
  <div class="card-header">
    Pesanan Telah Dibayar
  </div>
  <div class="card-body">
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
    <div class="table-responsive-sm">
    	<a class="btn btn-primary pull-right mb hp" href="<?=site_url('Pesanan/batal')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Pesanan Dibatalkan</a>&nbsp; &nbsp;
      <a class="btn btn-primary pull-right mb hp" href="<?=site_url('Pesanan/telahdikonfirmasi')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Pesanan Telah Dikonfirmasi</a>&nbsp; &nbsp;
      <br></br>
      <table class="table table-hover" id="example">
        <thead>
          <tr>
            <th scope="col" >Id Pesanan</th>
            <th scope="col" >Tanggal Pemesanan</th>
            <th scope="col" >Nama Barang</th>
            <th scope="col" >Status Barang</th>
            <th scope="col" >No Rekening</th>
            <th scope="col" >Status Pembayaran</th>
            <th scope="col" >Status Customer</th>
            <th scope="col" >Status Traveler</th>
            <th scope="col" >Ubah Status</th>
          </tr>
        </thead> 
        <tbody>
          <?php
          $no = 1; 
          foreach ($pesanan as $row): ?>
            <tr> 
              <td align="center"><?php echo $row['id_pesanan']; ?></td>
              <td><?php echo $row['tgl_pesan']; ?></td>
              <td><?php echo $row['nama_barang']; ?></td>
              <td><?php echo $row['status_barang']; ?></td>
              <td><?php echo $row['nomor_rekening']; ?></td>
              <td><?php echo $row['status_pembayaran']; ?></td>
              <td><?php echo $row['konfirmasi_customer']; ?></td>
              <td><?php echo $row['status_traveler']; ?></td>
              <td align="center">
                <a href="<?php echo site_url('Pesanan/selesai/' . $row['id_pesanan']); ?>" class="btn badge-success btn-sm" role="button"><i ></i> Konfirmasi Pesanan Telah Selesai</a><br><br>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


