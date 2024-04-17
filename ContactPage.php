<?php
$connect = mysqli_connect("localhost","root","","NGO");

//  function test($data){
//   $data = trim($data);
//   $data = htmlspecialchars($data);
//   $data= stripcslashes($data);
   
//   return $data;
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        .bg-image{
    background-image: url("Image/com.jpg");
    height: 500px;
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
   
}
.opacity-img{
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
.banner-title{
    text-align: center;
    font-size: 2rem;
   
    font-weight: bold;
}
.icc{
    padding: 10px ;
    color: red;
    font-size: 1.1rem;
    font-weight: 700;
}
.con{
    padding: 10px;
    font-size: 1.3rem;
    font-weight: 500;
    
}
.main-foo{
    margin-right: 40px;
    color: gray;
    font-size: 1.4rem;
    font-weight: 700;
    border:1px solid green;
    padding:7px;
    border-radius:50%;
    cursor: pointer;
    
}
.main-foott{
    margin-right: 40px;
    color: white;
    font-size: 1.4rem;
    font-weight: 700;
    border:1px solid green;
    padding:7px;
    border-radius:50%;
    cursor: pointer;
    background:red;
}
    </style>
</head>
<body>
     <!-- Navbar starts -->
       <div class="bg-image">
          <div class="opacity-img">
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
            <div class="contact-title">
            <h1 >Our Contact</h1>
            </div>
          </div>
    
       </div>
    <br><br><br><br><br>
      
         <div class="banner-title">
         <h1>Corporate Headquaters</h1>
         </div> <br> <br> <br> <br>
      
        <div class="row p-0 m-0">
            <div class="col-lg-1">

            </div>

            <div class="col-lg-5">
               <p> <i class="fas icc fa-map-marker-alt"></i>  <span class="con">
               House #4083/3 , Road #sagorpara ,DOSH,
                              Rajshahi
               </span> 
               </p> <br> <br>
               
               <p>  <i class="fas icc fa-envelope"></i><span class="con">  Ngo@gmail.com.bz</span></p> <br> <br>
               <p> <i class="fas icc fa-phone-alt"></i> <span class="con"> +88018717827278</span></p> <br> <br>
           
             <div class="foot-logo">
             <i class="fab main-foott fa-facebook"></i>

             <i class="fab main-foo fa-twitter"></i>

             <i class="fab main-foo fa-instagram"></i>

             <i class="fab main-foo fa-youtube"></i>
             </div>
           
            </div>

            <div class="col-lg-5">
                
                <h2 class="text-center">Feel Free to Send Us Message</h2>
                
          
                

                         <div class="row">
                         <div class="col-lg-6">
                            <input id="name" type="text"style="width:100%" required   name="name" placeholder="Your Name ">
                         </div>
                         <br><br><br>
                        <div class="col-lg-6">
                        <input id="phone" type="text"style="width:100%" required  maxlength="11" name="phone" placeholder="Your phone number ">      
                        </div>
                        </div>
                       <br>
                       <div class="row">
                       <div class="col-lg-12">
                        <input id="dname" type="text" style="width:100%" required name="dname" placeholder="Your District Name ">       
                        <br><br><br>
                    </div>
                       
                        <div class="col-lg-12">
                       
                            <textarea id="msg" style="width:100%;margin-left:10px;padding:10px;
                            resize:none;border:1px solid blue;border-radius:5px" required name="msg" id="" cols="10" rows="5" placeholder="write your massege"></textarea>
                    </div>
                   
                           <div class="btn" style="
                             text-align:center;
                             margin:0 auto;
                           ">
                               <button onclick="Send()" name="send" style="
                             text-align:center;
                             padding:10px 50px;
                             margin-top:30px;
                             background:#091353;
                             color:white;
                             border-radius:5px;
                             box-shadow:3px 3px 5px gray;
                             cursor:pointer;
                           " >Send</button>
                           </div>
                         
                       </div>
                    
            

            </div>

            <div class="col-lg-1">

            </div>
        </div>

             
        <br><br><br><br><br>


        <h1 class="text-center">Location Map</h1>

        <br><br><br><br><br>
               <div class="row p-0 m-0">
                   <div class="col-lg-1">

                   </div>
                   <div class="col-lg-10">
                   <iframe style="
                    border:3px solid gray;
                    border-radius:10px;
                    box-shadow:3px 3px 10px black;
                   " src="https://www.google.com/maps/d/embed?mid=1S5JxMryEPrASaDwjGZcr3h_zhW0" width="100%" height="480"></iframe>
                   </div>
                   <div class="col-lg-1">

                   </div>
              
           </div>



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
   <p> &copy; Copyright from NGO(PDBF) Unique somobai LTD. latest update2024 </p>
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

     <script src="ContactPageIndex.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>