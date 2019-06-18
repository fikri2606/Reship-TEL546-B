<?php
include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pengguna WHERE id=$id";
$row = mysqli_query($db, $sql);
$result = mysqli_fetch_array($row);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Edit Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/signup.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
      #msg {
        visibility: hidden;
        min-width: 250px;
        background-color:yellow;
        color: #000;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        right: 30%;
        top: 30px;
        font-size: 17px;
    	  margin-right:130px;
      }

      #msg.show {
          visibility: visible;
          -webkit-animation: fadein 0.5s, fadeout 0.5s 1.5s;
          animation: fadein 0.5s, fadeout 0.5s 1.5s;
      }

      @-webkit-keyframes fadein {
          from {top: 0; opacity: 0;}
          to {top: 30px; opacity: 1;}
      }

      @keyframes fadein {
          from {top: 0; opacity: 0;}
          to {top: 30px; opacity: 1;}
      }

      @-webkit-keyframes fadeout {
          from {top: 30px; opacity: 1;}
          to {top: 0; opacity: 0;}
      }

      @keyframes fadeout {
          from {top: 30px; opacity: 1;}
          to {top: 0; opacity: 0;}
      }
    </style>
  </head>
  <body>
    <header class="header1">
      <div class="container-menu-header">

  			<div class="wrap_header">
  				<!-- Logo -->
          <?php

  				$id = $_GET['id'];

  				echo "<a href='ahlikapal.php?id=$id' class='logo'><img src='images/icons/logo.png' alt='IMG-LOGO'></a>";

  				?>
  				<!-- Menu -->

  				<!-- Header Icon -->
  				<div class="header-icons">
  					<div class="header-wrapicon2">
  						<img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

  						<!-- Header cart noti -->
  						<div class="header-cart header-dropdown">


  							<div class="header-cart-buttons">

  								<div class="header-cart-wrapbtn">
  									<!-- Button -->
  									<a href="index.html" class="header-cart-item-name">
  										Log Out
  									</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>

    <!-- form -->
    <section class="bgwhite p-t-55 p-b-65">
      <div class="signup">
        <form action="simpan-data-diri.php" enctype="multipart/form-data" method="POST">
          <h2>Data Diri</h2>
          <div class="inputid"><br>
            <input type="text" name="id"
            value=<?php echo $result['id']; ?> style="margin-bottom : 10px" disabled><br>
            <input type="text" name="nama"
            value=<?php echo $result['nama']; ?> style="margin-bottom : 10px"><br>
            <input type="text" name="nohp"
            value=<?php echo $result['nohp']; ?> style="margin-bottom : 10px"><br>
            <input type="text" name="alamat"
            value=<?php echo $result['alamat']; ?> style="margin-bottom : 10px"><br>
            <input type="text" name="pengalaman"
            value=<?php echo $result['pengalaman']; ?> style="margin-bottom : 10px"><br>
          </div><br>

          <!-- input gambar -->
          <div class="form-group">
            <label for="foto">Upload Gambar</label>
            <input class="form-control" type="file" name="foto" required />
          </div><br><br>
          <!-- <div class="Neon Neon-theme-dragdropbox tmbledit">
          <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="foto" id="filer_input2" multiple="multiple" type="file">
          <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
          </div> -->


        <!-- checkbox -->
        <div class="inputid">

          <fieldset id="ahli1">
            <label for="depan">Bagian Depan</label><br>
            <input type="radio" name="ahlidepan" value="Bagian Depan" style="width:40px">Ya
            <input type="radio" name="ahlidepan" value=""style="width:40px">Tidak
          </fieldset><br>

          <fieldset id="ahli2">
              <label for="blkg">Bagian Belakang</label><br>
              <input type="radio" name="ahlibelakang" value="Bagian Belakang"style="width:40px">Ya
              <input type="radio" name="ahlibelakang" value=""style="width:40px">Tidak
            </fieldset><br>
          <fieldset id="ahli3">
              <label for="samping">Bagian Samping</label><br>
              <input type="radio" name="ahlisamping" value="Bagian Samping"style="width:40px">Ya
              <input type="radio" name="ahlisamping" value=""style="width:40px">Tidak
            </fieldset><br>
          <fieldset id="ahli4">
              <label for="bagiandepan">Bagian Dalam</label><br>
              <input type="radio" name="ahlidalam" value="Bagian Dalam"style="width:40px">Ya
              <input type="radio" name="ahlidalam" value=""style="width:40px">Tidak
            </fieldset> <br>
          <fieldset id="ahli5">
              <label for="bagiandepan">Cuci</label><br>
              <input type="radio" name="cuci" value="Bagian Depan"style="width:40px">Ya
              <input type="radio" name="cuci" value=""style="width:40px">Tidak
            </fieldset>
        </div><br><br>
        <br>
        <!-- button -->
        <div class="tmbledit" >
          <input class="bo-rad-23 bg4 hov1 m-text3 trans-0-4" type="submit" name="simpan" value="SIMPAN"
          onclick="myFunction()"> <br> <br>
        </div>
        </form>





      </div>
    </section>
    <!-- footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

      <div class="t-center p-l-15 p-r-15">

        <div class="t-center s-text8 p-t-20">
          Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
      </div>
    </footer>


    	<!-- Back to top -->
    	<div class="btn-back-to-top bg0-hov" id="myBtn">
    		<span class="symbol-btn-back-to-top">
    			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
    		</span>
    	</div>

    	<!-- Container Selection -->
    	<div id="dropDownSelect1"></div>
    	<div id="dropDownSelect2"></div>



    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    	<script type="text/javascript">
    		$(".selection-1").select2({
    			minimumResultsForSearch: 20,
    			dropdownParent: $('#dropDownSelect1')
    		});

    		$(".selection-2").select2({
    			minimumResultsForSearch: 20,
    			dropdownParent: $('#dropDownSelect2')
    		});
    	</script>
    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    	<script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
    	<script type="text/javascript">
    		$('.block2-btn-addcart').each(function(){
    			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    			$(this).on('click', function(){
    				swal(nameProduct, "is added to cart !", "success");
    			});
    		});

    		$('.block2-btn-addwishlist').each(function(){
    			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    			$(this).on('click', function(){
    				swal(nameProduct, "is added to wishlist !", "success");
    			});
    		});

    		$('.btn-addcart-product-detail').each(function(){
    			var nameProduct = $('.product-detail-name').html();
    			$(this).on('click', function(){
    				swal(nameProduct, "is added to wishlist !", "success");
    			});
    		});
    	</script>

    <!--===============================================================================================-->
    	<script src="js/main.js"></script>

  </body>
</html>
