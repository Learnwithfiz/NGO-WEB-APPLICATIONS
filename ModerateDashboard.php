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
    <title>sidebar</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    
    <link rel="stylesheet" href="stylesSide.css">
  <style>
    
  </style>
</head>
<body>
    <div class="top fixed-top "style="background:#3F3351">
       <a id="icon" href="#"> <i class="fas p-2 bar fa-bars"></i></a>

      
        <span style="text-align:center;color:white;font-size:2.3rem">  Moderate Dashboard</span>
        <span style="float:right ;color:white;font-size:1.5rem;padding:10px">
        <?php  echo    $welcome.$user_id  ?>
            <a href="logout.php"><button class="btn btn-primary p-2">logout</button></a>
          

        </span>
       
    </div>  
    <div id="sidenavId" class="sidebarclose" >
     
    <br><br><br><br>
        <br><br><br><br>
       <!-- <a href="ModerateDashboard.php">  <i class="fas fa-undo bar ml-3 pt-5"></i><br><br></a>
      -->
       <a href="ModerateDashboard.php"> <i class="fas p-2 bar fa-home"></i><span id="Text" class="d-none"> Home Page</span></a><br><br>
    
      
       <div class="navbarr">
         
       <a href="AddPeople.php"> <i class="fas p-2 bar fa-user-plus"></i><span id="Text2" class="d-none">add people</span></a>
     
        <br><br>
       </div>
       
       <?php

$sql ="SELECT * FROM admin_notice ";
$query =mysqli_query($connect,$sql);
$count =mysqli_num_rows($query);  

?>
        <a href="NoticeAdminPage.php"> <i class="fas  p-2  bar fa-briefcase"></i><span id="Text3" class="d-none">Notice  <span style="font-size:1rem"><?php echo $count; ?></spacn> </span></a><br><br>

       <a href="paymentHistory.php"> <i class="fas fa-shopping-cart   p-2  bar"></i><span id="Text4" class="d-none">Loan.History</span></a><br><br>
       <a href="AddPayment.php"> <i class="fas fa-shopping-cart   p-2  bar"></i><span id="Text6" class="d-none">Add Payment</span></a><br><br>
    
       <a href="onlinePay.php"> <i class="fas fa-shopping-cart   p-2  bar"></i><span id="Text5" class="d-none">Online Payment</span></a><br><br>
     
    </div>
 
    <br><br><br><br>
                <?php

            $email =$_SESSION['email'];
            $sql = "SELECT * FROM moderate WHERE email = '$email'";
            $query = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($query);


            ?>
            <div class="row p-0 m-0">
           
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                <div class="border p-5" style="width:100%;height:700px;box-shadow:3px 4px 10px black">
                      <div class="mod-img">
                          <h4 class="text-primary p-3">Personal Information</h4>
                        
                          <img  style="width:150px;height:200px;border-radius:20px;border:3px solid green" src="moderate_image/<?php  echo $row['img']; ?>"  alt="">
                         
                         <br>     <br>  
                      
     
                        </div>
                        <h6 class="text-muted"> Name :<span style="color:gray"> <?php  echo $row['Name']; ?> </span></h6>   <br>
                        <h6 class="text-muted"> Father Name :<span style="color:gray"> <?php  echo $row['fname']; ?> </span></h6>  <br>
                        <h6 class="text-muted"> Mother Name :<span style="color:gray"> <?php  echo $row['mname']; ?> </span></h6>  <br>
                        <h6 class="text-muted"> Email :<span style="color:gray"> <?php  echo $row['email']; ?> </span></h6>  <br>
                       
                        <h6 class="text-muted"> password :<span style="color:gray"> <?php  echo $row['pass']; ?> </span></h6>  <br>
                      
                      
                   
                   
                   
                   
                  </div>
                </div>


                <div class="col-lg-3">
                <div class="border p-5" style="width:100%;height:700px;box-shadow:3px 4px 10px black">
                     
                        <h6 class="text-muted"> phone :<span style="color:gray"> <?php  echo $row['phone']; ?> </span></h6>  <br>
                        <h6 class="text-muted"> joinning Date :<span style="color:gray"> <?php  echo $row['date']; ?> </span></h6>  <br>
                        <h6 class="text-muted"> Work type :<span style="color:gray"> <?php  echo $row['work']; ?> </span></h6>  <br>
                        <h6 class="text-muted"> salary :<span style="color:gray"> <?php  echo $row['salary']; ?> </span></h6>  <br>
                   
                   
                        <img  style="width:95%;height:200px;border-radius:20px;border:3px solid green" src="moderate_image/<?php  echo $row['nid']; ?>"  alt="">
                        <br><br>
                        
                        <img  style="width:95%;height:200px;border-radius:20px;border:3px solid green" src="moderate_image/<?php  echo $row['nidNext']; ?>"  alt="">
                          
                   
                   
                  </div>
                </div>

                <div class="col-lg-2 ">
                  
                </div>
                <div class="col-lg-1 ">
                   <div class="box">
                    <a href="AddPeople.php">   <button class="btn btn-primary p-2">Add People</button></a>
                    
                   </div>
                </div>

                <div class="col-lg-1 ">
                   <div class="box">
                   
                    <button class="btn btn-primary"><a href="scan.php">scan</a></button>
                   </div>
                </div>
            </div>



      <script>
          var icon = document.getElementById("icon");
       
          var sidenavId = document.getElementById('sidenavId');
          var Text = document.getElementById('Text');
          var Text2 = document.getElementById('Text2');
          var Text3 = document.getElementById('Text3');
          var Text4 = document.getElementById('Text4');
          var Text5 = document.getElementById('Text5');
          var Text6 = document.getElementById('Text6');
        
          icon.addEventListener('click',function () {
            let c  = document.getElementById('cross');
                sidenavId.classList.toggle('sidebarclose')
                sidenavId.classList.toggle('sidebaropen');
                Text.classList.toggle('d-none');
                Text2.classList.toggle('d-none');
                Text3.classList.toggle('d-none');
                Text4.classList.toggle('d-none');
                Text5.classList.toggle('d-none');
                Text6.classList.toggle('d-none');
                c.classList.toggle('d-block');
                c.classList.toggle('d-none');
                
          })

        
       
             
           
      
           
        
    
      </script>

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>