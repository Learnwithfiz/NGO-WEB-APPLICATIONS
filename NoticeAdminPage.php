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


    





 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="stylesSide.css">
</head>
<body>
    

 <div class="title text-center ">
 <h1 class="text-white bg-primary p-3">Notice</h1>
   
 </div>

   
 <div class="notice">
     <div class="box" style="width:500px;height:300px;margin:0 auto; text-align:center;margin-top:12rem;box-shadow:3px 4px 10px black">
       
     <?php
      $select  ="SELECT * FROM admin_notice";
      $query = mysqli_query($connect,$select);
      $i=1;
      while($row= mysqli_fetch_array($query)){ ?>
              <h1 class="pt-2 text-primary"><?php  echo $row['TITLE']; ?></h1> 
         <h4 class="pt-2 text-muted">  <?php  echo $row['TEXTT']; ?></h4>
         <h4 class="pt-2 text-muted">  <?php  echo $row['date']; ?></h4> 
   <?php  $i++;   }
 
    ?>
    
         
     </div>
 </div>

<!--bootstrap cdn ..........-->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>