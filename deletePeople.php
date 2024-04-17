<?php
$connect = mysqli_connect("localhost","root","","NGO");

session_start();   
$welcome="";
$user_id = $_SESSION['email'];
if($user_id==true){
   $welcome = "Welcome ";
}
else{
    header('location:ModerateLogin.php');
}




$id = $_GET['id'];
$delete ="DELETE FROM client WHERE id ='$id'";
$sq = mysqli_query($connect,$delete);
if($sq){
    header('location:AddPeople.php');
}

?>