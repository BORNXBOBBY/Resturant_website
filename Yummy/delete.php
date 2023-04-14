<?php
include_once "connection.php";
$sql1=mysqli_query($conn,"DELETE FROM customer WHERE C_Id='".$_GET["C_Id"]."'");
// $sql1=mysqli_query($conn,"DELETE FROM booktable WHERE name='".$_GET["name"]."'");
if($sql1){ 
// header("Location:index.php");
echo "delete successfully";
}
?>