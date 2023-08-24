<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title> Delivery System </title>

    <style>

body {

    margin:0;
    background-image:url("feedback.jpg");
    background-attachment:fixed;
    background-size:cover;
}
ul {

margin: 0px;
padding: 0px;
list-style: none;
text-align: center;
overflow: hidden;
background-color: black;

}
input {

color:aqua;

}

li {

float: left;
}

li a {
display: block;
font-size: 25px;
text-decoration: none;
color: white;
padding: 20px;

}

li a:hover {

background-color: red;
}
span {

    font-size:15px;
}
nav{
  height: 70px;
  background: #063247;
  box-shadow: 0 3px 15px rgba(0,0,0,.4);
}
nav ul{
  float: left;
  margin-right: 30px;
}
nav ul li{
  display: inline-block;
}
nav ul li a{
  color: white;
  display: block;
  padding: 0 15px;
  line-height: 70px;
  font-size: 20px;
  background: #063247;
  transition: .5s;
}
nav ul li a:hover,
nav ul li a.active{
  color: #23dbdb;
}
nav ul ul{
  position: absolute;
  top: 85px;
  border-top: 3px solid #23dbdb;
  opacity: 0;
  visibility: hidden;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  transition: .3s linear;
}
nav ul ul li{
  width: 300px;
  display: list-item;
  position: relative;
  border: 1px solid #042331;
  border-top: none;
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul{
  border-top: none;
}
nav ul ul ul li{
  position: relative;
  top: -70px;
  left: 150px;
}
nav ul ul li a i{
  margin-left: 45px;
}

    </style>
</head>


<body>

    <nav>
   <ul>
  <li> <a href="admindetails.php"> <b>🏠 Home </b> </a> </li> 
  <li> <a href="feedback.php"> <b> 🌟Customer feedback </b> </a> </li>

  <li> <a href="cutomerregistered.php"> <b> ✅ Others </b> </a>
  <ul>
  <li> <a href="cutomerregistered.php"> <b> Total regeistered customer </b> </a> </li>
  <li> <a href="foodquantity.php"> <b> 🌟Individual food sell </b> </a> </li>
  <li> <a href="deletecustomer.php"> <b> ⌦ Delete a customer </b> </a> </li>
  <li> <a href="showcustomer.php"> <b> Registerd customer </b> </a> </li>


 </ul>
</li>
<li> <a href="orderdetails.php"> <b> 🛒 Order details </b> </a> </li>
  <li> <a href="home10.php"> <b> ✅ Log out </b> </a>  
  

</ul>
</nav>

</body>

</html>