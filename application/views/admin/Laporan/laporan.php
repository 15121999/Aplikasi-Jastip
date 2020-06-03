<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card">
    <div class="card-header">
        Laporan Transaksi :
    </div> 
   <form action="<?php echo site_url('Laporan/carilaporan');?>" class="" method="post">
        <div class="row col-md-4">
          <td>Dari Tanggal : </td>
          <input type="date"class="form-control " name="startdate" placeholder="Start Date" />
          <td>Sampai Tanggal :</td>
          <input type="date" class="form-control " name="enddate" placeholder="End Date">
          <button class="btn badge-primary btn-sm mt-4"><i class="fas fa-search">  Cari</i></button>
      </div>
  </form>
  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>    
  <script type="text/javascript">
     $(document).ready(function() {
        $('#example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'pdf', 'print'
            ]
        } );
    } );
</script>

<div class="table-responsive-sm">
   <table class="table table-hover" id="example1">
    <thead>
        <tr>
            <th scope="col">No</th> 
            <th scope="col" >Tanggal Pesanan</th>
            <th scope="col" >Nama Customer</th>
            <th scope="col">Nama Barang</th>
            <th scope="col" >Jenis</th>
            <th scope="col" >Jumlah Barang</th>
            <th scope="col" >Harga Barang</th>
            <th scope="col" >Status Pesanan</th>
        </tr>
    </thead>
    <tbody> 
        <?php
        $no = 1; 
        foreach ($laporan as $row): ?>
            <tr>
                <td><b><?php echo $no.'.';?></b></td>
                <td><?php echo $row['tgl_pesan']; ?></td>                
                <td><?php echo $row['nama_lengkap']; ?></td>                
                <td><?php echo $row['nama_barang']; ?></td> 
                <td><?php echo $row['jenis']; ?></td>
                <td><?php echo $row['jumlah_barang']; ?></td>
                <td><?php echo "Rp".number_format( $row['harga_barang']).",-";?></td>
                <td><?php echo $row['status_barang']; ?></td>
            </tr>
            <?php
            $no++;
            ?>
        <?php endforeach; ?>
    </tbody>
</table> 
</div>
</div>