<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);

$id=$_POST["id"];
$img=$_FILES["img"];
$name=$_POST["name"];
$title=$_POST["title"];
$desc=$_POST["desc"];


$filename=$img['name'];
$filetmp=$img['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO `chefs`(`id`, `img`, `name`, `title`, `desc`) VALUES ('$id','$destinationfile', '$name','$title','$desc')";
    $result=mysqli_query($conn,$sql);

    if($result){
        
        header("Location:index.php");
    }
    


?>