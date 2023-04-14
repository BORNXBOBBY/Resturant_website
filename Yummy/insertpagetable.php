<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);
if(isset($_POST['insert'])) {
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$time=$_POST["time"];
$people=$_POST["people"];
$message=$_POST["message"];

$sql="INSERT INTO booktable  (`name`,`email`,`phone`,`date`,`time`,`people`,`message`) VALUES ('$name','$email','$phone','$date','$time','$people','$message') ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "successfully";
}
else {
    echo "error";
}

}
?>