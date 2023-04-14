<!-- <?php
session_start();
$url = "localhost";
$server = "root";
$pass = "";
$dbname = "yummy";
$conn = mysqli_connect($url, $server, $pass, $dbname);
if (!$conn) {
    echo "Database is not connected" ;
}

if(isset($_POST['save']))
{   
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM customer WHERE  ( Email='$Email' OR UserId = '$Email') and Pass= '$Pass' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        if($row['status']==0) 
        {
            $_SESSION["id"] = $row['id'];
            $_SESSION["Name"]= $row['Name'];
            $_SESSION["Email"]= $row['Email'];
            // $_SESSION["passwords"]=$row['passwords'];
            $_SESSION['IS_LOGIN'] = 'yes';
            $_SESSION['start'] = time(); 
           
            
            header("Location: index.php"); 
        }
      else {
        // echo '<script>alert("your account has been blocked!")</script>';
        // header("location:index.php");
        echo
        "<script>
        alert('your account has been blocked!');
        document.location.href = 'index.php';
        </script>
        ";
      }
    }
    else
    {
        echo "Invalid  Username /Password";
    }   
}
?> -->





<?php
session_start();
$url = "localhost";
$server = "root";
$pass = "";
$dbname = "yummy";
$conn = mysqli_connect($url, $server, $pass, $dbname);
if (!$conn) {
    echo "Database is not connected" ;
}

if(isset($_POST['save']))
{   
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM customer WHERE  ( Email='$Email' OR UserId = '$Email') and Pass= '$Pass' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
 
        {
            $_SESSION["C_Id"] = $row['C_Id'];
            $_SESSION["Name"]= $row['Name'];
            $_SESSION["Email"]= $row['Email'];
            // $_SESSION["passwords"]=$row['passwords'];
            $_SESSION['IS_LOGIN'] = 'yes';
            // $_SESSION['start'] = time(); 
           
            
            header("Location: index.php"); 
        }
     
    }
    else
    {
        echo "Invalid  Username /Password";
    }   

?>