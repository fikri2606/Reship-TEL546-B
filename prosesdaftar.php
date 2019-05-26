<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $nohp = $_POST['nohp'];


    // buat query
    $sql = "INSERT INTO pengguna (nama, username, password, nohp ) VALUE ('$nama', '$username', '$pass', '$nohp' )";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: login.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: signup.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>