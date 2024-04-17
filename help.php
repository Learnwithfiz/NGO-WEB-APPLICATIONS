<?php

$connect = mysqli_connect("localhost","root","","NGO");




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"  />  
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="services.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
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
                  <a class="dropdown-item" href="#">Moderator</a>
                 
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link "id="Home" href="ContactPage.php">Contact</a>
              </li>
      </ul>
    </div>
  </nav>

 
<!--Navbar ends-->
<br><br><br><br>

        <div class="container">
             <div class="row">
                  <div class="borderdd  p-5 ">
                    <h1 class="text-center  "> <i class="fas iconn fa-question-circle"></i>Help ???</h1>
                   <?php

                          $select = "SELECT * FROM help_page";
                          $query = mysqli_query($connect,$select);
                          $i=1;
                          while($row =mysqli_fetch_array($query)){  ?>



  
                     <h4><?php   echo $row['TITLE']; ?></h4>   <hr>
                    
                              <p><?php   echo $row['TEXTT']; ?></p>
                    <hr>
                     <hr>



                       <?php      $i++;
                          }


                  ?>
                   
                   
                   
                   
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
   <p> &copy; Copyright from NGO(PDB) Unique somobai LTD. latest update2021 </p>
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