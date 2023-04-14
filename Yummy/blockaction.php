<?php
$servername="localhost";
$username="root";
$password="";
$database="yummy";

$set=mysqli_connect($servername,$username,$password,$database);

if(!$set){
    echo "not coonnect";
}
$C_Id=$_GET['C_Id'];
$status=$_GET['status'];
$sql="UPDATE customer SET   status='$status' WHERE C_Id='$C_Id'";
if(mysqli_query($set,$sql)){
    header('location:index.php');
    echo "succes";
}
else{
    echo  "error";
}
mysqli_close($set);

?>