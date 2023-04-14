<?php
session_start();
include_once "connection.php";
$C_Id=$_SESSION['C_Id'];
$p_id=$_GET['p_id'];
$data=mysqli_query($conn,"SELECT * FROM order_details WHERE C_Id='$C_Id'");
?>


<table border="5px" width='80%' align="center">


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary p-4">
    <div class="container">
      <a class="navbar-brand text-white" href="#">viewaddress table</a>
      <a class="navbar-brand text-white" href="#">User data</a>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="container">
  

    <h2 align="center"><mark>Displaying all records</mark></h2>
    <br>
    <br>
    <center>
      <table border="3" cellspacing="7" width="100%">
        <tr align="center">
          <th width="10%">od_id</th>
          <th width="10%">name</th>
          <th width="20%">contact</th>
          <th width="10%">email</th>
          <th width="40%">address</th>
          <th width="40%">Delete</th>
          <th width="40%">Order</th>
        </tr>
        <?php
 $i=0;
   while($result= mysqli_fetch_assoc($data))
   {
?>
        <tr align="center">
          <td>
            <?php echo $result["od_id"] ?>
          </td>
          <td> <?php echo $result["name"] ?></td>
          <td>
            <?php echo $result["contact"] ?>
          </td>
          <td>
            <?php echo $result["email"] ?>
          </td>
          <td>
            <?php echo $result["address"] ?>
          </td>
          <td class=" border border-5">
                    <a  href="deletechefs.php?id=<?php echo $row['C_Id'];?>" class='btn btn-danger'>
                    <!-- <button>delete</button> -->
                    delete
                </a>
                </td>
                <!-- <td class=" border border-5">
                    <a  href="orderpage.php " class='btn btn-succes'>
                    order   
                </a>
                </td> -->
                <td class="border border-5" ><?php echo "<a href='orderpage.php ? od_id=" . $result['od_id']." &p_id=$p_id & C_Id=$C_Id'>Order<a/>" ;?></td>

        </tr>
        <?php
   }
  $i++;
   ?>

      </table>
  </div>
  </center>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>
 
 <!-- <th>SELECT ADREESS</th> -->
 

    <tr>
        
        <td colspan="6"><span class="heading"> <a href='order.php'>Add New Adress</a></span></td>
        
    </tr>

    </table>