<?php 
include_once 'connection.php';

if(count($_POST)>0) {
mysqli_query($conn," UPDATE customer SET Id='".$_POST['Id']."', Name='".$_POST['Name']."', 
      Email='".$_POST['Email']."', pass='".$_POST['pass']. "',
       mobile='".$_POST['mobile']."',  files='".$_POST['files']."', Userid='".$_POST['Userid']."'
        WHERE Id= '".$_GET['Id']."'");

$m = header("Location:Login.html");
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE Id= '".$_GET['Id']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
    <title>
      update
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-light bg-success p-4">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Block / Unblock Customer table</a>
    <a class="navbar-brand text-white" href="#">User data</a>
  </div>
</nav>
<br>
<br>
<br>
<table border="2px">
    <form method="post" action="" enctype="multipart/form-data">
    <?php if(isset($m))
     { echo $m; } ?>
<tr>
<?php
echo "<td style='color: white;'>Id</td>";
?>
<?php
echo "<td style='color: white;'>Name</td>";
?>
<?php
echo "<td style='color: white;'>Email</td>";
?>
<?php
echo "<td style='color: white;'>Password</td>";
?>
<?php
echo "<td style='color: white;'>Mobile</td>";
?>
<?php
echo "<td style='color: white;'>Images</td>";
?>
<?php
echo "<td style='color: white;'>Userid</td>";
?>
<?php
echo "<td style='color: white;'>Update</td>";
?>

</tr>

<tr>
    <td><input type="text" name="Id" value="<?php echo $row['Id']; ?>"></td>
    <td><input type="text" name="Name" value="<?php echo $row['Name']; ?>"></td> 
    <td><input type="text" name="Email" value="<?php echo $row['Email']; ?>"></td>     
    <td><input type="text" name="pass" value="<?php echo $row['pass']; ?>"></td>
    <td><input type="text" name="Mobile" value="<?php echo $row['Mobile']; ?>"></td>
    <td><input type="file" name="files" value="<?php echo $row['files']; ?>"></td>
    <td><input type="text" name="Userid" value="<?php echo $row['Userid']; ?>"></td>
    <td><input type="submit"></td>
</tr>
</form>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>



