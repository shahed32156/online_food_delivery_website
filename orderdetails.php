<?php
include("demo1.php");
$con=mysqli_connect("localhost","root","","deliverysystem");


  $sql="select Full_name,Phone,Address,Food_name,Quantity,Order_date from order_details";
  $res=mysqli_query($con,$sql);

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style> 
table {

    border-collapse:collapse;
    margin-top:10%;
    box-shadow:0 0 20px 0 black;
}
th{

    font-size:25px;
    background-color:skyblue;
}
tr:nth-child(even) {
    background-color: lightgreen;
}

tr:nth-child(odd) {
    background-color: lightgray;
}
input {

  height:40px;
  width:400px;
  color:black;
  font-size:20px;
}
.btn {
  height:45px;
  width:150px;
  background:black;
  border-radius:10px;
  color:white;
}
.btn:hover {
background:skyblue;
}
form {
  margin-top:10%;
}

    </style>


  </head>

  <body>

    <form action="orderdate.php" method="POST" align="center">

    <input name="Date" type="date" placeholder="Type a date">
    <input type="submit" value="Search" class="btn">
    </form>
    <table align="center" border="2px" style="height : 200px; width : 900px; text-align:center">

<tr>

<th style="min-width:130px"> Full name </th>

<th> Phone </th>
<th> Address </th>
<th> Food name </th>
<th> Quantity </th>
<th> Order date </th>
</tr>

<?php 

while ($row=mysqli_fetch_assoc($res))
  {
?>
<tr>
   <td style="min-width:130px"><?php echo $row['Full_name']; ?> </td>
   <td><?php echo $row['Phone']; ?> </td>
   <td><?php echo $row['Address']; ?> </td>
   <td><?php echo $row['Food_name']; ?> </td>
   <td><?php echo $row['Quantity']; ?> </td>
   <td><?php echo $row['Order_date']; ?> </td>

</tr>
    
  <?php

  }

  ?>



    </table>

  </body>

  </html>

