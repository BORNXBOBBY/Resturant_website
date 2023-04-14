<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];






    $sql="INSERT INTO contact VALUES ('$name','$email',
    '$subject','$message')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "success";
    }
    else {
        echo "error";
       }


?>