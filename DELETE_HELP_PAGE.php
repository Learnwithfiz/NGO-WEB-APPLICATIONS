<?php
 $connect = mysqli_connect("localhost","id20087437_root","Root@@@12345","id20087437_ngo");
$id=$_GET['id'];
$DELETE = "DELETE FROM help_page WHERE Id ='$id'";
$sql=mysqli_query($connect,$DELETE);
if($sql){
    header('location:helpAdmin.php');
}

?>