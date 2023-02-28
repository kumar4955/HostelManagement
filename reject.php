


<?php
include 'bookconnect.php';
 $id=$_GET['id'];
$conn= new mysqli('localhost','root','','rbook');
if(mysqli_query($conn, "DELETE FROM `bookr` WHERE id=$id")){
    echo '<script>alert("The item is deleted")</script>';
    header('location:manage.php');
}
else{
    echo"thank u";
}





?>


?>