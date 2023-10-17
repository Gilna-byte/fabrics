
<?php

    $iddel= $_POST["id"];
	del($iddel);
function del($id)
{
	$conn=mysqli_connect('localhost','root','','hashmi');
if($conn)
 {
      $qur2= "SELECT * FROM `items` WHERE `id` = '$id' ";
				$res2=mysqli_query($conn,$qur2);
				while($row=mysqli_fetch_assoc($res2) )
								{
									$pic=$row['image'];
								}
			 $qur= "DELETE FROM `items` WHERE `id` = '$id'";
		$res=mysqli_query($conn,$qur);
		if($res)
		{
		    if(file_exists($pic))
			{
			unlink($pic);
			}
			echo"<script>window.location.assign('main.php'); </script>";
		}
		else 
		{
	echo"<script>window.location.assign('404.html'); </script>";		}
 }
}
?>