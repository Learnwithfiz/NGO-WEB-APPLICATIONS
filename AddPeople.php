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

    if(isset($_POST['submit'])){
         
        $name=test($_POST['Name']);
        $fname=test($_POST['fname']);
        $mname=test($_POST['mname']);
        $phone=test($_POST['phone']);


        $img=$_FILES['img']['name'] ;
        $img2=$_FILES['img']['tmp_name'];

        $nid=$_FILES['nid']['name'];
        $nid2=$_FILES['nid']['tmp_name'];

        $nidNext=$_FILES['nidNext']['name'];
        $nidNext2=$_FILES['nidNext']['tmp_name'];


        $acc_num =test($_POST['acc_num']);
        $date=test($_POST['date']);
        $loan_poriman=test($_POST['loan_poriman']);
        $masik=test($_POST['masik']);
        $porishod=test($_POST['porishod']);
      
         
        //check phone number
        if(preg_match("/^([0-9]{11})$/",$phone)){
         }
        else{
          echo "<script>alert('please check number ')</script>";
        }
       //check phone number 

       $check_mail = $_SESSION['email'];
        $check = "SELECT * FROM moderate WHERE email ='$check_mail'";
        
        $check_query= mysqli_query($connect,$check);

        $row = mysqli_fetch_array($check_query);

        $user_wise_id = $row['Id'];






         $check_account = "SELECT * FROM client WHERE acc_num ='$acc_num';";
         $mysql = mysqli_query($connect,$check_account);

         $count = mysqli_num_rows($mysql);
        //  if($count>0){
        //     echo "<script>alert('account number already exist ')</script>";
        //  }
        //  else{

          $total = $loan_poriman * 0.02;
          $calculate = $loan_poriman * 0.25 ;

          $newtotal = $total  + $loan_poriman ;
           
          



            $query="INSERT INTO client(Name,fname,mname,phone,img,nid,nidNext,acc_num,date,loan_poriman,masik,porishod,User_id,interest,paymentCalculate,total_paymnet) 
            VALUES('$name','$fname','$mname','$phone','$img','$nid','$nidNext','$acc_num','$date','$loan_poriman','$masik','$porishod','$user_wise_id','$total','$calculate','$newtotal')";
            $sql=mysqli_query($connect,$query);

            $query1="INSERT INTO paymenthistory(Name,fname,mname,phone,acc_num,date,loan_poriman,User_id) 
            VALUES('$name','$fname','$mname','$phone','$acc_num','$date','$loan_poriman','$user_wise_id')";
            $sql1=mysqli_query($connect,$query1);

    
            if($sql1){
                move_uploaded_file($img2,"Client_image/".$img);
                move_uploaded_file($nid2,"Client_image/".$nid);
                move_uploaded_file($nidNext2,"Client_image/".$nidNext);
    
                if($sql){
                    echo "<script>alert('success  send data ')</script>";
                }
                else{
                    echo "<script>alert('failed  send data ')</script>";
                }
            }
            else{
                echo "<script>alert('failed')</script>";
            }
    
         }

        
     
    // }    
   

      function test($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data= stripcslashes($data);
         
        return $data;
      }
    
    




?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add moderate</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="services.css">
   
<style>
  .span{
    font-size:1rem;
   
  }
