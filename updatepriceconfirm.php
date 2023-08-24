<?php
include("demo.php");
$con=mysqli_connect("localhost","root","","deliverysystem");

$a=$_POST['Food'];
$b=$_POST['Price'];

$sql="Update burger set Price='$b' Where Name = '$a' ";
$res=mysqli_query($con,$sql);
?>
