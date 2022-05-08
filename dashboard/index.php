<?php
 $title = "Dashboard Admin";
 require "includes/header.php";
 $anggota = mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE level = 'anggota'");
 $member = mysqli_fetch_assoc($anggota);
 $buku = mysqli_query($conn,"SELECT COUNT(*) FROM buku");
 $book = mysqli_fetch_assoc($buku);
 $pinja = mysqli_query($conn,"SELECT COUNT(*) FROM pinjam");
 $pinjam = mysqli_fetch_assoc($pinja);
 $getCount = $pinjam['COUNT(*)'];
 ?>
<div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="font-weight-bold" href="<?=BASE_URL;?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

        
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5"><?= $member['COUNT(*)']; ?> Anggota</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="anggota.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fas fa-solid fa-book-open"></i>
                                </div>
                                <div class="mr-5"><?= $book['COUNT(*)']; ?> Buku</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="buku.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5"><?=$getCount?> Laporan Peminjaman</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="peminjaman.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik tombol logout untuk menghapus seluruh sesi dan keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/chart-area-demo.js"></script>

</body>

</html>