<?php

$a=$_POST['Email'];
$b=$_POST['Password'];

if ($a=='shahed@gmail.com' && $b=='shahed123')
{
	header("location:admindetails.php");
}

else 
{
	header("location:adminlogin.php?wrongInfo=true");
}

?>