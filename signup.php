<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Sign Up</title>
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
      <div class="signup">
        <form action="proses-pendaftaran.php" method="POST">
          <h2> Register</h2>
          <div class="inputid">
            <br>
            <input type="text" name="nama"
            placeholder="Name" style="margin-bottom : 10px"><br>
            <input type="text" name="username"
            placeholder="Username" style="margin-bottom : 10px"><br>
            <input type="password" name="password"
            placeholder="Password" style="margin-bottom : 10px"><br>
            <!-- <input type="password" name="comfpass"
            placeholder="Confirm Password" style="margin-bottom : 10px"><br> -->
            <input type="email" name="email"
            placeholder="Email" style="margin-bottom : 10px"><br>
            <input type="text" name="nohp"
            placeholder="No Handphone" style="margin-bottom : 14px"><br>
            <!-- <select style="margin-bottom:20px">
              <optgroup label="Status">
                <option>Ahli Kapal</option>
                <option>Toke Kapal</option>
              </optgroup>
            </select><br> -->
          </div><br><br>
          <div class="tmbledit">
            <input class="bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name ="daftar" value="Sign up"> <br> <br>

            Already have account? <a href="login.html">&nbsp;Sign in</a>

          </div>

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
