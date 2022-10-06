<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $alamat=$_POST['alamat'];

    include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, role, alamat) value ('".$nama."','".$username."','".md5($password)."', '".$role."', '".$alamat."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan');location.href='login.php';</script>";
        }
    }
?>