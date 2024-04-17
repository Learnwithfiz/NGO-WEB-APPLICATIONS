<?php
session_start();
$connect = mysqli_connect("localhost","root","","NGO");
if($user_id==true){
    $welcome = "Welcome ";
 }
 else{
     header('location:admin_Login.php');
 }
$id = $_GET['id'];
    $delete = "DELETE FROM services_page where Id='$id'";
    $query =mysqli_query($connect,$delete);

    if($query){
        header('location:servicesAdminPage.php');
    }


?>