<?php
error_reporting(0);
$connect = mysqli_connect("localhost","root","","NGO");
$sql = "SELECT * FROM homepage ";
$sl = mysqli_query($connect,$sql);
$roww = mysqli_fetch_array($sl);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="About.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" ></script>

     <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> 

     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    
    
      

    </head>
<body>
   <!--Navbar starts-->
   <nav class="navbar  navbar-expand-lg navbar-light fixed-top "   id="navbg">
    <a class="navbar-brand" href="Homepage.html"id="HomePage"><i class="fas navlink fa-home"></i><img  id="logo" src="Image/ngo_logo.png" alt=""></a>
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
              <a class="dropdown-item" href="Payment.html">payment</a>
             
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
        <div class="owl-carousel owl-theme ">
                   
                     
                <div class="item">
                      <div class="bg-color1">
                           <div class="row p-0 m-0">
                                <div class="col-lg-4 col-md-6 col-sm-6"> <br><br>
                                    <div class="silder-image">
                                        <img src="Image/1.jpg"id="imm" style="border-radius: 50%;" class="Image_slider" alt="">
                                    </div>
                                    <div class="some-text">
                                        <h4 class="text-white p-2 text-right mt-2">Monthly Meeting NGO (PDB)</h4>
                                    </div>
                                   
                                </div>
                                 <div class="col-lg-2"></div>
                                <div class="col-lg-6  col-md-6 col-sm-6">
                                  <div class="slider-text ">
                                    
                                    <h1 class="text-title text-white text-center">Let's all work <span style="color: yellow;">together to </span> build a <span style="color:orange">poor free</span> Bangladesh. <span class="text-muted">________</span> <span style="font-size: 1rem; color: yellow;">Mr Mostafizur Rahman</span>  </h1>
                                </div>
                                </div>
                           </div>
                      </div>
                </div>
                <div class="item">
                  <div class="bg-color2">
                       <div class="row p-0 m-0">
                            <div class="col-lg-4 col-md-6 col-sm-6"> <br><br>
                                <div class="silder-image">
                                  <br><br>
                                    <img src="Image/mamun.png" id="imm" style="border-radius: 50%;" class="Image_slider" alt="">
                                </div>
                                <div class="some-text">
                                    <h4 class="text-white p-2 text-right mt-2">Director (PDB)</h4>
                                </div>
                               
                            </div>
                             <div class="col-lg-2"></div>
                            <div class="col-lg-6  col-md-6 col-sm-6">
                              <div class="slider-text ">
                              
                                <h1 class="text-title text-white text-center"> Everyone's contribution is needed <span style="color: yellow;"> to take Bangladesh forward, </span> whether he is a <span style="color:orange">   farmer or an officer.</span> <span class="text-muted">________</span> <span style="font-size: 1rem; color: yellow;">Md Mamnur Rashid</span>  </h1>
                            </div>
                            </div>
                       </div>
                  </div>
            </div>
            <div class="item">
              <div class="bg-color3">
                   <div class="row p-0 m-0">
                        <div class="col-lg-4 col-md-6 col-sm-6"> <br><br>
                            <div class="silder-image">
                              <br><br>
                                <img src="Image/chairman.png" id="imm" style="border-radius: 50%;" class="Image_slider" alt="">
                            </div>
                            <div class="some-text">
                                <h4 class="text-white p-2 text-right mt-2">Manager (PDBF)</h4>
                            </div>
                           
                        </div>
                         <div class="col-lg-2"></div>
                        <div class="col-lg-6  col-md-6 col-sm-6">
                          <div class="slider-text ">
                         
                            <h1 class="text-title text-white text-center"> Easily borrow money ,<span style="color: yellow;">   send money </span>  <span style="color:orange">    to mobile</span> <span class="text-muted">________</span> <span style="font-size: 1rem; color: yellow;">Md Ahsanul islam</span>  </h1>
                        </div>
                        </div>
                   </div>
              </div>
        </div>
            
        </div>
      </div>






<br><br><br><br>
                            <!--about this office starts here -->
                            <h1 class="About ab text-center">About Our Office</h1>
                                
                            
