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

     $query = "SELECT * FROM help_page WHERE Id = '$id'";
     $mysqli = mysqli_query($connect,$query);

     $fetch = mysqli_fetch_array($mysqli);

     if(isset($_POST['add'])){
        
     
        $title = $_POST['Title'];
      
        $text = $_POST['Text'];
      
     
     
        
      $upadte= "UPDATE   help_page SET TITLE='$title',TEXTT='$text'
      WHERE id = '$id'";
          $query = mysqli_query($connect,$upadte);

     



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
    

  <h1 style="
    background:#091353;
    padding:10px;
    text-align:left;
    color:white;
   
  "> Admin Dashboard   <span style="
  
  
    color:white;
    float:right;
  ">Edit HElP Page Data</span></h1>


<div class="container ">
         <h1 class="  p-4 text-muted">  HELP PAGE </h1>
         <div class="row"style="border:4px solid green; ">
             
         <div class="container ">
        
         <div class="row"style="border:4px solid green;padding:20px ">
             <div class="col-lg-4">
                <div class="logo">
                    
                <form action="" method="POST" >
                          
                       <div>
                         <p> Title </p>
                         <input type="text"  value="<?php  echo $fetch['TITLE'] ?>" name="Title"><br><br>
                       </div>
                       <div>
                         <p> Text </p>
                         <input type="text"value="<?php  echo $fetch['TEXTT'] ?>" name="Text"><br><br>
                       </div>
                       <button name="add" class="btn btn-block bg-dark text-white">Edit </button> 
               </form>
                
                    </div>
            
               
         </div>
     </div>
                    

               
        
     </div>





<!--bootstrap cdn ..........-->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>