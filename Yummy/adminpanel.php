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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Admin panel</title>
    <style>

        body{
            margin:0%;
            
        }
        div.header{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: blue;
        }

        div h1 {
            color:white;
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
        div img{
            height: 80px;
        }
       .but{
        margin:10px;
        white-space: nowrap;
       }
        
        
        </style>

</head>
<body class="bg-dark">
   <div class="header ">
   <h1>Welcome to admin panel -: <?php echo $_SESSION['adminloginid']?></h1> 
   <img src="upload//testimonials-6.png" alt="bobby">
   <form method="POST">
   <button class="bbt" name="Logout">Log out<button>
    </form>
    </div>
    <br>
    <br>
    <div class="container  ">
    <h1 class="text-center">Store manage</h1>
    <br>
    <div class="head px-5 d-flex  align-items-center justify-content-between"> 
    <a href="product.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">CHECK OUR PRODUCT MENU</a>
    <a href="testimonial.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">CHECK OUR TESTIMONIALS</a>
    <a href="chefs.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">CHECK OUR CHEFS</a>
    <a href="gallery.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">CHECK OUR GALLERY</a>
    <a href="addmenulist.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">Add Menu List</a>
    
   
    </div>
    </div>
    <br>
    <hr class="bg-white">
    <div class="container-fluid  ">
    <h1 class="text-center">All Testing data show</h1>
    <br>
    <div class="head ">
        
    <a href="displaysignup.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW OUR CUSTOMER DATA</a>
    <a href="displaybookatable.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW BOOK A TABLE DATA</a>
    <a href="displaychefs.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW CHEFS DATA</a>
    <a href="displaygallery.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW OUR GALLERY DATA</a>
    <a href="displaycontact.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW OUR CONTACT DATA</a>
    <a href="displayproduct.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW OUR PRODUCT DATA</a>
    <a href="displaytestimonial.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">SHOW OUR TESTIMONIAL DATA</a>
    </div>
    </div>
    <br>
    <hr class="bg-white">
    <div class="container-fluid  ">
    <h1 class="text-center">All Testing data block / Unblock</h1>
    

    <br>
    
    <div class="head ">
        
    <a href="updatesignupform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE OUR CUSTOMER DATA</a>
    <a href="updatebookatableform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE BOOK A TABLE DATA</a>
    <a href="updatechefsform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE CHEFS DATA</a>
    <a href="updategalleryform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE OUR GALLERY DATA</a>
    <a href="updatecontactform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE OUR CONTACT DATA</a>
    <a href="updateproductform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE OUR PRODUCT DATA</a>
    <a href="updatetestimonialform.php" class="btn btn-primary btn-lg active but" role="button" aria-pressed="true">UPDATE OUR TESTIMONIAL DATA</a>
    </div>
    </div>
    <br>
    
    <hr class="bg-white">
    <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location:adminlogin.php");
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>