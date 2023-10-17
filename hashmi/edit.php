<?php
	
		$id=$_POST['id'];
		
$conn=mysqli_connect('localhost','root','','hashmi');
		if($conn)
			{
				$qur= "SELECT * FROM `items`";
				$res=mysqli_query($conn,$qur);
				
				$qurcat= "SELECT * FROM `maincategory`";
				$rescat=mysqli_query($conn,$qurcat);
					while($row=mysqli_fetch_assoc($res))
					{
						if($row['id']==$id)
						{
							$id=$row['id'];
							$name=$row['name'];
							$desc=$row['description'];
							$date=$row['date'];
							$image=$row['image'];
							$stock=$row['stock'];
							$weight=$row['weight'];
							$price=$row['price'];
							while($row2=mysqli_fetch_assoc($rescat))
							{
								if($row['category']==$row2['id'])
								{
									$cat=$row2['name'];
								}
							}
						}
					}
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
									}
									if(empty($cat))
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

	</head>
<body>
 <nav class="navbar navbar-expand navbar-dark bg-dark">
       

        <div class="collapse navbar-collapse" id="navbarCollapse1">
           <a href="main.php" class="btn btn-light" style="float:left;" >back</a>
            <h4 style="float:right;margin-left:3%; color:white;">Hashmi fabrics</h4>
        </div>
    </nav>
<form class="form" action="saveinfo.php" method="POST">
<input type="text" style="display:none;" name="id" value="<?php echo $id;?>" />
<div class="container"  style="border:1px solid aqua;border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
		<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $image; ?>" class="card-img" alt="no image">
	  
	  
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">
		<input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
		</h2>
		<h5 style="border-bottom:1px solid aqua;">Description</h5>
        <input type="text" class="form-control" class="card-text" name="description" value="<?php echo $desc; ?>" />
		
		</div>
    </div>
	
  </div>
</div>
<div>
<div class="card border-success mb-3" style="max-width: 50%;float:left;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Cost</h5> <h3  style="float:right;display:inline-block;"><input name="cost" style="width:100%" value="<?php echo $price; ?>"></h3></div>
</div style="margin-top:10px;">

<div class="card border-primary mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Stock</h5> <h3  style="float:right;display:inline-block;"><input name="stock" style="width:100%" value="<?php echo $stock; ?>"></h3></div>
</div>
<div class="card border-success mb-3" style="max-width: 50%;float:left;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Weight</h5> <h3  style="float:right;display:inline-block;"><input name="weight" style="width:100%" value="<?php echo $weight; ?>"></h3></div>
</div>
<div class="card border-primary  mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="border-bottom:1px solid aqua;text-align:center;">Category</h5> <h3  style="float:right;display:inline-block;"><input disabled style="width:100%" value="<?php echo $cat; ?>"></h3></div>
</div>


<div class="" style="width: 100%;padding-bottom:2%;float:right;display:block">
  <div  style="float:right;width:100%;"><input style="float:right;" name="done" type="submit" value="save current info" class="btn btn-success" >
  
  <input style="float:left;display:inline-block;width:auto;" type="button" class="btn btn-dark"  data-toggle="modal" data-target=".bd-example-modal-lg" value="Delete" ></div>
  </div>
 
</form>
		

		<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" style="display:inline-block;padding:20px;">
												<form  action="delete.php" method="POST">
												<input type="text" name="id" value="<?php echo $id; ?>" style="display:none;" />
												<h4 style="color:red;text-align:center;display:block;padding-bottom:5px;border-bottom:1px solid aqua;">Are you sure !!!</h4>
												<button class="btn btn-primary" data-dismiss="modal" type="button" style="float:left;width:40%;display:inline-block;" >NO</button>
												<input type="submit" style="float:right;width:40%;display:inline-block;" class="pic btn btn-outline-success" value="Yes" >
												</form>
				</div>
			</div>
		</div>
<!-- Frame Modal Bottom -->
  

</div>
</div>
</body>
</html>