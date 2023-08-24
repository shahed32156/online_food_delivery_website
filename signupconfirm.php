<?php
include("home.php");
$con=mysqli_connect("localhost","root","","deliverysystem");

if (mysqli_connect_error()) {

   echo "Connection failed";

}
else {


    $a=$_POST['Fullname'];
    $b=$_POST['Email'];
    $c=$_POST['Password'];

    $sql2 = "select * from signup where Email='$b'";
    $result = mysqli_query($con,$sql2);
    
    if(mysqli_num_rows($result) > 0){
        header("location:signup.php?wrongInfo=true");
    }else{
        $sql="insert into signup (Fullname,Email,Password) values('$a','$b','$c')";
    
        mysqli_query($con,$sql);
    }
    
}


?>