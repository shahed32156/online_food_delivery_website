
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

    <style>


body {

background-image: url(delivery2.jpg);
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-size: 100% 100%;
animation: change 10s infinite ease-in-out;

}



.style {

    padding: 2px;
    border-radius: 10px;
    height: 25px;
    width: 200px;
    font-size: 15px;

}

.sign-up1{

    width: 400px;
    box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.3);
    
    background: black;
    padding: 20px;
    margin-right: 36%;
    margin-top: 7%;
    text-align: center;

    border-radius: 20px;
    float: right;
    box-shadow: 0 0 50px 0 rgb(229, 79, 9);

}

h3 {

    color:white;
}

img {

  height: 100px;
  width: 100px;
  border-radius: 50%;
  position:absolute;
  top:60px;
  left:calc(50% - 50px);
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
    <form action="adminloginconfirm.php" method="POST" >
        <div class="sign-up1" style="text-align: center">
    
            <img src="login.png"> <br> <br>
            <h1 style="color:white"> Admin log In </h1> <br>
            <h3 style="text-align: left;margin-left:25%;"> Email 📧</h2>
            <input class="style" type="email" name="Email"  placeholder="Enter your email" required><br><br><br>
            <h3 style="text-align: left;margin-left:25%;">Password 🔑</h2>
            <input class="style" type="password" name="Password"  placeholder="Enter your password" required><br><br><br>
            <p style="color:red;"><?php if(isset($_GET['wrongInfo'])){echo "Incorrect email or password";} ?></p>
            <button class="btn" onclick="login()"> Login </button> <br><br>  
      
        </div>
        
    </form>
    </div>
</body>
</html>