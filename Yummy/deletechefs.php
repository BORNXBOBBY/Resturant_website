<?php
include_once "connection.php";
$sql2=mysqli_query($conn,"DELETE FROM chefs WHERE id='".$_GET["id"]."'");
if($sql2){ 
// header("Location:index.php");
}
?>