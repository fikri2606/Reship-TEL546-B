<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pengalaman  = $_POST['pengalaman'];
    $deskripsi = $_POST['deskripsi'];
    $ahli = $_POST['ahli'];
    $nohp = $_POST['nohp'];
    $foto = $_FILES['foto']['name'];
    $jumlah_dipilih=count($ahli);

     // for ($x=0; $x<$jumlah_dipilih; $x++){
        $sql = "INSERT INTO data_diri values ('', '$nama', '$alamat', '$pengalaman', '$deskripsi', '$ahli[$x]', '$nohp', '$foto', '')";
        $query = mysqli_query($db, $sql);

        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses

            // $sql2 = "SELECT * FROM data_diri WHERE nama='$nama' ";
            // $checkuser  = mysqli_query($db , $sql);
            // $hasil    = mysqli_fetch_array($checkuser);

             header('Location: formjasa.php');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: editdata.html');
        }


?>
