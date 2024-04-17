<?php

$connect = mysqli_connect("localhost","root","","NGO");
$name=$fname=$mname=$email=$img=$nid=$nidNext=$phone=$date=$work=$salary="";
session_start();
$welcome="";
$user_id = $_SESSION['user_id'];
if($user_id==true){
   $welcome = "Welcome ";
}
else{
    header('location:admin_Login.php');
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
       <h1>View comment message   </h1>     
   </div>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="AdminMain.php">Home</a></button>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="moderate.php">Add Moderator</a></button>





       <div class="row p-0 m-0">
            <div class="col-lg-12">
                <div class="table" style="width:100%px;height:600px;background:gray;margin:auto;overflow-x:scroll;overflow-y:scroll">
                    <table>
                          <th>SL </th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>District Name</th>
  
                          
                      
                          <th>comment</th>
                          <th>delete</th>
                          

                        <?php

                           $select = "SELECT * FROM contact_page";
                           $query= mysqli_query($connect,$select);

                           $i=1;
                           while($row=mysqli_fetch_array($query)){?>
                            

                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php  echo $row['Name']  ?></td>
                               
                                <td><?php  echo $row['phone']  ?></td>

                             

                              
                                <td><?php  echo $row['District']  ?></td>
                                <td><?php  echo $row['mess']  ?></td>
                              
                                <td><a href="contact_delete.php?id=<?php echo $row['Id'] ;?>"><button class="btn btn-danger p-2" Onclick="return confirm('are you want to delete???')" >Delete</button></a></td>
                             
                            </tr>






                         <?php $i++; }


                        ?>








                    </table>

                </div>
            </div> 
       </div>





















     



<!--javascript ends  -->

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>