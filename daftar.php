<html>
	<head>	
		<title>Daftar</title>
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
				<div class="main-reg">
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2 style="color: white"><span></span>Daftar Perpustakaan</h2>
						 	 </div>
							  	<form action="add_anggota.php" method="post">
					           <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"  autocomplete='off'>
					           <input type="text" name="user" id="user" class="username" placeholder="Username"  autocomplete='off'>
					           <input type="password" name="pass" id="pass" class="password" placeholder="Password"  autocomplete='off'>
					           <input type="text" name="alamat" id="alamat" placeholder="Alamat"  autocomplete='off'>
					           <input type="number" name="no_telp" id="user" placeholder="No Telp"  autocomplete='off'> 
                               <input type="hidden" name="level" value="anggota">
                               
                               
								<div class="p-container">
                                </div>
								<div class ="clear"></div>
												 
								<div class="submit">
									<input type="submit" name="login" onclick="myFunction()" value=" Daftar" >
								</div>
									<div class="clear"> </div>
                                    <div class="reg-member">
                                    <p>Sudah punya akun?<a href="index.php">Masuk</a></p>
                                    </div>
								</div>
											
						  </form>
					</div>
											
						  </form>
					</div>
			</div>
				<!--//End-login-form-->	
			  </div>
	</body>
</html>

