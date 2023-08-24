<?php
include("demo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fried Rice </title>

    <style>

     body {

       background-image: url("food3.gif");
       
       
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
<img src="fried rice .jpg" alt=""> <br> <br>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Chicken Fried Rice --------------- 230 /- &nbsp; <button><b><a href="orderlist.php#cfr"> Order Now </a></b></button></p> 
<p id="beef" style="color: white"> &nbsp; &nbsp; &nbsp;Shrimp Fried Rice ------ 310 /- &nbsp; <button><b><a href="orderlist.php#sfr"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Rainbow Fried Rice --------------- 350 /- &nbsp; <button><b><a href="orderlist.php#rfr"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Vegetable Fried Rice ---------- 210 /- &nbsp; <button><b><a href="orderlist.php#vfr">Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Egg Fried Rice ------------------ 240 /- &nbsp; <button><b><a href="orderlist.php#efr"> Order Now </a></b></button></p>
<p style="color: white"> &nbsp; &nbsp; &nbsp;Pine Nut Fried Brown Rice -------- 330 /- &nbsp; <button><b><a href="orderlist.php#pnfr"> Order Now </a></b></button></p>

</div>    
</body>


</html>