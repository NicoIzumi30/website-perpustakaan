<?php 
require 'config/connect.php';
$nama = $_POST['nama'];
$username = $_POST['user'];
$pass = $_POST['pass'];
$password = md5($pass);
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];
$level = $_POST['level'];
$ins =  "INSERT INTO users VALUES ('','$nama','$username','$password','$alamat','$telp','$level')";
mysqli_query($conn, $ins);
header("location:index.php");
?>