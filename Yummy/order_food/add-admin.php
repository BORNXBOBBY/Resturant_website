<?php 
include('partials/menu.php'); ?>


<div class="main-content">
<div class="wrapper">
<h1>Add Admin</h1>
<br>
<br>

<?php
if(isset($_SESSION['add'])) //checking whether the Session is set of Not
{
    echo $_SESSION['add']; //Display the Session Message if set 
    unset($_SESSION['add']); //Removing session message
}
?>

<form action="" method="POST">
<table class="tbl-30">
<tr>
<td>Full Name:</td>
<td>
    <input type="text" name="full_name" placeholder="Enter Your Name">
</td>
</tr>
<tr>
    <td>Username:</td>
    <td>
      <input type="text" name="username" placeholder="Your username">
    </td>
</tr>
<tr>
    <td>Password:</td>
    <td>
        <input type="password" name="password" placeholder="Your Password">
    </td>
</tr>
<tr>
    <td colspan="2">
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
    </td>
</tr>
</table>

</form>
</div>
</div>

<?php include('partials/footer.php');
?>

<?php
//process the value from Form and save it in Database

//check whether the submit button is clicked or not

if(isset($_POST['submit']))
{
    //button clicked
    // echo "Button Clicked";

    //Get the Data from Form

    //1.Get the data from Form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password =md5( $_POST['password']); //password Encryption  With md5


    //2. Sql Query to save the Data into Database
    $sql = "INSERT INTO tbl_admin SET 
    full_name='$full_name',
    username='$username',
    password='$password'
    ";



  //3. Execute Query and Saving Data into Database
    $res = mysqli_query($conn,$sql) or die(mysqli_error());


    //4. check Whether the (Query is Executed) data is inserted or not and display appropriate message
    if($res==TRUE)
    {
        //Data Inserted 
        // echo "Data Inserted";
        //Create a session Variable to Display message
        $_SESSION['add'] = "Admin Added Successfully";
        //Redirect Page TO manage Admin
        header("location:".SITEURL.'manage-admin.php');
    }
    else
    {
       // Failed to Insert data 
      // echo "failed to Insert Data";
      //Create a session Variable to Display message
      $_SESSION['add'] = "Failed to Add Admin";
      //Redirect Page TO manage Admin
      header("location:".SITEURL.'add-admin.php');
    }

}

?>