<?php
    include 'koneksi.php';
    include 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="kontainer">
        <div class="header">
            <div class="tengah">
                <div class="beranda">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
                <div class="dropdownmenu">
                    <ul>
                        <li><a href="tambah.php">Artikel</a>
                        <ul class="drop">
                            <li><a href="tambah.php">Upload</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
                <div class="sosialmedia">
                    <ul>
                        <li><a href="#">Contact Us</a>
                        <ul class="drop">
                            <li><a href="https://twitter.com/Muharkim">Twitter</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100010421318541">Facebook</a></li>
                            <li><a href="https://github.com/MuhammadArifinHakim">Git Hub</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
                <div class="logout">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="tengahbody">

                <?php
                $ambilsemuadata = mysqli_query($conn, "select * from artikel");
                $i = 1;
                while($data=mysqli_fetch_array($ambilsemuadata))
                {
                        $judul = $data['judul_artikel'];
                        $foto = $data['foto_artikel'];
                        $deskripsi = $data['deskripsi'];
                    ?>
                        <div class="artikel">
                            <div class="gambar">
                                <img src="gambar/<?=$foto;?>" alt="">
                            </div>
                            <div class="isi">
                                <div class="judulartikel">
                                    <?=$judul;?>
                                </div>
                                <div class="deskripsiartikel">
                                    <?=$deskripsi;?>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php
                }
                ?>
    
            </div>
        </div>
    </div>
</body>
</html>