<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('index.php');</script>";
}

$conn=mysqli_connect('localhost','root','','hashmi');


$query1="SELECT * FROM `users`";
			$res1=mysqli_query($conn,$query1);
			while($row1=(mysqli_fetch_assoc($res1)))
			{
					if($_SESSION['username']==$row1['email'])
					{
						$userid=$row1['id'];
					}
			}
			$money=0;
			$couteritems=0;
 $query="SELECT * FROM `cart`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
{if($row['ordered']=="no")
				{
			if($userid==$row['user_id'])
			{
				$query2="SELECT * FROM `items`";
				$res2=mysqli_query($conn,$query2);
				while($row2=(mysqli_fetch_assoc($res2)))
				{
						if($row2['id']==$row['item_id'])
						{
							$couteritems++;
							$coutermoney=$row2['price'];
							$q=(int)$row['quantity'];
							$c=$coutermoney*$q;
							$money+=$c;
							$c=0;
			
						}
				}
			}
		
	
}}
?>

<!DOCTYPE html>
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
</head>
<body>
<div class="top " style="background-color:#fff;font-family:Eras Bold ITC;width:100%;text-align:center;background:#f14f78;color:#fff">
<div class="container"><b>
<span style="text-align:center;"><i class="fa fa-car" aria-hidden="true" style="padding:0px;margin:0px;"></i>Free delievery over 3000rs purchase.</span>
</b>
</div>
</div>
 <nav class="navbar navbar-expand-md navbar-dark" style="width:100%;background:#201b1b;">
        <a href="#" class="navbar-brand">
           <h3 style="font-family:Trajan"><b><span style="font-size:30px;cursor:pointer;margin-right:2%;margin-left:2%" onclick="openNav()">&#9776;</span>
		   <span onclick="window.location.assign('index.php')">Fabrics</span>
</b></h3>
        </a>
      

        <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <div class="navbar-nav ml-auto">
<?php
  if(!isset($_SESSION["username"]))
{
  ?>
                           <a href="userlogin.php" style="" class="nav-item nav-link"><h5><b>
						   Login
						   <i class="fa fa-sign-in" aria-hidden="true"></i></b></h5></a>
 <?php 
}
	?>
            </div>
        </div>
    </nav>
	
<div id="mySidenav" class="sidenav" >
  <a style="font-size:large;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
  if(!isset($_SESSION["username"]))
{
  ?>
    <a href="userlogin.php" style="font-size:large;" ><h5><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In </h5></a>
    <a href="usersignup.php" style="font-size:large;" ><h5><i class="fa fa-user" aria-hidden="true"></i> Suign Up </h5></a>
  <a style="font-size:large;" href="about.php"><i class="fa fa-address-card"></i> About</a>
	<?php 
}
else
{
	?>
	<p style="width:80%;padding:20px;text-align:center;">Logged in as<small style="color:blue"> <?php echo $_SESSION["username"]; ?>
</small></p>
    <a href="cart.php" style="font-size:large;" ><h5><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart </h5></a>
    <a href="orders.php" style="font-size:large;" ><h5><i class="fa fa-check"></i> My Order </h5></a>
    <a href="userlogout.php" style="font-size:large;" ><h5><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </h5></a>
	<?php
}
	?>
  <hr>
  <h6 style="padding:5px;text-align:center;">Categories</h6>

   <?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																		
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							
																							echo '
																							<form action="category.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id.'" style="display:none;" name="idofcat">
																							<input type="submit" value="'.$name.'" style="background:inherit" class="mybtn">
																							</form>
																							
																							';
																									
																						}
																						?>
  
  
</div>

<h2 style="text-align:center;width:100%;border-top:1px solid aqua;border-bottom:1px solid aqua;margin-bottom:5px;" class="card-header" ><i class="fa fa-shopping-cart" style="font-size:x-large;" aria-hidden="true"></i> cart </h2>

 <div class=" col-md-12">
<div class="row" style="width:100%;margin:0%">

<div class="col-md-5" style="text-align:end;">
	<h2 style="color:red;text-align:end;"><b>Total :<?php echo $money; ?><small style="font-family:verdana;font-size:small">pkr</small></b></h2>
	<span style="text-align:end;">There are <?php echo $couteritems; ?> package.</span>
	<?php
	
$query1="SELECT * FROM `users`";
			$res1=mysqli_query($conn,$query1);
			while($row1=(mysqli_fetch_assoc($res1)))
			{
					if($_SESSION['username']==$row1['email'])
					{
						$userid=$row1['id'];
					}
			}
	$chklocation=0;
		$query1="SELECT * FROM `location`";
			$res1=mysqli_query($conn,$query1);
			while($row1=(mysqli_fetch_assoc($res1)))
			{
					if($userid==$row1['user_id'])
					{
						$loca=$row1['loc'];
						$phon=$row1['phone'];
						$chklocation++;
					}
			}
	if($chklocation==0)
	{
		echo '
		<form action="savelocation.php" method="POST">
		<div class="card" style="margin-bottom:10px;">
		<small class="card-header">Please save your information before order.</small>
		<textarea class="form-control" name="locate" rows="3" placeholder="Enter location here " required style="margin-top:2px;"></textarea>
		<input type="text" name="phone" class="form-control" placeholder="Enter phone number here " required style="margin-top:2px;">
		<input type="submit" class="btn btn-outline-primary card-footer" value="save" style="margin:2px;">
		</form>
		</div>
		';
	}
	else
	{
		echo '<h6 style="text-align:start" >my address: <b>'.$loca.'</b></h6>';
		echo '<h6  style="text-align:start">my phone number: <b>'.$phon.'</b></h6>';
		
	}
	if(!$money=="0")
	{
	?>
	
	<form action="saveorder.php" method="POST">
	<div class="card" >
	<div class="card-header">Send <u>easypaisa</u> <b style="color:red;"><?php echo $money; ?> <small>pkr</small> </b> to <b style="font-size:large">033312123</b> and fill this form to make order.</div>
	<div class="card-body">
	<label style="text-align:start"> Transaction id.</label>
	<input type="text" class="form-control" Placeholder="Enter transaction id.." name="trans_id" required>
	
	<label style="text-align:start">Date when you make transaction.</label>
	<input type="date" class="form-control" name="trans_date" required>
	</div>
	</div>
	<br>
	<input type="submit" style="text-align:center;width:100%;font-size:x-large;border-radius:1%;" class="btn btn-success" value="Order now">
	</form>
	<?php
	}
	?>
