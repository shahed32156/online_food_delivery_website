<?php
include ("demo1.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete customert</title>

    <style>

        form {

            margin-top:37%;

           
        
        }

        .d1 {

            background:skyblue;
            margin-left :30%;
            margin-right:30%;
            
            border-radius:20px;
        }
        input {
            height:40px;
            width:300px;
            font-size:18px;
            margin-top:10%;
            color:black;
        }
        input:hover {

            background:lightgreen;
        }
        .btn{

            width:100px;
            color:white;
            border-radius:7px;
            background:black;
            font-size:15px;
        }
        .btn:hover {

        background:aqua;
        color:black;
        font-weight:bolder;
        }
    </style>
</head>
<body>

<div class="d1"> 
    <form action="deleteconfirm.php" method="POST" align="center">

     <input type="Email" name="Email" placeholder="Type an email"> <br>
     <input type="submit" value="Delete" class="btn">

    </form>
    <br> <br> 
    </div>
</body>
</html>