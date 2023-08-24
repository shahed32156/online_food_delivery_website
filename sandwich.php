<?php
include("demo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sandwich </title>

    <style>

     body {

       background-image: url("food2.jpg");
       
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
<img src="sandwich.jpg" alt="burger"> <br> <br>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Sub Sandwich ------ 320 /- &nbsp; <button><b> <a href="orderlist.php#ss"> Order Now </a></b></button> </p> 
<p id="beef" style="color: white"> &nbsp; &nbsp; &nbsp;Club Sandwich ------ 220 /- &nbsp; <button> <b> <a href="orderlist.php#cs">Order Now </a> </b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Submarine Sandwich ------ 350 /- &nbsp; <button> <b> <a href="orderlist.php#sms">Order Now </a></b> </button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Roast Beef Sandwich ------ 310 /- &nbsp; <button><b> <a href="orderlist.php#rbs">Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Chicken Sandwich ------ 250 /- &nbsp; <button> <b> <a href="orderlist.php#cks"> Order Now </a> </b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Bacon Sandwich ------ 480 /- &nbsp; <button> <b> <a href="orderlist.php#bs">Order Now </a> </b></button></p>

</div>    
</body>

</html>