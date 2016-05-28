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
<head><link rel="stylesheet" type="text/css" href="admin.css">
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
<nav class="orange" role="navigation">
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
      <tr >
      <th><span class="blue-grey-text">ROLE</span></th>
      <th><span class="blue-grey-text">TT KÍCH HOẠT</span></th>
      <th><span class="blue-grey-text">HỌ TÊN</span></th>
      <th><span class="blue-grey-text">ĐIỆN THOẠI</span></th>
      <th><span class="blue-grey-text">EMAIL</span></th>
      <th><span class="blue-grey-text">TÊN KHÁCH SẠN</span></th>
      <th><span class="blue-grey-text">ĐỊA CHỈ</span></th>
      <th><span class="blue-grey-text">SỐ LƯỢNG PHÒNG</span></th>
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
				  <td>".$row['kichhoat']."</td>
				  <td>".$row['ho_ten']."</td>
				  <td>".$row['dien_thoai']."</td>
				  <td>".$row['email']."</td>
				  <td>".$row['ten_khach_san']."</td>
				  <td>".$row['dia_chi']."</td>
				  <td>".$row['so_luong_phong']."</td>
				  <td><a id='".$row['email']."' onclick='sua(this)' class='login-window btn' href=#update>Cập Nhật</a></td>
				  <td><a href=admin_xoa.php?id=".$row['email']." class='btn btn-danger'>Xóa</a></td>
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
 var hv=<?php echo json_encode($hv);?>;
 function sua(e){
	 var p=hv.filter(function(item) {
    return (item.email === e.id);
});    console.log(p);
        $('#ten').val(p['0'].ho_ten);
		$('#sdt').val(p['0'].dien_thoai);
		$('#email').val(p['0'].email);
		$('#tenks').val(p['0'].ten_khach_san);
		$('#diachi').val(p['0'].dia_chi);
		$('#slphong').val(p['0'].so_luong_phong);
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
    <p class="login_title">Thay Đổi Thông Tin Sản Phẩm</p>
     <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" class="login-content" action="#">
            <label class="TenSanPham">
            <span>Tên Thành Viên</span>
            <input id="ten" name="ten" value="" type="text" autocomplete="on"  readonly="readonly">
            </label>
            <label >
            <span>Số Điện Thoại</span>
            <input id="sdt" name="sdt" value="" type="text" placeholder="Số Điện Thoại">
            </label>
            <label >
            <span>Email</span>
            <input id="email" name="email" value="" type="text" placeholder="Email" readonly>
            </label>
            <label >
            <span>Tên Khách Sạn</span>
            <input id="tenks"  name="tenks" value="" type="text" placeholder="Tên Khách Sạn">
            </label>
             <label >
            <span>Địa Chỉ</span>
            <input id="diachi"  name="diachi" value="" type="text" placeholder="Địa Chỉ">
            </label>
             <label >
            <span>Số Lượng Phòng</span>
            <input id="slphong"  name="slphong" value="" type="number" placeholder="Số Lượng Phòng">
            </label>
             <label >
            <span>TTrang Thái Kích Hoạt</span>
            <input id="tt"  name="tt" value="" type="text" placeholder="Trạng Thái Kích Hoạt">
            </label>
             <label >
            <span>ROLE</span>
            <input id="role"  name="role" value="" type="number" placeholder="Role">
            </label>
            <button class="button submit-button"   type="submit" name="update">UPDATE</button>       
            </form>
        </div>     