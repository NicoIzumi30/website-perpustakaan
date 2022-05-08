<?php 
$title = "Daftar Penjualan";
require "includes/header.php"


?>           


            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="bre<?=BASE_URL;?>breadcrumb-item">
                        <a href="http://localhost/izumi_game_shop/index.php">Dashboard/</a>
                    </li>
                    <li class="breadcrumb-item active">Peminjaman</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Table Peminjaman
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="bg-info">
                                        <th>No.</th>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Buku</th>
                                        <th>Lama peminjaman</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $query = mysqli_query($conn, "SELECT buku.*, pinjam.* FROM pinjam 
                                                            INNER JOIN buku on buku.no_buku = pinjam.no_buku
                                                          
                                                        ");

                                    $data = mysqli_fetch_assoc($query);
                                    
                                    if (mysqli_num_rows($query) > 0) {
                                    $no =1;

                                    do{
                                    ?>
                                        <tr>
                                            <td><?=$no++; ?></td>
                                            <?php
                                            $getIdUser = $data['id'];
                                            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = '$getIdUser'");
                                            $getUser = mysqli_fetch_assoc($sql);
                                            ?>
                                            <td><?=$getUser['nama']; ?></td>
                                            <td><?=$data['judul']; ?></td>
                                            <td  style='text-align:right'><?=$data['lama_peminjaman']; ?> Hari</td>
                                            <td  style='text-align:center'><?=$data['tgl_pinjam']; ?></td>
                                            <td  style='text-align:right'><?=$data['tgl_kembali']; ?></td>
                                            <td  style='text-align:right'><?=$data['status_peminjaman']; ?></td>
                                        </tr>
                                    <?php }while ($data = mysqli_fetch_assoc($query));
                                
                                }else{
                                    
                                }
                                ?>

                                </tbody>
                            </table>
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
    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>