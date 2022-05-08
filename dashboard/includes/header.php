<?php 
require "head.php"; 
if(!$_SESSION['dashboard']) {
    echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";
}
?>
<body id="page-top">

    <nav class="navbar navbar-expand shadow p-3 mb-0 bg-primary rounded static-top">

        <a class="navbar-brand mr-1 mb-2 font-weight-bold text-white" href="<?=BASE_URL;?>dashboard">Perpustakaan</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0 mb-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow" style="margin-bottom: 2px;">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw" style="color : #dfe1e0;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav sideb">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anggota.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Anggota</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buku.php">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="peminjaman.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Pinjam</span></a>
            </li>
        </ul>

        <div id="content-wrapper">