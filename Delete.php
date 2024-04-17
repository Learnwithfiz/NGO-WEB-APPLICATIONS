<?php


$connect = mysqli_connect("localhost","root","","ngo");
session_start();

$user_id = $_SESSION['user_id'];
if($user_id==true){
   $welcome = "Welcome ";
}
else{
    header('location:admin_Login.php');
}

$id = $_GET['id'];


$delete ="DELETE FROM homepage WHERE id ='$id'";
$sq = mysqli_query($connect,$delete);
if($sq){
    header('location:sidebar.php');
}

?>