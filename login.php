<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Login</title>
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
    <link href="css/login.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

  </head>
  <body>
    <header class="header1">
      <div class="container-menu-header">

  			<div class="wrap_header">
  				<!-- Logo -->
  				<a href="index.html" class="logo">
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
  									<a href="#" class="header-cart-item-name">
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
      <div class="signin ">
        <form action="proses-login.php" method="POST">
          <h2> Log In</h2>
          <div class="formlogin">
            <div class="inputid">
              <br>
              <input type="text" name="email"
              placeholder="Email"> <br>
              <br>
              <input type="password" name="password"
              placeholder="Password"> <br> <br>
            </div>
            <h4> Login Sebagai</h4>
            <div class=""style="padding-top:20px;">
              <input type="submit" value="Toke Bangku" name ="masuk_Toke" class="bo-rad-23 bg4 hov1 m-text3 trans-0-4">
              <input type="submit" value="Ahli Kapal" name ="masuk_Ahli" class="bo-rad-23 bg4 hov1 m-text3 trans-0-4"><br><br>
            </div>
          </div>
          <br><br><br>
          don't have account? <a href="signup.php">&nbsp;Sign Up</a>
        </form>
      </div>
    </section>
    <!-- footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
      <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
          <h4 class="s-text12 p-b-30">
            GET IN TOUCH
          </h4>

          <div>
            <p class="s-text7 w-size27">
              Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
            </p>

            <div class="flex-m p-t-30">
              <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
              <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
              <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
              <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
              <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
            </div>
          </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
          <h4 class="s-text12 p-b-30">
            Categories
          </h4>

          <ul>
            <li class="p-b-9">
              <a href="#" class="s-text7">
                All
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Bagian Depan
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Bagian Belakang
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Bagian Samping
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Bagian Dalam
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Cuci
              </a>
            </li>

          </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
          <h4 class="s-text12 p-b-30">
            Links
          </h4>

          <ul>
            <li class="p-b-9">
              <a href="#" class="s-text7">
                Search
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                About Us
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Contact Us
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Returns
              </a>
            </li>
          </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
          <h4 class="s-text12 p-b-30">
            Help
          </h4>

          <ul>
            <li class="p-b-9">
              <a href="#" class="s-text7">
                Track Order
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Returns
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                Shipping
              </a>
            </li>

            <li class="p-b-9">
              <a href="#" class="s-text7">
                FAQs
              </a>
            </li>
          </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
          <h4 class="s-text12 p-b-30">
            Newsletter
          </h4>

          <form>
            <div class="effect1 w-size9">
              <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
              <span class="effect1-line"></span>
            </div>

            <div class="w-size2 p-t-20">
              <!-- Button -->
              <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                Subscribe
              </button>
            </div>

          </form>
        </div>
      </div>

      <div class="t-center p-l-15 p-r-15">
        <a href="#">
          <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
          <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
          <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
          <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
          <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
          Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
      </div>
    </footer>
  </body>
</html>
