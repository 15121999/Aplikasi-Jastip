<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
    <div class="card-header">
        Konfirmasi Pembayaran
    </div>
    <div class="card-body">
        <?php if (!empty(validation_errors())): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?php echo form_open_multipart('Uploadbukti_admin/edit/' . $bukti['id_upload']); ?>
        <input type="hidden" name="id_upload" value="<?php echo $bukti['id_upload']; ?>">
        <div class="form-group">
            <label for="id_pengguna">Id Pengguna</label>
            <input type="text" class="form-control" id="id_pengguna" name="id_pengguna" value="<?php echo $bukti['id_pengguna']; ?>" readonly>
        </div>

         <div class="form-group">
            <label for="nama_bank">Nama Bank</label>
            <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?php echo $bukti['nama_bank']; ?>" readonly>
        </div>

         <div class="form-group">
            <label for="nomor_rekening">No Rekening</label>
            <input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" value="<?php echo $bukti['nomor_rekening']; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="rekening_tujuan">Rek. Tujuan</label>
            <input type="text" class="form-control" id="rekening_tujuan" name="rekening_tujuan" value="<?php echo $bukti['rekening_tujuan']; ?>" readonly>
        </div>
        <div class="form-group">
        <div class="row print">
            <table width="100%">
            <label for="bukti_pembayaran">Bukti Pembayaran</label>
            <div class="col-sm-3" id="foto">
              <?php if (!empty($row['bukti_pembayaran'])) { ?>
                  <img width="100%" height="250" class="text-center" src="<?=site_url('assets/foto/'.$row['bukti_pembayaran'])?>" alt="Foto">
              <?php } else { ?>
                  <img width="100%" height="250" class="text-center" src="<?=site_url('assets/foto/')?>" alt="Foto">
              <?php } ?>
            </div>
           <div class="col-sm-7" id="data">
        </div>
            </table>
        </div>

        <div class="form-group">
            <label for="status_pembayaran">Status Pembayaran</label>
                        <select name="status_pembayaran">
                <option value="Belum dikonfirmasi">Belum dikonfirmasi</option>
                <option value="Telah Di Konfirmasi">Telah Di Konfirmasi</option>
            </select>
        </div>
        <div class="form-group text-right">
            <button type="button" class="btn btn-danger" onclick="window.location.href = '<?php echo site_url('Uploadbukti_admin/index'); ?>';"><i class="fas fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Konfirmasi Pembayaran</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