<br><br><br><br>

                            <div  class="padd">
                                  
                                        <div class="row p-0 m-0">
                                          <div class="col-lg-1"></div>
                                             <div class="col-lg-5">
                                                 <div class="about">
                                                     
                                                <br><br>
                                                     <div class="card c2">
                                                          <div class="card-title">
                                                               <h3 class="title-textt"><i class="fas fa-arrow-right"></i>Information</h3>
                                                          </div>
                                                          <div class="card-body text-center">
                                                            <i class="fas card-icon fa-landmark"></i>    <p class="pera">We arrange loans from the lowest to the highest.
                                                                Not only that, we have been working with reputation for the last 10 years. Our value is highest</p> 
                                                          </div>
                                                     </div>


                                                     <div class="card c1">
                                                      <div class="card-title">
                                                           <h3 class="title-textt"><i class="fas fa-info-circle"></i>More</h3>
                                                      </div>
                                                      <div class="card-body text-center">
                                                        <i class="fas   card-icon fa-chevron-circle-down"></i>    <p class="pera">We have many staff members who are working hard to make your job easier.</p> 
                                                      </div>
                                                 </div>

                                                 <div class="card c3">
                                                  <div class="card-title">
                                                       <h3 class="title-textt"><i class="fas fa-eject"></i>Application</h3>
                                                  </div>
                                                  <div class="card-body text-center">
                                                    <i class="fas  card-icon fa-address-card"></i>    <p class="pera">You can apply for a loan by confirming all your information on our website. Which will make your job easier.</p> 
                                                  </div>
                                             </div>


                                             <div class="card c4">
                                              <div class="card-title">
                                                   <h3 class="title-textt"><i class="fas fa-mobile-alt"></i>Payment</h3>
                                              </div>
                                              <div class="card-body text-center">
                                                <i class="fas card-icon  fa-shopping-cart"></i>    <p class="pera">There is a maximum payment method for you. You can make payment through mobile banking from any part of the country.</p> 
                                              </div>
                                         </div>
                                                 </div>
                                             </div>
                                        
                                             <div class="col-lg-6 ">
                                               
                                             <br><br><br>  <br><br> 
                                            
                                                <div class="first_image"  >
                                                     <img src="Image/p1 (11).png" 
                                                      style="
                                                        width:300px;
                                                        height:400px;
                                                        border-radius:10px;
                                                      "
                                                     alt="">

                                                     <img src="Image/MicrosoftTeams-image (17).png" 
                                                      style="
                                                        width:300px;
                                                        height:400px;
                                                        position:relative;
                                                        top:100px;
                                                        left:50px;
                                                        border-radius:10px;
                                                      "
                                                     alt="">
                                                     <img src="Image/MicrosoftTeams-image (15).png" 
                                                      style="
                                                        width:300px;
                                                        height:400px;
                                                        position:relative;
                                                        top:40px;
                                                        left:5px;
                                                        border-radius:10px;
                                                      "
                                                     alt="">


                                                     <img src="Image/office.jpg" 
                                                      style="
                                                        width:300px;
                                                        height:400px;
                                                        position:relative;
                                                        top:140px;
                                                        left:50px;
                                                        border-radius:10px;
                                                      "
                                                     alt="">
                                                </div>
                                            
                                            
                                            
                                            
                                            
                                            </div>

                                           
                                              
                                           
                                    
                                   </div>
                                    </div>
                                    

                            <!--About this office ends here -->  <br><br><br>  <br><br> 


                            <!--Our Program Sections starts here -->
                                  
                            <h1 class="About text-center p-5 m-5" >Our Programs </h1>

                            
                                    <div class="container">

                                      <div class="bordered">
                                      <div class="row p-0 m-0">
                                        <div class="col-lg-3">
                                            <div class="card2 s1">
                                                <div class="card-img">
                                                    <img class="card-image" src="Image/MicrosoftTeams-image (15).png" alt="">
                                                </div>
                                                <div class="card-title">
                                                 <h5 class="text-primary p-3 ">49th Cooperative Day</h5>
                                                  <p class="text-muted p-2">Rajshahi Mayor Khairuzzaman Liton was present on one of the celebrations</p>
                                                </div>
                                                <div class="card-text">

                                                </div>
                                            </div>
                                        </div>
  
                                        <div class="col-lg-3">
                                          <div class="card2 s2">
                                              <div class="card-img">
                                                  <img class="card-image" src="Image/p1 (3).png" alt="">
                                              </div>
                                              <div class="card-title">
                                               <h5 class="text-primary p-3 ">Our donate agency</h5>
                                                <p class="text-muted p-2">It's time for free education for the poor and helpless</p>
                                              </div>
                                              <div class="card-text">

                                              </div>
                                          </div>
                                      </div>
  
                                      <div class="col-lg-3">
                                        <div class="card2 s3">
                                            <div class="card-img">
                                                <img class="card-image" src="Image/p1 (15).png" alt="">
                                            </div>
                                            <div class="card-title">
                                             <h5 class="text-primary p-3 ">On the completion of 10 years of office</h5>
                                              <p class="text-muted p-2">Honorable Mewar Khairuzzaman's daughter was present in the program</p>
                                            </div>
                                            <div class="card-text">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                      <div class="card2 s4">
                                          <div class="card-img">
                                              <img class="card-image" src="Image/p1 (5).png" alt="">
                                          </div>
                                          <div class="card-title">
                                           <h5 class="text-primary p-3 ">কোভিড ১৯ প্রোগ্রাম</h5>
                                            <p class="text-muted p-2">When distributing free masks</p>
                                          </div>
                                          <div class="card-text">

                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-lg-3">
                                    <div class="card2 s1">
                                        <div class="card-img">
                                            <img class="card-image" src="Image/p1 (6).png" alt="">
                                        </div>
                                        <div class="card-title">
                                         <h5 class="text-primary p-3 ">planting program </h5>
                                          <p class="text-muted p-2">Observance of tree planting program 2024</p>
                                        </div>
                                        <div class="card-text">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="card2 s5">
                                      <div class="card-img">
                                          <img class="card-image" src="Image/p1 (14).png" alt="">
                                      </div>
                                      <div class="card-title">
                                       <h5 class="text-primary p-3 ">office ceremony</h5>
                                        <p class="text-muted p-2">Exchanging flowers greetings</p>
                                      </div>
                                      <div class="card-text">

                                      </div>
                                  </div>
                              </div>


                              <div class="col-lg-3">
                                <div class="card2 s2">
                                    <div class="card-img">
                                        <img class="card-image" src="Image/p1 (11).png" alt="">
                                    </div>
                                    <div class="card-title">
                                     <h5 class="text-primary p-3 ">office ceremony</h5>
                                      <p class="text-muted p-2">Honorable Mewar Khairuzzaman's daughter was present in the program</p>
                                    </div>
                                    <div class="card-text">

                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-3">
                                        <div class="card2 s3">
                                            <div class="card-img">
                                                <img class="card-image" src="Image/p1 (15).png" alt="">
                                            </div>
                                            <div class="card-title">
                                             <h5 class="text-primary p-3 ">On the completion of 10 years of office</h5>
                                              <p class="text-muted p-2">Honorable Mewar Khairuzzaman's daughter was present in the program</p>
                                            </div>
                                            <div class="card-text">

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                  </div>
                               
                             <!--Our Program Sections ends here -->


                          
                             <!--About This starts here-->

                                    <div class="container">
                                       <h1 class="text-primary text-center p-5">About More</h1>
                                        <div class="row">
                                            <div class="col-lg-6 ab1">
                                              
                                                <ul>
                                                  <h4 class="text-danger">***Our Mission</h4>
                                                  <p><li class="text-danger">

                                                    Our mission is to build a poor free Bangladesh. Make Bangladesh more beautiful and more familiar to the world. Give us a loan at the lowest interest rate. All the poor and helpless took the opportunity to take a loan. Besides, you can arrange your loan from any part of Bangladesh. Not only this, you can apply for a loan from anywhere in our country. Our staff will confirm your information.</li></p>

                                                  <p>
                                                    <h4 class="text-danger">***Offers:</h4>
                                                    <li  class="text-danger">

                                                    You can apply for a loan from anywhere. You don't have to come to the bank to pay anytime, You can send money to our mobile banking service at any time.</li></p>


                                                  <p>
                                                    <li class="text-danger">There are 20+ field workers engaged in your service </li>
                                                  </p>


                                                  <p ><li class="text-danger">Special discount on the occasion of Mujib year</li></p>


                                                  <p><li class="text-danger">Our goal is to build a poor free Bangladesh </li></p>

                                                  <p><li class="text-danger">On the occasion of completing 10 years in Rajshahi, we are giving opportunity to Subarn Lone. We are giving special discount on the lowest loan. Come to our office today without delay or contact us</li></p>
                                                
                                                  <p>
                                                    <li class="text-danger">There are 20+ field workers engaged in your service </li>
                                                  </p>


                                                </ul>
                                            </div>

                                          
                                               <div class="col-lg-6 mt-5 text-right p-2 ab2" >
                                                 <img src="Image/office.jpg" style="width: 100%; height: 500px;" alt="">
                                              
                                                 <span style="color: blue; font-size: 0.9rem;">Office , sagorpara , boalia ,Rajshahi</span>
                                                </div>

                                           
                                         
                                        </div>
                                    </div>

                               <!--About This ends here -->
                        


                               <!--Barchat starts here -->

                                        <h1 class="text-primary p-5 text-center">Last 10 Years </h1>
                             
                                      <div class="container">
                                        <div class="row ">
                                          <div class=" ch  col-lg-12 d-flex justify-content-center align-items-center text-center">
                                            <div class="chartContainer" style="height: 400px; width: 70%"></div> 
                                          </div>
                                        </div>
                                      </div>
                             
                             
                                        <!--Barchat ends here -->
 <!--Middle background Image Starts here  with countup -->
                          

 <h1 class="text-center text-primary p-4" style="font-weight: 700;">Achievement </h1>
                 

 <div class="count-up-bg-image">
     <div class="count-opacity">
         <div class="row p-0 m-0">

              <div class="col-lg-4 col-md-6 col-sm-6  col-smm">
                  <div class="count-title text-center">
                       <h1 class="total-client">Total client !!!</h1>
                       <h4><i  class="fas fa-user-friends title-icon"></i></h4>
                       <h1 class="title-text"><?php  echo $roww['Tcount']; ?></h1>
                  </div>
              </div>

              <div class="col-lg-4  col-md-6 col-sm-6   col-smm">
                  <div class="count-title text-center">
                    <h1 class="total-client">  Office project !!!</h1>
                    <h4><i class="fab fa-r-project   title-icon"></i></h4>
                    <h1 class="title-text"><?php  echo $roww['Tproject']; ?></h1>
                </div>
              </div>

              <div class="col-lg-4  col-md-6 col-sm-6  col-smm">
                <div class="count-title text-center">
                  <h1 class="total-client    ">    Departmental awards !!!</h1>
                  <h4><i class="fas fa-trophy    title-icon"></i></h4>
                
                  <h1 class="title-text"><?php  echo $roww['Dcount']; ?></h1>
             </div>
              </div>

         </div>
     </div>
 </div>




