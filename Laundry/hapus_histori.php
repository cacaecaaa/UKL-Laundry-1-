<?php 
    if($_GET['id_transaksi']){
        include "histori.php";
        $qry_hapus=mysqli_query($conn,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus transaksi');location.href='histori.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus transaksi');location.href='histori.php';</script>";
        }
    }
?>