<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Page</title>
    <link rel="stylesheet" href="css/transaksi.css">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="main_content">
        <div class="header">Transaksi Area (Gak Jadi di Pakai !!!)</div>
        <div class="info">
        <form action="#" method="post">
            Member&nbsp;:&nbsp;
            <select name="nama" id="">
                <option value=""></option>
                <?php
                    include "koneksi.php";
                    $qry_member=mysqli_query($conn,"select * from member");
                    $no=0;
                    while($data_member=mysqli_fetch_array($qry_member)){
                    $no++;?>
                    <option value=""><?=$no?> - <?=$data_member['nama']?></option>
                <?php
                    }
                ?>
            </select> <br>
            Paket&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
            <select name="nama_paket" id="">
                <option value=""></option>
                <?php 
                    include "koneksi.php";
                    $qry_paket=mysqli_query($conn,"select * from paket");
                    $no=0;
                    while($data_paket=mysqli_fetch_array($qry_paket)){
                    $no++;?>
                    <option value=""><?=$no?> - <?=$data_paket['nama_paket']?></option>
                <?php
                    }
                ?>
            </select> <br>
            Berat Cucian&nbsp;:&nbsp;
            <input min = "1" type="number" name="berat" value="1" > <br>
            <input type="submit" name="simpan" value="Tambah Transaksi">
        </form>
        </div>
    </div>
</body>
</html>