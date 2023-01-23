<?php
include "Connections/dbconnect.php";


extract($_POST);

if(isset($_POST['productnameSend']) && isset($_POST['quantitySend']) && isset($_POST['price1Send']) && isset($_POST['price2Send']) && isset($_POST['price3Send']) && isset($_POST['price4Send'])){

    $sql="INSERT INTO `products`(`name`, `quantity`, `price1`, `price2`, `price3`, `price4`)
     VALUES ('$productnameSend','$quantitySend','$price1Send','$price2Send','$price3Send','$price4Send')";

     $result=mysqli_query($con,$sql);

 
}


?>