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
    <script src="qrcode.min.js"></script>
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
     <h1>client Information</h1>
            <h3>Add QR number</h3>
            <input type="text" id="inputText" onchange="generate()" placeholder="qr number">
        <div class="row">
           
                <div class="col-lg-4">
                <div class="box" style="height:550px;width:90%;border:2px solid green">
                 
                  
                   <?php

$email =$_SESSION['email'];
$id = $_GET['id'];
$sql = "SELECT * FROM client WHERE id = '$id'";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($query);


?>
<div class="row p-0 m-0">

    
    <div class="col-lg-12">
    <div class="border p-5" style="width:100%;box-shadow:3px 4px 10px black">
          <div class="mod-img">
              <h4 class="text-primary p-3">Personal Information</h4>
            
              <img  style="width:150px;height:80px;border-radius:20px;border:3px solid green" src="Client_image/<?php  echo $row['img']; ?>"  alt="">
             
             <br>     <br>  
          

            </div>
            <h6 class="text-muted"> Name :<span style="color:gray"><?php  echo $row['Name']  ?> </span></h6>   <br>
            <h6 class="text-muted"> Father Name :<span style="color:gray"> <?php  echo $row['fname']; ?> </span></h6>  <br>
            <h6 class="text-muted"> Mother Name :<span style="color:gray"> <?php  echo $row['mname']; ?> </span></h6>  <br>
            <h6 class="text-muted"> phone :<span style="color:gray"> <?php  echo $row['phone']; ?> </span></h6>  <br>
           
            
            <div id="QRImage"></div>
       
       
       
       
      </div>
    </div>


   
    </div>
                </div>
            
              
        </div>
     </div>

    

            
   




















     <script>
         var inputText = document.getElementById("inputText");
         var QRImage = document.getElementById("QRImage");

        var NewImage =  new QRCode(QRImage,{
              width:200,
              height:100
          });
       function generate(){
       var data = inputText.value;
       alert(data);
       NewImage.makeCode(data);
       }
     </script>
     



<!--javascript ends  -->

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>