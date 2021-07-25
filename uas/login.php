<?php
    include 'koneksi.php';

    //cek login terdaftar atau kaga
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //cek data ada atau kaga
        $cekdatabase = mysqli_query($conn, " SELECT * FROM login where email = '$email' and password = '$password' ");
        //hitung jumlah data
        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung > 0){
            $_SESSION['log']='True';
            header('location:index.php');
        }else{
            header('location:login.php');;
        };
    }
    
    if(!isset($_SESSION['log'])){
        
    }else{
        header('location:index.php'); 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="kontainer">
        <div class="box">
            <div class="header">
                LOGIN
            </div>
            <div class="body">
                <form action="" method="post">
                Email <br>
                <input type="email" name="email" placeholder="Masukkan Alamat Email"> <br>
                Password <br>
                <input type="password" name="password" placeholder="Masukkan Password"> <br>
                <input type="submit" name="login" value="Login">  
                </form>  
            </div>
        </div>
    </div>
</body>
</html>