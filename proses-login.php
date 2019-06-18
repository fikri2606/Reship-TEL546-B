<?php
session_start();
require_once("config.php");

if(isset($_POST['masuk_Toke'])){
  $email = $_POST['email'];
  $password 	  = $_POST['password'];
  $sql      =  "SELECT * FROM pengguna WHERE email = '$email'";
  $checkuser  = mysqli_query($db , $sql);
  $hasil    = mysqli_fetch_array($checkuser);

  if(mysqli_num_rows($checkuser) == 0) {
   ?>
  	<script language = "JavaScript">
  		alert("Email tidak terdaftar..");
  		document.location='login.php';
  		</script>
  	<?php
  } else {
      if($password != $hasil['password']) {
         ?>
  	<script language = "JavaScript">
  		alert("Password Anda Salah..");
  		document.location='login.php';
  		</script>
  	<?php
  } else{
          $_SESSION['email'] = $hasil['email'];
          $_SESSION['password']= $hasil['password'];
              header('location:tokebangku.php');
      }
  }
} else if (isset($_POST['masuk_Ahli'])) {
  $email = $_POST['email'];
  $password 	  = $_POST['password'];
  $sql      =  "SELECT * FROM pengguna WHERE email = '$email'";
  $checkuser  = mysqli_query($db , $sql);
  $hasil    = mysqli_fetch_array($checkuser);
  $status = $hasil['status'];

  if(mysqli_num_rows($checkuser) == 0) {
   ?>
  	<script language = "JavaScript">
  		alert("Email tidak terdaftar..");
  		document.location='login.php';
  		</script>
  	<?php
  } else {
      if($password != $hasil['password']) {
         ?>
  	<script language = "JavaScript">
  		alert("Password Anda Salah..");
  		document.location='login.php';
  		</script>
  	<?php
  } else if ($status == 'ahlikapal'){
          $id = $hasil['id'];
          $_SESSION['email'] = $hasil['email'];
          $_SESSION['password']= $hasil['password'];
              header('location:ahlikapal.php?id='.$id);

      } else {
        ?>
        <script language = "JavaScript">
      		alert("Anda Tidak Terdaftar Sebagai Ahli Kapal");
      		document.location='login.php';
      	</script>
        <?php
      }
  }
}
else {
    die("Akses dilarang...");
}

?>
