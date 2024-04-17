<?php


$connect = mysqli_connect("localhost","root","","NGO");


   $id = $_GET['id'];

   $sql = "DELETE  FROM gallerypage WHERE Id ='$id'";
   $query= mysqli_query($connect,$sql);

   if ($query){
     header('location:GalleryAdmin.php');

    }

?>