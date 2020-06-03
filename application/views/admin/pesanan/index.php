<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
  <div class="card-header">
    Update Status Pesanan 
  </div>
  <div class="card-body">
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
    <div class="table-responsive">
     <table class="table table-hover" id="example">
      <thead>
        <a class="btn btn-primary pull-right mb hp" href="<?=site_url('Pesanan/batal')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Pesanan Dibatalkan</a>&nbsp; &nbsp;
        <a class="btn btn-primary pull-right mb hp" href="<?=site_url('Pesanan/telahdikonfirmasi')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Pesanan Telah Dikonfirmasi</a>&nbsp; &nbsp;
        <a class="btn btn-primary pull-right mb hp" href="<?=site_url('Pesanan/pesanantelahdibayar')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Pesanan Telah Dibayar</a>&nbsp; &nbsp;
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
</div>