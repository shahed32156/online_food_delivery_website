<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us </title>

    <style>

        
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

body {

    margin:0;
}



.design1{
   
   width: 400px;
   box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.3);
   
   background: rgb(169, 244, 122);
   padding: 20px;
   margin: 15% auto 0;
   text-align: center;

}
img {

width:100%;

}
.para2 {

    font-size:16px;
    text-align:justify;
}

.feedback {
    width: 400px;
      
        
    background: skyblue;
        padding: 20px;
        margin-left:8%;
        margin-top: 5%;
        text-align: center;
        border-radius: 20px;
        box-shadow: 0 0 50px 0 black;
        
}

input {

    height: 50px;
    width: 397px;
    font-size:15px;
}
input:hover {

    background-color:lightgreen;
}
textarea:hover {

background-color:lightgreen;
}
button {
    font-size:15px;
    background-color:black;
    color:white;
    height:40px;
    width:100px;
    border-radius:10px;
}
.para1 {

    background-color:black;
}


.help {
        width: 400px;
        background: skyblue;
        padding: 20px;
        margin-right:8%;
        text-align: justify;
        border-radius: 20px;
        margin-top:10%;
        float:right;
        box-shadow: 0 0 50px 0 black;
}
span {

    font-weight:bold;
}

.details {

    margin-left:29%
}

.contact {

    background-color:black;
    padding:20px;
    
}
.img1 {

    height:70px;
    width:70px;
}
.imgmarge{
    margin-left:41%;
}

.a1 {

    float:right;
    color:white;
    text-decoration:none;
    margin-right:4%;
}
.a1:hover {

    text-decoration:underline;
    color:skyblue;
}

.image {
    height:170px;
    width:190px;
    border-radius:30px;

}

    </style>
</head>

<body>
<ul>
<li> <a href="home10.php"> <b>🏠 Home </b> </a> </li> 

<li><a href="order.php"> <b> 🛒Order </b> </a> </li>
<li> <a href="contactus.php"> <b> ☎ Contact Us </b> </a> </li>

</ul>

<img src="Capture.PNG" alt="" >

<div class="help"> 
    
<h2 align="center">Help Info</h2>
<p class="para1">.</p>
<h3 align="center">Our Address : </h3> <br>
<div class="details">
<p>Gulsha-1, Road number-11</p> 
<p><span>E-mail : </span>shahed@gmail.com</p>
<p><span>Phone no : </span> 01741987566</p> <br>
<img src="fastfood.jpg" alt="" class="image"> <br> <br>
</div>
</div>

<div class="feedback">
<h2>Feedback</h2> <br>
<h4>Your Feedback is Important to us!</h4>
<p class="para2">We appreciate you taking the time to let us know how we did and how we could do better. 
   Please fill out the form provided and our management team will take a look at what 
   you have to say and share it with our team.</p>

<form action="contactusconfirm.php" method="POST">
<input type="text" placeholder="Enter your full name here" name="Fullname" required> <br> <br>
<input type="number" placeholder="Enter your phone number here" name="Phone" required> <br> <br>
<input type="email" placeholder="Enter your e-mail here" name="Email"required> <br> <br>
<textarea cols="52" rows="10" placeholder="Your feedback" name="Feedback" required></textarea> <br> <br>
<button onclick="log()">Submit</button>
</div>
</form>
<br> <br> <br> <br> <br>
<div class="contact">
<h2 align="center" style="color:white">Follow us</h2>
<div class="imgmarge">
<a href="#"><img src="fb.png" alt="" class="img1"></a>
<a href="#"><img src="wp.png" alt="" class="img1"></a>
<a href="#"><img src="inst.png" alt="" class="img1"></a>
<a href="#"><img src="twit.png" alt="" class="img1"></a> <br>
<p align="center" style="color:white;text-align:justify">Why shop, chop, and cook when we can do it <br> all for you! Cooking for you, your friends and <br>your family can be stressful and time consuming.<br> Our fresh, frozen  and family meals are delicious <br> and healthy and we deliver right to your door. <br>Just heat and eat!</p>

</div>

<hr>
<p style="color:white">© All Rights Reserved. Rose’s Family Meals</p> <a href="#" class="a1">Accessibility</a><a href="#" class="a1">Privacy Policy</a>
<br> <br>
</div>
<script>
    function log()
    {
        alert("Submission confirmed");
    }
</script>
</body>

</html>