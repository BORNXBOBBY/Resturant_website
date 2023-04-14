<?php
require("connection1.php");
// $sql=mysqli_query($conn,"SELECT * FROM adminname");
?>  


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin login Panel</title>

    <link rel="stylesheet" href="signup.css" />
    <script
      src="https://kit.fontawesome.com/84b29d853c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="signup-form">
      <div class="container">
        <div class="header">
          <h1>Admin Login Panel</h1>
         
        </div>

        <form
          action=""
          method="POST"
          enctype="multipart/form-data"
        >
          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text"  name="adminname" placeholder="Admin Name" />
          </div>


          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="password" name="adminpassword" placeholder="Admin Password" />
          </div>

          <input class="signup-btn" type="submit" name="submit" value="submit" />
        </form>
        <a   href="#">Forget Password......</a>
        <p>Or sign up with</p>
        <div class="social-icons">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-google"></i>
        </div>
        <p>Already have an account <a href="#">Login</a></p>
      </div> 
    </div>

<?php 
if(isset($_POST['submit']))
{
    $query = "SELECT * FROM `adminlogin` WHERE `adminname`='$_POST[adminname]' AND `adminpassword` = '$_POST[adminpassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['adminname'];
        header("location:admin.html");
    }
    else 
    {
        echo "<script>alert('Incorrect Password');</script>";
    }
}
?>

  </body>
</html>

