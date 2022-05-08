<?php 
require "../config/connect.php";
if(!$_SESSION['home']) {
    echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>
    <link href="<?=BASE_URL;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/shop-homepage.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/custom.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/123.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49ce8739f2.js" crossorigin="anonymous"></script>


</head>

<body>
    <header>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark shadow-sm bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=BASE_URL;?>">
                    <h4 class="text-white">Perpustakaan
                        <!-- <img src="<?=BASE_URL;?>assets/img/nekokardus.png" class="mb-1" type="image/x-icon" width="35px"> -->
                    </h4>
        
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color:#fff !important ; " class="navbar-toggler-icon" > <i class="fas fa-bars color-primary2" style="font-size: 26px;"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mr-auto "></div>
                    <ul class="navbar-nav" >
                        <li class="nav-item" >
                        <a class="nav-link  active text-white" href="<?=BASE_URL;?>home" ><i class="fas fa-home" style=" "></i> Home</a >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?=BASE_URL;?>home/myBooks.php" ><i class="fa-solid fa-book-open-reader"></i></i> My Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="http://wa.me/6289652128296"><i class="fas fa-phone"></i> Contact</a>
                        </li>
                        <li class="nav-item dropdown no-arrow" style="margin-bottom: 2px;">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-fw"></i>Profil
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
            </header>
        
