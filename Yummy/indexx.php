<?php
include_once "header.php";
include_once "connection2.php";
$sql=mysqli_query($con,"SELECT * FROM addmenulist");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="product_details_page.css">
  </head>
  <body>
  <section id="menu" class="menu section-bg ">
      <div class="container" data-aos="fade-up">
  <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>
  <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>
    <div class="container mt-5">
      <div class="row">
      <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
            <div class="card bg-dark">
              <img  src="<?php echo $row["img"];  ?>" class="card-img-top" alt="addmenulist">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <p class="card-text"><?php echo $row["price"]; ?></p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">
                  Add To Cart
                </button>
                
                
                
                <input type="hidden" name="Item_Name" value="Bag 1" />
                <input type="hidden" name="Price" value="450" />
              </div>
              <!-- <button type="submit"  class="btn btn-info" aria-hidden="true">
                  <a href="wishlist.php?id=<?php echo $_GET['id']?>"></a>
                  Wishlist
                </button> -->
                <!-- <div>
                  <a href="wishlist.php?id=<?php echo $_GET['id']?>" class="btn btn-default btn-xs pull-left">Wishlist</a>
                </div> -->
            </div>
          </form>
        </div>
        <?php
                $i++;
            }
            ?> 
      </div>
      <a href="order_food/orderproduct.php"><button  class="btn btn-info">
                  Order Now
                </button></a>
    </div>
</div>
</section>
  </body>
</html>
