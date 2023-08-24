<?php

$con=mysqli_connect("localhost","root","","deliverysystem");

if (mysqli_connect_error()) {

   echo "Connection failed";

}
else {

    $a=$_POST['Fullname'];
    $b=$_POST['Phone'];
    $c=$_POST['Email'];
    $d=$_POST['Address'];
    $e=$_POST['Foodname'];
    $f=$_POST['Quantity'];
    $g=$_POST['OrderDate'];
   
    $sql="insert into order_details (Full_name,Phone,Email,Address,Food_name,Quantity,Order_date) values ('$a','$b','$c','$d','$e','$f','$g')";
    
    mysqli_query($con,$sql);
    header("location:orderconfirm.php"); 

}
?>