</style>
</head>
<body>


   <div class="mod-title text-center text-white bg-dark p-2">
       <h1>Add client  </h1>     
   </div>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="ModerateDashboard.php">Home</a></button>
    
                <div class="form-div" style="padding: 20px;">
                  <form action=""method="POST" enctype="multipart/form-data">
                       <fieldset>
                         <legend>
                              <h3>Please provide accurate information</h3>
                         </legend>
                         
                    <div class="row">
                      <div class="col-lg-4">
                        <span class="span"> গ্রাহকের নাম লিখুন ..</span>
                        <div>
                           <input type="text" value="<?php echo $name;   ?>"  name="Name" placeholder="Your name...." required>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <span class="span">বাবার নাম</span>
                        <div>
                            <input type="text" value="<?php echo $fname;   ?>"  name="fname" placeholder="Your father name...." required>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <span class="span">মাতার মাতার নাম লিখুন ..</span>
                        <div>
                           <input type="text" value="<?php echo $mname;   ?>"    name="mname" placeholder="Your mother name...."required>
                        </div>
                      </div>
                  </div>






                

                  <div class="row">
                      <div class="col-lg-4">
                        <span class="span">তাহার ফোন নাম্বার..</span>
                        <div>
                           <input type="text"  value="<?php echo $email;   ?>"  name="phone" required placeholder="Your phone number...">
                        </div>
                      </div>

                      <div class="col-lg-4">
                      <span class="span">আপনার এক কপি ছবি  <a style="font-size:1rem;font-weight:bold" href="camera.php">get camera</a> </span>
                        <div>
                           <input type="file" value="<?php echo $img;   ?>"   name="img" required>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <span class="span">জাতীয় পরিচয়পত্র ছবি দিন (প্রথম পাতা)</span>
                        <div>
                           <input type="file" value="<?php echo $nid;   ?>"    name="nid" required >
                        </div>
                      </div>
                      
                  </div>

                   

                    <div class="row">
                      
                       <div class="col-lg-4">
                        <span class="span">জাতীয় পরিচয়পত্র ছবি দিন (পেছনের পাতা)</span>
                        <div>
                           <input type="file" value="<?php echo $nidNext;   ?>"   name="nidNext" required>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <span class="span">একাউন্ট নাম্বার</span>
                        <div>
                        <input type="text"value="<?php echo $phone;   ?>" maxlength="11"   name="acc_num" placeholder="acc_num" required >
                        </div>
                        
                       </div>
                       <div class="col-lg-4">
                        <span class="span">জয়েন্ট করার তারিখ</span>
                        <div>
                        <input type="date"    name="date"  required >
                        </div>
                        
                       </div>
                       </div>

                       <div class="row">
                      
                      <div class="col-lg-4">
                       <span class="span"> লোনের পরিমান </span>
                       <div>
                       <input type="text"value="<?php echo $work;   ?>"    name="loan_poriman" placeholder="describe work" required >
                     
                    
                        </div>
                     </div>

                     <div class="col-lg-4">
                       <span class="span"> লোন কতোদিনের জন্য </span>
                         <select name="masik">
                             <option>সপ্তাহ</option>
                             <option>মাসিক</option>
                             <option>বাতসরিক</option>
                         </select>
                      </div>

                      <div class="col-lg-4">
                       <span class="span"> লোন পরিশোধ করবেন ?  </span>
                         <select name="porishod">
                             <option>সপ্তাহ</option>
                             <option>মাসিক</option>
                             <option>বাতসরিক</option>
                         </select>
                      </div>

                      
                     
                       <div class="col-lg-4 mt-5">
                       <button id="btn" name="submit"> জমা দিন <i class="fas fa-long-arrow-alt-right"></i></button>
                       
                       </div>
                    </div>


                       </fieldset>
                   
                 </form>


                 <div class="col-lg-12">
                    
                 </div>
            
                </div>
           
           
              </div>


         </div>
    </div>



    <div class="title text-center">
       <h1 class="mt-4 text-primary pb-3">Show Information</h1>
       </div> 
       
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
   <div class="row p-0 m-0 ">
       
     
        <div class="col-lg-12">


        <div class="table" style="width:100%px;height:600px;background:gray;margin:auto;overflow-x:scroll;overflow-y:scroll">
                    <table>
                          <th>SL </th>
                          <th>Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Phone</th>
                          
                          <th>Account Number</th>
                          <th>date</th>
                          <th>Loaner poriman</th>
                          <th>Masik</th>
                          <th>porishod er poriman</th>
                          <th>interest</th>
                          <th>Payment Hobe monthly</th>
                          <th>Total Taka</th>
                          <th>Edit</th>
                           <th>Delete</th>
                           <th>view</th>

                        <?php
                             $check_mail = $_SESSION['email'];
                             $check = "SELECT * FROM moderate WHERE email ='$check_mail'";
                             
                             $check_query= mysqli_query($connect,$check);
                     
                             $row = mysqli_fetch_array($check_query);
                     
                             $user_wise_id = $row['Id'];
                     
                           $select = "SELECT * FROM client WHERE User_id= '$user_wise_id' AND acc_num  LIKE  '%$search%' order by id  desc  ";
                           $query= mysqli_query($connect,$select);

                           $i=1;
                           while($row=mysqli_fetch_array($query)){?>
                            

                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php  echo $row['Name']  ?></td>
                                <td><?php  echo $row['fname']  ?></td>
                                <td><?php  echo $row['mname']  ?></td>
                                <td><?php  echo $row['phone']  ?></td>

                               

                                <td><?php  echo $row['acc_num']  ?></td>
                                <td><?php  echo $row['date']  ?></td>
                                <td><?php  echo $row['loan_poriman']  ?></td>
                                <td><?php  echo $row['masik']  ?></td>
                                <td><?php  echo $row['porishod']  ?></td>
                                <td><?php  echo $row['interest']  ?></td>
                                <td><?php  echo $row['paymentCalculate']  ?></td>
                                <td><?php  echo $row['total_paymnet']  ?></td>
                                
                                <td><a href="editPeople.php?id=<?php echo $row['id'] ;?>"><button class="btn btn-danger p-2">Edit</button></a></td>
                                <td><a href="deletePeople.php?id=<?php echo $row['id'] ;?>"><button class="btn btn-danger p-2"onclick="return confirm('are you want to delete')">Delete</button></a></td>
                                <td><a href="pview.php?id=<?php echo $row['id'] ;?>&&acc_num=<?php echo $row['acc_num'] ?>    "><button class="btn btn-danger p-2">view</button></a></td>
                             
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