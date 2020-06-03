<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h2>Dashboard</h2>
<!-- Content Row -->
<div class="row">

  <!-- Total Pengguna yang terdaftar -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengguna Terdaftar</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $content->num_rows() ;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-user fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Pesanan -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pesanan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $contentt->num_rows() ;?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  
</div>
</div>