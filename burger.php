<?php

include("demo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Burger </title>

    <style>

     body {

       background-image: url("food.jpg");
       
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

#beef {

   
}

    </style>

</head>


<body>

<div class="menu-card">

<h1 style="color: white ; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Burger </h1> <hr>
<img src="cheese burger.jpg" alt="burger"> <br> <br>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Cheese Burger ------ 320 /- &nbsp; <button><b> <a href="orderlist.php#chb"> Order Now </a></b></button> </p> 
<p id="beef" style="color: white"> &nbsp; &nbsp; &nbsp;Beef Burger ------ 350 /- &nbsp; <button> <b> <a href="orderlist.php#bb">Order Now </a> </b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Chicken Burger ------ 450 /- &nbsp; <button> <b> <a href="orderlist.php#cb">Order Now </a></b> </button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Double Decker Burger ------ 510 /- &nbsp; <button><b> <a href="orderlist.php#ddb">Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Double Bacon Ch. Burger ------ 550 /- &nbsp; <button> <b> <a href="orderlist.php#dbb"> Order Now </a> </b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Patty Burger ------ 380 /- &nbsp; <button> <b> <a href="orderlist.php#pb">Order Now </a> </b></button></p>

</div> 
  
</body>


</html>