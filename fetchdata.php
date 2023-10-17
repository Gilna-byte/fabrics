 <?php

$conn=mysqli_connect('localhost','root','','hashmi');

$email  ='osama';
 
$sql = "select * from MemoOnlineData where email like '%$email%'";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('title'=>$row[4],
'date'=>$row[5],
'data'=>$row[6],
'id'=>$row[0]
));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>