<?php

$connect = mysqli_connect("localhost","root","","NGO");
session_start();

$user_id = $_SESSION['user_id'];
if($user_id==true){
   $welcome = "Welcome ";
}
else{
    header('location:admin_Login.php');
}

$id = $_GET['id'];


$delete ="DELETE FROM application_user WHERE id ='$id'";
$sq = mysqli_query($connect,$delete);
if($sq){
    header('location:ApplicationPageAdmin.php');
}

?>