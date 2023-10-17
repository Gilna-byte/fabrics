<html>
	<head>
	
	<style>
		.hide{
			display:none;
		}
		</style>
	</head>
	<body>
	

<?php
$connect=mysqli_connect('localhost','root','','hashmi');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM orderitem 
  WHERE payment_tr LIKE '%".$search."%'
  OR payment_date LIKE '%".$search."%' 
 ORDER BY id DESC
 ";
}
else
{
 $query = "
  SELECT * FROM orderitem ORDER BY id DESC
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Transactio ID</th>
     <th>TR_DATE(mm/dd/yy)</th>
     <th>Detail</th>
	 
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $p1=$row["payment_tr"];
  $output .= '
   <tr>
    <td>'.$p1.'</td>
    <td>'.$row['payment_date'].'</td>
    <td><form action="showorderdetail.php" method="POST">
	<input type="text" class="hide" name="id" value='.$row['id'].'>
	<input type="submit" value="/\/">
	</form></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>

</body>
</html>
