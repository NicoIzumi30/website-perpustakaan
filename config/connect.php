<?php 
session_start();
$con = "localhost";
$usr = "root";
$pass = "";
$db = "perpustakaan";
$conn= mysqli_connect($con, $usr, $pass, $db);
define("BASE_URL", "http://localhost/perpustakaan/")
?>