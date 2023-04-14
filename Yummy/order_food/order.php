<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <link rel="stylesheet" href="../signup.css" />
    <script
      src="https://kit.fontawesome.com/84b29d853c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="signup-form">
      <div class="container">
        <div class="header">
          <h1>create address</h1>
          <p>Get started for free!</p>
        </div>

        <form
          action="orderinsert.php"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="input">
            <!-- <i class="fa-solid fa-user"></i> -->
            <input type="text" name="od_id" hidden placeholder="Id" />
          </div>

          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="name" placeholder="Name" />
          </div>
          <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <input type="text" name="contact" placeholder="contact" />
          </div>
          <div class="input">
            <i class="fa-solid fa-lock"></i>
            <input type="email" name="email" placeholder="email" />
          </div>

          <div class="input">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="address" placeholder="address" />
          </div>

          <input type="hidden" name='C_Id'>

          

          <input  class="signup-btn" name='submit' type="submit" />
        </form>
        
      </div>
    </div>
  </body>
</html>
