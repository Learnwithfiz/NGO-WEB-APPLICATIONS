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
       <h1>Online Payment History  </h1>     
 </div>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="ModerateDashboard.php">Home</a></button>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="AddPeople.php"> Add People</a></button>
   <button onclick="window.print()" class="btn btn-primary ">print</button> 

     <div class="container">
        <div class="row">
            <h1>Online Payment History</h1>
            <?php
       $search="";
          if(isset($_POST['searchBtn'])){
            $search = $_POST['search'] ;

          }
       ?>
       <form action=""method="POST">
         <input style="width:50%;padding:10px" type="text" name="search" placeholder="Search Account Number...">
         <button class="btn btn-primary p-2 text-white"name="searchBtn">Search</button>
      
        </form>
          
                <div class="col-lg-12">
                <div class="box" style="height:950px;width:100%;border:2px solid green">
                   <h2 class="text-center ">Ngo total Payment info</h2>
                   <h3 class="text-center">Sagor para, Boalia , Rajshahi </h3>
                   <p class="text-center">GPo 5000, Bangladesh</p>
                   <hr style="border:1px solid green">

                   <table>

                   <th>
                      account number
                   </th>
                   <th>
                      Bkash Number
                   </th>
                   <th>
                   tran_code
                   </th>
                   <th>
                   taka
                   </th>
                   <th>date</th>
                   <?php

$sel = "SELECT * FROM paymenthistory ";
$e = mysqli_query($connect,$sel);
$fetch_row = mysqli_fetch_array($e);

$user_id = $fetch_row['User_id'];



$email =$_SESSION['email'];
$id =  $fetch_row['id'];
$acc_num  =  $fetch_row['acc_num'];
$total = 0;
$sql = "SELECT * FROM  payment_bkash  where acc_numm  LIKE  '%$search%'    ";
$query = mysqli_query($connect,$sql);
 
while($row = mysqli_fetch_assoc($query)){?>
   <div class="row p-0 m-0">
       <div class="col-lg-12">
       
            <tr>
             <td> <?php  echo $row['acc_numm']  ?></td>
            <td> <?php  echo $row['bkash_num']; ?> </td>
            <td>   <?php  echo $row['tran_code']; ?></td>
            <td> <?php  echo $row['taka']; ?></td>
       
            <td> <?php  echo $row['date']; ?></td>
      
      
            </tr>
          
       </div>
   </div>


<?php 
  $total = $total + $row['taka'];
 
}


?>
</table>
<div class="container">
<div class="row p-0 m-0">
<div class="col-lg-12">
  <br><br>
    <h1 class="text-dark m-2"> Total Payment  =  <?php  echo   $total; ?>   </h1>
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