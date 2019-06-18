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
            <input type="email" name="email"
            placeholder="Email" style="margin-bottom : 10px"><br>
            <input type="text" name="nohp"
            placeholder="No Handphone" style="margin-bottom : 14px"><br>
            <input type="password" name="password"
            placeholder="Password" style="margin-bottom : 10px"><br>
            <br>
            <label for="depan">Daftar  Sebagai</label><br>
            <select name="status" style="margin-bottom:20px">
              <optgroup label="Status">
                <option  value="ahlikapal">Ahli Kapal</option>
                <option  value="tokebangku">Toke Bangku</option>
              </optgroup>
            </select><br>
          </div><br><br>
          <div class=" tmbledit">
            <input class="bo-rad-23 bg4 hov1 m-text3 trans-0-4" type="submit" name ="daftar" value="Sign up"> <br> <br>

            Already have account? <a href="login.php">&nbsp;Sign in</a>

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
  </body>
</html>
