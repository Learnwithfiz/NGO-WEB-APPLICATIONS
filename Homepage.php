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
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <title>HomePage</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="Home.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" ></script>
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
   
      
        <div class="bg-image">
          <div class="container">
            <div class="row m-0 p-0">
              <div class="col-lg-6  ">
                <h3 class="Title">Lets go Build a poor free Bnagladesh <span className="hr-style"><hr class="hrr"/></span> </h3>
                <h1 class="TitleText">PDBF  SOLUTIONS</h1>
                <h6 class="Title2">MAKE YOUR Loan ELEGANT & PROFESSIONAL</h6>
                <div class="mt-5 text-left pt-5">
                    <Button class="btn-primary btnnn">OUR SERVICES</Button>
                </div>
             
                  </div>
              <div class="col-lg-6  mt-5 text-center i1" >
                <br><br><br>
                 <img style="width: 100%; height:500px" src="Image/m.png" alt="">
                      
              </div>
          </div>
          </div>
         </div>
     
         
         <div class="container text-center mt-5">
      
          <h4 class="Text">CORE FEATURES</h4>
          <h2 class="Get">GET MORE GOOD EXPERIENCE</h2>

          <p class="P-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestias,<br/> est nisi inventore excepturi quos blanditiis enim quae error earum!
          </p>
        
          <div class="row">
             <div class="col-lg-4">
              <div class="bord">
                <div class="head">
                    <img class="s-img" src="Image/c1.svg"   >
                    <h4 class="Web-text">PDBF</h4>
                </div>
                <p class="pp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="Btn-learn">Learn more</button>
            </div>

             </div>
             <div class="col-lg-4">
              <div class="bord">
                <div class="head">
                    <img class="s-img" src="Image/c3.svg"   >
                    <h4 class="Web-text">Features</h4>
                </div>
                <p class="pp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="Btn-learn">Learn more</button>
            </div>

             </div>
             <div class="col-lg-4">
              <div class="bord">
                <div class="head">
                    <img class="s-img" src="Image/c2.svg"   >
                    <h4 class="Web-text">Advanced</h4>
                </div>
                <p class="pp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="Btn-learn">Learn more</button>
            </div>

             </div>
          </div>
         </div>



     <br><br><br><br><br>
      <div class="bg-blob">
       <div class="container text-center">
        <h5 class="who">Who we are</h5>
        <h2 class="pt-1 text-dark ">Why choose  us</h2>
        <div class="row">
          <div class="col-lg-6 pt-5 text-justify">
            <div class="bg-white1">
              <div class="all">
                  <h4 class="Info-title">
                     Information Technology</h4>
                  <p className="info-text">Many aspect of computing and technology and the term more recognizable than</p>
              </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="bg-white1">
                <div class="all">
                    <h4 class="Info-title">
                       Information Technology</h4>
                    <p className="info-text">Many aspect of computing and technology and the term more recognizable than</p>
                </div>
            </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="bg-white1">
                <div class="all">
                    <h4 class="Info-title">
                       Information Technology</h4>
                    <p className="info-text">Many aspect of computing and technology and the term more recognizable than</p>
                </div>
            </div>
            </div>
          </div>
           </div>
           <div class="col-lg-6">
            <div class="bg-blue">
              <img class="mb-img" src="Image/mb.jpg" >
        </div>
          </div>
        </div>
      
       </div>
      </div>

     <br><br><br><br>
    
        <!--main title-->
            
        <div class="row p-0 m-0">
          <div class="col-lg-1">

          </div>
            <div class="col-lg-3 pt-5">
                <div class="border-rediuss ">
                    <div class="title">
                        <h3> <i class="fas p-2 fa-long-arrow-alt-right"></i> Application For Loan</h3>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="border-redius">
                        <div class="title">
                            <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="border-redius">
                        <div class="title">
                            <h3> <i class="fas fa-money-bill-wave-alt pr-3"></i>Interest is low</h3>
                        </div>
                    </div>
                </div>
                </div>

                
            </div>
            
            <div class="col-lg-1"></div>
            <div class="col-lg-6 text-center pdb">
               <h1 class="text-primary"><i style="color:blue;font-size: 3.3rem;" class="fas fa-user-circle"></i>
                 Polli doridro bimochon(PDBF) Unique Bohumukhi somobai LTD Rajshahi____
               </h1>
            </div>
            <div class="col-lg-1">
            
            </div>
        </div>

         <!--main title-->

       <!--Middle row starts-->
                <div class="top pb-5">
                  <div class="row m-0  p-0 ">


                    <div class="col-lg-1">
                     
                     
                     


                    </div>

                       <div class="col-lg-3 col-md-6 text-justify d2">
                         <h4 class="text-center text-white bg-primary p-2">Payment</h4>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="border-redius">
                                <div class="title">
                                    <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="border-redius">
                                <div class="title">
                                    <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                                </div>
                            </div>
                        </div>
                        </div> <div class="row">
                          <div class="col-lg-12">
                            <div class="border-redius">
                                <div class="title">
                                    <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                                </div>
                            </div>
                        </div>
                        </div> <div class="row">
                          <div class="col-lg-12">
                            <div class="border-redius">
                                <div class="title">
                                    <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                                </div>
                            </div>
                        </div>
                        </div> <div class="row">
                          <div class="col-lg-12">
                            <div class="border-redius">
                                <div class="title">
                                    <h3>  <i  class="fab fa-amazon-pay p-2"></i> at home</h3>
                                </div>
                            </div>
                        </div>
                        </div>




                       </div>
  
                       <div class="col-lg-7 col-md-6   d1">
                          <!--Carousel starts here -->
                   <?php
               
                      $query = "SELECT * FROM homepage";
                      $sql= mysqli_query($connect,$query);
                     
                    
                       $fetch = mysqli_fetch_array($sql);?>
                     <marquee width="100%" direction="left"scrollamount="12" height="50px" style="background-color: red;color:white;font-size: 1.4rem;font-weight: bold;">
                       
                       <?php echo $fetch['headline'] ;  ?>
                       
                      
                      </marquee>

                      
                      





                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" id="c_image" src="Image/MicrosoftTeams-image (19).png" alt="First slide">
                              </div>


                              <?php

                                $query = "SELECT * FROM homepage";
                                $sql= mysqli_query($connect,$query);
                                  $i=0;
                                  while($row=mysqli_fetch_array($sql)){  ?>



                                      <div class="carousel-item">
                                        <img class="d-block w-100"id="c_image" src="upload_image/<?php  echo $row['crImage']  ?>" alt="Second slide">
                                      </div>


                       <?php   $i++;
                          }
                        ?>


                            
                            
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
  
                          <!--Carousel ends here -->
                      </div>
                    <div class="col-lg-1">
                      
                    </div>
                  </div>
  
                </div>

         <!--Middle row ends-->

         <!--left side border starts-->
                   
                <div class="row m-0 p-0 r1">
                    <div class="col-lg-1">

                    </div>

                    <div class="col-lg-3">
                      <h4 class="text-center text-white bg-primary p-2">Application</h4>
                         <div class="position">
                          <div class="border-redius">
                            <div class="title ">
                                <h3> <i class="fal fa-percentage"></i> 500 rupees discount if you pay online</h3>
                            </div>
                        </div>
                         </div> 


                          <div class="row r1">
                              <div class="col-lg-12">
                                <div class="position">
                                  <div class="border-redius">
                                    <div class="title">
                                        <h3> <i class="fas fa-portrait"></i> Our goal is to build a poor free Bangladesh

                                        </h3>
                                    </div>
                                </div>
                                 </div> 
                              </div>
                          </div>

                          <div class="row r1">
                            <div class="col-lg-12">
                              <div class="position">
                                <div class="border-redius">
                                  <div class="title">
                                      <h3> <i class="fas fa-portrait"></i>There are 20+ field workers engaged in your service

                                      </h3>
                                  </div>
                              </div>
                               </div> 
                            </div>
                        </div>

                        <div class="row r1">
                          <div class="col-lg-12">
                            <div class="position">
                              <div class="border-redius">
                                <div class="title">
                                    <h3> <i class="fas fa-highlighter"></i> We live with the highest and lowest loans</h3>
                                </div>
                            </div>
                             </div> 
                          </div>
                      </div>


                      <div class="row r1">
                        <div class="col-lg-12">
                          <div class="position">
                            <div class="border-redius">
                              <div class="title">
                                  <h3> <i class="fas fa-vote-yea"></i>Special discount on the occasion of Mujib year</h3>
                              </div>
                          </div>
                           </div> 
                        </div>
                    </div>


                    <div class="row r1">
                      <div class="col-lg-12">
                        <div class="position">
                          <div class="border-redius">
                            <div class="title">
                                <h3> <i class="fab fa-servicestack"></i> 24 hours service to us</h3>
                            </div>
                        </div>
                         </div> 
                      </div>
                  </div>
                    </div>
                <div class="col-lg-1"></div>
                    <div class="col-lg-6 text-center mt-5 r2">
                          <h4 class="text-primary "style="font-weight:bold "> Welcome to Polli doridro bimochon(PDBF) Unique Bohumukhi somobai LTD Rajshahi____
                            <hr style="border: 2px solid blue;">
                            </h4>
                            <h4 style="color:blue">Our Mission</h4>
                            <p class="text-justify text-danger">Our mission is to build a poor free Bangladesh.
                              Make Bangladesh more beautiful and more familiar to the world.
                              Give us a loan at the lowest interest rate. All the poor and helpless took the opportunity to take a loan. Besides, you can arrange your loan from any part of Bangladesh. Not only this, you can apply for a loan from anywhere in our country. Our staff will confirm your information.</p>
                   
                        <span style=" color:blue;text-align: left;font-size: 1.4rem;  ">Offers:</span>
                            
                          <p class="text-danger text-justify"> You can apply for a loan from anywhere.
                            You don't have to come to the bank to pay anytime,
                            You can send money to our mobile banking service at any time.</p>
                            </div>
                </div>
             
           <!--left side border ends-->
        
              <!--jquery carousel starts -->
                
               <div class="col-top pt-5 pb-5">

                <h1 class="text-center text-primary p-2"style="font-weight: 700;">Some services</h1>
                <div class="row m-0 p-0 ">
                
                  <div class="col-lg-1">

                  </div>
                  <div class="col-lg-10 text-center w1">
                    <div class="owl-carousel owl-theme mt-5">
                   
                     
                     
                         
                      
                     
                      <?php

                                $query = "SELECT * FROM homepage";
                                $sql= mysqli_query($connect,$query);
                                  $i=0;
                                  while($row=mysqli_fetch_array($sql)){  ?>



                                      <div class="item">
                                        <img style="width: 350px; height: 300px;margin: 10px; padding: 10px;"  src="upload_image/<?php  echo $row['sliderImage']  ?>" alt="Second slide">
                                      </div>


                       <?php   $i++;
                          }
                        ?>
                     
                   
                      
                  </div>
                  </div>
                  <div class="col-lg-1"></div>
              </div>
               </div>
             
              <!--jquery carousel ends here-->
              

                <!--some text starts here -->
            
                           <div class="topp p-5 m-5 ">
                            <div class="row p-0 m-0 " >
                           
                              <div class="col-lg-4 e1">
                                  <h4 style="background: red; padding: 5px ;"  class="text-white ">Who can be a client?</h4>
                                   <ul class="ULL">
                                    
                                     <li>Must be a citizen of Bangladesh</li>
                                     <li>Must be above 18 years of age</li>
                                     <li>Must have NID card</li>
                                     <li>Day labor will not be a problem</li>
                                     <li>You can apply even if you do not come directly to the bank</li>
                                     <li>Day based week based monthly can also take year based loan</li>
                                     <li>Interest is minimal</li>
                                     <li>No traitor can be involved</li>
                                     <li style="border: 2px solid blue;">A healthy brain must be perfect</li>
                                   </ul> 
                              </div>
                              <div class="col-lg-4 e2">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/y0Bc2Jtpw7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br>
                                 <br>
                                 <div class="btnn text-center " style="margin: 0 auto;">
                                <a href="https://www.youtube.com/channel/UCItWEIurQ6zkr6nf9ogAlaQ/videos">  <button class="btn  m-auto btn-primary btn-block text-white text-center ">Watch All</button></a>
                                 </div>
                                 <div class="btnn text-center " style="margin: 0 auto; padding-top: 10px;">
                                <a href="https://www.youtube.com/results?search_query=learn+with+fiz">  <button class="btn  m-auto btn-primary btn-block text-white text-center">subscribe</button></a>
                                 </div>
                            
                              </div>
                             <div class="col-lg-4 e3">
                              <h4 style="background: red; padding: 5px ;"  class="text-white ">Who cannot be a client?</h4>
                              <ul class="ULL">
                               
                                <li>If not a Bangladeshi citizen</li>
                                <li>If not above 18 years</li>
                                <li>If not have NID card</li>
                                <li>If not Day labor will not be a problem</li>
                                <li>You can apply even if you do not come directly to the bank</li>
                                <li>Day based week based monthly can also take year based loan</li>
                                <li>Interest is minimal</li>
                                <li>No traitor can be involved</li>
                                <li style="border: 2px solid blue;">If a healthy brain is not perfect</li>
                              </ul> 
                             </div>
                             
                          </div>
                           </div>

                  <!--some text ends  here -->

                   

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
                                     <h2 style="color: white;"> <i  style="color: white;font-size: 2.3rem;" class="far fa-hand-rock"></i> Loan PDBF  </h2><br>
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
                                 <p> &copy; Copyright from NGO(PDBF) Unique somobai LTD. latest update2024 </p>
                            </div>

                     <!--Footer section ends here -->


           <!-- jquery
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
           <!--jquery ends-->
 



     <!--carousel j query cdn link-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!--jquery cdn link ends here-->


     <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          padding:10,
          nav:true,
          autoplay:true,
          autoplayTimeout:1500,
          autoplayHoverPause: true,
          animateOut: 'slideOutUp',
         animateIn: 'slideInUp',
        
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      })
   


      $(document).ready(function(){
        $(".title-text").counterUp({
          delay:10,
          time:1000
        });
      });
    
      $(document).ready(function(){
         $('.i1').waypoint(function(direction){
            
          $('.i1').addClass('animated fadeInUp')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.d1').waypoint(function(direction){
            
          $('.d1').addClass('animated rotateInDownLeft')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.d2').waypoint(function(direction){
            
          $('.d2').addClass('animated fadeInUp')
         },{
           offset:'50%'
         });
      });


      
      $(document).ready(function(){
         $('.r1').waypoint(function(direction){
            
          $('.r1').addClass('animated rotateInDownLeft')
         },{
           offset:'50%'
         });
      });

      
      $(document).ready(function(){
         $('.r2').waypoint(function(direction){
            
          $('.r2').addClass('animated rotateInDownRight')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.w1').waypoint(function(direction){
            
          $('.w1').addClass('animated rotateInDownRight')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.e1').waypoint(function(direction){
            
          $('.e1').addClass('animated rotateInDownRight')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.e2').waypoint(function(direction){
            
          $('.e2').addClass('animated fadeInUp')
         },{
           offset:'50%'
         });
      });

      $(document).ready(function(){
         $('.e3').waypoint(function(direction){
            
          $('.e3').addClass('animated rotateInDownLeft')
         },{
           offset:'50%'
         });
      });
  </script>
        




   
    
  
    <!--vanila javascript  -->
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
 <!--bootstrap cdn ends ..........-->

</body>
</html>

