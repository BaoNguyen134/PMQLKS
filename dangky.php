<?php 
require("database.php");
include ("tao_khachsan.php");

function dangKy()
{
	$conn = connectDatabase();
	$ho_ten=$_POST['ho_ten'];
	$dien_thoai=$_POST['dien_thoai'];
	$email=$_POST['email'];
	$mat_khau=$_POST['mat_khau'];
	$ten_khach_san=$_POST['ten_khach_san'];
	$dia_chi=$_POST['dia_chi'];
	$so_luong_phong=$_POST['so_luong_phong'];

	if($ho_ten==NULL||$dien_thoai==NULL||$email==NULL||$mat_khau==NULL||$ten_khach_san==NULL||$dia_chi==NULL||$so_luong_phong==NULL)
	{
		echo "<script language='javascript'>alert('Bạn chưa điền đủ thông tin')</script>";
	}
 else
 {
  $sql="SELECT * FROM `dangkyphanmem` WHERE `email`= '$email'";
  $query=mysql_query($sql);
  if(mysql_num_rows($query) == 0){
    $sql = "INSERT INTO dangkyphanmem (kichhoat,ho_ten,dien_thoai,email,mat_khau,ten_khach_san,dia_chi,so_luong_phong,times) VALUES ('0','".$ho_ten."','".$dien_thoai."','".$email."','".$mat_khau."','".$ten_khach_san."','".$dia_chi."','".$so_luong_phong."',NOW())";
    mysql_query($sql);
    taoKhachSan($email);
	header("location:info.php");
  }
  else{
   echo "<script language='javascript'>alert('Tài Khoản Đã Tồn Tại')</script>";
 }
}
mysql_close($conn);
}

if(isset($_POST['dangky'])==NULL){}

if(isset($_POST['dangky'])){ dangKy();}
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
<nav class="green" role="navigation">
  <div class="nav-wrapper" style="margin-left:20px"> <a id="logo-container" href="index.php" class="brand-logo"><span class="z-depth-5">SmartHotel360</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.php"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="smarthotel/banggia.php"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="smarthotel/gioithieu.php"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li><a href="login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a></li>
      <li><a href="dangky.php"><b class="z-depth-3">ĐĂNG KÝ</b></a></li>
      <li><strong class="yellow-text light" style="margin-right:10px"><b class="z-depth-3">0946 830 620<i class="material-icons left">call</i></b></strong></li>
    </ul>
    <ul id="nav-mobile" class="side-nav green">
      <li><a href="index.php" class="white-text"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="smarthotel/banggia.php" class="white-text"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="gioithieu.php" class="white-text"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li><a href="login.php" class="white-text"><b class="z-depth-3">ĐĂNG NHẬP</b></a></li>
      <li><a href="#" class="white-text"><b class="z-depth-3">ĐĂNG KÝ</b></a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu -->
<div class="container" align="center" style="margin-top:50px; margin-bottom:50px">
  <div class="col s6 m3">
    <form method="post" action="">
      <div class="row">
        <h4 class="green-text z-depth-3 center-align">ĐĂNG KÝ PHẦN MỀM</h4>
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">person_pin</i>
        <label class="green-text">HỌ VÀ TÊN</label>
        <input id="icon_prefix" type="text" class="validate" name="ho_ten" id="ho_ten">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">phone</i>
        <label class="green-text">SỐ ĐIỆN THOẠI</label>
        <input type="text" name="dien_thoai" id="dien_thoai">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">email</i>
        <label class="green-text">ĐỊA CHỈ EMAIL</label>
        <input type="text" name="email" id="email">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">lock</i>
        <label class="green-text">ĐẶT MẬT KHẨU</label>
        <input type="password" name="mat_khau" id="mat_khau">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">business</i>
        <label class="green-text">TÊN KHÁCH SẠN?</label>
        <input type="text" name="ten_khach_san" id="ten_khach_san">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">location_on</i>
        <label class="green-text">ĐỊA CHỈ KHÁCH SẠN?</label>
        <input type="text" name="dia_chi" id="dia_chi">
      </div>
      <div class="input-field col s6"> <i class="material-icons prefix">account_balance</i>
        <label class="green-text">SỐ LƯỢNG PHÒNG?</label>
        <input type="text" name="so_luong_phong" id="so_luong_phong">
      </div>
      <div align="center">
        <button class="btn waves-block" type="submit" name="dangky" id="dangky">ĐĂNG KÝ</button>
      </div>
    </form>
  </div>
</div>

<!-- Phần cuối -->

<footer class="page-footer green">
  <div>
    <div class="row">
      <div class="col l3 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">CÔNG TY I2C CORP</b></h5>
        <p class="grey-text text-lighten-4 z-depth-3">Chúng tôi là một đội ngũ chuyên phát triển ứng dụng phần mềm quản lý khách sạn Online. SmartHotel360 là sản phẩm tốt nhất trong quản lý khách sạn hiện nay. Chúng tôi có niềm đam mê về những gì chúng tôi làm, và lý do tại sao chúng tôi làm điều đó.</p>
        <p class="grey-text text-lighten-4"><a class="orange-text" href="smarthotel/gioithieu.php">
          <button class="btn z-depth-3">Chi tiết ...</button>
          </a></p>
      </div>
      <div class="col l6 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">BẢN ĐỒ</b></h5>
        <iframe class="z-depth-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5887400463307!2d105.78119381450972!3d21.04913539245932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2d5dc1ca99%3A0xee81b49ec4feb3af!2sArduino360!5e0!3m2!1svi!2sus!4v1463373041145" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">LIÊN KẾT</b></h5>
        <p><a href="http://arduino360.com"><b class="z-depth-3 white-text">TRANG BOARD ARDUINO: arduino360.com</b></a></p>
        <p><a href="http://dientu360.com"><b class="z-depth-3 white-text">TRANG LINH KIỆN: dientu360.com</b></a></p>
        <p><a href="http://tuhoc360.net"><b class="z-depth-3 white-text">TRANG ĐÀO TẠO: tuhoc360.net</b></a></p>
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