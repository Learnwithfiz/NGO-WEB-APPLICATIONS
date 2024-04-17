<?php
$connect = mysqli_connect("localhost","root","","NGO");
$acc_num=$bkash_num=$tran_code="";
$racc_num=$rrocket_num=$rtran_code="";
//for bksh
  if(isset($_POST['submit'])){
    $acc_num = test($_POST['acc_num']);
    $bkash_num=test($_POST['bkash_num']);
    $tran_code =test($_POST['tran_code']);
    $taka = test($_POST['taka']);

     //check phone number
   
  
  //check phone number 

    $check_tran = "SELECT * FROM client WHERE acc_num = '$acc_num'";
    $query = mysqli_query($connect,$check_tran);
    $fetch = mysqli_fetch_array($query);
   
    if($fetch){

      $check_code = "SELECT * FROM payment_bkash WHERE tran_code = '$tran_code'";
      $query1 = mysqli_query($connect,$check_code);
      $fetch1 = mysqli_fetch_array($query1);
       $count = mysqli_num_rows($query1)>0;
       if($count){
        echo " <script>alert('transection code already exist')</script>";
       }else{
       
       
        if($fetch['total_paymnet']<=0){
          echo " <script>alert('incefficient balance')</script>";
        }else{
          $insert = "INSERT INTO payment_bkash(acc_numm,bkash_num,tran_code,taka,date)
          VALUES ('$acc_num','$bkash_num','$tran_code','$taka',now())";
          $quer = mysqli_query($connect,$insert);
  
          $update = "UPDATE client SET 	total_paymnet	 = 	total_paymnet	 - '$taka' , date = now()  WHERE  acc_num = '$acc_num'   ";
          $update_done = mysqli_query($connect,$update);
  
          if($update_done){
            echo " <script>alert('success')</script>";
          }
          else{
            echo " <script>alert('Failed data')</script>";
          }


          $del = "DELETE FROM client WHERE total_paymnet = 0 ";
          $ee = mysqli_query($connect,$del);
          
        }



       
       }




    }
    else{
      echo " <script>alert('account number doesnot match')</script>";
    }
  }
  // for bksh ends here 


  // for rocket
  
  



  if(isset($_POST['rsub'])){
    $racc_num = test($_POST['racc_num']);
    $rrocket_num=test($_POST['rrocket_num']);
    $rtran_code =test($_POST['rtran_code']);

     //check phone number
     if(preg_match("/^([0-9]{11})$/",$rrocket_num)){
    }
   else{
     echo "<script>alert('please check number ')</script>";
   }
  //check phone number 

    $check_tran = "SELECT * FROM client WHERE acc_num = '$racc_num'";
    $query = mysqli_query($connect,$check_tran);
    $fetch = mysqli_fetch_array($query);
   
    if($fetch){

      $check_code = "SELECT * FROM rocket WHERE tran_code = '$rtran_code'";
      $query1 = mysqli_query($connect,$check_code);
      $fetch1 = mysqli_fetch_array($query1);
       $count = mysqli_num_rows($query1)>0;
       if($count){
        echo " <script>alert('transection code already exist')</script>";
       }else{

        $insert = "INSERT INTO rocket(acc_numm,	rocket_num,tran_code,date)
        VALUES ('$racc_num','$rrocket_num','$rtran_code',now())";
        $quer = mysqli_query($connect,$insert);
        if($quer){
          echo " <script>alert('success')</script>";
        }
        else{
          echo " <script>alert('Failed data')</script>";
        }
       }




    }
    else{
      echo " <script>alert('account number doesnot match')</script>";
    }
  }












  

  if(isset($_POST['nsub'])){
    $nacc_num = test($_POST['nacc_num']);
    $nnagad_num=test($_POST['nnagad_num']);
    $ntran_code =test($_POST['ntran_code']);

     //check phone number
  
   
  //check phone number 

    $check_tran = "SELECT * FROM client WHERE acc_num = '$nacc_num'";
    $query = mysqli_query($connect,$check_tran);
    $fetch = mysqli_fetch_array($query);
   
    if($fetch){

      $check_code = "SELECT * FROM nogod WHERE tran_code = '$ntran_code'";
      $query1 = mysqli_query($connect,$check_code);
      $fetch1 = mysqli_fetch_array($query1);
       $count = mysqli_num_rows($query1)>0;
       if($count){
        echo " <script>alert('transection code already exist')</script>";
       }else{

        $insert = "INSERT INTO nogod(acc_numm,nogod_num,tran_code,date)
        VALUES ('$nacc_num','$nnagad_num','$ntran_code',NOW())";
        $quer = mysqli_query($connect,$insert);
        if($quer){
          echo " <script>alert('success')</script>";
        }
        else{
          echo " <script>alert('Failed data')</script>";
        }
       }




    }
    else{
      echo " <script>alert('account number doesnot match')</script>";
    }
  }






  //for rocket ends here 
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
    <title>Payment</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"  />    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
   
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
   


    <style>
        .modal-container{
          margin-top: 25rem;
          width:400px;
          height:600px;
          background:#0F2C67 !important;
          box-shadow:3px 4px 20px black;
          position: fixed;
          top:-270px;
          left:200px;
          bottom:300px;
          color:white;
          z-index: 1;
          transition:opacity 0.6s;
          opacity:0;
          pointer-events: none;
        }
        .modal-container.show{
          opacity:1;
          pointer-events: auto;
        }

        .modal-containertwo{
          margin-top: 25rem;
          width:400px;
          height:600px;
          background:#0F2C67 !important;
          box-shadow:3px 4px 20px black;
          position: fixed;
          top:-270px;
          left:500px;
          bottom:300px;
          color:white;
          z-index: 1;
          transition:opacity 0.6s;
          opacity:0;
          pointer-events: none;
        }

        .modal-container3{
          margin-top: 25rem;
          width:400px;
          height:600px;
          background:#0F2C67 !important;
          box-shadow:3px 4px 20px black;
          position: fixed;
          top:-270px;
          left:500px;
          bottom:300px;
          color:white;
          z-index: 1;
          transition:opacity 0.6s;
          opacity:0;
          pointer-events: none;
        }
        .modal-containertwo.show2{
          opacity:1;
          pointer-events: auto;
        }



        .modal-container4{
          margin-top: 25rem;
          width:400px;
           height:600px;
          background:#0F2C67 !important;
          box-shadow:3px 4px 20px black;
          position: fixed;
          top:-270px;
          left:850px;
          bottom:300px;
          color:white;
          z-index: 1;
          transition:opacity 0.6s;
          opacity:0;
          pointer-events: none;
        }
        .modal-container4.show4{
          opacity:1;
          pointer-events: auto;
        }
        @media screen and (max-width: 800px) {
          .modal-container{
            margin-left:-150px;
            width:300px;
          height:600px;
          }
          .modal-containertwo{
            margin-left:-480px ;
            width:300px;
          height:600px;
          }
          .modal-container3{
            margin-left:-680px ;
            width:300px;
          height:600px;
          }
          .modal-container4{
            margin-left:-680px ;
            width:300px;
          height:600px;
          }
       }


       .openScan{
          width:300px;
          height:300px;
          background-color:blue;
          position: relative;
          bottom:100px;
          display:none;
       }
       .CloseScan{
          width:300px;
          height:300px;
          background-color:blue;
          position: relative;
          bottom:100px;
          display:block;
          z-index: 999;
       }

    </style>
