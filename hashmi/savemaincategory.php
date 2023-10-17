<?php

$conn=mysqli_connect('localhost','root','','hashmi');
$name=$_POST['name'];
 $ins="INSERT INTO `maincategory` (`name`) VALUES ('$name')";
 	$res=mysqli_query($conn,$ins);
	
echo" <script>window.location.href = 'main.php'</script>";
	
?>