<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-light bg-primary p-4">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Display Customer table</a>
    <a class="navbar-brand text-white" href="#">User data</a>
  </div>
</nav>
    <div class="container-fluid ">
        <table align="center" class="text-center">
            <br>
            <br>
            <h1 class="text-center"> Seller Table Details</h1>
            <button class="text-center bg-warning rounded p-3 mx-5"> <a href="displaysignup.php">Back</button></a>
            <br>
            <br>
            <tr  class="text-center" >
                <th  width="20%"  class="border border-5"> Name</th>
                <th  width="20%"  class="border border-5">Email</th>
                <th  width="20%"  class="border border-5">Pass</th>
                <th  width="20%"  class="border border-5">Mobile</th>
                <th  width="20%"  class="border border-5">Image</th>
                <th class="border border-5">Userid</th>
                <th class="border border-5">Status</th>
                <th class="border border-5">Block/Unblock</th>
                <th class="border border-5">Delete</th>
                <th class="border border-5">Edit</th>
            </tr>
            <?php
$servername="localhost";
$username="root";
$password="";
$database="yummy";

$set=mysqli_connect($servername,$username,$password,$database);

if(!$set){
    echo "not coonnect";
}

$sql="SELECT * FROM  customer  ";
$result=mysqli_query($set,$sql);
if(mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){
    
    ?>
            <tr class="text-center">

                <td class=" border border-5">
                    <?php echo $row['Name']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['Email']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['Pass']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['Mobile']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['files']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['Userid']?>
                </td>
                <td class=" border border-5">
                    <?php echo $row['status']?>
                </td>

                <td class=" border border-5">
                    <?php
         if($row['status']==1)
        {
            echo "<a href='blockaction.php?C_Id=".$row['C_Id']."&status=0' class='btn btn-success'>Unblock</a>";
        }
        else
        {
            echo "<a href='blockaction.php?C_Id=".$row['C_Id']."&status=1' class='btn btn-danger'>Block</a>";
        }?>
                 <td class=" border border-5">
                    <a  href="delete.php ?C_Id=<?php echo $row['C_Id'];?>" class='btn btn-danger'>
                    <!-- <button>delete</button> -->
                    delete
                </a>
                </td>
                <td class=" border border-5">
                    <?php echo $row['status']?>
                </td>
            </tr>
            <?php
}
}
    
    mysqli_close($set);
    
    ?>

        </table>
    </div>
</body>

</html>