<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
    <div class="card-header">
        Konfirmasi Pembayaran :
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="table-responsive-sm">
         <table class="table table-hover" id="example">
            <thead>
                <tr align="center">
                    <th scope="col">No</th> 
                    <th scope="col" >Nama Lengkap</th>
                    <th scope="col" >Nama Bank</th>
                    <th scope="col" >No Rekening</th>
                    <th scope="col"  >Bukti Pembayaran</th>
                    <th scope="col" >Status Pembayaran</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>  
            <tbody>
                <?php
                $no = 1; 
                foreach ($bukti as $row): 
                    if($this->session->userdata('id') == 1){
                        if($row['rekening_tujuan'] === 'Bank BNI 0387107158'){
                            ?>
                            <tr>
                                <td><b><?php echo $no.'.';?></b></td>
                                <td><?php echo $row['nama_lengkap']; ?></td>              
                                <td><?php echo $row['nama_bank']; ?></td>              
                                <td><?php echo $row['nomor_rekening']; ?></td>                             
                                <td style="width:1%;" class="text-center"><img class="img-thumbnail" src="<?=base_url('assets/buktiPembayaran/') . $row['bukti_pembayaran']; ?>" > 
                                </td>
                                <td><?php echo $row['status_pembayaran']; ?></td>
                                <td align="center">  
                                  <?php if ($row['status_pembayaran'] == 'Pembayaran Terkonfirmasi'){ ?>
                                    <div class="text-center mt-3"><i class="fas fa-check-circle" style="color:green"></i></div>
                                    
                                <?php }else{ ?>
                                    <a href="<?php echo site_url('Uploadbukti_admin/konfirmasi/' . $row['id_upload']); ?>" class="btn btn-success btn-sm float-left mr-1" role="button"><i class="fas fa-check"></i> Konfirmasi</a>
                                                                    <br>
                                <br>
                                    <a href="<?php echo site_url('Uploadbukti_admin/detail/' . $row['id_upload']); ?>" class="btn badge-primary btn-sm " role="button"><i></i> Detail</a>
                                                                    <br>
                                <br>
                                    <a href="<?php echo site_url('Uploadbukti_admin/unkonfirmasi/' . $row['id_upload']); ?>" class="btn badge-primary btn-sm " role="button"><i class="fas fa-check"></i> Belum Dikonfirmasi</a>
                                <br>
                                <br>

                                <?php   }?>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        ?>
                        <?php 
                    }
                }else{ 
                    if($row['rekening_tujuan'] === 'Bank BRI Syariah 1037964235'){
                        ?>
                        <tr>
                            <td><b><?php echo $no.'.';?></b></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>              
                            <td><?php echo $row['nama_bank']; ?></td>              
                            <td><?php echo $row['nomor_rekening']; ?></td>                             
                            <td style="width:1%;" class="text-center"><img class="img-thumbnail" src="<?=base_url('assets/buktiPembayaran/') . $row['bukti_pembayaran']; ?>" > 
                            </td>
                            <td><?php echo $row['status_pembayaran']; ?></td>
                            <td align="center">  
                              <?php if ($row['status_pembayaran'] == 'Pembayaran Terkonfirmasi'){ ?>
                                <div class="text-center mt-3"><i class="fas fa-check-circle" style="color:green"></i></div>

                            <?php }else{ ?>
                
                                <a href="<?php echo site_url('Uploadbukti_admin/konfirmasi/' . $row['id_upload']); ?>" class="btn btn-success btn-sm float-left mr-1" role="button"><i class="fas fa-check"></i> Konfirmasi</a>
                                <br>
                                <br>

                                <a href="<?php echo site_url('Uploadbukti_admin/detail/' . $row['id_upload']); ?>" class="btn badge-primary btn-sm " role="button"><i ></i> Detail</a>
                                <br>
                                <br>
                                
                                <a href="<?php echo site_url('Uploadbukti_admin/unkonfirmasi/' . $row['id_upload']); ?>" class="btn badge-danger btn-sm " role="button"><i class="fas fa-times"></i> Belum Dikonfirmasi</a>

                            <?php   }?>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    ?>
                <?php } } ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>



