<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Jasa Titip Barang Oleh-Oleh</title>

    <!-- StyleSheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">       
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <style type="text/css">
        main {
            margin-top: 0;
        }
        .toggle-button {
            cursor: pointer;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: calc(100vh - 56px);
            transition: all 0.3s;
        }
        .sidebar.toggled {
            margin-left: -250px;
        }

        .content {
            width: 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
            }
            .sidebar.toggled {
                margin-left: 0;
            }
        }
    </style>

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>       
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    




    <script type="text/javascript">
        $(document).ready(function () {
            $(".toggle-button").on("click", function () {
                $(".sidebar").toggleClass("toggled");
            });
        });

        $(document).ready(function() {
           $('#example').DataTable();
       } );
   </script>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-success">
        <a class="toggle-button text-light mr-3"><i class="fa fa-bars"></i></a>
        <a class="navbar-brand" href="<?php echo site_url(); ?>">JASTIPIN AJA</a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('Admin/auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="d-flex">
        <nav class="sidebar sidebar-nav bg-light p-2 shadow">
            <div class="list-group">
                <a href="<?php echo site_url('dashboard'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Beranda</a>

                <a href="<?php echo site_url('Customer'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-book-reader"></i> Kelola Data Customer</a>

                <a href="<?php echo site_url('Traveler'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-book-reader"></i> Kelola Data Traveler</a>
                
                <a href="<?php echo site_url('Uploadbukti_admin'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-chart-pie"></i> Update Status Pembayaran</a>

                <!-- <a href="<?php echo site_url('Updatepesanan_admin'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-address-book"></i> Update Status Pesanan</a> -->


                <a href="<?php echo site_url('Pesanan'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-cart-plus"></i> Status Pesanan</a> 

                <a href="<?php echo site_url('Laporan'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-file"></i> Laporan Transaksi</a>
                
                <a href="<?php echo site_url('Auth/logout'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i> Logout</a>
                

            </div>
        </nav>

        <div class="content p-5">
            <?php echo isset($content) ? $content : ''; ?>
        </div>
    </main>
</body>
</html>