<!--Middle background Image ends here width count up -->




                  <!--bbg #2A0944 starts here  last part-->

                  <div class="last-bottom p-5">
                    <div class="row p-0 m-0 text-center">
                        <div class="col-lg-4">
                            <div class="term">
                               <h2 style="color: white;"> <i  style="color: white;font-size: 2.3rem;" class="far fa-hand-rock"></i> Loan NGO  </h2><br>
                               <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Our high quality NGO (PDBF) company </a> <br><br>
                               <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Approved by the Government of Bangladesh</a> <br><br>
                               <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> 10 years of success</a> <br><br>
                               <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Low interest more profit</a> <br><br>
                               <a href="#"> <span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Loans can be repaid quickly</a> <br><br>
                               <a href="#"> <span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Loans can be repaid on time</a> <br><br>
                               <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span> Maximum services</a> <br><br>
                              

                            </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="term">
                            <h2 style="color: white;"> <i    style="color: white;font-size: 2.3rem;" class="fas fa-hands"></i> FOR APPLICATION  </h2><br>
                            <a href="#"> <span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>  Best opportunity </a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;"style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Anyone can apply</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Unlimited facilities</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Low interest more profit</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Maximum loan disbursement</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>They don't pay fast</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>You can apply on our website</a> <br><br>
                            
                           

                         </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="term">
                            <h2 style="color: white;"> <i style="color: white;font-size: 2.3rem;" class="fas fa-money-bill-wave-alt"></i>Best opportunitys  </h2><br>
                            <a href="#"> <span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>  Best opportunity </a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;"style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Anyone can apply</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Unlimited facilities</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Low interest more profit</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>Monthly weekly low profit</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>They don't pay fast</a> <br><br>
                            <a href="#"><span style="color: yellow;font-size: 1.3rem ; font-weight: bold;">&#9734</span>YMaximum loan opportunity</a> <br><br>
                            
                           

                         </div>
                        </div>
                    </div>
               </div>

             <!--bbg $2A0944 ends here  last part-->
             

             <!--Footer section starts here -->
                      <footer>
                            <div class="row p-0 m-0">
                                <div class="col-lg-6">

                                </div>
                                <a href="" >  <i class="fas fa-arrow-up arro icon" ></i></a>
                        
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
















     <!--carousel j query cdn link-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!--jquery cdn link ends here-->


     <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          loop:true,
       
          nav:true,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause: true,
          animateOut: 'slideOutUp',
         animateIn: 'slideInUp',
         dots:false,
        
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      })

      $(document).ready(function(){
        $(".title-text").counterUp({
          delay:10,
          time:1000
        })
      })
 </script>

