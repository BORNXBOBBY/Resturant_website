<?php 
include_once 'connection.php';

if(count($_POST)>0) {
mysqli_query($conn," UPDATE chefs SET id='".$_POST['id']."', img='".$_POST['img']."', 
      name='".$_POST['name']."', title='".$_POST['title']. "',
       desc='".$_POST['desc']."' 
        WHERE id= '".$_GET['id']."'");

$m = header("Location:Login.html");
}
$result = mysqli_query($conn,"SELECT * FROM chefs WHERE id= '".$_GET['id']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
    <title>
      update
    </title>
</head>

<body>
<table border="2px">
    <form method="post" action="" enctype="multipart/form-data">
    <?php if(isset($m))
     { echo $m; } ?>
<tr>
<?php
echo "<td style='color: red;'>id</td>";
?>
<?php
echo "<td style='color: red;'>img</td>";
?>
<?php
echo "<td style='color: red;'>name</td>";
?>
<?php
echo "<td style='color: red;'>title</td>";
?>
<?php
echo "<td style='color: red;'>desc</td>";
?>
<?php
echo "<td style='color: red;'>Update</td>";
?>

</tr>

<tr>
    <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
    <td><input type="file" name="img" value="<?php echo $row['img']; ?>"></td> 
    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>     
    <td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
    <td><input type="text" name="desc" value="<?php echo $row['desc']; ?>"></td>
    <td><input type="submit"></td>
</tr>
</form>
</table>
</body>
</html>



