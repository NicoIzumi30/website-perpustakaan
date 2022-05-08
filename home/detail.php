<?php 
$title = "Detail Buku";
require 'include/header.php';
$no = $_GET['no'];
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM buku WHERE no_buku = '$no'");
$data = mysqli_fetch_assoc($sql);
$sqlU =  mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
$getId = mysqli_fetch_assoc($sqlU);
?>
<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-8 col-10 mt-3 mb-5">
            
                <div class="putihBesar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pt-2" style="background-color: #fff; color:black;">
                        <li class="breadcrumb-item"><a href="<?=BASE_URL;?>home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$data['judul'];?></li>
                    </ol>
                <div class="col lg-10 d-flex">
                
                </nav>
                    <h3 class=" pt-1 text-center"><?=$data['judul'];?></h3>
                    <div class="detail-buku">
                    <img src="<?=BASE_URL;?>assets/sampul/<?=$data['sampul'];?>" alt="Sampul Buku" class="images-sampul">
                    <div class="detail-info">
                    <div class="pengarang">
                    <br><p class="text-abu seline ml-3 pt-3">Pengarang</p>
                    <p class="seline mali20 small"><?=$data['pengarang'];?></p>
                    </div>
                    <div class="ttb">
                    <p class="text-abu seline ml-3 pt-3">Tahun Terbit</p>
                    <p class="seline mali22"><?=$data['tahun_terbit'];?></p>
                    </div>
                    <div class="ttb">
                    <p class="text-abu seline ml-3 pt-3">Jenis Buku</p>
                    <p class="seline mali23"><?=$data['jenis_buku'];?></p>
                    </div>
                    <div class="ttb">
                    <p class="text-abu seline ml-3 pt-3">Status</p>
                    <p class="seline mali26"><?=$data['status'];?></p>
                    </div>
                    <div class="ttb">
                        <?php if($data['status'] == "Ready") { ?>
                    <button type="button" class="btn btn-sm btn-success mali28" data-toggle="modal" data-target="#pinjam">
                            Pinjam
                        </button>
                        <?php } ?>
                    <hr>
                    </div>
                    <div class="ttb">
                    <h6 class="text-abu seline ml-3 pt-3">Sinopsis</h6>
                    <p class=" mali26"><?=$data['sinopsis'];?></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>

<div class="modal fade" id="pinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Pinjam Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10">
                    <form method="post" action="peminjaman.php" enctype="multipart/form-data">
                    <div class="form-group">
                                <label>Nama Peminjam</label>
                                <input type="text" name="nama_peminjam" readonly value="<?=$getId['nama']?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                                <label>Judul Buku</label>
                                <input type="text" name="judul_buku" readonly value="<?=$data['judul']?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                                <label>Lama Peminjaman(max 7 day)</label>
                                <input type="Number"  name="lama" min="1" max="7" name="" class="form-control" required>
                    </div>
                    <div class="form-group">
                                <input type="submit" name="pinjam" value="Pinjam" class="btn btn-sm btn-warning">
                    </div>
                    <input type="hidden" name="nobuk" value="<?=$data['no_buku']?>">
                    <input type="hidden" name="nabuk" value="<?=$data['judul']?>">
                    <input type="hidden" name="id" value="<?=$getId['id']?>">
                    <input type="hidden" name="nama" value="<?=$getId['nama']?>">
                    
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

<?php 
require 'include/footer.php'
?>