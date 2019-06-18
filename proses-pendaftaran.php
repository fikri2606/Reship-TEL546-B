<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email  = $_POST['email'];
    $nohp = $_POST['nohp'];
    $status = $_POST['status'];

    // buat query
    $sql = "INSERT INTO pengguna (nama, password, email, nohp, status) VALUE ('$nama', '$password', '$email', '$nohp', '$status')";
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
