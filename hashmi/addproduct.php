<?php session_start(); ?>
<?php
{
$pname=$_POST['product_name'];
$pdescription=$_POST['product_description'];
$pstock=$_POST['product_stock'];
$pprice=$_POST['PRICE'];
$pweight=$_POST['product_weight'];
$pcategorie=$_POST['cat'];

$conn=mysqli_connect('localhost','root','','hashmi');


if($conn)
{
    $date = date("d/m/Y");
	  $filename = $_FILES['file']['name'] ;
    $filesize = $_FILES['file']['size'] ;
    $filetemploc = $_FILES['file']['tmp_name'];

    $fileerror = $_FILES['file']['error'] ;
    $filenamepart = explode('.',$filename);
    $fileext = strtolower(end($filenamepart));

    $allow = array('jpg','jpeg','png');
    if(in_array($fileext,$allow))
    {
    if($fileerror === 0){
    if($filesize<50000000000) {
                              $filenewname=uniqid('',true).".".$fileext;
                              $filedes='uploads/' .$filenewname;
                              move_uploaded_file($filetemploc,$filedes);
                              $query="INSERT INTO items(name, description, date, image, stock, weight, price, category) VALUES ('$pname','$pdescription', '$date', '$filedes' , '$pstock', '$pweight', '$pprice','$pcategorie')";

                              if (mysqli_query($conn,$query)) {
                                    echo "<script>window.location.href='main.php';</script>";
                              } else {
                                  echo "Error:   $query " . mysqli_error($conn);
                              }

                              }
                              else
                              {
                              echo "your file is too big" ;
                              }
                              }else {
                              echo "there was an error uploading file" ;
                              }
        }
    else {
    echo "you cannot upload file of this type";

    }



}
else {
  echo "no connection";
}

}


?>
