<?php

$conn=mysqli_connect('localhost','root','','hashmi');


$orderid=$_POST['id'];
$pending=0;
$query="SELECT * FROM `orderitem` ORDER BY id DESC";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
{
	if($row['id']==$orderid)
	{
		if($row['order_status']=="pending")
		{
			$pending++;
		}
	
	}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<style>
body {
  font-family:Arial Black;
  roboto,sans-serif;
  background-color:#e8dbdb82;
}carousel-item img{
	position:relative;
}
#carouselExampleControls{
	position:relative;
}

.sidenav {
	
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  color:#01111;
  border-radius:4px;
  box-shadow:1px 3px 2px #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 0px 8px 8px 20px;
  text-decoration: none;
  font-size: 21px;
  color: #818181;
  display: block;
  transition: 0.3s;
  display:block;
}

.sidenav a:hover {
  color: #000;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.fa {
  padding: 10px;
  font-size: 15px;
  width:30px;
  text-align:center;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.card-header{
	text-align:center;
}
.card-body:hover img{
	opacity:0.7;
}
.mybtn{
	display:block;
	padding:10px;
	margin-left:30px;
	color:#818181;
	background:inherit;
	border:0px;
	
}
.mybtn:hover{
	
	color:#000;
	border-bottom:1px solid black;
	
}
.col-md-4,col-md-12{
	margin-bottom:2px;
}

.catcard:hover #seebtn{
	margin-left:40%;
	text-align:center;
}
.delcart:hover{
	border:1px solid aqua;
}
</style>
<body>
 <nav class="navbar navbar-expand navbar-dark bg-dark">
       

        <div class="collapse navbar-collapse" id="navbarCollapse1">
           <a href="main.php" class="btn btn-light" style="float:left;" >back</a>
            <h4 style="float:right;margin-left:3%; color:white;">Hashmi Fabrics |Parcel order and click on parcelled.</h4>
        </div>
    </nav>
	
 <div class=" col-md-12">
<div class="row" style="width:100%;margin:0%">
<?php
if($pending!=0)
{
?>
<form action="placelorder.php" method="POST" style="foat:right;">
	<input type="text" name="orderid" style="display:none;" value="<?php echo $orderid; ?>">
	<input type="submit" value="parcelled" class="btn btn-success" style="font-size:xx-large;border-radius:0%;width:100%">
</form>
<?php
}
else
{
	echo '<div class="col-md-1"></div>';
}
?>
<div class="col-md-10 " style="text-align:end;margin-top:5px;">
	
<div class="col-md-12 justify-content-center" style="width:100%;border-radius:0%;margin-bottom:7px;text-align:start;">
	<?php

$query="SELECT * FROM `orderitem` ORDER BY id DESC";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
{
	if($row['id']==$orderid)
	{
	$status=$row['order_status'];
	if($row['order_status']=="pending")
	{
		$status='<i class="fa fa-ban"></i>'.$row['order_status'];
	}
	if($row['order_status']=="parcelled")
	{
		$status='<i class="fa fa-truck" aria-hidden="true"></i>'.$row['order_status'];
	}
	
	echo '<div style="border:1px solid grey;margin-bottom:5px;border-radius:20px;"><div class="card-header" ><h6 style="text-align:end">order status:<b style="color:red;"> '.$status.'</b></h4></div>
	<p style="text-align:center">Items in this order</p>';
				 $query1="SELECT * FROM `cart` ORDER BY id DESC";
				 $res1=mysqli_query($conn,$query1);
				 while($row1=(mysqli_fetch_assoc($res1)))
				{
					if($row['id']==$row1['ordered'])
					{
						$query2="SELECT * FROM `items`";
				$res2=mysqli_query($conn,$query2);
				while($row2=(mysqli_fetch_assoc($res2)))
				{
					
						if($row2['id']==$row1['item_id'])
						{
							echo '<hr>
								<div class="row justify-content-center" style="width:100%;margin-top:0%;margin-bottom:0%;padding:10px">
								<div class="col-md-3">
										<img class="d-block w-100"  height="150px;" src="'.$row2['image'].'" alt="image">
									</div>
									<div class="col-md-8" style="padding-top:15px;">
										
									<small style="text-align:end;">'.$row1['date'].'</small>
										<h5>
										<form action="detailitems.php" method="POST" style="display:block;margin:0px;">
											<input type="text" value="'.$row2['id'].'" style="display:none;" name="id">
											<input type="submit" class="btn " value="'.$row2['name'].'" style="text-align:start;margin:0px;padding:0px;" >
											</form>	
										</h5>
										<p>'.$row2['description'].'
										<br>Quantity : '.$row1['quantity'].'
										</p>
										<h5 style="color:red;">1 item price '.$row2['price'].'<small style="font-family:verdana;font-size:small">pkr</small></h5>
									</div>
								</div>
							
							';
						}
				}
					}
				}
	echo '</div>';
	}
}		
?>
</div>
</div>

</div>
</div>
</body>
</html>