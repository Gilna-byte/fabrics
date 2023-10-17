<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}


$conn=mysqli_connect('localhost','root','','hashmi');


 $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$_SESSION['username'])
	 {
		 $userid=$row['id'];
	 }
 }
 
$date =date('j/m/Y');
$locate=$_POST['locate'];
$phone=$_POST['phone'];

$q="INSERT INTO `location`(`user_id`, `date`, `loc`,`phone`) VALUES ('$userid','$date','$locate','$phone')";
 $res=mysqli_query($conn,$q);
 
		 echo "<script>window.location.assign('cart.php');</script>";
?>