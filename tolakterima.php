<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['terima'])){

    // ambil data dari formulir
    $idpesan = $_GET['idpesan'];
    $statuspesan = "Diterima";

     // for ($x=0; $x<$jumlah_dipilih; $x++){
        $sql = "UPDATE pemesanan SET idpesan='$idpesan', statuspesan='$statuspesan' WHERE idpesan='$idpesan'";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            $sql2      =  "SELECT * FROM pemesanan WHERE idpesan = '$idpesan'";
            $checkid  = mysqli_query($db , $sql2);
            $hasil    = mysqli_fetch_array($checkid);
            $idahli = $hasil['idahli'];
             header('Location: ahlikapal.php?id='.$idahli);
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: terimatolak.php');
        }
}


?>
