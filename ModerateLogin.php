<?php
     session_start();
   $email=$password="";
    $connect = mysqli_connect("localhost","root","","NGO");
 
       // echo"<script>alert('conect')</script>";
       
        if(isset($_POST['login'])){
           $email=$_POST['email'];
           $password=$_POST['pass'];

           $sql="SELECT * FROM moderate WHERE email ='$email' AND pass ='$password'";
           $query=mysqli_query($connect,$sql);

           $row = mysqli_fetch_array($query);

           if($row){
               $_SESSION['email'] = $row['email'];
               header('location:ModerateDashboard.php');
           }
           else{
                 echo"<script>alert('failed')</script>";
           }
        }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moderate log in</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Admin.css" /> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

</head>
<body>
   
    
       <div class="topnav">
            <h2 class="admin">Moderate Login</h2>
            <h2 class="NGO">NGO (PDB)</h2>
       </div>

        <div class="container">
            <div class="box">
                <h4 style="text-align: center;padding: 20px;font-family: Arial, Helvetica, sans-serif;background-color: rgb(75, 75, 75);color: white;">Moderate login</h4>
               
                    <div class="row">
                         <div class="col-lg-9">
                             <div class="form">
                                <form action=""method="POST">
                                 
                                    <div> 
                                         <input class="input_userId" type="email"  value="<?php echo $email;  ?>" name="email" placeholder="Email">
                                    </div>
    
                                   
                                    <div>
                                        <input class="input_pass" type="password" name="pass" placeholder=" password">
                                    </div>
                                    <div>
                                       
                                        <button name="login" class="btnz">Login</button>
                                    </div><br>
                                    <a style="font-size:1.2rem;font-weight:bold" href="ModeratePassRec.php">Password Recovery</a>
                             <br>
                             <a href="HomePage.php">home</a>
                             <a href="admin_Login.php">back</a>
                                </div>

                            </form>
                         </div>
                         
                         <div class="col-lg-3 p-4">
                            <div class="logo">
                                <img src="Image/ngo_logo.png" style="width: 100%;height: 100px;border-radius: 50%;" alt="">
                            </div>
                         </div>

                        
                    </div>

                  
                    <div class="copy"style="padding-top: 0px;text-align:center">
                       <span style="color: grey;"> &copy; copy right by NGO(PDB)</span>
                    </div>
              
            </div>
   
        </div>
















      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>