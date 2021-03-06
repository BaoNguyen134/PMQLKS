<?php
	require ("database.php");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$user = $_POST['email'];
		$pass = $_POST['matkhau'];
		get_user($user,$pass);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>QUẢN LÝ KHÁCH SẠN</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<!-- menu -->
<nav class="blue-grey" role="navigation">
  <div class="nav-wrapper" style="margin-left:20px"> <a id="logo-container" href="index.php" class="brand-logo"><span class="z-depth-5">SmartHotel360</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.php"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="smarthotel/banggia.php"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="smarthotel/gioithieu.php"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li>
	  <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a>
      <?php 
		} else {
			echo "<p class='z-depth-3 white-text'>Xin chào! ".$_SESSION['currEmail']."</p>";
			}
	  	?>  
        </li>
      <li><a href="dangky.php"><b class="z-depth-3">ĐĂNG KÝ</b></a></li>
      <li><strong class="yellow-text" style="margin-right:10px"><b class="z-depth-3">0946 830 620<i class="material-icons left">call</i></b></strong></li>
    </ul>
    <ul id="nav-mobile" class="side-nav blue-grey">
      <li><a href="index.php" class="white-text"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="smarthotel/banggia.php" class="white-text"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="smarthotel/gioithieu.php" class="white-text"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li><a href="login.php" class="white-text"><b class="z-depth-3">ĐĂNG NHẬP</b></a></li>
      <li><a href="dangky.php" class="white-text"><b class="z-depth-3">ĐĂNG KÝ</b></a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu --> 

<div class="container" style="margin-top:100px; margin-bottom:100px;">
  <form class="col s12" method="post" action="">
    <div class="row">
      <h4 class="blue-grey-text z-depth-3 center-align">FORM ĐĂNG NHẬP</h4>
    </div>
    <div class="input-field col s6"> <i class="material-icons prefix">person_pin</i>
      <input id="icon_prefix" type="email" class="validate" name="email">
      <label for="icon_prefix">EMAIL</label>
    </div>
    <div class="input-field col s6"> <i class="material-icons prefix">lock</i>
      <input id="icon_telephone" type="password" class="validate" name="matkhau">
      <label for="icon_telephone">MẬT KHẨU</label>
    </div>
    <div align="center">
      <button class="btn waves-block" type="submit" name="submit">ĐĂNG NHẬP</button>
    </div>
  </form>
</div>

<!-- Phần cuối -->

<footer class="page-footer blue-grey">
  <div>
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">CÔNG TY I2C CORP</b></h5>
        <p class="grey-text text-lighten-4 z-depth-3">Chúng tôi là một đội ngũ chuyên phát triển ứng dụng phần mềm quản lý khách sạn Online. SmartHotel360 là sản phẩm tốt nhất trong quản lý khách sạn hiện nay. Chúng tôi có niềm đam mê về những gì chúng tôi làm, và lý do tại sao chúng tôi làm điều đó.</p>
        <p class="grey-text text-lighten-4"><a class="orange-text" href="#"><button class="btn z-depth-3">Chi tiết ...</button></a></p>
      </div>
      <div class="col l6 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">BẢN ĐỒ</b></h5>
        <iframe class="z-depth-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5887400463307!2d105.78119381450972!3d21.04913539245932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2d5dc1ca99%3A0xee81b49ec4feb3af!2sArduino360!5e0!3m2!1svi!2sus!4v1463373041145" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="center-align white-text text-lighten-3"><b class="z-depth-3">© Copyright 2016. I2C Corp Company, All Rights Reserved. - See more at: <a class="white-text text-lighten-3" href="http://tuhoc360.net"><i>I2C Corp</i></a></b></div>
  </div>
</footer>

<!--  Scripts--> 
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script src="js/materialize.js"></script> 
<script src="js/init.js"></script>
</body>
</html>