<?php
include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pengguna WHERE id=$id";
$row = mysqli_query($db, $sql);
$result = mysqli_fetch_array($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Deskripsi Ahli</title>
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


	</header>


	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 respon5">
				<div class="wrap-slick3">
					<div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
						<div class="wrap-pic-w-h wrap-pic-h-h" style="margin-left:100px;">
							<img src="foto/<?php echo $result['foto']; ?>" alt="IMG-PRODUCT">
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">


				<h5 class="s-text8 p-t-10">
					Nama Lengkap
				</h5>

				<h4 class="m-text19 trans-0-4">
					<?php echo $result['nama']; ?>
				</h4>

				<h5 class="s-text8 p-t-10">
					No HP
				</h5>

				<h4 class="m-text19 trans-0-4">
					<?php echo $result['nohp']; ?>
				</h4>

				<h5 class="s-text8 p-t-10">
					Alamat
				</h5>

				<h4 class="m-text19 trans-0-4">
					<?php echo $result['alamat']; ?>
				</h4>

				<h5 class="s-text8 p-t-10">
					Pengalaman
				</h5>

				<h4 class="m-text19 trans-0-4">
						<?php echo $result['pengalaman']; ?>
				</h4>

				<!--  -->
				<!-- <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="s-text8 p-t-10">
						Pengalaman

					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<h4 class="product-detail-name m-text16 p-b-13">
						</h4>
					</div>
				</div> -->

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer s-text8 p-t-10 color0-hov trans-0-4">
						Informasi Keahlian
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<li><p class="m-text19 trans-0-4"><?php echo $result['ahlidepan']; ?></p></li>
						<li><p class="m-text19 trans-0-4"><?php echo $result['ahlibelakang']; ?></p></li>
						<li><p class="m-text19 trans-0-4"><?php echo $result['ahlisamping']; ?></p></li>
						<li><p class="m-text19 trans-0-4"><?php echo $result['ahlidalam']; ?></p></li>
						<li><p class="m-text19 trans-0-4"><?php echo $result['cuci']; ?></p></li>
					</div>
				</div>

			</div>
		</div>
		<?php 
			echo "<a href='pesan.php?id=".$result['id']."'><button class='m-l-auto m-r-auto flex-c-m size11 bg1 bo-rad-23 hov1 s-text1 trans-0-4' style='margin-top:20px'>Pesan Jasa</button></a>";
		?>

		</div>
	</div>

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
