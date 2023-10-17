<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}

$conn=mysqli_connect('localhost','root','','hashmi');


$date =date('j/m/Y');
$cartid=$_POST['cartid'];

$del="DELETE FROM `cart` WHERE `cart`.`id` = $cartid";
 $res=mysqli_query($conn,$del);
 
		 echo "<script>window.location.assign('cart.php');</script>";
?>