</div>
<div class="col-md-7" style="margin-top:10px;">
<small style="text-align:center;width:100%;">Click on item name to see item.</small>
<div class="col-md-12" style="width:100%;border-radius:0%;margin-bottom:7px;border:1px solid grey;">
							
<?php
$query1="SELECT * FROM `users`";
			$res1=mysqli_query($conn,$query1);
			while($row1=(mysqli_fetch_assoc($res1)))
			{
					if($_SESSION['username']==$row1['email'])
					{
						$userid=$row1['id'];
					}
			}
			
 $query="SELECT * FROM `cart` ORDER BY id DESC";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
{
			if($userid==$row['user_id'])
			{
				if($row['ordered']=="no")
				{
				$query2="SELECT * FROM `items`";
				$res2=mysqli_query($conn,$query2);
				while($row2=(mysqli_fetch_assoc($res2)))
				{
					
						if($row2['id']==$row['item_id'])
						{
							echo '<hr>
								<div class="row justify-content-center" style="width:100%;margin-top:0%;margin-bottom:0%;">
								<div class="col-md-3">
										<img class="d-block w-100"  height="150px;" src="hashmi/'.$row2['image'].'" alt="image">
									</div>
									<div class="col-md-8" style="padding-top:5px;">
										<form action="deletecart.php" method="POST" style="display:block;float:right">
											<div class="" style="margin-bottom:10px;">
											<input type="text" name="cartid" value="'.$row["id"].'" style="display:none;">
											<small ><input type="submit" class="btn delcart link card-footer" value="Drop it from cart" style="border-top:1px solid aqua;border-bottom:1px solid aqua;color:red;">
											</small>
											
											</div>
											</form>
									<small style="text-align:end;">'.$row['date'].'</small>
										<h5>
										<form action="detailitems.php" method="POST" style="display:block;margin:0px;">
											<input type="text" value="'.$row2['id'].'" style="display:none;" name="id">
											<input type="submit" class="btn " value="'.$row2['name'].'" style="text-align:start;margin:0px;padding:0px;" >
											</form>	
										</h5>
										<p>'.$row2['description'].'
										<br>Quantity : '.$row['quantity'].'
										</p>
										<h5 style="color:red;">1 item price '.$row2['price'].'<small style="font-family:verdana;font-size:small">pkr</small></h5>
									</div>
								</div>
							
							';
						}
				}
			}
			}
		
	
 }
?>
</div>
</div>
</div>
</div>
<footer style="background:black;color:#ddd;margin-top:20px;width:100%;"> 
<div class="card-footer" style="">

<div class="container">
<div class="col-md-12" >
<div class="row justify-content-center" style="padding-top:10px;margin:0%;">
<div class="col-md-3">

	<div class="" >
		<h6 style="color:#fff;">FABRICS</h6>
		

   <?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																		
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							
																							echo '
																							<form action="category.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id.'" style="display:none;" name="idofcat">
																							<input type="submit" value="'.$name.'" style="background:inherit;color:#b0ababcc;border:0xp;text-align:strart" class="mybtn">
																							</form>
																							
																							';
																									
																						}
																						?>
		
	</div>
	

</div>
	<div class="col-md-3" > 
	
		<h6 style="color:#fff;">Social Links</h6>
<a href="#" class="fa fa-facebook btn btn-dark"></a>
<a href="#" class="fa fa-twitter btn btn-dark"></a>
	</div>
<div class="col-md-3">

<div class="">
	<div >
	<h6 style="color:#fff;">Address</h6>
		<small style="color:#b0ababcc">Pakistan cloth house<br>
		near Boar chowk,Dinga<br>
		Gujrat, Pakistan</small>
	</div>
	
	
	</div>
</div>
<div class="col-md-3">
<div >
	<h6 ><a href="#" style="color:#fff;">Contacts</a></h6>
	<small style="color:#b0ababcc">T: +92-333-3333333<br>
		Emal: mymail@mail.com<br>
		</small>
	</div>
</div>
</div>
</div>
<div class="row " style="margin-top:30px;margin-bottom:30px;background:#201b1b;width:100%;">
	<div class="col-md-12 ">
		<h2 style="text-align:center;"><img src='logo.jpg' height="90px" width="200px"></h2>
	</div>
</div>
</div>

</div>

</footer>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 