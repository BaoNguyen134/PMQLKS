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
<nav class="green" role="navigation">
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
    <ul id="nav-mobile" class="side-nav green">
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
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu --> 

<div class="row">
  <div class="col s12 center">
    <h3><i class="mdi-content-send brown-text"></i></h3>
    <h4><b class="green-text z-depth-3">VỀ CÔNG TY I2C CORP</b></h4>
  </div>
</div>
<div class="row">
  <div class="col s12 m3">
    <div class="card green darken-1 hoverable" style="height:300px">
      <div class="card-content white-text"> <span class="card-title z-depth-3">MỌI LÚC-MỌI NƠI</span>
        <p class="white-text z-depth-3">I2C chỉ phát triển các sản phẩm quản lý chạy trên nền Internet, không cần cài đặt, sử dụng mọi lúc mọi nơi. Đây cũng là xu thế chung của nền công nghiệp phần mềm trên thế giới hiện nay . </p>
      </div>
    </div>
  </div>
  <div class="col s12 m3">
    <div class="card green darken-1 hoverable" style="height:300px">
      <div class="card-content white-text"> <span class="card-title z-depth-3">ĐIỆN TOÁN ĐÁM MÂY</span>
        <p class="white-text z-depth-3">Đưa công nghệ điện toán đám mây vào các sản phẩm của I2C, tiêu biểu là SmartHotel360 Manager, chúng tôi đảm bảo chi phí sử dụng thấp nhất, cũng như độ ổn định cao nhất, cam kết uptime trên 99%.</p>
      </div>
    </div>
  </div>
  <div class="col s12 m3">
    <div class="card green darken-1 hoverable" style="height:300px">
      <div class="card-content white-text"> <span class="card-title z-depth-3">LUÔN ĐỔI MỚI</span>
        <p class="white-text z-depth-3">Chúng tôi có niềm đam mê  vào những gì chúng tôi làm, chính vì vậy những sản phẩm của I2C luôn được cập nhật tính năng mới, nhanh hơn, mạnh mẽ hơn... và sẽ luôn luôn như vậy.</p>
      </div>
    </div>
  </div>
  <div class="col s12 m3">
    <div class="card green darken-1 hoverable" style="height:300px">
      <div class="card-content white-text"> <span class="card-title z-depth-3">HỖ TRỢ</span>
        <p class="white-text z-depth-3">
        Kinh doanh/Khách hàng<br>
        Mr.Đông: 0946 830 620<br>
        Hỗ trợ kỹ thuật<br>
        Mr.Oanh: 0904 581 190<br>
        Mr.Quyết: 0989 481 599</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12 m12">
    <div class="card green darken-1 hoverable">
      <div class="card-content white-text"> <span class="card-title z-depth-3">CÔNG TY</span>
        <p class="white-text z-depth-3">Về Công ty:
          Công ty I2C được thành lập vào ngày 19/03/2012. Sau gần 4 năm phát triển, mặc dù gặp không ít những khó khăn, thách thức nhưng với niềm đam mê bất tận, không ngại khó khăn, luôn luôn giữ vững cốt lõi đã đặt ra, Công ty I2C đã có bước tiến vững chắc và đang giữ vị thế hàng đầu trong lĩnh vực ứng dụng công nghệ thông tin trong Phần mềm quản lý Khách sạn Smarthotel360 – hiện đại, chuyên nghiệp, chống thất thoát, tăng doanh thu.
          Chúng tôi luôn đặt ra phương châm thực hiện: Sáng tạo, chuyên nghiệp –  Dịch vụ hoàn hảo. Khách hàng sẽ luôn nhận được sự quan tâm tận tình, chu đáo từ đội nhân viên chăm sóc khách hàng và sẽ đặc biệt hài lòng với đội ngũ chuyên gia kỹ thuật sáng tạo, nhiệt huyết và giàu kinh nghiệm… </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12 m12">
    <div class="card green darken-1  z-depth-3">
      <div class="card-content white-text"> <span class="card-title z-depth-3">ĐIỀU KHOẢN SỬ DỤNG</span>
        <p class="white-text">Cảm ơn bạn đã sử dụng các sản phẩm và dịch vụ Phần mềm Quản lý Khách sạn Smarthotel360 của chúng tôi. Dịch vụ được cung cấp bởi Công ty TNHH I2C. Bằng việc sử dụng Dịch vụ của chúng tôi, bạn đang đồng ý với các điều khoản chính sách của I2C nhằm mục đích mang lại chất lượng dịch vụ tốt nhất cho Khách hàng cũng như bảo vệ quyền lợi của chính Khách hàng.<br>
        <p class="white-text"><span class="card-title z-depth-3">1.Điều khoản sử dụng</span></p>
        <p class="white-text">Áp dụng cho Dịch vụ phần mềm quản lý Khách sạn SmartHotel360, phiên bản chính thức chạy trên máy chủ của I2C dưới tên miền chính thức www.tuhoc360.net. Khi sử dụng Website này và bất kỳ dịch vụ nào tại đây có nghĩa là Bạn đã chấp nhận và đồng ý tuân theo bản Điều khoản sử dụng này. I2C có thể thay đổi, điều chỉnh Điều khoản sử dụng này, Bạn có thể xem những thông tin mới cập nhật vào bất cứ lúc nào tại đây.</p>
        <p>Nếu bạn tiếp tục sử dụng Dịch vụ có nghĩa là Bạn chấp nhận và đồng ý tuân theo Điều khoản sử dụng mới được cập nhật. Bất cứ sự vi phạm nào của Bạn đối với các điều khoản và điều kiện này đều có thể dẫn đến việc đình chỉ hoặc kết thúc tài khoản, Dịch vụ hoặc những hoạt động được phép khác theo Thỏa thuận sử dụng Dịch vụ của I2C</p>
        <p class="white-text"><span class="card-title z-depth-3">2. Sử dụng hợp pháp</span></p>
        <p class="white-text">Bạn phải nhận thức và chấp nhận rằng Bạn có trách nhiệm sử dụng Dịch vụ vào công việc kinh doanh dịch vụ phù hợp với pháp luật hiện hành và thuần phong mỹ tục Việt Nam.</p>
        <p class="white-text"><span class="card-title z-depth-3">3. Thương hiệu</span></p>
        <p class="white-text">SmartHotel360 là sản phẩm phần mềm được bảo vệ bởi các văn bản pháp luật về sở hữu trí tuệ, quyền tác giả và các văn bản pháp luật khác của nước Cộng hòa Xã hội Chủ nghĩa Việt Nam.</p>
        <p class="white-text"><span class="card-title z-depth-3">4. Bảo mật thông tin</span></p>
        <p class="white-text">Bạn phải có trách nhiệm lưu giữ thông tin tài khoản truy cập vào I2C để tránh trường hợp tài khoản bị đánh cắp hoặc bị lạm dụng với mục đích không an toàn cho cả Bạn và I2C. I2C không chịu trách nhiệm đối với sự xâm nhập trái phép của bên thứ ba vào tài khoản của Bạn do sự bất cẩn của Bạn.</p>
        <p class="white-text"><span class="card-title z-depth-3">5. Cập nhật</span></p>
        <p class="white-text">SmartHotel360 được thường xuyên cập nhật các phiên bản mới. Nếu bạn sở hữu quyền sử dụng SmartHotel360, trong thời gian hiệu lực của Bản HĐ quyền sử dụng, bạn được cập nhật các phiên bản mới của SmartHotel360.</p>
        <p class="white-text"><span class="card-title z-depth-3">6. Trách nhiệm</span></p>
        <p class="white-text">Về lý thuyết, Phần mềm Smarthotel360 không bảo đảm rằng Website hoặc Dịch vụ sẽ luôn sẵn sàng, có thể sử dụng, không bị gián đoạn, không có lỗi trong quá trình sử dụng, do các tác động khách quan hoặc chủ quan. Tuy nhiên I2C và các nhân viên của I2C cam kết cố gắng trong mọi điều kiện và khả năng có thể để đảm bảo Website và Dịch vụ luôn được sẵn sàng.</p>
        <p class="white-text">Bạn cần lưu ý rằng Website này và Dịch vụ là dựa trên những dịch vụ đường truyền Internet và có thể bị gián đoạn, bị bên ngoài tấn công và xảy ra chậm trễ. Trong những trường hợp như vậy, đối với những điều khoản này,I2C cam kết nỗ lực khắc phục sự gián đoạn và đưa ra sự điều chỉnh, sửa chữa và thay thế trong khả năng có thể để phục hồi hệ thống. Không trong bất kỳ trường hợp nào bạn được yêu cầu bồi thường các tổn thất, thiệt hại trực tiếp hay gián tiếp gặp phải bao gồm và không giới hạn: mất mát dữ liệu, sự sẵn sàng của hệ thống, cơ hội, tiền, tinh thần, phát sinh từ việc sử dụng hoặc chưa thể sử dụng. Không trong bất cứ trường hợp nào, trách nhiệm bồi thường vượt quá số tiền bạn trả để được sử dụng I2C. Điều khoản này luôn có hiệu lực khi bạn đồng ý sử dụng I2C.</p>
        <p class="white-text"><span class="card-title z-depth-3">7. Thông tin liên hệ</span></p>
        <p class="white-text">SmartHotel360 khuyến khích Bạn liên hệ với Trung tâm Hỗ trợ khách hàng SmartHotel360 qua hotline: <span class="orange-text">0946 830 620</span> từ 8 giờ 30 sáng đến 22 giờ mỗi ngày khi có nhu cầu hỗ trợ. Bạn có thể dùng công cụ ở mục Hỗ trợ trực tuyến để gửi các yêu cầu cụ thể trong trường hợp các kênh liên hệ qua tổng đài hoặc điện thoại không khả dụng.<br>
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