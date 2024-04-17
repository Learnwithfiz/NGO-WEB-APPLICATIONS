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

       if(isset($_POST['btn'])){
           $notice=$_POST['notice'];

           $insert= "INSERT INTO notice_page(notice) values('$notice')";
           $sql=mysqli_query($connect,$insert);
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
        table,th,td{
            border:2px solid white;
            text-align:center;
        }
        th{
            color:gray;
            font-size:1.2rem;
            background:#7027A0;
            color:white;
        }
        td{
          
        }
        .table{
            width:1150px;
            height:700px;
            overflow-x:scroll;
            overflow-y:scroll;
        }
        tr:nth-child(even){
             background:#4B3869;  
             color:white;
           
            
        }
        tr:nth-child(odd){
            background:#316B83;  
             color:white;
            
            
        }

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
     <div class="container ">
         <h1 class="  p-4 text-muted">Notice Page </h1>
        
      </div>


           <div class="container">
           <form action="" method="POST">
               <textarea  style="width:70%;resize:none;padding:10px;"
               
               name="notice" id="" placeholder="Write your Notice" ></textarea>
              <br><br>
              <button name="btn"
              style="padding:10px 30px;border-radius:5px;cursor:pointer;background:red;color:white">
              Post</button>
           </form>
           </div>


<br><br><br><br><br>

           <div class="container">
           <div class="table">
                <table style="width:100%">
                    <th >id</th>
                    <th>Your Notice</th>
                    <th>Edit</th>
                    <th>Delete</th>

                      <?php
                         
                          $i=1;
                          $qur="SELECT * FROM  notice_page";
                          $post=mysqli_query($connect,$qur);
                          while($row=mysqli_fetch_array($post)){?>

                          <tr>
                              <td><?php echo $i ;?></td>
                              <td><?php echo $row['Notice'] ; ?></td>

                              <td><a href="editNotice.php?id=<?php echo $row['Id'] ?>"><button class="btn btn-primary">Edit</button></a></td>
                              <td><a href="DeleteNotice.php?id=<?php echo $row['Id'] ?>"><button   onclick="return confirm('Are you sure you want to delete?')"    class="btn btn-danger">Delete</button></a></td>
                       
                       
                            </tr>

                      <?php  $i++;  }

                      ?>
                </table>
            </div>
           </div>
          










      <script>
          var icon = document.getElementById("icon");
       
          var sidenavId = document.getElementById('sidenavId');
          var Text = document.getElementById('Text');
          var Text2 = document.getElementById('Text2');
          var Text3 = document.getElementById('Text3');
          var Text4 = document.getElementById('Text4');
        
          icon.addEventListener('click',function () {
            let c  = document.getElementById('cross');
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