<?php
    $title =  "Tambah Buku";
    require "includes/head.php";
    if (isset($_POST['insert'])) {
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $sinopsis = $_POST['sinopsis'];
        $tahun = $_POST['tahun_terbit'];
        $jenis = $_POST['jenis_buku'];
        $sampul = $_FILES['sampul']['name'];
        $file = $_FILES['sampul']['tmp_name'];
        $status = $_POST['status'];
        $path = "../assets/sampul/";
        if (move_uploaded_file($file, $path.$sampul)) {
                $query = mysqli_query($conn, "INSERT INTO buku (judul, pengarang, sinopsis ,tahun_terbit, jenis_buku, sampul, status)
                value ('$judul','$pengarang','$sinopsis', '$tahun','$jenis', '$sampul', '$status')");
            if ($query) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."dashboard/buku.php'/>";
        }
    }else{
        echo "Buku gagal ditambahkan";
    }
    }

 ?>