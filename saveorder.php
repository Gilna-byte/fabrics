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
 
$payment_id=$_POST['trans_id'];
$payment_date=$_POST['trans_date'];
$order_status="pending";

$q="INSERT INTO `orderitem`(`payment_tr`, `payment_date`, `user_id`, `order_status`) VALUES ('$payment_id','$payment_date','$userid','$order_status')";
 $res=mysqli_query($conn,$q);
  $query="SELECT * FROM `orderitem`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['payment_tr']==$payment_id)
	 {
		 $orderid=$row['id'];
	 }
 }
 $up="UPDATE `cart` SET `ordered`='$orderid' WHERE `cart`.`user_id` = $userid &&`cart`.`ordered` = 'no'";
  $res=mysqli_query($conn,$up);
		 echo "<script>window.location.assign('orders.php');</script>";
?>