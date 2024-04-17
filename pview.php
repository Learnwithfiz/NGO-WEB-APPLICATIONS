<?php

$connect = mysqli_connect("localhost","root","","NGO");
$name=$fname=$mname=$email=$img=$nid=$nidNext=$phone=$date=$work=$salary=$pass=$user_wise_id="";

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
    <title>View page</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="services.css">
   
<style>
  .span{
    font-size:1rem;
   
  }
  table,th,td{
      padding:20px;
      border:2px solid black;
      border-collapse:collapse;
  }
</style>
</head>
<body>

<div class="mod-title text-center text-white bg-dark p-2">
       <h1>View client   </h1>     
 </div>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="ModerateDashboard.php">Home</a></button>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="AddPeople.php">Add Moderator</a></button>
   <button onclick="window.print()" class="btn btn-primary ">print</button> 

     <div class="container">
        <div class="row">
            <h1>client Information</h1>
          
                <div class="col-lg-12">
                <div class="box" style="height:950px;width:100%;border:2px solid green">
                   <h2 class="text-center ">Ngo total morderator info</h2>
                   <h3 class="text-center">Sagor para, Boalia , Rajshahi </h3>
                   <p class="text-center">GPo 5000, Bangladesh</p>
                   <hr style="border:1px solid green">
                   <?php

$email =$_SESSION['email'];
$id = $_GET['id'];
$acc_num  = $_GET['acc_num'];
$total = 0;
$sql = "SELECT * FROM  client WHERE acc_num = '$acc_num'   ";
$query = mysqli_query($connect,$sql);
  
while($row = mysqli_fetch_assoc($query)){?>
  <div class="row p-0 m-0">

    
<div class="col-lg-6">
<div class="border p-5" style="width:100%;height:700px;box-shadow:3px 4px 10px black">
      <div class="mod-img">
          <h4 class="text-primary p-3">Personal Information</h4>
        
          <img  style="width:150px;height:200px;border-radius:20px;border:3px solid green" src="Client_image/<?php  echo $row['img']; ?>"  alt="">
         
         <br>     <br>  
      

        </div>
        <h6 class="text-muted"> Name :<span style="color:gray"><?php  echo $row['Name']  ?> </span></h6>   <br>
        <h6 class="text-muted"> Father Name :<span style="color:gray"> <?php  echo $row['fname']; ?> </span></h6>  <br>
        <h6 class="text-muted"> Mother Name :<span style="color:gray"> <?php  echo $row['mname']; ?> </span></h6>  <br>
        <h6 class="text-muted"> phone :<span style="color:gray"> <?php  echo $row['phone']; ?> </span></h6>  <br>
       
        <h6 class="text-muted"> account number :<span style="color:gray"> <?php  echo $row['acc_num']; ?> </span></h6>  <br>
      
      
   
   
   
   
  </div>
</div>


<div class="col-lg-6">
<div class="border p-5" style="width:100%;height:700px;box-shadow:3px 4px 10px black">
     

        <h6 class="text-muted"> joinning Date :<span style="color:gray"> <?php  echo $row['date']; ?> </span></h6>  <br>
        <h6 class="text-muted"> loan type :<span style="color:gray"> <?php  echo $row['loan_poriman']  ?></ </span></h6>  <br>
        <h6 class="text-muted"> porishod :<span style="color:gray"><?php  echo $row['masik']  ?></span></h6>  <br>
        <h6 class="text-muted"> porishod :<span style="color:gray"><?php  echo $row['porishod']  ?></span></h6>  <br>
   
   
        <img  style="width:95%;height:200px;border-radius:20px;border:3px solid green" src="Client_image/<?php  echo $row['nid']; ?>"  alt="">
        <br><br>
        
        <img  style="width:95%;height:200px;border-radius:20px;border:3px solid green" src="Client_image/<?php  echo $row['nidNext']; ?>"  alt="">
          
   
       
  </div>
</div> 


<button class="btn btn-primary  "><a style="border:none;color:wheat !important" href="Idcard.php?id=<?php  echo $row['id']; ?>">id card</a></button>   
      
  </div>
 </div>
        
          
    </div>

  


 </div>




<?php 
  $total = $total + $row['loan_poriman'];
 
}


?>
<div class="container">
<div class="row p-0 m-0">
<div class="col-lg-12">
    <h1 class="text-primary"> Total Loan in Life Time =  <?php  echo   $total; ?>   </h1>
</div>
</div>
</div>
<br>
<br><br><br><br><br>




       

            
   





















     



<!--javascript ends  -->

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>