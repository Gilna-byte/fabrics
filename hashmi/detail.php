<?php
	
		$code=$_POST['id'];
		
$conn=mysqli_connect('localhost','root','','hashmi');
		if($conn)
			{
				$qur= "SELECT * FROM `products`";
				$res=mysqli_query($conn,$qur);
					while($row=mysqli_fetch_assoc($res))
					{
						if($row['code']==$code)
						{
							$id=$row['id'];
							$name=$row['name'];
							$desc=$row['description'];
							$date=$row['date'];
							$cat=$row['categories'];
							$image=$row['image'];
							$stock=$row['stock'];
							$weight=$row['weight'];
							$price=$row['price'];
							$wh=$row['wholesale'];
							$bus=$row['resturantprice'];
						
						}
					}
			}
									if(empty($code))
									{
										$code ="NO code ";
									}
									if(empty($price))
									{
										$price ="NO price ";
									}
									if(empty($date))
									{
										$date ="NO date ";
									}
									
									if(empty($stock))
									{
										$price ="NO stock ";
									}
									if(empty($weight))
									{
										$date ="NO weight ";
									}if(empty($cat))
									{
										$date ="NO categories ";
									}
?>
<html>
	<head>
						<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>All products</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style> 
    .card{
        display:block;
    }
</style>
	</head>
<body>
 <nav class="navbar navbar-expand navbar-dark bg-dark">
       

        <div class="collapse navbar-collapse" id="navbarCollapse1">
           <a href="allproducts.php" class="btn btn-light" style="float:left;" >back</a>
            <h4 style="float:right;margin-left:3%; color:white;">Oriental Food</h4>
        </div>
    </nav>
	
<div class="container"  style="border:1px solid aqua;border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
		<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $image; ?>" class="card-img" alt="no image">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title"><?php echo $name ?></h2>
		<h5 style="border-bottom:1px solid aqua;">Description</h5>
        <p class="card-text"><?php echo $desc; ?></p>
      </div>
    </div>
  </div>
</div>
<div>
    <div style="inline-block">
<div class="card border-success mb-3" style="max-width: 50%;float:left;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Cost</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $price; ?> $</textarea></h3></div>
</div style="margin-top:10px;">

<div class="card border-primary mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Stock</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $stock; ?> </textarea></h3></div>
</div>
</div>
<div style="display:inline-block;width:100%" >

<div class="card border-success mb-3" style="max-width: 50%;float:left;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Categoty</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $cat; ?> </textarea></h3></div>
</div>
<div class="card border-success mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Weight</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $weight; ?>g </textarea></h3></div>
</div>
</div>
<div style="display:inline-block">
<div class="card border-primary  mb-3" style="max-width: 50%;float:left;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Wholesale Price</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $wh; ?> </textarea></h3></div>
</div>
<div class="card border-primary  mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Resturant buyers Price</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $bus; ?> </textarea></h3></div>
</div>
<div class="card border-success mb-3" style="max-width: 100%;float:left;display:inline-block">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Date</h5> <h3  style="float:right;display:inline-block;"><textarea style="width:100%"><?php echo $date; ?> </textarea></h3></div>
</div>
</div>
</div>
</body>
</html>