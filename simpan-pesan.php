<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){


    // ambil data dari formulir
    $idahli = $_POST['idahli'];
    $namatoke = $_POST['namatoke'];
    $nohptoke  = $_POST['nohptoke'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $fototoke = $_FILES['fototoke']['name'];
    $statuspesan = "Menunggu";
    // $status = $_POST['status'];


    // buat query
    $sql = "INSERT INTO pemesanan (idahli, namatoke, nohptoke, alamat, deskripsi, fototoke, statuspesan) VALUE ('$idahli', '$namatoke', '$nohp', '$alamat', '$deskripsi', '$fototoke', '$statuspesan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {

        header('Location: cart.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pesan.php');
    }


} else {
    die("Akses dilarang...");
}

?>
