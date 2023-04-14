<?php
$server="localhost";
$user="root";
$password="";
$dbname="yummy";

$conn=mysqli_connect($server,$user,$password,$dbname);
if(isset($_POST['sign'])){
$C_Id=$_POST["C_Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Mobile=$_POST["Mobile"];
$files=$_FILES['file'];
$UserId=$_POST["UserId"];


$filename=$files['name'];
$filetmp=$files['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO customer VALUES ('$C_Id','$Name',
    '$Email','$Pass','$Mobile','$destinationfile','$UserId')";
    $result=mysqli_query($conn,$sql);

    if($result){
        // header("Location:index.php");
        echo "successfully";
    }
    
}

?>