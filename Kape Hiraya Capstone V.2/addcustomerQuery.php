<?php
include "Connections/dbconnect.php";


extract($_POST);
$result = array();
if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['contactSend']) && isset($_POST['addressSend']) && isset($_POST['dateSend'])){
    if(empty($nameSend) || empty($emailSend) || empty($contactSend) || empty($addressSend) || empty($dateSend))
    {
        $result[] = "1";
        if (empty($nameSend))
        {
            $result[] = "1";
        }
        if (empty($emailSend))
        {
            $result[] = "2";
        }
        if (empty($contactSend))
        {
            $result[] = "3";
        }
        if (empty($addressSend))
        {
            $result[] = "4";
        }
        if (empty($dateSend))
        {
            $result[] = "5";
        }
        echo json_encode($result);
    }
    else{
        $sql="INSERT INTO `customers`(`name`, `email`, `contact`, `address`, `date`)
        VALUES ('$nameSend','$emailSend','$contactSend','$addressSend','$dateSend')";
   
        mysqli_query($con,$sql);
        $result[0]="2";
       echo json_encode($result);
    }

   

 
}


?>
