<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);

$id=$_POST["id"];
$desc=$_POST["desc"];
$name=$_POST["name"];
$title=$_POST["title"];
$img=$_FILES["img"];



$filename=$img['name'];
$filetmp=$img['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO `testimonial` (`id`,`desc`,`name`,`title`, `img`) VALUES ('$id','$desc','$name','$title','$destinationfile')";
    $result=mysqli_query($conn,$sql);

    if($result){
        
        header("Location:index.php");
    }
    


?>