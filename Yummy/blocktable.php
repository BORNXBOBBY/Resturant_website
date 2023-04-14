<?php
$servername="localhost";
$username="root";
$password="";
$database="yummy";

$set=mysqli_connect($servername,$username,$password,$database);

if(!$set){
    echo "not coonnect";
}
$name=$_GET['name'];
$status=$_GET['status'];
$sql="UPDATE booktable SET   status='$status' WHERE name='$name'";
if(mysqli_query($set,$sql)){
    header('location:index.php');
    echo "succes";
}
else{
    echo  "error";
}
mysqli_close($set);

?>