<?php
    $title =  "Edit Anggota";
    require "includes/header.php";
$id =$_GET['id'];
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_telp'];
    $query = mysqli_query($conn, "UPDATE users SET nama = '$nama', alamat = '$alamat', no_telp = '$telp' WHERE id = '$id'");
    if ($query) {
        // ke kategori.php
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."dashboard/anggota.php'/>";
    }
}
$sql = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id' ");
$data = mysqli_fetch_assoc($sql);

// $query = mysqli_query($conn, "SELECT nama_kategori FROM ketegori WHERE id_kategori = '$id'");
// $data = mysqli_fetch_assoc($query);

 ?>           

            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Anggota</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>Edit Anggota</div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                
                                <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp']; ?>" placeholder="No Telp" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
                            </div>

                        </form>
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
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>

</body>

</html>