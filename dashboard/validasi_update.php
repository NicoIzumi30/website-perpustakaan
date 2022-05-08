<?php
    $title =  "Edit Akun";
    require "includes/header.php";
    $id = $_GET['id'];
if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun_terbit'];
        $jenis = $_POST['jenis_buku'];
    if (!empty($_FILES['sampul']['name'])) {
        $sampul = $_FILES['sampul']['name'];
        $file = $_FILES['sampul']['tmp_name'];
     $path = "../assets/sampul/";
     move_uploaded_file($file, $path.$sampul);
      $sql =  "UPDATE buku SET judul = '$judul', pengarang =  '$pengarang', tahun_terbit = '$tahun', jenis_buku = '$jenis', sampul = '$sampul' WHERE no_buku = '$id'";
      $result = mysqli_query($conn, $sql);
  

}else{
     $sql =  "UPDATE buku SET judul = '$judul', pengarang =  '$pengarang', tahun_terbit = '$tahun', jenis_buku = '$jenis' WHERE no_buku = '$id'";
      $result = mysqli_query($conn, $sql);

}
   
           
        if ($result) {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."dashboard/buku.php'/>";
    }
    }

    


$sql = "SELECT * FROM buku WHERE no_buku = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

 ?>           

            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>Edit Buku</div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" value="<?=$row['judul'];?>" class="form-control" placeholder="Judul Buku" required>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="pengarang" value="<?=$row['pengarang'];?>" class="form-control" placeholder="Pengarang" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input type="number" name="tahun_terbit" value="<?=$row['tahun_terbit'];?>" class="form-control" placeholder="Tahun Terbit" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_buku">Jenis Buku</label>
                                <select class="form-control" id="jenis_buku" name="jenis_buku">
                                    <option><?=$row['jenis_buku'];?></option>
                                    <option value="Novel">Novel</option>
                                    <option value="Cergam">Cerita Bergambar</option>
                                    <option value="Komik">Komik</option>
                                    <option value="Ensiklopedia">Ensiklopedia</option>
                                    <option value="Antologi">Antologi</option>
                                    <option value="Biografi">Biografi</option>
                                </select>
                     </div>
                            <div class="form-group">
                                <label>Sampul</label>
                                <input type="file" name="sampul" class="form-control">
                                <img src="<?=BASE_URL;?>assets/sampul/<?=$row['sampul'];?>"  style="width:100px;" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
                            </div>
                            </div>
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