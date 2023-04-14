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
      <a class="navbar-brand text-white" href="#">Display Chefs table</a>
      <a class="navbar-brand text-white" href="#">User data</a>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="container">
    <?php 
include("connection.php");
error_reporting(0);

$query ="SELECT * FROM chefs where id";
$data =  mysqli_query($conn, $query);


?>


    <h2 align="center"><mark>Displaying all records</mark></h2>
    <br>
    <br>
    <center>
      <table border="3" cellspacing="7" width="100%">
        <tr align="center">
          <th width="10%">Id</th>
          <th width="10%">Images</th>
          <th width="20%">Name</th>
          <th width="10%">Title</th>
          <th width="40%">Desc</th>
          <th width="40%">Delete</th>
        </tr>
        <?php
 $i=0;
   while($result= mysqli_fetch_assoc($data))
   {
?>
        <tr align="center">
          <td>
            <?php echo $result["id"] ?>
          </td>
          <td> <img src="<?php echo $result["img"] ?>"height='100px' width='100px' > </td>
          <td>
            <?php echo $result["name"] ?>
          </td>
          <td>
            <?php echo $result["title"] ?>
          </td>
          <td>
            <?php echo $result["desc"] ?>
          </td>
          <td class=" border border-5">
                    <a  href="deletechefs.php?id=<?php echo $row['id'];?>" class='btn btn-danger'>
                    <!-- <button>delete</button> -->
                    delete
                </a>
                </td>

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