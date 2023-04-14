<?php
session_start();
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);
if(isset($_POST['submit'])){
$od_id=$_POST["od_id"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$address=$_POST["address"];
$C_Id=$_SESSION['C_Id'];


    $sql="INSERT INTO order_details VALUES ('$od_id','$name',
    '$contact','$email','$address','$C_Id')";
    $result=mysqli_query($conn,$sql);

    if($result){
        // header("Location:index.php");
        echo "successfully";
    }
    
}

?>