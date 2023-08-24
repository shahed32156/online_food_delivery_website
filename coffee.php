<?php
include("demo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pasta</title>

    <style>

     body {

       background-image: url("food7.jpg");
       
       
     }

     .menu-card{

        width: 400px;
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.3);
        background: rgba(0, 0, 0, 0.776);
        padding: 20px;
        margin: 5% auto 0;
        text-align: center;
        border-radius: 25px;
     }
     img {

        height: 120px;
        width: 200px;
        margin-top: 50px;
        border-radius: 20px;
     }
     p {

        text-align: justify;
     }
     p:hover{
        background-color:  rgba(0, 0, 0, 0.376);
     }

     button {

        background-color: mediumspringgreen;
     }
     button:hover {
        background-color: #FBB741;
     }
     a {

      text-decoration: none;
      color: black;
     }


    </style>

</head>


<body>

<div class="menu-card">

<h1 style="color: white ; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Menu Card </h1> <hr>
<img src="coffee.jpg" alt=""> <br> <br>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Cappuccino --------------- 310 /- &nbsp; <button><b><a href="orderlist.php#cc"> Order Now </a></b></button></p> 
<p id="beef" style="color: white"> &nbsp; &nbsp; &nbsp;Americano ------ 300 /- &nbsp; <button><b><a href="orderlist.php#ac"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Cafe Latte --------------- 250 /- &nbsp; <button><b><a href="orderlist.php#clc"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Cafe Mocha ---------- 230 /- &nbsp; <button><b><a href="orderlist.php#cmc">Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Cafe Cubano ------------------ 210 /- &nbsp; <button><b><a href="orderlist.php#ccc"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Caramel Macchiato -------- 280 /- &nbsp; <button><b><a href="orderlist.php#cmcc"> Order Now </a></b></button></p>

</div>    
</body>

</html>