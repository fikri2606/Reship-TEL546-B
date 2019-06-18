<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pengalaman  = $_POST['pengalaman'];
    $nohp = $_POST['nohp'];
    $foto = $_FILES['foto']['name'];
    $ahlidepan = $_POST['ahlidepan'];
    $ahlibelakang = $_POST['ahlibelakang'];
    $ahlisamping = $_POST['ahlisamping'];
    $ahlidalam = $_POST['ahlidalam'];
    $cuci = $_POST['cuci'];

     // for ($x=0; $x<$jumlah_dipilih; $x++){
        $sql = "UPDATE pengguna SET id='$id', nama='$nama', alamat='$alamat', pengalaman='$pengalaman', nohp='$nohp', foto='$foto', ahlidepan='$ahlidepan', ahlibelakang='$ahlibelakang', ahlisamping='$ahlisamping', ahlidalam='$ahlidalam', cuci='$cuci' WHERE id='$id'";
        $query = mysqli_query($db, $sql);

        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            $sql2      =  "SELECT * FROM pengguna WHERE id = '$id'";
            $checkid  = mysqli_query($db , $sql2);
            $hasil    = mysqli_fetch_array($checkid);
            $id = $hasil['id'];
             header('Location: formjasa.php?id='.$id);
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: editdata.php');
        }


?>
