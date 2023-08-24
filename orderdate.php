<?php
include ("demo1.php");
$con=mysqli_connect("localhost","root","","deliverysystem");
$a=$_POST['Date'];

$sql="select * from order_details where Order_date='$a'";
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
    margin-top:18%;
    width:300px;
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

    </style>


  </head>

  <body>
    <table align="center" border="2px" style="height : 150px; width : 800px; text-align:center">

<tr>

<th> Full Name </th>
<th> Phone </th>

<th> Address </th>
<th> Food Name</th>
<th> Quantity </th>
<th> Order Date </th>
</tr>

<?php 

while ($row=mysqli_fetch_assoc($res))
  {
?>
<tr>
   <td><?php echo  $row['Full_name'];?> </td>
   <td><?php echo  $row['Phone'];?> </td>
   <td><?php echo  $row['Address'];?> </td>
   <td><?php echo  $row['Food_name'];?> </td>
   <td><?php echo  $row['Quantity'];?> </td>
   <td><?php echo  $row['Order_date'];?> </td>
   

</tr>
    
  <?php

  }

  ?>



    </table>

  </body>

  </html>






