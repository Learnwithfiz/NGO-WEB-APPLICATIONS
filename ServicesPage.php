<?php
$connect = mysqli_connect("localhost","root","","NGO");
$sql = "SELECT * FROM services_page";
$query=mysqli_query($connect,$sql);
$row = mysqli_fetch_array($query);
error_reporting(0);
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
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
<style>
  .service-img{
    background-image: url("Image/com.jpg");
    height: 500px;
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  .serv-opacity{
    height: 500px;
    width: 100%;
    position: absolute;
    background-color: black;
    opacity: 0.8;
  }
  .contact-title{
    margin-top: 13rem;
    color: white !important;
    text-align: center;
    font-family: 'Roboto', sans-serif;
}

.sub-card{
  width:100%;
  height:300px;
  background:white;
  padding:10px;
  position: relative;
  bottom:100px;
  margin:10px;
  box-shadow:3px 4px 10px black;
  text-align:center;
  border-radius:10px;
}
.sub-card:hover{
  background:#161E54;
  color:white;
}
.icc{
   font-size:2.5rem;
   font-weight:bold;
   color:blue;
  
   cursor: pointer;
   padding:10p;
 
   
}
</style>
  
</head>
<body>
    <!-- Navbar starts -->
       
     <div class="service-img">
       <div class="serv-opacity">
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

      <div class="contact-title">
        <h1> Our Services</h1>
      </div>
       </div>
     </div>

     
    <!--Navbar ends-->
   
        <div class="container">
          <div class="row">
          <div class="col-lg-4">
                    <div class="sub-card">
                <div class="sub-img">
                <i class="fas icc fa-praying-hands"></i>
                </div>
                <div class="sub title text-center p-4">
                    <h3>Services</h3>
                </div>
                <div class="sub-text text-justify p-4">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, accusamus. Reiciendis in veritatis cum quisquam odio laudantium explicabo? Nostrum, in.</p>
                </div>
             </div>
              </div>


              <div class="col-lg-4">
                    <div class="sub-card">
                <div class="sub-img">
                <i class="fas  icc fa-shopping-cart"></i>
                </div>
                <div class="sub title text-center p-4">
                    <h3>Our golas</h3>
                </div>
                <div class="sub-text text-justify p-4">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, accusamus. Reiciendis in veritatis cum quisquam odio laudantium explicabo? Nostrum, in.</p>
                </div>
             </div>
              </div>


              <div class="col-lg-4">
                    <div class="sub-card">
                <div class="sub-img">
                <i class="fas icc fa-user-circle"></i>
                </div>
                <div class="sub title text-center p-4">
                    <h3>Peoples</h3>
                </div>
                <div class="sub-text text-justify p-4">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, accusamus. Reiciendis in veritatis cum quisquam odio laudantium explicabo? Nostrum, in.</p>
                </div>
             </div>
              </div>
          </div>
        </div>








    <br><br> <br>  <br> 
    
        <!--services starts -->
        <div class="container"> 
          <marquee width="100%" direction="left"scrollamount="12" height="50px" style="background-color: red;color:white;font-size: 1.4rem;font-weight: bold;">
           <?php
              echo $row['headline'];
           ?>
         </marquee>  
          <div class="owl-carousel owl-theme">
           
         <!-- <?php

            // $select = "SELECT * FROM services_page";
            // $sql = mysqli_query($connect,$select);
            // $i=0;
            // while($result=mysqli_fetch_array($sql)){ // ?>
          
          <div class="item">
                            
                            <div class="bgh">
                               <h1 class=" ff text-white">
                                 //<?php echo $result['carousle_title'];   ?>
/
                               </h1>
                            </div>
            
                            </div>     
                  // <?php  
                    //  $i++;
                    //    }  
                      ?> --> 


            </div>
                 <div class="row  text-center">
                    
                 
                    
                 
           
             
           
               <div class="col-lg-4 p-5" >
                  <div class="cardd">
                    <h4 class="">Rules for registering online.</h4>
                    <img src="Image/index.png" style="width: 50%; height: 200px;padding: 10px;" alt="">
                  </div>
               
               </div>           
                <div class="col-lg-4 p-5">
                  <div class="cardd">
                    <h4 class="">Online payment method Mobile banking</h4>
                  <img src="Image/app.png" style="width: 50%; height: 200px;padding: 10px;" alt="">
                 
                  </div>
               </div> 
               <div class="col-lg-4 p-5">
                <div class="cardd">
                  <h4 class="">Come to the bank and apply</h4>
                  <img src="Image/pay.png" style="width: 50%; height: 200px;padding: 10px;" alt="">
               
                </div>
              </div> 
             </div>
         </div>

         <!--services ends here  -->
             <br><br><br><br>

             <div class="container">
             <h1 class="bg "><?php echo $row['Table_title'];  ?></h1>
                  <br>
                   <div class="row">
                      <div class="col-lg-12">
             <table>
                              <tr>
                               
                                  <th>sl.</th>
                                  <th>  Taka </th>
                                  <th> Interest </th>
                                  <th>Week</th>
                                  <th>Monthly</th>
                                  <th>Year</th>
                              
                              </tr>
          <!--Table starts here -->
              <?php

                $sl = "select * from services_page";
                $qee= mysqli_query($connect,$sl);
                $i=1;
                while($table = mysqli_fetch_array($qee)){  ?>
                
                          

                  

                              
                              <tr>
                                
                              <td><?php echo $i; ?></td>
                                  <td><?php echo $table['Taka']; ?></td>
                                  <td><?php echo $table['Interest'] ?></td>
                                  <td><?php echo $table['weekk'] ?></td>
                                  <td><?php echo $table['Monthly'] ?></td>
                                  <td><?php echo $table['yearr'] ?></td>
                              
                              </tr>
                           

                                  <?php $i++;
                }

              ?>
                            
                           </table>
                      </div>
                   </div>
                </div>
          <div class="div p-5">

          </div>
           <!--Table Ends here -->
         
              
               




             <div class="container ">
                 <div class="box p-5 m-5">
                  <div class="row text-center">
                    <div class="col-lg-4 p-3">
                      <h4 class="p-1 text-primary">HotLine</h4>
                      <h4><i class="fas iconn fa-phone"></i></h4>
                       <h4 class="p-1 text-primary">+880889292839</h4> 
                       <div class="border"></div>

                      </div>
                   
                    <div class="col-lg-4 p-3">
                      
                      <h4 class="p-1 text-primary">Emergency call</h4>
                      <h4><i class="fas iconn fa-h-square"></i></h4>
                      <h4 class="p-1 text-primary">0202093939</h4>
                      <div class="border"></div>
                    </div>
                    <div class="col-lg-4 p-3">
                       
                        <h4 class="p-1 text-primary">Help_Desk</h4>
                        <h4><i class="fas iconn fa-question-circle"></i></h4>
                        <h4 class="p-1 text-primary"><a href="help.php">help</a></h4>
                        <div class="border"></div>
                      </div>
                 </div>
                 </div>
             </div>











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

  <!--carousel j query cdn link-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!--jquery cdn link ends here-->

     <!--bootstrap cdn ..........-->
  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--bootstrap cdn ends ..........-->
 
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
      loop:true,
   
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
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


</script>
</body>
</html>