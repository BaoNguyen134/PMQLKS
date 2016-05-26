<?php include ("../database.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>QUẢN LÝ KHÁCH SẠN</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<!-- menu -->
<nav class="blue-grey" role="navigation">
  <div class="nav-wrapper" style="margin-left:20px"> <a id="logo-container" href="../index.php" class="brand-logo"><span class="z-depth-5">SmartHotel360</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="../index.php"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="banggia.php"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="gioithieu.php"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="../login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a>
      <?php 
		} else {
			echo "<a href='../ZKS_".$_SESSION['currEmail']."'><b class='z-depth-3'>VÀO KHÁCH SẠN</b></a>";
			}
	  	?> 
      </li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="../dangky.php"><b class="z-depth-3">ĐĂNG KÝ</b></a>
      <?php 
		} else {
			echo "<a href='../logout.php'><b class='z-depth-3'>THOÁT</b></a>";
			}
	  	?>
      </li>
      <li><strong class="yellow-text" style="margin-right:10px"><b class="z-depth-3">0946 830 620<i class="material-icons left">call</i></b></strong></li>
    </ul>
    <ul id="nav-mobile" class="side-nav blue-grey">
      <li><a href="../index.php" class="white-text"><b class="z-depth-3">TRANG CHỦ</b></a></li>
      <li><a href="banggia.php" class="white-text"><b class="z-depth-3">BẢNG GIÁ</b></a></li>
      <li><a href="gioithieu.php" class="white-text"><b class="z-depth-3">GIỚI THIỆU</b></a></li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="../login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a>
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
      <a href="../dangky.php"><b class="z-depth-3">ĐĂNG KÝ</b></a>
      <?php 
		} else {
			echo "<a href='logout.php'><b class='z-depth-3'>THOÁT</b></a>";
			}
	  	?>
      </li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu -->

<div align="center" class="container" style="margin-bottom: 50px">
  <h5 class="blue-grey-text"><b class="z-depth-3">BẢNG GIÁ SỬ DỤNG PHẦN MỀM THEO THỜI GIAN</b></h5>
  <div style="overflow:auto;margin-right:25px;boder-right:none">
   <table style="width:100%;background:#ECECEC;">
    <tr >
      <th style="width:76px;height:96px;"><span class="blue-grey-text">SỐ PHÒNG</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">3 THÁNG</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">3 THÁNG<br>
        (WEB)</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">6 THÁNG</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">6 THÁNG<br>
        (WEB)</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">1 NĂM</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">1 NĂM<br>
        (WEB)</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">2 NĂM</span></th>
      <th style="width:76px;height:96px"><span class="blue-grey-text">2 NĂM<br>
        (WEB)</span></th>
    </tr>
   </table>
  </div>
  <div style="overflow:auto;height:500px;width:100%;table-layout:fixed">
    <table class="highlight z-depth-3" style="width:100%;">
      
	<?php 
		$conn = connectDatabase();
		$sql="SELECT * FROM banggia";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 0){
			echo "Chua co du lieu";
		}
		else{
			
			while($row=mysql_fetch_array($query)){
				echo"
				<tr class='blue-grey-text'>
				  <th>".$row['quy_mo']."</th>
				  <td>".$row['ba_thang']."</td>
				  <td>".$row['ba_thang_web']."</td>
				  <td>".$row['sau_thang']."</td>
				  <td>".$row['sau_thang_web']."</td>
				  <td>".$row['mot_nam']."<br><small class='red-text'>".$row['giam_mot']."</small><br>".$row['con_mot']."</td>
				  <td>".$row['mot_nam_web']."<br><small class='red-text'>".$row['giam_mot_web']."</small><br>".$row['con_mot_web']."</td>
				  <td>".$row['hai_nam']."<br><small class='red-text'>".$row['giam_hai']."</small><br>".$row['con_hai']."</td>
				  <td>".$row['hai_nam_web']."<br><small class='red-text'>".$row['giam_hai_web']."</small><br>".$row['con_hai_web']."</td>
				</tr>
				";
			
				
			}
		}
		mysql_close($conn);
	?> 
    </table>
  </div>
</div>

<!-- Phần cuối -->

<footer class="page-footer blue-grey">
  <div>
    <div class="row">
      <div class="col l3 s12">
        <h5 class="white-text center-align"><b class="z-depth-3">CÔNG TY I2C CORP</b></h5>
        <p class="grey-text text-lighten-4 z-depth-3">Chúng tôi là một đội ngũ chuyên phát triển ứng dụng phần mềm quản lý khách sạn Online. SmartHotel360 là sản phẩm tốt nhất trong quản lý khách sạn hiện nay. Chúng tôi có niềm đam mê về những gì chúng tôi làm, và lý do tại sao chúng tôi làm điều đó.</p>
        <p class="grey-text text-lighten-4"><a class="orange-text" href="smarthotel/gioithieu.php"><button class="btn z-depth-3">Chi tiết ...</button></a></p>
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
