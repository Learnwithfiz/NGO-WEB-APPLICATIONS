<?php

$connect = mysqli_connect("localhost","root","","NGO");
$name=$fname=$mname=$email=$img=$nid=$nidNext=$phone=$date=$work=$salary=$pass="";

session_start();   
$welcome="";
$user_id = $_SESSION['user_id'];
if($user_id==true){
   $welcome = "Welcome ";
}
else{
    header('location:admin_Login.php');
}
$id=$_GET['id'];
$sql= "SELECT * FROM moderate WHERE Id = '$id'";
$qu=mysqli_query($connect,$sql);
$fetch = mysqli_fetch_array($qu);

    if(isset($_POST['submit'])){
         
        $name=test($_POST['Name']);
        $fname=test($_POST['fname']);
        $mname=test($_POST['mname']);
        $email=test($_POST['email']);


        $img=$_FILES['img']['name'] ;
        $img2=$_FILES['img']['tmp_name'];

        $nid=$_FILES['nid']['name'];
        $nid2=$_FILES['nid']['tmp_name'];

        $nidNext=$_FILES['nidNext']['name'];
        $nidNext2=$_FILES['nidNext']['tmp_name'];


        $phone=test($_POST['phone']);
        $date=test($_POST['date']);
        $work=test($_POST['work']);
        $salary=test($_POST['salary']);
        $pass=test($_POST['pass']);
         
        //check phone number
        if(preg_match("/^([0-9]{11})$/",$phone)){
         }
        else{
          echo "<script>alert('please check number ')</script>";
        }
       //check phone number 
    
     
       $queryy="UPDATE moderate
       SET Name='$name'
       ,fname='$fname',
       mname='$mname', email='$email', img='$img', nid='$nid', 
       nidNext='$nidNext', phone='$phone', 
       date='$date',work='$work',salary='$salary', 
       pass='$pass' WHERE Id = '$id'";  
        
              
            $sqll=mysqli_query($connect,$queryy);
    
            if($sqll){
                move_uploaded_file($img2,"moderate_image/".$img);
                move_uploaded_file($nid2,"moderate_image/".$nid);
                move_uploaded_file($nidNext2,"moderate_image/".$nidNext);
    
                if($sqll){
                    echo "<script>alert('success  send data ')</script>";
                }
                else{
                    echo "<script>alert('failed  send data ')</script>";
                } 
           
            }else{
                echo "<script>alert('failed')</script>";
        
            }
           

        
        }
   
   

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
       <h1>Add moderator   </h1>     
   </div>
   <button class="btn btn-primary p-3 m-5 "><a style="border:none;color:wheat !important" href="AdminMain.php">Home</a></button>
    
                <div class="form-div" style="padding: 20px;">
                  <form action=""method="POST" enctype="multipart/form-data">
                       <fieldset>
                         <legend>
                              <h3>Please provide accurate information</h3>
                         </legend>
                         
                    <div class="row">
                      <div class="col-lg-4">
                        <span class="span"> মডারেটর নাম লিখুন ..</span>
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
                        <span class="span">তাহার ইমেইল..</span>
                        <div>
                           <input type="email"  value="<?php echo $email;   ?>"  name="email" required placeholder="Your email addrees....">
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <span class="span">আপনার এক কপি ছবি (পাসপোর্ট সাইজ) </span>
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
                        <span class="span">ফোন নাম্বার</span>
                        <div>
                        <input type="text"value="<?php echo $phone;   ?>" maxlength="11"   name="phone" placeholder="phone" required >
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
                       <span class="span">কাজের ধরন </span>
                       <div>
                       <input type="text"value="<?php echo $work;   ?>"    name="work" placeholder="describe work" required >
                     
                    
                        </div>
                     </div>

                     <div class="col-lg-4">
                       <span class="span">তাহার বেতন</span>
                       <div>
                       <input type="number"value="<?php echo $salary;   ?>"    name="salary" placeholder="salary" required >
                     
                    
                    </div>
                      </div>
                      <div class="col-lg-4 ppp">
                       <div>
                        
                         <input type="text"value="<?php echo $pass;   ?>"    name="pass" placeholder="password" required >
                     
                    
                        </div>
                      </div>
                      
                       <div class="col-lg-4 mt-5">
                       <button id="btn" name="submit"> জমা দিন <i class="fas fa-long-arrow-alt-right"></i></button>
                       
                       </div>
                    </div>


                       </fieldset>
                   
                 </form>
            
                </div>
           
           
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