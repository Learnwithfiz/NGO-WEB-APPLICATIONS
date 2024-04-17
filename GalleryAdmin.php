<?php
     $connect = mysqli_connect("localhost","root","","NGO");
     session_start();
    
      $welcome="";
      $user_id = $_SESSION['user_id'];
      if($user_id==true){
         $welcome = "Welcome ";
      }
      else{
          header('location:admin_Login.php');
      }







      if(isset($_POST['submit'])){
       
         $image= $_FILES['Image']['name'];
         $path = $_FILES['Image']['tmp_name'];

        $upload=  move_uploaded_file($path,'upload_image/'.$image);
        if($upload){
            $insert = "INSERT INTO gallerypage (Image_Name) VALUES('$image')";
            $query=mysqli_query($connect,$insert);

            if($query){
               echo " <script> alert('success image upload')</script>";
            }
            else{
                echo " <script> alert('failed')</script>"; 
            }
        }
       
        }
    

 

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    
    <link rel="stylesheet" href="stylesSide.css">
    <style>
       
        .navbarr{
            position: relative;

         }
.subnav a{
      display: block;
      font-size:1.5rem;
      position: absolute;
      display:none;
      left:100px;
      top:50px;
      padding: 0px;
}
.navbarr:hover .subnav a{
    display: block;
}
.dropdown-container{
    position: relative;
    display: inline;
}
.dropdown-content{
    position:absolute;
    top:16px;
    left:20px;
    display:none;

}
.dropdown-content a{
    display:block;
}
.dropdown-container:hover .dropdown-content{
    display:block;
}
.file{
    width: 200px;
}

table,th,td{
    border:2px solid green;
    border-collapse:collpase;
    background:gray;
    color:white;
}
button{
    background:red;
    padding:10px 30px;
    color:white;
    box-shadow:2px 3px 4px black;
}
.table{
    width:100%;
    height:400px;
    overflow-y:scroll;
}
    </style>
</head>
<body>
    <div class="top fixed-top ">
       <a id="icon" href="#"> <i class="fas p-2 bar fa-bars"></i></a>

      
        <span style="text-align:center;color:white;font-size:2.3rem">  Admin Dashboard</span>
        <span style="float:right ;color:white;font-size:1.5rem;padding:10px">
        <?php  echo    $welcome.$user_id  ?>
            <a href="logout.php"><button class="btn btn-primary p-2">logout</button></a>
          

        </span>
       
    </div>  
    <div id="sidenavId" class="sidebarclose" >
     
      
        <br><br><br><br>
        <a href="AdminMain.php">  <i class="fas fa-undo bar ml-3 pt-5"></i><br><br></a>
        <h2 class="text-white "> Pages</h2>
       <a href="sidebar.php"> <i class="fas p-2 bar fa-home"></i><span id="Text" class="d-none"> Home Page</span></a><br><br>
    
      
       <div class="navbarr">
        
   
        
        
           <div class="dropdown-container">
           <a href="servicesAdminPage.php"> <i class="far p-2 ml-2 bar fa-info"></i><span id="Text2" class="d-none">Services page &#8711;</span></a>
           <div class="dropdown-content">
           <a href="HelpAdmin.php">Help</a>
           </div>
        </div>
      <br><br><br>
       </div>
        <a href="noticePageAdmin.php"> <i class="fas  p-2  bar fa-briefcase"></i><span id="Text3" class="d-none">Notice </span></a><br><br>

       <a href="GalleryAdmin.php"> <i class="fas p-2  bar fa-images"></i><span id="Text4" class="d-none">Gallery page</span></a><br><br>
   
   
    </div>
 
    <br><br><br><br>
     

            
          <div class="container">
          <button class="btn btn-primry p-2">Add Image</button>
              <div class="row">
                  <h1>Gallery Page </h1>
                
                  <div class="col-lg-2">
                
                  </div>

                  <br><br><br><br>
                  <br><br><br><br>
                  <div class="col-lg-8">
                      <form method="POST" enctype="multipart/form-data" action="">
                           <input  type="file" name="Image">
                           <input class="btn btn-success" type="submit" value="submit" name="submit"> 
                      </form>  
                 </div>
                  <div class="col-lg-2">
                      
                      </div>
              </div>
          </div>

<br><br><br><br><br>


          <div class="container">
          <div  class="row p-0  m-0">
               <div class="table">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-10">
                    <table style="width:100%">
                      <th>Img Sl</th>
                      <th>Image</th>
                  

                      <th>Delete </th>
                        
                       <?php

                            $select ="SELECT * FROM  gallerypage";
                            $query = mysqli_query($connect,$select);
                            $i=1;
                            while($row = mysqli_fetch_array($query)){?>
                             
                             <tr>

                             <td><?php  echo $i; ?></td>
                                 <td>
                                 
                             <img style="width:100%;height:100px" 
                                               src="upload_image/<?php  echo $row['Image_Name'] ; ?>" alt="">
                                             
                             </td>

                       
                             <td><a href="GalleryDelete.php?id=<?php echo $row['Id'] ; ?>"><button   onclick="return confirm('Are you sure you want to delete?')">Delete</button></a></td>
                            
                            </tr>
                                     
                                     <?php
                                        $i++;
                                              }
                                        ?>
                       


                   </table>
                    </div>
               </div>  
          </div>

          </div>



    <br><br><br><br>
      <script>
          var icon = document.getElementById("icon");
       
          var sidenavId = document.getElementById('sidenavId');
          var Text = document.getElementById('Text');
          var Text2 = document.getElementById('Text2');
          var Text3 = document.getElementById('Text3');
          var Text4 = document.getElementById('Text4');
        
          icon.addEventListener('click',function () {
         
                sidenavId.classList.toggle('sidebarclose')
                sidenavId.classList.toggle('sidebaropen');
                Text.classList.toggle('d-none');
                Text2.classList.toggle('d-none');
                Text3.classList.toggle('d-none');
                Text4.classList.toggle('d-none');
                c.classList.toggle('d-block');
                c.classList.toggle('d-none');
                
          })

        
       
             
           
      
           
        
    
      </script>

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>