
<?php

$con=mysqli_connect("localhost","root","","deliverysystem");

if (mysqli_connect_error()) {

   echo "Connection failed";

}
else {


    $a=$_POST['Fullname'];
    $b=$_POST['Phone'];
    $c=$_POST['Email'];
    $d=$_POST['Feedback'];

    $sql="insert into contactus (Fullname,Phone,Email,Feedback) values('$a','$b','$c','$d')";
    header("location:contactus.php");
    mysqli_query($con,$sql);
}


?>