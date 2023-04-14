
<?php
    include_once "new_page.php";

?>


           
            <html  >
            <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
                <h1 class="text-center py-5">Welcome In My Yummy Resturant</h1>
        <div class="text-center">
        <?php
                    echo $_SESSION['id'];
                    echo "<br>";
                    // echo $_SESSION['email'];
                    echo " <button ><a href='logout.php'><b>Log out</b></a></button>";
                    // echo "<a href='logout.php' class='btn btn-primary btn-lg active but' role='button' aria-pressed='true'>Log Out</a>";

                ?>
</div>
            </html>




<?php
include 'connection.php';
$sql1 = mysqli_query($conn, "SELECT * FROM customer WHERE id = '".$_SESSION['id']."'");
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
$i= 0;
while($row = mysqli_fetch_array($sql1))
{
    ?>
<!-- <a href="displaycustomer.php ?id=<?php echo $row["id"]; ?>">Edit</a> -->
<?php
    $i++;
}
?>

<div class="text-center">
<?php
   date_default_timezone_set('Asia/Kolkata');
//    echo $_SESSION['email'] . "<b> you have logged in . </b>" ."<br>" ;
   
   echo "<br>" . " <h1> Your current time = </h1> ". date("<b> h:i:sa (e) </b>");
 ?>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    setInterval(function(){
   check_user();
   },2000);

  function check_user(){
 jQuery.ajax({
  url:'new_page.php',
  type:'post',
  data:'type=ajax',
  success:function(result){
    if(result=='logout'){window.location.href='index.php';}}});
 }


</script>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
</html>