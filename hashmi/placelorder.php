<?php
session_start();
if(!isset($_SESSION['adminname']))
{
		 echo "<script>window.location.assign('main.php');</script>";
}

$conn=mysqli_connect('localhost','root','','hashmi');


$date =date('j/m/Y');
$orderid=$_POST['orderid'];

$del="UPDATE `orderitem` SET`order_status`= 'parcelled' WHERE `orderitem`.`id` = $orderid";
 $res=mysqli_query($conn,$del);
 
		 echo "<script>window.location.assign('main.php');</script>";
?>