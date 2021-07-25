<?php
session_start();

$conn = mysqli_connect("localhost","root","","uaspweb");

//proses upload ke mysqli
if(isset($_POST['simpan'])){
    $folder = './gambar/';
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $name_p = $_FILES['foto']['name'];
    $rename = date('Hs').$name_p;
    $sumber_p =  $_FILES['foto']['tmp_name'];
    move_uploaded_file($sumber_p, $folder.$rename);

    $insert = mysqli_query($conn, "insert into artikel (judul_artikel, foto_artikel, deskripsi) values ('$nama' , '$rename' , '$deskripsi')");

    if($insert){
        header('location:index.php');
    }else{
        echo 'gagal disimpan';
    }
}
?>