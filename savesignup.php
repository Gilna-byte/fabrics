<?php

session_start();
$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];

$conn=mysqli_connect('localhost','root','','hashmi');
 

$date =('j/m/Y');
$chk=0;
 $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$email)
	 {
		 echo "<script>window.location.assign('useremailerror.php');</script>";
		 $chk++;
	 }
 }
 if($chk==0)
 {
 $insert="INSERT INTO `users`(`username`, `email`, `pass`, `date`) VALUES ('$name','$email','$pass','$date')";
 $res=mysqli_query($conn,$insert);

			$_SESSION["username"] = $email;
			$_SESSION["name"] = $name;
		 echo "<script>window.location.assign('index.php');</script>";
		 
 }
?>