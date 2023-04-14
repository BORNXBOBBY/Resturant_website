<?php
session_start();
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM products WHERE p_id='".$_GET['p_id']."'");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    

    <!-- Favicons -->
    <link href="assets/img/blogo.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="main.css"> -->
  </head>
  <body>
  
      <!-- End Stats Counter Section -->

      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Yummy Menu</span></p>
          </div>

          <ul
            class="nav nav-tabs d-flex justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
          
          </ul>

          
        </div>
        <form method="post">
        <div class="row ">
        
                
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade active show" id="menu-allproduct">

           
            <div class="row  gy-5 ">
             
           
              
            <div class="col-lg-4 menu-item  ">
               
               <?php
           $i=0;
           while($row=mysqli_fetch_array($sql))
           {
               ?>
             <div class="col-lg-4 menu-item  ">
               <!-- <a href="indexx.php"> -->
               
                 <img  src="<?php echo $row["img"];  ?>" class="menu-img img-fluid"   alt="products">
               </a>
               <h4><?php echo $row["name"]; ?></h4>
               
               <p class="ingredients"><?php echo $row["prize"]; ?></p>
               
               <p  class="price"><?php echo $row["desc"]; ?></p>
             </div>
             <?php
               $i++;
           }
           ?> 
           <input type="hidden" name="orderid">
           <input type="number" name="quantity">
           <input type="submit" name="submit_order" value="Place Order" class="redbutton">
           
             </div>
           
              
             
            </div>
            
          </div>
          </div>
          
          
            </div>


            </form>


      </section>
  </body>
  </html>

  <?php
   if (isset($_POST['submit_order'])){
    $orderid=$_POST['orderid'];
    $C_Id=$_SESSION['C_Id'];
    $p_id=$_GET['p_id'];
    $od_id=$_GET['od_id'];
    $quantity=$_POST['quantity'];
    
    
    $abhi=mysqli_query($conn,"INSERT INTO myorder(orderid,C_Id,p_id,od_id,Payment_method,quantity) VALUES('$orderid','$C_Id','$p_id','$od_id','Cash on delivery','$quantity')");
    if($abhi){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Order Successfull');
        </script>");
    }
}
?>


<?php
$p_id=$_GET['p_id'];
$quantity=$_POST['quantity'];

$qqq=mysqli_query($conn,"SELECT * FROM products WHERE p_id='$p_id'");
if(mysqli_num_rows($qqq)>0)
{
    while ($data=mysqli_fetch_assoc($qqq))
    {
    $number=$data['quantity']-$quantity;
    $update=mysqli_query($conn,"UPDATE products SET quantity='$number' WHERE p_id='$p_id' ");
    }
}
?>