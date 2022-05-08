<?php 
$title = "Peminjaman";
require 'include/header.php';
date_default_timezone_set('Asia/Jakarta');
$id = $_POST['id'];
$nobuk = $_POST['nobuk'];
$nabuk = $_POST['nabuk'];
$nama = $_POST['nama'];
$lama = $_POST['lama'];
$jangka = (int)$lama;
$now = date("d-M-Y");// pendefinisian tanggal awal
$next = date('d-M-Y', strtotime('+'.$jangka.'days', strtotime($now))); 
mysqli_query($conn, "INSERT INTO pinjam (id, no_buku, tgl_pinjam, tgl_kembali, status_peminjaman) value ('$id','$nobuk','$now', '$next','Di Pinjam')");
mysqli_query($conn, "UPDATE buku SET status = 'Di Pinjam' WHERE no_buku = '$nobuk'");



?>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm p-3 min-vh-100 row justify-content-center">
                <div class="col-10 mt-5">
                    <h1 class="text-info">Buku Berhasil Dipinjam</h1>
                    <table id="orderTable" class="table table-stripped">
                            <thead class="bg-info text-white">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Peminjam</td>
                                    <td>Nama Buku</td>
                                    <td>Lama Peminjaman</td>
                                    <td>Tanggal Peminjaman</td>
                                    <td>Tanggal Pengembalian</td>
                                </tr>
                            </thead>
                            <tbody>              
                                    <tr>
                                        <td>1</td>
                                        <td><?=$nama?></td>
                                        <td><?=$nabuk?></td>
                                        <td><?=$lama?> Hari</td>
                                        <td><?=$now?></td>
                                        <td><?=$next?></td>
                                    </tr>
                            </tbody>
                    </table>
                    <a href="<?=BASE_URL?>home"><p class="fora text-center text-primary medium"><u>to home.....</u></p></a>
                </div>
            </div>
        </div>
    </div>











<?php 
require 'include/footer.php'
?>