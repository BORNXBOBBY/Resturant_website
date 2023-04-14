<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);
if(isset($_POST['submit'])){
$p_id=$_POST["p_id"];
$name=$_POST["name"];
$img=$_FILES["img"];
$desc=$_POST["desc"];
$prize=$_POST["prize"];
$category=$_POST["category"];
$quantity=$_POST["quantity"];


$filename=$img['name'];
$filetmp=$img['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO `products`(`p_id`, `name`, `img`, `desc`, `prize`,`category`,`quantity`) VALUES ('$p_id','$name','$destinationfile','$desc','$prize','$category','$quantity')";
    $result=mysqli_query($conn,$sql);

    if($result){
        
        header("Location:index.php");
    }
    

}
?>