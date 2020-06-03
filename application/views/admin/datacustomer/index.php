<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
  <div class="card-header">
    Data Customer :
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
        <tr align="center">
          <th scope="col">No</th> 
          <th scope="col" >Foto KTP</th>
          <th scope="col">Nama Lengkap</th> 
          <th scope="col">Email</th>
          <th scope="col" >Nomor Handphone</th>
          <th scope="col" >Nomor Rekening</th>
          <th scope="col" >Status</th>
          <th scope="col" width="187">Action</th>
        </tr>
      </thead> 
      <tbody>
        <?php
        $no = 1; 
        foreach ($customer as $row): ?>
          <tr>
            <td align="center"><b><?php echo $no.'.';?></b></td>
            <td style="width:10%;" class="text-center"><img class="img-thumbnail" src="<?=base_url('assets/foto/') . $row['foto_ktp']; ?>" > </td>
            <td><?php echo $row['nama_lengkap']; ?></td>
            <td><?php echo $row['email']; ?></td>                 
            <td><?php echo $row['nomor_hp']; ?></td>
            <td><?php echo $row['nomor_rekening']; ?></td>
            <td align="center">
              <?php if ($row['is_active'] == 'aktif'){
               echo '<div class="text-center mt-3"><i class="fas fa-check-circle" style="color:green"></i></div>';
             }else{
              echo  ' <div class="text-center mt-3"><i class="fas fa-times-circle"style="color:red"></i></div>';
            }?>
          </td>
          <td align="center">   
            <?php if ($row['is_active'] == 'aktif'){ ?>

              <a href="<?php echo site_url('Customer/deactive_user/' . $row['id']); ?>" class="btn badge-danger  btn-sm " role="button"><i ></i> Blokir</a><br><br>
              <a href="<?php echo site_url('Customer/detail/' . $row['id']); ?>" class="btn badge-primary btn-sm " role="button"><i ></i> Detail</a>

            <?php }else{ ?>

             <a href="<?php echo site_url('Customer/active_user/' . $row['id']); ?>" class="btn badge-success btn-sm" role="button"><i ></i> Aktifkan</a><br><br>
             <a href="<?php echo site_url('Customer/detail/' . $row['id']); ?>" class="btn badge-primary btn-sm " role="button"><i ></i> Detail</a>

           <?php   }?>
         </td>
       </tr>
       <?php
       $no++;
       ?>
     <?php endforeach; ?>
   </tbody>
 </table>
</div>
</div>
</div>