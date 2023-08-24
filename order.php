
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu </title>

    <style>

        body{

           background-image: url(food4.jpg);
            background-repeat:repeat-x;
            margin: 0px; 
            animation: change 10s infinite ease-in-out;
        }
ul {

  margin: 0px;
  padding: 0px;
 list-style: none;
 text-align: center;
 overflow: hidden;
 background-color:  #063247;
  
}

li {

  float: left;
}

li a {
 display: block;
  font-size: 20px;
  text-decoration: none;
  color: white;
  padding: 20px;
  
}

li a:hover {

  background-color: red;
}



.btn {

        padding: 10px;
        border-radius: 10px;
        background-color: mediumspringgreen;
        font-size: 15px;
        font-weight: bolder;
    
}
.btn:hover {

  background-color: rgb(9, 211, 247);
}
.design2 {

    margin: 150px;
    margin-left: 200px;

}


input:hover {
    background-color: rgb(150, 150, 224);

}
.sth {

        padding: 2px;
        border-radius: 10px;
        height: 40px;
        width: 200px;
        font-size: 15px;  
}

.container {
 display: grid;
 grid-template-columns: auto auto auto;
 row-gap: 80px;
 margin-left: 90px;
 margin-top: 20px;

}
.con {

  background-color: rgba(193, 195, 187, 0.705);

}
.im {

  height: 400px;
  width: 400px;
  border-radius: 30px;
  margin-top: 20px;
  transition-property: height , width;
}

img:hover {

  box-shadow: 0px 0px 20px 0px rgb(0, 170, 255);
  height: 407px;
  width: 405px;
}

h1 {

  font-weight: bolder;
  text-shadow: 5px 5px 10px rgb(255, 0, 204);
}
.anchor {

  text-decoration: none;
}
.anchor:hover{
   text-shadow: 2px 2px 2px rgb(85, 0, 255);
   text-decoration: underline;
}
.design2 {

    box-shadow: 0 0 30px 0 rgba(149, 31, 31, 0.3); 
    background: rgba(4, 4, 4, 0.776);
    padding-top: 10px;
    padding-bottom: 20px;      
    text-align: center;
    border-radius: 25px;
}

@keyframes change {

0% 
{

    background-image: url(delivery2.jpg);

}
20% 
{

    

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

  <ul>
        <li class="Hi"> <a href="home10.php"> <b>🏠 Home </b> </a> </li> 

        <li><a href="order.php"> <b>🛒Order </b> </a> </li>

        <li> <a href="contactus.php" class="menulink"> <b>☎ Contact Us </b> </a> </li>
  
</ul>
    <div class="design2" align="center">
        <h1 style="color: rgb(15, 150, 217)"> Food Order Website </h1>     
        <form action="order1.php" method="POST">
        <Select class="sth" name="Search">
        <option>Select a food</option>
        <option name="Burger" value="Burger">Burger</option>
        <option name="Pizza" value="Pizza">Pizza</option>
        <option name="Sandwich" value="Sandwich">Sandwich</option>
        <option name="Fried_rice" value="Friedrice">Fried Rice</option>
        <option name="Dessert" value="Dessert">Dessert</option>
        <option name="Pasta" value="Pasta">Pasta</option>
        <option name="Coffee" value="Coffee">Coffee</option>
        </Select>
        <input class="btn" type="submit" value="Search 🔍"> <br> <br>
        </form>
    </div>
    <br> <br>  <br> <br>
    <br> <br>  <br> <br>
    <br> <br>  <br> <br> 
    <br> <br>  <br> <br>
    


  <section class="con">
    <div class="container">
    <div> <a href="burger.php"><img class="im" src="burger.jpg" alt=""></a> <a class="anchor" href="burger.php"><p style="margin-left: 165px;font-size: 30px;">Burger</p></a></div>
    <div> <a href="pizza.php"><img class="im" src="pizza1.jpg" alt=""> </a> <a class="anchor" href="pizza.php"><p style="margin-left: 180px;font-size: 30px;">Pizza</p></a></div> 
    <div><a href="sandwich.php"><img class="im" src="sandwich1.jpg" alt=""> </a> <a class="anchor" href="sandwich.php"><p style="margin-left: 160px;font-size: 30px;">Sandwich</p></a></div>
    <div> <a href="friedrice.php"><img class="im" src="fried rice1.jpg" alt=""> </a> <a class="anchor" href="friedrice.php"><p style="margin-left: 140px;font-size: 30px;">Fried Rice</p></a></div>
    <div> <a href="pasta.php"><img class="im" src="pasta.jpg" alt=""> </a> <a class="anchor" href="pasta.php"><p style="margin-left: 170px;font-size: 30px;">Pasta</p></a></div>
    <div> <a href="dessert.php"><img class="im" src="desserts.jpg" alt=""> </a> <a class="anchor" href="dessert.php"><p style="margin-left: 170px;font-size: 30px;">Dessert</p></a></div>
    <div> <a href="coffee.php"><img class="im" src="coffee1.jpg" alt=""> </a> <a class="anchor" href="coffee.php"><p style="margin-left: 160px;font-size: 30px;">Coffee</p></a></div>  
  </div>
</section>



</body>

</html>