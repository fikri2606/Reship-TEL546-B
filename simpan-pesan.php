<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    
    // ambil data dari formulir
    $idahli = $_POST['idahli'];
    $nama = $_POST['nama'];
    $nohp  = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $status = "Menunggu";
    // $status = $_POST['status'];


    // buat query
    $sql = "INSERT INTO pemesanan (idahli, nama, nohp, alamat, deskripsi, foto, status) VALUE ('$idahli', '$nama', '$nohp', '$alamat', '$deskripsi', '$foto', '$status')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        $sql2      =  "SELECT * FROM pemesanan WHERE idahli = '$idahli'";
        $checkid  = mysqli_query($db , $sql2);
        $hasil    = mysqli_fetch_array($checkid);
        $id = $hasil['idahli'];
        header('Location: cart.php?id='.$id);
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pesan.php');
    }


} else {
    die("Akses dilarang...");
}

?>
