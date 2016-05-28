<?php
	require('../database.php');
	$conn = connectDatabase();
	remove_directory("../ZKS_".$_GET['id']);
	$sql="delete from dangkyphanmem where email='".$_GET['id']."'";
	mysql_query($sql);
	header("location:admin.php");
?>

<?php
function remove_directory($dir){
  if($handle = opendir("$dir")){
     while(false !== ($item = readdir($handle))){
       if($item != "." && $item != ".."){
          if(is_dir("$dir/$item")){
             remove_directory("$dir/$item");
          }else{
          unlink("$dir/$item"); // đến đây xóa hết các file
         }
        }
     } 
     closedir($handle);
     rmdir($dir); // đến đây xóa foder
   }
}
?>