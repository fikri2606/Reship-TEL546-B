<?php
include("config.php");

$idahli = $_GET['id'];

// $sql = "SELECT * FROM pengguna WHERE id=$id";
// $row = mysqli_query($db, $sql);
// $result = mysqli_fetch_array($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pesan Jasa</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">

			<div class="wrap_header">
				<!-- Logo -->
				<a href="tokebangku.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

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
									<a href="cart.html" class="header-cart-item-name"style="padding: 10px">
										Pesanan
									</a>
								</div>
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="index.html" class="header-cart-item-name"style="padding:10px">
										Log Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

	</header>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">

			<!-- Total -->
			<div class="bo9 p-l-40 p-r-40 p-t-30 m-l-auto m-r-auto p-b-38 m-t-30 p-lr-15-sm w-half-full">
				<form action="simpan-pesan.php" enctype="multipart/form-data" method="POST">
				<h5 class="m-text20 p-b-24">
					Data Pemesanan Jasa
				</h5>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">

					<div class="w-full">

						<div class="size16 w-size100 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="namatoke" placeholder="Nama" required>
						</div>

						<div class="size16 w-size100 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="nohptoke" placeholder="Nomor Hp" required>
						</div>

						<div class="size16 w-size100 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="alamat" placeholder="Alamat" required>
						</div>

						<div class="" style="display: flex">
							<textarea class="sizefull s-text7 p-l-15 p-r-15" type="text" name="deskripsi" placeholder="Deskripsi" required>
							</textarea>

						</div><br>

						 <!-- input gambar -->
						 <div class="form-group">
							<label for="foto">Upload Gambar</label>
							<input class="form-control" type="file" name="fototoke" required />
						</div><br><br>

					</div>
				</div>
					<div class="tmbledit" >
						<input class="bo-rad-23 bg4 hov1 m-text3 trans-0-4" type="submit" name="kirim" value="KIRIM"
						onclick="myFunction()"> <br> <br>
					</div>
				</form>
			</div>
		</div>
	</section>



	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

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
	<script src="js/main.js"></script>

</body>
</html>
