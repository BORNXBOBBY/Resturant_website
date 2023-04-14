<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="yummy";

    $set=mysqli_connect($servername,$username,$password,$database);

    if(!$set){
       echo "not coonnect";
    }
    session_start();
    $p_id=$_GET['p_id'];
    $u_id=$_SESSION['id'];
    $quntity=$_GET['quntity'];
    $add_id=$_GET['add_id'];
// quntity update code
     $product="SELECT * FROM  product  WHERE p_id='$p_id'    ";   
    $result=mysqli_query($set,$product);
    if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_assoc($result)){
           $number =$row['quantity']-$quntity;
            $update="UPDATE product SET quantity='$number' WHERE p_id='$p_id'";
            mysqli_query($set,$update);
        }}
$sql="INSERT INTO orders(payment_method, u_id, p_id,add_id)
 VALUES('cash on delivery','$u_id','$p_id','$add_id')";
if(mysqli_query($set,$sql)){
    header('location:viewaddress.php'); 
}
else{
    echo  "error";
}
mysqli_close($set);

?>