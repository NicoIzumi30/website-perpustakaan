 <?php 
$title = "Daftar Buku";
require "includes/header.php"


?>           


            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="http://localhost/perpustakaan/dashboard/">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Buku</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Buku
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_book">
                            Tambah
                        </button>
                    </div >
	
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th width="18%">Judul</th>
                                        <th>Pengarang</th>
                                        <th>Tahun Terbit</th>
                                        <th>Jenis Buku</th>
                                        <th>Sampul</th>
                                        <th width="13%">Aksi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $query = mysqli_query($conn, "SELECT * FROM buku ");
                                    $data = mysqli_fetch_assoc($query);
                                    if (mysqli_num_rows($query) > 0) {
                                    $no =1;
                                    do{
                                    ?>
                                        <tr>
                                            <td><?=$no++; ?></td>
                                            <td><?=$data['judul']; ?></td>
                                            <td><?=$data['pengarang']; ?></td>
                                            <td><?=$data['tahun_terbit']; ?></td>
                                            <td><?=$data['jenis_buku']; ?></td>
                                            <td><img style="width: 100px;" src="<?=BASE_URL;?>assets/sampul/<?=$data['sampul']; ?>"></td>
                                            <td>
                                            <a href="delete_buku.php?id=<?=$data['no_buku']?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus buku ini? ')">Hapus</a>
                                            <a href="validasi_update.php?id=<?=$data['no_buku']?>" class="btn btn-sm btn-info">Edit</a>
                                            </td>
                                            <td><p class="btn btn-sm btn-warning"><?=$data['status']; ?></p></td>
                                        </tr>
                                    <?php }while ($data = mysqli_fetch_assoc($query));
                                    
                                }else{
                                    echo "<tr><td colspan='6'><center>Belum Ada Data</center></td></tr>";

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
    
<!-- Add Modal -->
    <div class="modal fade" id="add_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10">
                    <form method="post" action="add_buku.php" enctype="multipart/form-data">
                    <div class="form-group">
                                <label>Judul Buku</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
                    </div>
                    <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" required>
                    </div>
                    <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input type="Number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
                    </div>
                    <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" placeholder="Sinopsis"></textarea>
                   </div>
                    <div class="form-group">
                                <label for="jenis_buku">Jenis Buku</label>
                                <select class="form-control" id="jenis_buku" name="jenis_buku">
                                    <option>--Pilih Jenis Buku--</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Cergam">Pendidikan</option>
                                    <option value="Komik">Komik</option>
                                    <option value="Ensiklopedia">Ensiklopedia</option>
                                    <option value="Antologi">Antologi</option>
                                    <option value="Biografi">Biografi</option>
                                </select>
                     </div>
                     <div class="form-group">
                                <label>Sampul</label>
                                <input type="file" name="sampul" class="form-control" required>
                    </div>
                    <div class="form-group">
                                <input type="submit" name="insert" value="Tambah" class="btn btn-sm btn-info">
                    </div>
                    <input type="hidden" name="status" value="Ready">
                    </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                
            </div>
            </div>
        </div>
        </div>

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

   
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>