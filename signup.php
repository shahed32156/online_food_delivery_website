
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <style>

body {

background-image: url(delivery1.jpg);
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-size: 100% 100%;

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

.sign-up{

    width: 400px;
    box-shadow: 0 0 60px 0 rgba(9, 192, 40, 0.3);
    background: black;
    padding: 20px;
    margin: 3% auto 0;
    margin-top: 5%;
    text-align: center;
    border-radius: 30px;

}

p {

    background-image: url(white.png);
}

img {
  height: 100px;
  width: 100px;
  border-radius: 50%;
  position:absolute;
  top:30px;
  left:calc(50% - 50px);
}

h3 {

    color:white;
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
.login input[type="text"], input[type="email"],input[type="password"] {

border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;

}
input {

color:aqua;

}
h1 {

text-shadow: 2px 2px red;

}
    </style>

</head>

<body>
 <div class="login">  
<div class="sign-up" style="text-align: center">
  <form action="signupconfirm.php" method="POST">
    <img src="signup.jpg"> <br> <br>
    <h1 style="color: white"> Sign Up Now </h1> <br>
    <h3 style="text-align: left;margin-left:25%;">Full name :</h2>
    <input class="style" type="text" name="Fullname" placeholder="Enter your full name"><br><br><br>
    <h3 style="text-align: left;margin-left:25%;">Email :</h2>
    <input class="style" type="email" name="Email" placeholder="Enter your email" required><br><br><br>
    <h3 style="text-align: left;margin-left:25%;">Password :</h2>
    <input class="style" type="password" name="Password" placeholder="Enter your password" required><br><br><br>
    <span style="color:red;"><?php if(isset($_GET['wrongInfo'])){echo "Already exist this email";} ?></span> <br> <br>
    <input class="btn" type="submit" value="Signup" onclick="log()"> <br> <br>
    </form>
      
</div>
</div>
<script>

    function log() {
        alert("Signup confirmed");
    }
</script>
</body>

</html>