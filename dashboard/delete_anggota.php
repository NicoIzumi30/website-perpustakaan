<?php 
require 'includes/head.php';
$id = $_GET['id'];
$del = "DELETE FROM users WHERE id = '$id'";
$query = mysqli_query($conn, $del);
if ($query) {
	echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."dashboard/anggota.php'/>";
}
 ?>