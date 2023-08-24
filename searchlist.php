<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['username'])) 
{

    $uname=$_POST['username'];
    $password=$_POST['password'];
    sql="select * login where user='".$uname."' AND pass='".$uname."' "
}

?>