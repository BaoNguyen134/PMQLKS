<?php
	require('../database.php');
	if(!isset($_SESSION['currEmail'])){
		header("location:../login.php");
	} 
	else {
		if(!isset($_SESSION['currAdmin'])){
			header("location:../index.php");
		}
		else{}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="admin.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>QUẢN LÝ KHÁCH SẠN</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/init.js"></script>
<script src="../js/materialize.js"></script>
</head>
<body>
<!-- menu -->
<nav class="green" role="navigation">
  <div class="nav-wrapper" style="margin-left:20px"> <a id="logo-container" href="../index.php" class="brand-logo"><span class="z-depth-5">SmartHotel360</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#"><b class="z-depth-3">QUẢN LÝ KHÁCH HÀNG</b></a></li>
      <li>
        <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a>
        <?php 
		} else {
			echo "<a><b class='z-depth-3'>Xin chào! ".$_SESSION['currEmail']."</b></a>";
			}
	  	?>
      </li>
      <li>
        <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="#"><b class="z-depth-3">ĐĂNG KÝ</b></a>
        <?php 
		} else {
			echo "<a href='../logout.php'><b class='z-depth-3'>THOÁT</b></a>";
			}
	  	?>
      </li>
    </ul>
    <ul id="nav-mobile" class="side-nav orange">
      <li><a href="#"><b class="z-depth-3  white-text">QUẢN LÝ KHÁCH HÀNG</b></a></li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="login.php"><b class="z-depth-3 white-text">ĐĂNG NHẬP</b></a>
      <?php 
		} else {
			echo "<a><b class='z-depth-3 white-text'>".$_SESSION['currEmail']."</b></a>";
			}
	  	?>
      </li>
      <li>
        <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="#"><b class="z-depth-3">ĐĂNG KÝ</b></a>
        <?php 
		} else {
			echo "<a href='../logout.php'><b class='z-depth-3 white-text'>THOÁT</b></a>";
			}
	  	?>
      </li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu -->
<div align="center" style="margin-bottom: 50px">
  <h5 class="blue-grey-text"><b class="z-depth-3">DANH SÁCH KHÁCH HÀNG</b></h5>
  <table class="highlight z-depth-3" style="width:100%;">
    <tr>
      <th><span class="blue-grey-text">ROLE</span></th>
      <th><span class="blue-grey-text">KÍCH HOẠT</span></th>
      <th><span class="blue-grey-text">HỌ TÊN</span></th>
      <th><span class="blue-grey-text">ĐIỆN THOẠI</span></th>
      <th><span class="blue-grey-text">EMAIL</span></th>
      <th><span class="blue-grey-text">TÊN KHÁCH SẠN</span></th>
      <th><span class="blue-grey-text">ĐỊA CHỈ</span></th>
      <th><span class="blue-grey-text">SỐ LƯỢNG PHÒNG</span></th>
      <th></th>
      <th></th>
    </tr>
    <?php 
		$conn = connectDatabase();
		if(isset($_POST['update'])){
$role=$_POST['role'];
$tt=$_POST['tt'];
$email=$_POST['email'];
  if($role==NULL||$tt==NULL){
	echo '<script language="javascript">';
	echo'alert("Chưa Nhập Đủ Thông Tin")';
    echo'</script>';}
  else{
	   $sql="update dangkyphanmem set role='".$role."', kichhoat='".$tt."' where email='".$email."'"; 
			mysql_query($sql);
	echo '<script language="javascript">';
	echo'alert("Cập Nhật Thành Công")';
    echo'</script>';}}	
		
		$sql="SELECT * FROM dangkyphanmem";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 0){
			echo "Chua co du lieu";
		}
		else{
			
			while($row=mysql_fetch_array($query)){
				echo 
				"
				<tr class='blue-grey-text'>
				  <th>".$row['role']."</th>
				  <th>".$row['kichhoat']."</th>
				  <th>".$row['ho_ten']."</th>
				  <th>".$row['dien_thoai']."</th>
				  <th>".$row['email']."</th>
				  <th>".$row['ten_khach_san']."</th>
				  <th>".$row['dia_chi']."</th>
				  <th>".$row['so_luong_phong']."</th>
				  <th><a id='".$row['email']."' onclick='sua(this)' class='login-window btn orange' href=#update>SỬA</a></th>
				  <th><a onclick='return xoa(this)' href=admin_xoa.php?id=".$row['email']." class='btn red'>XÓA</a></th>
				</tr>
				";
				$hv[]=$row;
			}
		}
		mysql_close($conn);
	?>
  </table>
</div>
</div>
<script>
	function xoa(e){
		return confirm("BẠN CHẮC CHẮN MUỐN XÓA?");
	}
</script>
<script>
 var hv=<?php echo json_encode($hv);?>;
 function sua(e){
	 var p=hv.filter(function(item) {
    return (item.email === e.id);
});    console.log(p);
		$('#email').val(p['0'].email);
		$('#tt').val(p['0'].kichhoat);
		$('#role').val(p['0'].role);

	};
//.........................................
$(document).ready(function() {
    $('a.login-window').click(function() {

        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var loginBox = $(this).attr('href');

        //cho hiện hộp đăng nhập trong 300ms
        $(loginBox).fadeIn("slow");

        // thêm phần tử id="over" vào cuối thẻ body
        $('body').append('<div id="over"></div>');
        $('#over').fadeIn(300);
        
        return false;
    });

    // khi click đóng hộp thoại
    $(document).on('click', "a.close, #over", function() { 
        $('#over, .login').fadeOut(300 , function() {
            $('#over').remove();  
        }); 
        return false;
    });
	
});
 </script>
<div id="update" class="login">
  <p class="login_title" style="font-size:22px">THAY ĐỔI TRẠNG THÁI KÍCH HOẠT</p>
  <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
  <form method="post" class="login-content" action="#">
    <label><span class="blue-grey-text"><b style="font-size:18px">EMAIL</b></span>
      <input class="blue-grey-text" id="email" name="email" value="" type="email" readonly>
    </label>
    <label><span class="blue-grey-text"><b style="font-size:18px">KÍCH HOẠT</b></span>
      <input id="tt"  name="tt" value="" type="text">
    </label>
    <label><span class="blue-grey-text"><b style="font-size:18px">ROLE</b></span>
      <input id="role"  name="role" value="" type="text">
    </label>
    <button  align="center" class="btn submit-button" type="submit" name="update"><b>CẬP NHẬT</b></button>
  </form>
</div>
