<?php
$connect = mysqli_connect("localhost","root","","NGO");

session_start();   
$welcome="";
$user_id = $_SESSION['user_id'];

if($user_id==true){
 $welcome = "Welcome ";
}
else{
  header('location:admin_Login.php');
}

$id = $_GET['id'];


$delete ="DELETE FROM admin_notice WHERE id ='$id'";
$sq = mysqli_query($connect,$delete);
if($sq){
    header('location:moderateNotice.php');
}

?>