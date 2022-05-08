<?php 
$title = "My Books";
require 'include/header.php';
$getIdUser = $_SESSION['id'];
?>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm p-3 min-vh-100 row justify-content-center">
                <div class="col-9 mt-5">
                    <h1 class="text-info">My Books</h1>
                    <table id="orderTable" class="table table-stripped" border="2px solid black" style="border-top-style: 1px;">
                            <thead class="bg-info text-white">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Buku</td>
                                    <td>Lama Peminjaman</td>
                                    <td>Tanggal Peminjaman</td>
                                    <td>Tanggal Pengembalian</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>        
                             <?php 
                             $query = mysqli_query($conn, "SELECT buku.*, pinjam.* FROM pinjam 
                                                     INNER JOIN buku on buku.no_buku = pinjam.no_buku
                                                     WHERE pinjam.id = '$getIdUser'
                                                 ");

                             $data = mysqli_fetch_assoc($query);
                             
                             if (mysqli_num_rows($query) > 0) {
                             $no =1;

                             do{
                             ?> 
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$data['judul'];?></td>
                                        <td><?=$data['lama_peminjaman'];?> Hari</td>
                                        <td><?=$data['tgl_pinjam'];?></td>
                                        <td><?=$data['tgl_kembali'];?></td>
                                        <?php if($data['status_peminjaman'] == 'Di Pinjam') { ?>
                                        <td><a href="kembalikan.php?id=<?=$data['id_pinjam'];?>" onclick="return confirm('Apakah anda ingin mengembalikan buku ini? ')"><button class="btn btn-danger">Kembalikan</button></a></td>
                                        <?php }else if($data['status_peminjaman'] != 'Di Pinjam') { ?>
                                            <td><button class="btn btn-warning">Dikembalikan</button></td>
                                        <?php }else { ?>
                                            <td></td>
                                        <?php } ?>
                                    </tr>
                                    <?php 
                                        }while ($data = mysqli_fetch_assoc($query));
                                        }else{
                                        echo "<tr>";
                                        echo "<td colspan='6' class='text-center'>Tidak Buku Yang Di Pinjam</td>";
                                        echo "</tr>";
                                        }
                                       ?>
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