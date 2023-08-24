<?php

$con=mysqli_connect("localhost","root","","deliverysystem");

$a=$_POST['Email'];
$b=$_POST['Password'];

$sql="select Email,Password from signup where Email='$a' and Password='$b'";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0) 
{
  
   header("location:home.php");

}
else {

 header("location:customerlogin.php?wrongInfo=true");
 }


?>