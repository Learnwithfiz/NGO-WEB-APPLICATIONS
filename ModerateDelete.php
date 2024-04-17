<?php


$connect = mysqli_connect("localhost","root","","NGO");


   $id = $_GET['id'];

   $sql = "DELETE  FROM moderate WHERE Id ='$id'";
   $query= mysqli_query($connect,$sql);

   if ($query){
     header('location:moderateView.php');

    }

?>