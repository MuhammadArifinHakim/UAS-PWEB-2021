<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="css/upload.css">
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
                            <li><a href="edit.php">Edit</a></li>
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
                <div class="prosesupload">
                    <div class="box">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="text" name="nama" placeholder="Masukkan Judul Artikel"> <br>
                            <input type="file" name="foto"> <br>
                            <textarea  name="deskripsi" placeholder="Masukkan Deskripsi Aritkel" style="height:200px"></textarea> <br>
                            <input type="submit" name="simpan" value="Upload Artikel">                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>