<script type="text/javascript">
// for bacrhart 
  window.onload = function(){ 
    $(".chartContainer").CanvasJSChart({ 
      title: { 
        text: "PDB unique bohumukhi LTD last 10 year people Rajshahi" 
      }, 
      axisY: { 
        title: "Total People percentage (PDB)  ", 
        suffix: "%", 
        includeZero: false ,
       
      }, 
      axisX:{
          title:"Last 10 Year PDB(NGO) 2010 to 2024 ...",
         
      },
      data: [ 
      { 
        type: "column", 
        toolTipContent: "{label}: {y}%", 
        dataPoints: [ 
          { label: 2010, y: 5.4 }, 
          { label: 2011, y: 6.1 }, 
          { label: 2012, y: 7.2 }, 
          { label: 2013, y: 8.0 }, 
          { label: 2014, y: 9.8 }, 
          { label: 2015, y: 20.9 }, 
          { label: 2016, y: 10.9 }, 
          { label: 2017, y: 22.3 }, 
          { label: 2018, y: 12.7 }, 
          { label: 2019, y: 20.7 }, 
          { label: 2020, y: 21.8 }, 
          { label: 2021, y: 25.2 }, 
         
        ] 
      } 
      ] 
    }); 

  }

  $(document).ready(function(){
       $('.c1').waypoint (function(direction){
         $('.c1').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.c2').waypoint (function(direction){
         $('.c2').addClass('animated rotateInDownLeft')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.c3').waypoint (function(direction){
         $('.c3').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.c4').waypoint (function(direction){
         $('.c4').addClass('animated rotateInDownRight')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.c5').waypoint (function(direction){
         $('.c5').addClass('animated rotateInDownRight')
       },{
         offset:'50%'
       });
  });
  $(document).ready(function(){
       $('.s1').waypoint (function(direction){
         $('.s1').addClass('animated rotateInDownRight')
       },{
         offset:'50%'
       });
  });


  $(document).ready(function(){
       $('.s2').waypoint (function(direction){
         $('.s2').addClass('animated rotateInDownLeft')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.s3').waypoint (function(direction){
         $('.s3').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });
  $(document).ready(function(){
       $('.s4').waypoint (function(direction){
         $('.s4').addClass('animated rotateInDownRight')
       },{
         offset:'50%'
       });
  });
  $(document).ready(function(){
       $('.s5').waypoint (function(direction){
         $('.s5').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });



  $(document).ready(function(){
       $('.s2').waypoint (function(direction){
         $('.s2').addClass('animated rotateInDownRight')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.s1').waypoint (function(direction){
         $('.s1').addClass('animated rotateInDownLeft')
       },{
         offset:'50%'
       });
  });


  $(document).ready(function(){
       $('.ab1').waypoint (function(direction){
         $('.ab1').addClass('animated rotateInDownLeft')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.ab2').waypoint (function(direction){
         $('.ab2').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.s4').waypoint (function(direction){
         $('.s4').addClass('animated fadeInOut')
       },{
         offset:'50%'
       });
  });

  $(document).ready(function(){
       $('.ch').waypoint (function(direction){
         $('.ch').addClass('animated fadeInUp')
       },{
         offset:'50%'
       });
  });
  </script> 
    <!--javascript  -->
    <script type="text/javascript">
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
 

</body>
</html>