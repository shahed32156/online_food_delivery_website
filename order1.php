<?php

$con=mysqli_connect("localhost","root","","deliverysystem");

$a=$_POST['Search'];

$sql="select * from foodlist where Food_name='$a'";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0) 
{
  
   header("location: ".$a.".php"); 
}

else {

header("location:order.php");
 }


?>