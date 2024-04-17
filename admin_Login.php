<?php
   
   $user_id=$password="";
    $connect = mysqli_connect("localhost","root","","NGO");
   session_start();
       // echo"<script>alert('conect')</script>";
       
        if(isset($_POST['login'])){

            $user_id = test($_POST['user_id']);
            $password = test($_POST['pass']);
            $user_id=mysqli_real_escape_string($connect,$user_id);
            $password=mysqli_real_escape_string($connect,$password);

            $user_id_search = "SELECT * FROM admin WHERE user_id = '$user_id' AND Passwordd = '$password'";
            $query=mysqli_query($connect,$user_id_search);
            $fetch_result = mysqli_fetch_array($query);
             
            if($fetch_result){
                test( $_SESSION['user_id'] = $fetch_result['user_id']);
                header('location:AdminMain.php');
            }
            else{
                echo"<script>alert('user Id or password doesNot match !!! please try Agin')</script>";
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
    <title>Admin login</title>
    <link rel="shortcut icon" href="Image/ngo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Admin.css" /> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

</head>
<body>
   
    
       <div class="topnav">
            
            <h2 class="admin">   Admin Login</h2>
            <h2 class="NGO">NGO (PDB)</h2>
       </div>

        <div class="container">
            <div class="box">
                <h4 style="text-align: center;padding: 20px;font-family: Arial, Helvetica, sans-serif;background-color: rgb(75, 75, 75);color: white;">Admin login</h4>
               
                    <div class="row">
                         <div class="col-lg-9">
                             <div class="form">
                                <form action=""method="POST">
                                 
                                    <div> 
                                         <input class="input_userId" type="text"  value="<?php echo $user_id;  ?>" name="user_id" placeholder=" User Id">
                                    </div>
    
                                   
                                    <div>
                                        <input class="input_pass" type="password" name="pass" placeholder=" password">
                                    </div>
                                    <div>
                                        <br>
                                        <button name="login" class="btnz">Login</button>
                                    </div>
                             </div>

                            </form>
                         </div>
                         
                         <div class="col-lg-3 p-4">
                            <div class="logo">
                                <img src="Image/ngo_logo.png" style="width: 100%;height: 100px;border-radius: 50%;" alt="">
                            </div>
                         </div>

                        
                    </div>
                    <a href="ModerateLogin.php">back</a> 
                    <div class="copy"style="padding-top: 30px;text-align:center">
                 
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