<?php
session_start();
$idforcategory= $_POST['id'];


$conn=mysqli_connect('localhost','root','','hashmi');
 

$date =('j/m/Y');

 	$query= 'SELECT * FROM `items`';
	
																			$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																							$id=$row['id'];
																							$name= $row['name'];
																							$stock=$row['stock'];
																							$price=$row['price'];
																							$cat=$row['category'];
																							$image=$row['image'];
																							break;
																							}
																						}
																						
																						$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																		
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							if($id==$cat)
																							{
																								$categoryname=$name;
																							}
																									
																						}

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
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
.card-header{
	text-align:center;
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
#valuebox{
	font-size:xx-large;
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
		   <span onclick="window.location.assign('index.php')">HashmiFabrics</span>
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

<h6 style="text-align:center;width:100%;border-top:1px solid aqua;border-bottom:1px solid aqua;" class="card-header" >Categories / <?php echo $categoryname; ?> Collection</h6>
<div class="col-md-12"  style="font-family:Bauhaus">
<div class="row justify-content-center" style="margin-top:10px;">
	<div class="col-md-5">
		<div class="well">
		<?php
 	$query= 'SELECT * FROM `items`';
																					$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																								$image=$row['image'];
																								echo '<img class="d-block w-100"  src="hashmi/'.$image.'" alt="image">';
																						
																							}
																						}
		?>
																						
		</div>
				</div>
					<div class="col-md-4">
					<?php
					
																					$query= 'SELECT * FROM `items`';
																					$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																								echo '<div class="">
																									<h2>'.$row["name"].'</h2>
																							<div class="card-body">
																							  <h5>'.$row["description"].'</h5>
																							  <p style="width:100%;text-align:end">In-Stock '.$row['stock'].'</p>
																							  <h2 style="width:100%;color:red;text-align:end"> '.$row['price'].'<small style="font-size:small;font-family:verdana">pkr</small></h2>
																									</div>	
																							<form action="addtocart.php" method="POST" style="display:block;">
																							<input type="text" value="'.$row['id'].'" style="display:none;" name="id">
										
	<h6><b> Quantity</b></h6>
	<input type="text" class="form-control" value="1" name="quantity" id="valuebox" >
	<p style="color:red;display:none" id="lesserror">*could not be less then one</p>

	     <input type="button" value="+" style="width:20%;margin:5px;" class="btn-outline-danger"  onclick="update_quantityplus()">
	     <input type="button" value="-" style="width:20%;margin:5px;" class="btn-outline-danger"  onclick="update_quantityminu()">
	    
		

																							<input type="submit" class="btn btn-success" value="+ add to cart" style="width:100%;text-align:center;font-size:x-large;border-radius:0%;" >
																							</form>	
																							
																								</div>';
																							}
																						}
					?>
					<script>
						function update_quantityplus()
						{
								document.getElementById("lesserror").style.display="none";
							var val=document.getElementById("valuebox");
							
							var r=val.value;
							
							r++;
							val.value=r;
						}
						function update_quantityminu()
						{
							var val=document.getElementById("valuebox");
							
							var r=val.value;
							if(r==1)
							{
								document.getElementById("lesserror").style.display="block";
							}
							else
							{
							
							r--;	
							}
							
							val.value=r;
						}
					</script>
																								
				</div>
					<div class="col-md-3">
																								<div class="card">
																									<div class="header" style="padding:15px;">Payment method?</div>
																							<div class="card-body">
																										  <div class="">
																							  <h5 class="card-header" style="text-align:center;"><img height="25px" width="25px" src="data:image/png;base64,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">
																							  easypaisa</h5>
																								<p style="width:100%;"> 
																									<div class="header" style="padding:15px;">Procedure?</div>
																										<ol>
																										<li>Add items in cart.</li>
																										<li>From cart make order.</li>
																										<li>Make a payment and enter transaction id & date.</li>
																										<li>After confirmation admin will parsal your product to you.</li>
																										</ol>
																								</p>
																									</div>	
																							
																							
																									</div>
																								</div>
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
		<h6 style="color:#fff;">HASHMI FABRICS</h6>
		

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
<div class="col-md-12 row justify-content-center" style="margin-top:30px;margin-bottom:30px">
	<div class="col-md-12 ">
		<h2 style="text-align:center;">HASHMI FABRICS</h2>
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
