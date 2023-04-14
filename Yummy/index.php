<?php
session_start();
include_once "connection.php";
$sql2=mysqli_query($conn,"SELECT * FROM chefs");
$sql3=mysqli_query($conn,"SELECT * FROM gallery");
$sql4=mysqli_query($conn,"SELECT * FROM testimonial");

if(isset($_GET['category'])){
  $category=$_GET['category'];
  echo $_GET['category'];
  $sql=mysqli_query($conn,"SELECT * FROM products WHERE category='$category' ");
}
else
{
  $sql1=mysqli_query($conn,"SELECT * FROM products");

}

?>  



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Yummy</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

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
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="main.css"> -->
  </head>

  <body>
    <?php
    $q= $_SESSION["Email"] ?
    include_once "nav2.php" : include_once "nav1.php"
    ?>
    <!-- ======= Header ======= -->
    
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up">Enjoy Your Healthy<br />Delicious Food</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Sed autem laudantium dolores. Voluptatem itaque ea consequatur
              eveniet. Eum quas beatae cumque eum quaerat.
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
              <a
                href="https://youtu.be/GlrxcuEDyF8"
                class="glightbox btn-watch-video d-flex align-items-center"
                ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
              >
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="assets/img/hero-img.png"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-7 position-relative about-img"
              style="background-image: url(assets/img/about.jpg)"
              data-aos="fade-up"
              data-aos-delay="150"
            >
              <div class="call-us position-absolute">
                <h4>Book a Table</h4>
                <p>+918538966276</p>
              </div>
            </div>
            <div
              class="col-lg-5 d-flex align-items-end"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i> Ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> Duis aute irure dolor in
                    reprehenderit in voluptate velit.
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> Ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate trideta storacalaperda mastiro
                    dolore eu fugiat nulla pariatur.
                  </li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident
                </p>

                <div class="position-relative mt-4">
                  <img src="assets/img/about-2.jpg" class="img-fluid" alt="" />
                  <a
                    href="https://youtu.be/GlrxcuEDyF8"
                    class="glightbox play-btn"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h3>Why Choose Yummy?</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Duis aute irure dolor in reprehenderit Asperiores dolores sed
                  et. Tenetur quia eos. Autem tempore quibusdam vel
                  necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn"
                    >Learn More <i class="bx bx-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Corporis voluptates officia eiusmod</h4>
                    <p>
                      Consequuntur sunt aut quasi enim aliquam quae harum
                      pariatur laboris nisi ut aliquip
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-gem"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>
                      Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-inboxes"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Clients</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Projects</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hours Of Support</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Workers</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
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
          <li class="nav-item">
              <a
              href="index.php"
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#menu-allproduct"
              >
                <h4>All products</h4>
              </a>
            </li>
            <li class="nav-item">
              <a
              href="index.php?category=starters"
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-starters"
              >
                <h4>Starters</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
              href="index.php?category=Breakfast"
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-breakfast"
              >
                <h4>Breakfast</h4> </a
              >
            </li>

            <li class="nav-item">
              <a
              href="index.php ? category=Lunch"
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-lunch"
              >
                <h4>Lunch</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
              href="index.php ? category=Dinner"
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-dinner"
              >
                <h4>Dinner</h4>
              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          
        </div>

        <div class="row ">
        
                
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade active show" id="menu-allproduct">

            <div class="tab-header text-center">
              <p>Buy Menu Item</p>
              <!-- <h3>Starters</h3> -->
            </div>
            <div class="row  gy-5 ">
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql1))
            {
                ?>
              <div class="col-lg-4 menu-item  ">
                <a href="indexx.php">
                
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
              
            </div>
            
          </div>
          </div>
          
          
            </div>





      </section>
      <!-- End Menu Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>What Are They <span>Saying About Us</span></p>
          </div>

          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              
              <!-- End testimonial item -->
              <?php
            $i=0;
            while($row=mysqli_fetch_array($sql4))
            {
                ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p > <i class="bi bi-quote quote-icon-left"></i><?php echo $row["desc"]; ?><i class="bi bi-quote quote-icon-right"></i></p>
                        <h3><?php echo $row["name"]; ?></h3>
                        <h4><?php echo $row["title"]; ?></h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                    <img  src="<?php echo $row["img"];  ?>" class="img-fluid testimonial-img" alt="testimonial">
                      
                    </div>
                  </div>
                </div>
              </div>
              <?php
                $i++;
            }
            ?> 
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Events Section ======= -->
      <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">
          <div class="section-header">
            <h2>Events</h2>
            <p>Share <span>Your Moments</span> In Our Restaurant</p>
          </div>

          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div
                class="swiper-slide event-item d-flex flex-column justify-content-end"
                style="background-image: url(assets/img/events-1.jpg)"
              >
                <h3>Custom Parties</h3>
                <div class="price align-self-start">$99</div>
                <p class="description">
                  Quo corporis voluptas ea ad. Consectetur inventore sapiente
                  ipsum voluptas eos omnis facere. Enim facilis veritatis id est
                  rem repudiandae nulla expedita quas.
                </p>
              </div>
              <!-- End Event item -->

              <div
                class="swiper-slide event-item d-flex flex-column justify-content-end"
                style="background-image: url(assets/img/events-2.jpg)"
              >
                <h3>Private Parties</h3>
                <div class="price align-self-start">$289</div>
                <p class="description">
                  In delectus sint qui et enim. Et ab repudiandae inventore
                  quaerat doloribus. Facere nemo vero est ut dolores ea
                  assumenda et. Delectus saepe accusamus aspernatur.
                </p>
              </div>
              <!-- End Event item -->

              <div
                class="swiper-slide event-item d-flex flex-column justify-content-end"
                style="background-image: url(assets/img/events-3.jpg)"
              >
                <h3>Birthday Parties</h3>
                <div class="price align-self-start">$499</div>
                <p class="description">
                  Laborum aperiam atque omnis minus omnis est qui assumenda
                  quos. Quis id sit quibusdam. Esse quisquam ducimus officia
                  ipsum ut quibusdam maxime. Non enim perspiciatis.
                </p>
              </div>
              <!-- End Event item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Events Section -->

      <!-- ======= Chefs Section ======= -->
      <section id="chefs" class="chefs section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Chefs</h2>
            <p>Our <span>Proffesional</span> Chefs</p>
          </div>
    
          <div class="row gy-4">
          <?php
            $i=0;
            while($row=mysqli_fetch_array($sql2))
            {
                ?>
         
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
            
              <div class="chef-member">
                <div class="member-img">
                  <img  src="<?php echo $row["img"];?>"  class="img-fluid"   alt="chefs">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                <h4><?php echo $row["name"]; ?></h4>
                  <p><span><?php echo $row["title"]; ?></span></p>
                  <p ><?php echo $row["desc"]; ?></p> 
                </div>
              </div>
              </div>
              <?php
                $i++;
            }
            ?>
            
          </div>
           
        </div>
        
      </section>
      <!-- End Chefs Section -->

      <!-- ======= Book A Table Section ======= -->
      <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Book A Table</h2>
            <p>Book <span>Your Stay</span> With Us</p>
          </div>

          <div class="row g-0">
            <div
              class="col-lg-4 reservation-img"
              style="background-image: url(assets/img/reservation.jpg)"
              data-aos="zoom-out"
              data-aos-delay="200"
            ></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
              <form
                action="insertpagetable.php"
                method="post"
                
              >
                <div class="row gy-4">
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      id="phone"
                      placeholder="Your Phone"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="date"
                      name="date"
                      class="form-control"
                      id="date"
                      placeholder="Date"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="time"
                      class="form-control"
                      name="time"
                      id="time"
                      placeholder="Time"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input
                      type="number"
                      class="form-control"
                      name="people"
                      id="people"
                      placeholder="# of people"
                      data-rule="minlen:1"
                      data-msg="Please enter at least 1 chars"
                    />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                  ></textarea>
                  <!-- <div class="validate"></div> -->
                </div>
             
                
                <div class="text-center">
                  <button type="submit" name="insert">Book a Table</button>
                </div>
              </form>
            </div>
            <!-- End Reservation Form -->
          </div>
        </div>
      </section>
      <!-- End Book A Table Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>gallery</h2>
            <p>Check <span>Our Gallery</span></p>
          </div>

        
              
          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
              
            
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql3))
            {
                ?>
          <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-gallery="images-gallery"
                  href="assets/img/gallery/gallery-2.jpg"
                  ><img
                    src="<?php echo $row["img"];  ?>"
                    class="img-fluid"
                    alt="img1"
                /></a>
              </div>
          <?php
                $i++;
            }
            ?>   
            </div>
            <div class="swiper-pagination"></div>
          </div>           
        </div>
      </section>
      <!-- End Gallery Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact</h2>
            <p>Need Help? <span>Contact Us</span></p>
          </div>

          <div class="mb-3">
            <iframe
              style="border: 0; width: 100%; height: 350px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.1738329845534!2d85.15602005092259!3d25.599139283630866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59ee933efca5%3A0x7a5fa9c649130db5!2sAiMiT%20College!5e0!3m2!1sen!2sin!4v1660037765519!5m2!1sen!2sin"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <!-- End Google Maps -->

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Our Address</h3>
                  <p>Patna Doctor's colony </p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>bobbyyadav.445566@gmail.com</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+918538966276</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Opening Hours</h3>
                  <div>
                    <strong>Mon-Sat:</strong> 11AM - 23PM;
                    <strong>Sunday:</strong> Closed
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <form
            action="insertcontact.php"
            method="post"
            role="form"
            class="php-email-form p-3 p-md-4"
          >
            <div class="row">
              <div class="col-xl-6 form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required
                />
              </div>
              <div class="col-xl-6 form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  required
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                required
              />
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
          <!--End Contact Form -->
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Patna  <br />
                Doctor's colony (Rajendar nagar)<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +918538966276<br />
                <strong>Email:</strong> bobbyyadav.445566@gmail.com.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 11AM</strong> - 23PM<br />
                Sunday: Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Yummy</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
          Designed by <a href="https://bornxbobbybxb.netlify.app/">BORNXBOBBY</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
