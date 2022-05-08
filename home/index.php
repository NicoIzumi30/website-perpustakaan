            <div class="jumbotron">
                <h1>Perpustakaan Swastomo</h1>
                <p>Membaca kapan saja dan dimana saja.</p>
            </div>
            </header>
            <?php
                $title = "Home";
                require 'include/header.php';
                if (isset($_GET['s'])) {
                    $key = "%".$_GET['s']."%";
                     $sql = "SELECT * FROM buku WHERE judul like '$key'";
                     $result = mysqli_query($conn, $sql);
                     $data = mysqli_fetch_assoc($result);
                 }else {
                    $sql = "SELECT * FROM buku ORDER BY no_buku DESC";
                     $result = mysqli_query($conn, $sql);
                     $data = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="container">
                    <div class="col-12 ">
                    <div class="col-lg-12">
                        <form action="?s=" class="mt-3">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-lg-4 mt-1">
                                    <div class="form-group">
                                        <input class="form-control hs" type="search" value="<?php if(isset($_GET['s'])) {echo $_GET['s'];} ?>" name="s" placeholder=" Masukkan Keywoard "   style="border-radius: 9999px;">
                                    </div>            
                                </div>
                                    <div class="form-group"> 
                                        <input type="submit" class="btn btn-primary mt-2 hs" value="cari" style="border-radius:25%;"> 
                                        </div>                
                                    </div>
                            </form>
                         </div>
                <div class="row d-flex justify-content-start mt-2">
                    <?php 
                    if (mysqli_num_rows($result) > 0) {
                    do{
                    ?>
                    <div class="col-lg-2 col-md-5 col-6 mb-4">
                        <div class="card" style="width:110%; height:350px; overflow:hidden;">
                            <a href="detail.php?no=<?=$data['no_buku'];?>" style="padding: 5px; margin:auto;"><img style="max-width:150px;max-height:210px;" class="card-img-top" src="<?=BASE_URL;?>assets/sampul/<?= $data['sampul'];?>"></a>
                            <div class="card-body">
                                <h6 class="card-title medium">
                                <a style="color: #cf7609;" href="detail.php?no=<?=$data['no_buku'];?>"><?=$data['judul'];?></a>
                                </h6>
                                <p class="small" style="display: inline;"><?=$data['pengarang'];?> </p>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }while ($data = mysqli_fetch_assoc($result));
                    }else{
                    echo "Tidak Ada Akun Ditampilkan";
                    }
                    ?>
                    </div>
                    </div>
                    </div>


<?php 
require 'include/footer.php';
?>