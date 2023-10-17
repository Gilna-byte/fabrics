<?php
$conn=mysqli_connect('localhost','root','','hashmi');

session_start();

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

.seidnav {
	
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
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
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
    <a href="usersignup.php" style="font-size:large;" ><h5><i class="fa fa-user" aria-hidden="true"></i> Sign Up </h5></a>
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner"  >
    <div class="carousel-item active">
     <img class="d-block w-100" src="1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2.jpg"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.jpg" alt="Third slide">
    </div>
  </div>

</div>
<hr>
 <br>
 <div class="well">
<h4 style="text-align:center;">All Categories</h4>
<div class="col-md-12" >
<div class="row justify-content-center" style="margin-top:10px;">
<?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																						
																			$reslt=mysqli_query($conn,$qury);
																						while($row2=mysqli_fetch_assoc($reslt))
																						{
																							$name2= $row2['name'];
																						
																						$id2=$row2['id'];
																						$query= 'SELECT * FROM `items`';
																						$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							$id=$row['id'];
																							$cat=$row['category'];
																							$image=$row['image'];
																							if($row2['id']==$row['category'])
																							{
																								$categ=$name2;
																								echo '
																								<div class="col-md-4" style="">
																								<div class="card catcard"style="  background-image: url(hashmi/'.$image.');
																									  background-size:cover;
																									  height:330px;
																									  position:relative;
																									  background-repeat: no-repeat;
																									  background-color: #cccccc;" >
																									<div class="card-header" style="background:white;font-size:x-large;font-family:Lucida Console">
																										'.$categ.' 
																									</div>	
																							<div class="card-body"   >	
																							
																								 <form action="category.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id2.'" style="display:none;" name="idofcat">
																							<button type="submit" class="btn btn-secondary" id="seebtn" style="margin-top:20%;">see all <i class="fa fa-angle-double-right"></i></button>
																							</form>	
																						
																							
																									</div>
																								</div>
																								</div>
																							
																							';
																							break;
																							}
																						}
																							
																					
																						}
?>

</div>
</div>
</div>
<footer style="background:black;color:#ddd;margin-top:20px;"> 
<div class="card-footer" style="">

<div class="container">
<div class="col-md-12" >
<div class="row justify-content-center" style="padding-top:10px;">
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
		<small style="color:#b0ababcc">Indian cloth house<br>
		near Godrej Hill<br>
		Maharashtra(Kalyan), India</small>
	</div>
	
	
	</div>
</div>
<div class="col-md-3">
<div >
	<h6 ><a href="#" style="color:#fff;">Contacts</a></h6>
	<small style="color:#b0ababcc">T: +91450456800 <br>
		Emal: business.enquiry@gmail.com<br>
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


