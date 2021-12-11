<?php
require 'cek-sesi.php';
include 'head.php';
include 'view.php';
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <?php
    require 'koneksi.php';
    require('sidebar.php'); ?>
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php require('navbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-4 text-gray-800">Selamat Datang
                <?= $_SESSION['nama']; ?>
            </h1>
            <!-- Page Heading -->
            <div class="row mb-2">

            </div>
            <div class="row mb-2">
                <div class="col-xl-3 col-md-5 mb-4">
                    <div class="card  text-center shadow h-100 ">
                        <div class="card-header bg-primary text-light h6 font-weight-bold">stok barang</div>
                        <div class="card-body">
                            <div class="col mr-2">
                                <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $jml_stok_brg; ?> Buah</div>
                            </div>
                        </div>
                        <div class="card-footer h6 font-weight-bold text-gray-800"><a href='stok.php'>Table Stok <i class='fa fa-arrow-right'></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-5 mb-4">
                    <div class="card  text-center shadow h-100 ">
                        <div class="card-header bg-primary text-light h6 font-weight-bold">Jenis Barang</div>
                        <div class="card-body">
                            <div class="col mr-2">
                                <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $jml_jenis; ?> Jenis</div>
                            </div>
                        </div>
                        <div class="card-footer h6 font-weight-bold text-gray-800"><a href='stok.php'>Table Stok <i class='fa fa-arrow-right'></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-5 mb-4">
                    <div class="card  text-center shadow h-100 ">
                        <div class="card-header bg-primary text-light h6 font-weight-bold">Barang Yang Terjual</div>
                        <div class="card-body">
                            <div class="col mr-2">
                                <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $terjual; ?> </div>
                            </div>
                        </div>
                        <div class="card-footer h6 font-weight-bold text-gray-800"><a href='laporan.php'>Table Laporan <i class='fa fa-arrow-right'></i></a></div>
                    </div>
                </div>
            </div>


            <h3> Pemasukan keseluruhan = Rp. <?= number_format($untung, 0, ',', '.'); ?></h3>

            <h3> Pengeluaran Uang (Modal) = Rp. <?= number_format($modal, 0, ',', '.'); ?></h3>

            <h3>Pemasukan Hari Ini = Rp.<?= number_format($harian, 0, ',', '.'); ?> </h3>




        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require 'footer.php' ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php require 'logout-modal.php' ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>