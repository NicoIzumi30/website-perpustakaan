<?php 
require '../config/connect.php';
$getIdPinjam = $_GET['id'];
$qeury = mysqli_query($conn, "SELECT * FROM pinjam WHERE id_pinjam = '$getIdPinjam'");
$getData = mysqli_fetch_assoc($qeury);
$getNoBuku = $getData['no_buku'];
mysqli_query($conn, "UPDATE pinjam SET status_peminjaman = 'Sudah Dikembalikan' WHERE id_pinjam = '$getIdPinjam'");
mysqli_query($conn, "UPDATE buku SET status = 'Ready' WHERE no_buku = '$getNoBuku'");
header("location:myBooks.php");

?>