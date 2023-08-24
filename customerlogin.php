
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title> Log In page </title>


    <style>
body {

background-image: url(delivery2.jpg);
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-size: 100% 100%;
animation: change 10s infinite ease-in-out;

}


input:hover {

    background-color: rgb(189, 234, 74);
    background-size: 15px;
  
}
.style {

    padding: 2px;
    border-radius: 10px;
    height: 25px;
    width: 200px;
    font-size: 15px;

}


.sign-up2{

    width: 400px;
    box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.3);
    
    background: black;
    padding: 20px;
    margin-left:36%;
    margin-top: 5%;
    text-align: center;
    border-radius: 20px;
    box-shadow: 0 0 50px 0 rgb(229, 5, 5);

}

img {

  height: 70px;
  width: 100px;
  border-radius: 70%;
}
h1 {

    text-shadow: 2px 2px red;
}
.btn {
    background-color: White;
    color:black;
    height:40px;
    width:140px;
    border-radius:5px;
    font-size:17px;
    font-weight:bolder;
}
.btn:hover{
    background-color: skyblue;
    color:black;
    font-size: 20px;
    font-weight:bolder;

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
  h3 {

color:white;
}

img {

height: 100px;
width: 100px;
border-radius: 50%;
position:absolute;
top:37px;
left:calc(50% - 50px);
}
  input {

color:aqua;

}

.login input[type="email"],input[type="password"] {

border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;

}


    </style>

</head>

<body>

<div class="login">
    
    <form method="POST" action="customerloginconfirm.php">
    <div class="sign-up2" style="text-align: center">

        <img src="login.png"> <br> <br>
        <h1 style="color:white"> Customer log In </h1> <br>
    
        <h3 style="text-align: left;margin-left:25%;">  Email 📧</h3>
        <input class="style" type="email" name="Email"  placeholder="Enter your email" required><br><br><br>
        <h3 style="text-align: left;margin-left:25%;">Password 🔑 </h3>
        <input class="style" type="password" name="Password"  placeholder="Enter your password" required><br><br><br>
        <hr>
          <p> <pre><b style="font-size: 25px;color:white"> -OR- </b></pre></p>   
    <b style="font-size: 17px;color:white;margin-left:5%">Do you haven't an account? <a href="signup.php"> Sign up </a></b> <br> <br> <br>
    <p style="color:red;"><?php if(isset($_GET['wrongInfo'])){echo "Incorrect email or password";} ?></p>
    <br>
    <input type="submit" value="login" class="btn"> 
    
    </div>

</form>

</div>


</body>

</html>