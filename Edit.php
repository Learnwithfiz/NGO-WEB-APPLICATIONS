<?php
     $connect = mysqli_connect("localhost","root","","NGO");
     $logoImage=$bgTitle=$bgTitle =$headline=$crImage=$sliderImage=$Tcount=$Tproject=$Dcount="";
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

     $query = "SELECT * FROM homepage WHERE id = '$id'";
     $mysqli = mysqli_query($connect,$query);

     $fetch = mysqli_fetch_array($mysqli);

     if(isset($_POST['add'])){
        
    
      $headline =$_POST['headline'];
    
      $Tcount=$_POST['Tcount'];
      $Tproject=$_POST['Tproject'];
      $Dcount=$_POST['Dcount'];
     
     
      $img_name2 =$_FILES['crrImage']['name'];
      $img_path2=$_FILES['crrImage']['tmp_name'];
      $size2 =$_FILES['crrImage']['type'];


      $img_name1 = $_FILES['ssliderImage']['name'];
      $img_path1 =$_FILES['ssliderImage']['tmp_name'];
      $size1 =$_FILES['ssliderImage']['type'];
    
        
      $upadte= "UPDATE   homepage SET headline='$headline',crImage='$img_name2',sliderImage='$img_name1',Tcount='$Tcount',Tproject='$Tproject',Dcount='$Dcount'
      WHERE id = '$id'";
          $query = mysqli_query($connect,$upadte);

       if($query){
          
           move_uploaded_file($img_path2,"upload_image/".$img_name2);
           move_uploaded_file($img_path3,"upload_image/".$img_name3);
    }



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
  ">Edit Home Page Data</span></h1>


<div class="container ">
         <h1 class="  p-4 text-muted">home Page </h1>
         <div class="row"style="border:4px solid green; ">
             <div class="col-lg-4">
                <div class="logo">
                    

                     <form action="" method="POST" enctype="multipart/form-data">
                          
                          
                           <div>
                               <p> Carousel headline  </p>
                               <input type="text" value= "    <?php echo $fetch['headline']; ?> " name="headline"><br><br>
                           </div>
                             <div>
                               <p> Carousel Image  </p>
                               <input type="file"value= "    <?php echo $fetch['crImage']; ?> " name="crrImage"><br><br>
                           </div>
                           <div>
                  <p> second Carousel Image  </p>
                     <input type="file" value= "    <?php echo $fetch['sliderImage']; ?> "  name="ssliderImage" ><br><br>
              </div>
                     
               ________ Achievement_______
                 <div>
                   
                </div> 
             </div>
           
            <div class="col-lg-4">
             
                     <p> Count Total client </p>
                     <input type ="text"name="Tcount"    value= "    <?php echo $fetch['Tcount']; ?> "><br><br>
                 </div>

                 <div>
                     <p>Count Total Project </p>
                     <input type="text"name="Tproject"   value= "    <?php echo $fetch['Tproject']; ?> "><br><br>
                 </div>
                 <div>
                     <p> Count Dept. awards </p>
                     <input type="text"name="Dcount" value= "    <?php echo $fetch['Dcount']; ?> "   ><br><br>
                 </div>
                         <button name="add" class="btn btn-block bg-dark text-white">Update</button>
                        </form>
                
                    </div>
            
               
         </div>
     </div>





<!--bootstrap cdn ..........-->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>