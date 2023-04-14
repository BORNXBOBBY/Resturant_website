<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product List</title>

  <link rel="stylesheet" href="signup.css" />
  <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="signup-form">
    <div class="container">
      <div class="header">
        <h1>Add Gallery</h1>
        <p>Get started for free!</p>
      </div>

      <form action="addmenulistaction.php" method="post" enctype="multipart/form-data">
        <div class="input">
          <i class="fa-solid fa-user"></i>
          <input type="text" hidden name="id" />
        </div>


        <div class="input">
          <i class="fa-solid fa-user"></i>
          <input type="file" name="img" />
        </div>
        <div class="input">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="name" placeholder="Name" />
        </div>
        <div class="input">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="price" placeholder="Price" />
        </div>

        <input class="signup-btn" type="submit" value="Submit" />
      </form>
      <p>Or sign up with</p>
      <div class="social-icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
      </div>
      <p>Already have an account <a href="Login.html">Login</a></p>
    </div>
  </div>
</body>

</html>