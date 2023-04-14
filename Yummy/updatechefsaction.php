<?php
  include 'connection.php';
  $id=$_POST['id'];
  $file=$_FILES['img'];
   $name=$_POST['name'];
   $title=$_POST['title'];
   $desc=$_POST['desc'];
   



$fille_name=$file['name'];
$fille_size=$file['size'];
$fille_tmp=$file['tmp_name'];
$fille_type=$file['type'];
$pic="upload/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql="UPDATE `chefs` SET `img`='$img',`name`='$name',`title`='$title',`desc`='$desc'  WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
  echo "update is successful";
//   header('location:homepage.php');
}

else{
  echo "NOT UPDATE";
}
mysqli_close($conn);
  
?>



