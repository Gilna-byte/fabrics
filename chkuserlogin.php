<?php

session_start();
if(isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('index.php');</script>";
}
$email= $_POST['email'];
$pass= $_POST['pass'];

$conn=mysqli_connect('localhost','root','','hashmi');

 

$chklogin=0;
 $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if(($row['email']==$email)&&($row['pass']==$pass))
	 {
		 echo "<script>window.location.assign('index.php');</script>";
		 $_SESSION["username"] = $email;
		 $chklogin++;
	 }
 }
  $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$email)
	 {
		 $name=$row['name'];
		  $_SESSION["name"] = $name;
	 }
 }
 if($chklogin==0)
 { 
		 echo "<script>window.location.assign('userloginerror.php');</script>";
 }
?>