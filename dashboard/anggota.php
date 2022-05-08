<?php 
$title = "Daftar Anggota";
require "includes/header.php"
?>           
         <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="http://localhost/perpustakaan/dashboard/">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Anggota</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>  Data Anggota
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $query = mysqli_query($conn, "SELECT * FROM users WHERE level = 'anggota' ");
                                    $data = mysqli_fetch_assoc($query);
                                    if (mysqli_num_rows($query) > 0) {
                                    $no =1;
                                    do{
                                    ?>
                                        <tr>
                                            <td><?=$no++; ?></td>
                                            <td><?=$data['nama']; ?></td>
                                            <td><?=$data['alamat']; ?></td>
                                            <td><?=$data['no_telp']; ?></td>
                                            <td class="text-center">
                                                <a href="delete_anggota.php?id=<?=$data['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus anggota ini? ')">hapus</a>
                                                <a href="update_anggota.php?id=<?=$data['id'];?>" class="btn btn-sm btn-info">edit</a>
                                               
                                            </td>
                                        </tr>
                                    <?php }while ($data = mysqli_fetch_assoc($query));
                                }else{
                                    echo "<tr><td colspan='3'><center>Belum Ada Data</center></td></tr>";

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