<?php
include ("demo1.php");
$con=mysqli_connect("localhost","root","","deliverysystem");

if (mysqli_connect_error()){

    echo "Connection failed.";
}
else {

    $a=$_POST['Email'];
    $sql="delete from signup where Email = '$a'";
    mysqli_query($con,$sql);
    header("location:showcustomer.php");
}

?>