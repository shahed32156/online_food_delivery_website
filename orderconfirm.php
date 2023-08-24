<?php
include ("demo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>

    <style>

body {
    margin: 0;
    background-image: url("contactus.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    animation: change 10s infinite ease-in-out;
}


h1 {

    color: rgb(0, 255, 72)
}
label {

    color: rgb(0, 255, 242);
}

 form {

margin-left: 37%;


 }

input {

    height: 25px;
    width: 400px;
 
}
textarea {

    width: 400px;
}
.btn {

    background-color: rgba(255, 68, 0, 0.926);
    height: 30px;
    font-weight: bold;
    width:120px;
}
.btn:hover {

    background-color: rgb(43, 208, 226);
}


.confirm{

background:black;    
box-shadow:0 0 30px 0 black;
margin-left:30%;
margin-right:30%;
padding-right:20%;
padding-top:20px;
padding-bottom:20px;
border-radius:10%;

}

label {
    color:white;
}
@keyframes change {

0% 
{

    background-image: url(delivery2.jpg);

}
20% 
{

    background-image: url(home2.jpg);

}
 40% 
{

    background-image: url(home1.gif);

}
60% 
{

    background-image: url(home3.jpg);

} 

}



    </style>
</head>
<body>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<div class="confirm" >

    <h1 align="center" style="margin-left:70%">Confirmation</h1>
   
    <form action="orderconfirm1.php" method="POST">
    <label><b> Full Name </b> </label> <br> <br>
    <input type="text" name="Fullname" class="int"> <br> <br>
    <label for=""><b> Phone Number </b> </label> <br> <br>
    <input type="number" name="Phone"> <br> <br>
    <label for=""><b> E-mail </b> </label> <br> <br>
    <input type="email" name="Email"> <br> <br>
    <label for=""><b> Address </b> </label> <br> <br>
    <textarea cols="30" rows="8" name="Address"></textarea> <br> <br>
    <label for=""><b> Food name </b> </label> <br> <br>
        <input type="text" name="Foodname"> <br> <br> 
        <label for=""><b> Quantity </b> </label> <br> <br>
        <input type="text" name="Quantity"> <br> <br> 
    <label for=""><b> Order date </b> </label> <br> <br>
    <input type="date" name="OrderDate"> <br> <br>
    <input class="btn" type="submit" value="Confirm" onclick="log()"> <br> <br>
   

</form>

</div>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<script>
function log() {
        alert("Order confirmed");
    }
    </script>
</body>
</html>