<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: adminlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Admin panel</title>
  <link rel="stylesheet" href="" />
  <link rel="stylesheet" href="asset/css/style.css" />
  <style>
    body {
      margin: 0%;

    }

    div.header {
      font-family: poppins;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      /* background-color: blue; */

    }

    div h1 {
      color: rgba(14, 34, 56, 1);
    }

    .bbt {
      background-color: #f0f0f0;
      font-size: 16px;
      font-weight: 550;
      padding: 10px;
      border-radius: 5px;

    }

    a {
      text-decoration: none;
    }

    div img {
      height: 80px;
    }

    .but {
      margin: 10px;
      white-space: nowrap;
    }
  </style>

</head>

<body>
  <div class="container-fluid">
    <div class="navigation">
      <ul>
        <li>
          <a href="">
            <span class="icon"><ion-icon name="fish-outline"></ion-icon></span>
            <span class="title">Yummy</span>
          </a>
        </li>
        <li>
          <a href="dashboardadmin.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
            <span class="title">Check menu</span>
          </a>
        </li>
        <li>
          <a href="testimonial.php">
            <span class="icon"><ion-icon name="accessibility-outline"></ion-icon></span>
            <span class="title">Check Testimonial</span>
          </a>
        </li>
        <li>
          <a href="chefs.php">
            <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
            <span class="title">Check Chefs</span>
          </a>
        </li>
        <li>
          <a href="gallery.php">
            <span class="icon"><ion-icon name="images-outline"></ion-icon></span>
            <span class="title">Check Gallery</span>
          </a>
        </li>
        <li>
          <a href="addmenulist.php">
            <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
            <span class="title">Add Menu</span>
          </a>
        </li>
        <li>
          <a href="block.php">
            <!-- <a href="displaysignup.php"></a> -->
            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
            <span class="title"> Show customers</span>
          </a>
        </li>
        <li>
          <a href="displaybookatable.php">
            <span class="icon"><ion-icon name="wallet-outline"></ion-icon></span>
            <span class="title"> Show Table</span>
          </a>
        </li>
        <li>
          <a href="displaychefs.php">
            <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
            <span class="title"> Show chefs</span>
          </a>
        </li>
        <li>
          <a href="displaygallery.php">
            <span class="icon"><ion-icon name="aperture-outline"></ion-icon></span>
            <span class="title"> Show Gallery</span>
          </a>
        </li>
        <li>
          <a href="displaycontact.php">
            <span class="icon"><ion-icon name="phone-portrait-outline"></ion-icon></span>
            <span class="title"> Show Contact</span>
          </a>
        </li>
        <li>
          <a href="displayproduct.php">
            <span class="icon"><ion-icon name="logo-apple-appstore"></ion-icon></span>
            <span class="title"> Show Product</span>
          </a>
        </li>
        <li>
          <a href="displaytestimonial.php">
            <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
            <span class="title"> Show Testimonial</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
            <span class="title">Messages</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
            <span class="title">Help</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="title">Settings</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <span class="title">Password</span>
          </a>
        </li>
        <li>
          <a href="dashboardadmin.php">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <span class="title">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
          <label for="">
            <input type="text" placeholder="search here" />
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </div>

        <div class="user">
          <img src="asset/imgs/testimonials-5.jpg" alt="" />
        </div>
      </div>
      <div class="header ">
        <h1>Welcome to admin panel -:
          <?php echo $_SESSION['adminloginid']?>
        </h1>
        <!-- <img src="upload//testimonials-6.png" alt="bobby"> -->
        <form method="POST">
          <button class="bbt" name="Logout">Log out<button>
        </form>
      </div>
      <!-- cards -->
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">80</div>
            <div class="cardName">Sales</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">284</div>
            <div class="cardName">Comments</div>
          </div>
          <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">$7,842</div>
            <div class="cardName">Earning</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>
      </div>
      <!-- <h1 class="text-center text-dark">Store manage</h1> -->


    </div>
  </div>









  <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location:adminlogin.php");
    }
    ?>
</body>
<script src="asset/js/main.js"></script>
<!-- ionicon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->

</html>