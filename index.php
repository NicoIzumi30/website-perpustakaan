<?php 
require 'config/connect.php';
$err = "";
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);

		$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user' and password= '$pass'");
		$row = mysqli_num_rows($query);

		if ($row > 0) {
			$data = mysqli_fetch_assoc($query);
			if($data['level']=="admin"){
				$_SESSION['dashboard'] = true;
			  // alihkan ke halaman dashboard admin
			  header("location:dashboard");
			
			 // cek jika user login sebagai pegawai
			 }else if($data['level']=="anggota"){
			 
			  // buat session login dan username
			  $_SESSION['id'] = $data['id'];
			  $_SESSION['home'] = true;
			  // alihkan ke halaman dashboard pegawai
			  header("location:home/index.php");
			 }
			}else{
				// echo" gagal <br> ";
				$err = "username atau password salah";
			}
		}
 ?>
<html>
	<head>	
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="stylesheet" href="assets/css/style_login.css">
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500'  rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main-reg" style="margin-top: 140px;">
					<div  class="wrap">
						  <div class="Regisration" >
						  	<div class="Regisration-head">
						    	<h2 style="color: white"><span></span>Login Perpustakaan</h2>
						 	 </div>
							  	<form action="" method="post">
								<p><?=$err?></p>
					           <input type="text" name="user" id="user" class="username" placeholder="Username">
					           <input type="password" name="pass" id="pass" class="password" placeholder="Password">
                               
                               
								<div class="p-container">
                                </div>
								<div class ="clear"></div>
												 
								<div class="submit">
									<input type="submit" name="login" onclick="myFunction()" value=" Login" >
								</div>
									<div class="clear"> </div>
                                    <div class="reg-member">
                                    <p>Belum punya akun?<a href="daftar.php"  style="color:white">Daftar</a></p>
                                    </div>
								</div>
					</div>
			</div>
				<!--//End-login-form-->	
			  </div>
	</body>
</html>

