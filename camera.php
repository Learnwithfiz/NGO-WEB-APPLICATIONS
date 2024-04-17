












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
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
  .span{
    font-size:1rem;
   
  }
  .boxx{
      box-shadow:3px 4px 10px black;
      height:400px;
      width:90%;
      background:#2C2891;
  }
  #canvas{
      width:100%;
      height:400px;
      box-shadow:3px 4px 10px black;
  }
</style>
</head>
<body>

<div class="title text-center">
        <h1 class="bg-dark p-3 text-white">Web Camera start now </h1>
    </div>
<div class="container mt-5 pt-5">
  
    <div class="row">
        <div class="col-lg-6">
            <div class="boxx">
            <video id="video" width="100%" height="400" autoplay="true" ></video>
   
 
            </div>
            <i class="fas fa-camera-retro"id="takePhoto"style="font-size:3rem;color:#D5D5D5;border-radius:50%;position:relative;top:-30px;left:220px;"></i> 
        </div>
        <div class="col-lg-6">
        <canvas id="canvas"  width="700" height="700" >
       
       </canvas>
        </div>
    </div>
</div>



         
<script>
        var video = document.getElementById("video");
        var webcam = navigator.mediaDevices.getUserMedia();
        var webcam = navigator.mediaDevices.getUserMedia();
        if(webcam){
            navigator.mediaDevices.getUserMedia({
                video:true,
              //  audio:true
            })
            .then(function(Live){
                video.srcObject =Live;

            })
            .catch(function(error){
                console.log("error please try agein");
            })
        } 
        var canvas = document.getElementById("canvas");
        var takePhoto = document.getElementById("takePhoto");
        var context = canvas.getContext('2d');
        takePhoto.addEventListener('click',function(){
            context.drawImage(video,0,0,700,700);
        })
    </script>





<!--javascript ends  -->

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>