</head>
<body>
     <!-- Navbar starts -->
     <nav class="navbar  navbar-expand-lg navbar-light fixed-top "   id="navbg">
        <a class="navbar-brand" href="Homepage.php"id="HomePage"><i class="fas navlink fa-home"></i><img  id="logo" src="Image/ngo_logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link "id="Home"  href="Homepage.php"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"id="Home" href="AboutPage.php" >  About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"id="Home" href="ServicesPage.php">Services</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loan
                </a>
                <div class="dropdown-menu" id="menu" aria-labelledby="navbarDropdown">
                 
                
                  <a class="dropdown-item" href="Application.php">Application</a>
                  <a class="dropdown-item" href="Payment.php">payment</a>
                 
                </div>
              </li>
          
          
           
             
              <li class="nav-item">
                <a class="nav-link "id="Home" href="GellaryPage.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "id="Home" href="NoticePage.php">Notice</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div id="menu2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="admin_Login.php">Admin</a>
                  <a class="dropdown-item" href="ModerateLogin.php">Moderator</a>
                 
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link "id="Home" href="ContactPage.php">Contact</a>
              </li>
          </ul>
        </div>
      </nav>

     
    <!--Navbar ends-->
    <br><br><br><br><br>

             
    <marquee width="100%" direction="left"scrollamount="8" height="50px" style="background-color: red;color:white;font-size: 1.4rem;font-weight: bold;">
      Huge discount is going on the occasion of Mujib year. Our PDB is giving only 5% loan. Besides, if you make a mobile banking payment, you will get a maximum cashback of Tk 500. Thank you, PDB authorities
   </marquee>
           <h1 class="text-center p-2  mt-5" style="color: gray;">Payment method </h1>
           <br><br>
              
             <div class="container">
                 <div class="row">
                    <div class="col-lg-6 text-justify p-5" >
                        <h2  class=""style="color: gray;"> Payment Mobile banking Term & Condition &#8595;</h2>
                         
                        <h4 style="color: gray;" > 1.  For Bkash  <img height="120" width="100" src="Image/bkash.svg" alt=""> </h4>
                         <p>There must be a term and some conditions that you have to follow in order to pay for the development.</p>
                         <p>First you need to have your bank account. Then you have to give your account number in the form. Then you have to give your correct address.
                          Mention your installment money.</p>

                          <p>Then you have to give the bKash number from which you will pay the bKash then the bKash transaction code. Don't go wrong under any circumstances</p>
                          <p>It is possible to make a one time transaction code only once</p>
                          <p>Bksah Number : 01718017749</p>
                        </div>
                    <div class="col-lg-6 p-5 text-justify" style="margin-top: 90px; ">
                  
                         
                      <h4 style="color: gray;" > 2.  For Nagod  <img height="120" width="100" src="Image/nogod.png" alt=""> </h4>
                       <p>There must be a term and some conditions that you have to follow in order to pay for the development.</p>
                       <p>First you need to have your bank account. Then you have to give your account number in the form. Then you have to give your correct address.
                        Mention your installment money.</p>

                        <p>Then you have to give the nagod number from which you will pay the bKash then the bKash transaction code. Don't go wrong under any circumstances</p>
                        <p>It is possible to make a one time transaction code only once</p>
                        <p>Bksah Number : 01739123111</p>
                    </div>
                 </div>

                 <div class="row">
                  <div class="col-lg-6 p-5 text-justify" style="margin-top: 10px; ">
                  
                         
                    <h4 style="color: gray;" > 2.  For Rocket  <img height="120" width="100" src="Image/rocket.jpg" alt=""> </h4>
                     <p>There must be a term and some conditions that you have to follow in order to pay for the development.</p>
                     <p>First you need to have your bank account. Then you have to give your account number in the form. Then you have to give your correct address.
                      Mention your installment money.</p>

                      <p>Then you have to give the nagod number from which you will pay the Rocket then the bKash transaction code. Don't go wrong under any circumstances</p>
                      <p>It is possible to make a one time transaction code only once</p>
                      <p>Bksah Number : 01718017749</p>
                  </div>

                     <div class="col-lg-6">
                       
                    </div>
                 </div>
             </div>
          
             <br><br><br><br>
             
           <div class="container">
             <div class="row">
               <div class="col-lg-4">
              
               <div class="modal-container"  id="model-container">
            
                <button id="scanBtn" class="btn btn-white ">click camera for scan</button>
              
                     <div class="modal-title text-center">
                        <h4>For Bkash <span class="pl-5"style="margin-left:180px;color:green;cursor:pointer" id="x"> X </span></h4>
                        <h4>NO: +01718465130</h4>
                     </div>
                     <div class="modal-body">
                        <form action="" method="POST">
                           Enter Account Number
                           <div>
                           <input type="text"name="acc_num" id="text"  placeholder="Enter Your Account Number" value="<?php echo $acc_num?>" required   >
                         
                           </div>
                           Enter Bkash number
                           <div> 
                              
                             <input type="text"name="bkash_num" value= "<?php echo $bkash_num?>"   maxlength="11"  required   placeholder="Enter Your Bkash Number">
                           </div>
                             enter your transection code
                            <div>
                              <input type="text"name="tran_code" value= "<?php echo $tran_code?>"  required placeholder="Enter Your Transection Code">
                           </div> 

                           enter your Ammount
                            <div>
                              <input type="text"name="taka"   required placeholder="Enter Your Ammount">
                           </div> 
                           <input class="btn btn-danger" type="submit" name="submit" value="submit">
                        </form>
                     </div>
                     <div class="modal-footer">
                         <h5><button class=" btn btn-danger" id="close">close</button></h5>
                     </div>
                 </div> 




                   <!--bksh modal -->
               </div>
                 <div class="col-lg-4">
                 <div id="mid" class="openScan">

                 <video width="300" height="300" id="MyCameraOpen"></video>
               <br><br>

     
                </div>
                 <div class="modal-containertwo" id="model-container2">
                     <div class="modal-title text-center">
                        <h4>For Rocket <span class="pl-5"style="margin-left:180px;color:green;cursor:pointer" id="x2"> X </span></h4>
                        <h4>NO: 017278883</h4>
                     </div>
                     <div class="modal-body">
                        <form action="" method="POST">

                        Enter Account number <div>     <input type="text"name="racc_num" value="<?php echo $racc_num ?>"   placeholder="Enter Your Account Number"></div>
                       Enter Rocket number   <div>  <input type="text"name="rrocket_num"  value="<?php echo $rrocket_num ?>"   placeholder="Enter Your Rocket Number"></div>
                       Enter transection code <div>    <input type="text"name="rtran_code"  value="<?php echo $rtran_code ?>" placeholder="Enter Your Transection Code"></div>
                            <input type="submit" name="rsub" value="submit">
                        </form>
                     </div>
                     <div class="modal-footer">
                         <h5><button class=" btn btn-danger" id="close2">close</button></h5>
                     </div>
                 </div> 
                 </div>



                 <div class="col-lg-4">
                 <div class="modal-container4" id="model-container4">
                     <div class="modal-title text-center">
                        <h4>For nogod <span class="pl-5"style="margin-left:180px;color:green;cursor:pointer" id="x4"> X </span></h4>
                        <h4>NO: ++94983484</h4>
                     </div>
                     <div class="modal-body">
                        <form action="" method="POST">
                            <input type="text"name="nacc_num"placeholder="Enter Your Account Number">
                            <input type="text"name="nnagad_num"placeholder="Enter Your nagad Number">
                            <input type="text"name="ntran_code"placeholder="Enter Your Transection Code">
                            <input type="submit" name="nsub" value="submit">
                        </form>
                     </div>
                     <div class="modal-footer">
                         <h5><button class=" btn btn-danger" id="close4">close</button></h5>
                     </div>
                 </div> 
                 </div>
             </div>
           </div>


         
            <div class="container">

            <!--bksh modal -->
              <div class="row text-center">
               


                   
  

              <div class="col-lg-4">
                    <img id ="open" src="Image/bkash.svg" width="180" height="120" alt="">
                 </div>
                 <div class="col-lg-4">
                    <img src="Image/rocket.jpg" id="open2" width="180" height="120" alt="">
                 </div>

                

                 <div class="col-lg-4">
                    <img src="Image/nogod.png" width="180" id="open4" height="120" alt="">
                 </div>
              </div>
            </div>

            <script>
                var open = document.getElementById("open");
                var close =  document.getElementById("close");
                var model_container  = document.getElementById("model-container");
                var x =document.getElementById("x");
                open.addEventListener('click',function(){
                  model_container.classList.add('show');
                });
                close.addEventListener('click',function(){
                  model_container.classList.remove('show');
                });

                x.addEventListener('click',function(){
                  model_container.classList.remove('show');
                });
           
                var open_two = document.getElementById("open2");
                var close2 =  document.getElementById("close2");
                var model_container2  = document.getElementById("model-container2");
                var x2 =document.getElementById("x2");
              

                open_two.addEventListener('click',function(){
                model_container2.classList.add('show2');
              });
              close2.addEventListener('click',function(){
                model_container2.classList.remove('show2');
              });
              x2.addEventListener('click',function(){
                model_container2.classList.remove('show2');
              });



              var open_4 = document.getElementById("open4");
                var close4 =  document.getElementById("close4");
                var model_container4  = document.getElementById("model-container4");
                var x4 =document.getElementById("x4");
              

                open_4.addEventListener('click',function(){
                model_container4.classList.add('show4');
              });
              close4.addEventListener('click',function(){
                model_container4.classList.remove('show4');
              });
              x4.addEventListener('click',function(){
                model_container4.classList.remove('show4');
              });






              var scanner;
              var video = document.getElementById("MyCameraOpen");
              var text = document.getElementById("text");
                var scanBtn = document.getElementById("scanBtn");
               var mid = document.getElementById("mid");
               scanBtn.addEventListener("click",function(){
                mid.style.display='block';
           

             scanner =   new Instascan.Scanner({
             video : video
         });
         Instascan.Camera.getCameras()
         .then(function(Our_Camera){
             if(Our_Camera.length > 0 ){
                scanner.start(Our_Camera[0]);  
             }else{
                 alert("camera failed");
             }
         })
         .catch(function(error){
             console.log("error please try")
         })


         scanner.addListener('scan',function(input_value){
               text.value=input_value;
            //   document.forms[0].submit();

            if(text !=" "){
              mid.style.display='none';
            }
            })
          })


        
    
        
       
       


          
         </script>













          <br><br><br><br><br>
  <!--Footer section starts here -->
  <footer>
    <div class="row p-0 m-0">
        <div class="col-lg-6">

        </div>
    <a href="" >  <i class="fas fa-arrow-up arro" ></i></a>

        <div class="col-lg-6"></div>
    </div>
    <div class="row p-0 m-0 d-flex justify-contents-center text-center">
          <div class="col-lg-4  pt-5">
          
              <div style="margin-left: 80px;"  class="follow text-justify">
                  <h2 style="color: white;">  <i style="color: white;font-size: 2rem;" class="fas fa-share-square"></i>  Follow</h2>
                 <br><br>
                  <a href=""><i  class="fab icon fa-facebook"></i>  <span class="fasbookk"> Facebook</span></a><br><br>
                 
                
                  <a href="">   <i class="fab icon fa-twitter-square"></i><span class="fasbookk" > Twitter</span></a><br><br>
                   <a href=""><i class="fab icon fa-youtube"></i><span class="fasbookk"> youtube</span></a><br><br>
                </div>
          </div>

          <div class="col-lg-4 pt-5">
            <div class="follow text-justify">
                <h2 style="color: white;margin-bottom: 60px;">Contact</h2>
                <i class="fas  icon fa-phone"></i> <span  class="fasbookk">  Phone: +88017184651300</span><br><br>
                <i class="fas icon fa-phone-volume"></i><span  class="fasbookk">TelePhone: +92928392</span><br><br>
                <a href=""> <i class="fas icon fa-envelope-square" ></i><span class="fasbookk"  > Email</span></a><br><br>
                
              </div>
        </div>

        <div class="col-lg-4 pt-5 ">
          <div class="follow text-justify">
              <h2 style="color: white;">Location </h2>
              <br><br>
              <p style="color: white; font-size: 1.2rem;"> Rajshahi , Boalia thana ,GPO-5000</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.2727564316756!2d88.60609221514478!3d24.371813184286736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefb3a3756c51%3A0x885a5fbaf1589d87!2z4Kac4KeH4Kay4Ka-IOCmuOCmruCmrOCmvuCnnyDgppXgpr7gprDgp43gpq_gpr7gprLgp58!5e0!3m2!1sbn!2sbd!4v1633454078301!5m2!1sbn!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
    </div>
</footer>

<div class="boottom-footer">
   <p> &copy; Copyright from NGO(PDB) Unique somobai LTD. latest update2024 </p>
</div>

<!--Footer section ends here -->



    
 <!--vanila javascript  -->
 <script>
    var navbg = document.getElementById("navbg");
  var dropdown =  document.getElementById("menu");
  var drop2 =document.getElementById("menu2");
     window.onscroll =()=>{
         var navbar = window.scrollY;
       
         if(navbar>=100){
           navbg.classList.add('scroll_after');
           dropdown.classList.add('dropdown_itemScroll');
           drop2.classList.add('dropdown_itemScroll');
         }
         else{
             navbg.classList.remove('scroll_after');
             dropdown.classList.remove('dropdown_itemScroll');
             drop2.classList.remove('dropdown_itemScroll');
         }
     }


     
</script>


<!--javascript ends  -->

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>