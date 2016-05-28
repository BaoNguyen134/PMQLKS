<?php include ("database.php");?>
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
<nav class="green" role="navigation">
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
			echo "<a href='ZKS_".$_SESSION['currEmail']."'><b class='z-depth-3'>VÀO KHÁCH SẠN</b></a>";
			}
	  	?> 
      </li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="dangky.php"><b class="z-depth-3">ĐĂNG KÝ</b></a>
      <?php 
		} else {
			echo "<a href='logout.php'><b class='z-depth-3'>THOÁT</b></a>";
			}
	  	?>
      </li>
      <li><strong class="yellow-text" style="margin-right:10px"><b class="z-depth-3">0946 830 620<i class="material-icons left">call</i></b></strong></li>
    </ul>
    <ul id="nav-mobile" class="side-nav green">
      <li><a href="index.php" class="white-text"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="smarthotel/banggia.php" class="white-text"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="gioithieu.php" class="white-text"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li><a href="login.php" class="white-text"><b class="z-depth-3">ĐĂNG NHẬP</b></a></li>
      <li><a href="dangky.php" class="white-text"><b class="z-depth-3">ĐĂNG KÝ</b></a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu --> 
<!-- slider -->
<div class="parallax-container z-depth-3">
  <div class="slider">
    <ul class="slides">
      <li> <img src="images/hotel01.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="blue-text z-depth-5"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
      <li> <img src="images/hotel02.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="blue-text"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
      <li> <img src="images/hotel03.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="blue-text"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
      <li> <img src="images/hotel04.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="blue-text"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
      <li> <img src="images/hotel05.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="blue-text"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
      <li> <img src="images/hotel06.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="blue-text"><span><b class="z-depth-5">QUẢN LÝ KHÁCH SẠN THÔNG MINH</b></span></h3>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- end slider -->
<div>
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4><b class="green-text z-depth-3">CÁC TÍNH NĂNG CỦA PHẦN MỀM</b></h4>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card green z-depth-3 waves-effect waves-light">
          <div class="card-image z-depth-3"> <img src="images/hotel01.jpg"> <span class="card-title white-text"><b>QUẢN LÝ NĂNG LƯỢNG</b></span> </div>
          <div class="card-content white-text">
            <p class="z-depth-3 card-panel green">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action"> <a href="#">This is a link</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h4><b class="green-text z-depth-3">LIÊN HỆ VỚI CHÚNG TÔI</b></h4>
        <p class="green card-panel left-align white-text z-depth-3 waves-effect waves-light">SmartHotel360 khuyến khích Bạn liên hệ với Trung tâm Hỗ trợ khách hàng SmartHotel360 qua hotline: <span class="orange-text">0946 830 620</span> từ 8 giờ 30 sáng đến 22 giờ mỗi ngày khi có nhu cầu hỗ trợ. Bạn có thể dùng công cụ ở mục Hỗ trợ trực tuyến để gửi các yêu cầu cụ thể trong trường hợp các kênh liên hệ qua tổng đài hoặc điện thoại không khả dụng.<br>
I2C khuyến cáo Bạn chỉ gửi thông tin Tài khoản nhằm mục đích hỗ trợ, triển khai vào email <span class="orange-text">smarthotel360@gmail.com</span>. SmartHotel360 sẽ không chịu bất kì trách nhiệm nào khi bạn gửi email vào không đúng địa chỉ email mà SmartHotel360 cung cấp.<br>
Đường vào 1: Nhà A1 Tập thể Học Viện Cảnh Sát ngõ 643/9 Đường Phạm Văn Đồng, Từ Liêm, Hà Nội<br>
Đường Vào 2: Nhà A1 Tập thể Học Viện Cảnh Sát, Gần Bể bơi học viện Kỹ thuật quân sự ngõ 234 Hoàng Quốc Việt-Hà Nội</p>
      </div>
    </div>
  </div>
</div>

<!-- Phần cuối -->

<footer class="page-footer green">
  <div>
    <div class="row">
      <div class="col l4 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">CÔNG TY I2C CORP</b></h5>
        <p class="grey-text green card-panel text-lighten-4 z-depth-3">Chúng tôi là một đội ngũ chuyên phát triển ứng dụng phần mềm quản lý khách sạn Online. SmartHotel360 là sản phẩm tốt nhất trong quản lý khách sạn hiện nay. Chúng tôi có niềm đam mê về những gì chúng tôi làm, và lý do tại sao chúng tôi làm điều đó.</p>
        <p class="grey-text text-lighten-4"><a class="orange-text" href="smarthotel/gioithieu.php"><button class="btn z-depth-3">Chi tiết ...</button></a></p>
      </div>
      <div class="col l4 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">LIÊN KẾT</b></h5>
        <div class="green card-panel z-depth-3">
        	<p><a href="http://arduino360.com"><b class="white-text">TRANG ARDUINO: arduino360.com</b></a></p>
        <p><a href="http://dientu360.com"><b class="white-text">TRANG LINH KIỆN: dientu360.com</b></a></p>
        <p><a href="http://tuhoc360.net"><b class="white-text">TRANG ĐÀO TẠO: tuhoc360.net</b></a></p>
        <p><a href="http://tuhoc360.net"><b class="white-text"><i class="material-icons medium">mail</i></b></a>&nbsp;&nbsp;<a href="http://dientu360.com"><b class="white-text"><i class="material-icons medium">people</i></b></a></p>
        </div>
      </div>
      <div class="col l4 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">BẢN ĐỒ</b></h5>
        <iframe class="green card-panel z-depth-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5887400463307!2d105.78119381450972!3d21.04913539245932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2d5dc1ca99%3A0xee81b49ec4feb3af!2sArduino360!5e0!3m2!1svi!2sus!4v1463373041145" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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