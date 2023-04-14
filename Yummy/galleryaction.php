<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);

$id=$_POST["id"];
$img=$_FILES["img"];



$filename=$img['name'];
$filetmp=$img['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO `gallery` (`id`, `img`) VALUES ('$id','$destinationfile')";
    $result=mysqli_query($conn,$sql);

    if($result){
        
        header("Location:index.php");
    }
    


?>