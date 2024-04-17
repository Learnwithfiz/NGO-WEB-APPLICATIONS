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





      $title =$text="";

      if(isset($_POST['add'])){
       
       
        $title = $_POST['Title'];
      
        $text = $_POST['Text'];
      
      
       

       
            $sql= "INSERT INTO  help_page (TITLE,TEXTT) VALUES('$title','$text')";
           
            $query = mysqli_query($connect,$sql);

        

        
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
             height:180px;
            
        }
        tr:nth-child(odd){
            background:#316B83;  
             color:white;
             height:180px;
            
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
        
       <a href="servicesAdminPage.php"> <i class="far p-2 ml-2 bar fa-info"></i><span id="Text2" class="d-none">Services page &#8711;</span></a><br><br>
          <div class="subnav">
              <a href="HelpAdmin.php">Help</a>
          </div>


       </div>
       <a href="noticePageAdmin.php"> <i class="fas  p-2  bar fa-briefcase"></i><span id="Text3" class="d-none">Notice </span></a><br><br>

      <a href="GalleryAdmin.php"> <i class="fas p-2  bar fa-images"></i><span id="Text4" class="d-none">Gallery page</span></a><br><br>

   
    </div>
 
    <br><br><br><br>
     <div class="container ">
         <h1 class="  p-4 text-muted">Help Page </h1>
         <div class="row"style="border:4px solid green;padding:20px ">
             <div class="col-lg-4">
               
                    

                     <form action="" method="POST" >
                     
                              

                          
                           <div>
                               <p> Title </p>
                               <input type="text" name="Title"><br><br>
                           </div>
                             <div>
                               <p> Text </p>
                               <input type="text" name="Text"><br><br>
                           </div>
                           <button name="add" class="btn btn-block bg-dark text-white">Add Data</button> 
                     </form>
           </div>
     </div>
<br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="table" >
                      <table width="100%">
                           <tr>
                         

                            
                            <th>Title</th>
                            <th>Text</th>
                            <th>Edit</th>
                            <th>DELETE</th>
                           </tr>





                           <?php
                                $select = "SELECT * FROM help_page";
                                $mysql = mysqli_query($connect,$select);
                                
                                $i=0;
                                while($row= mysqli_fetch_array($mysql)){ ?>
                                
                                <tr>
                                     <td><?php  echo $row['TITLE'] ; ?></td>
                                    <td><?php  echo $row['TEXTT'] ; ?></td>


                                    <td><a id="a-href" href="help_edit.php?id=<?php  echo $row['Id'] ;?>"><button class="btn btn-primary text-white">Edit</button></a></td>
                                    <td><a id="a-href" href="DELETE_HELP_PAGE.php?id=<?php  echo $row['Id'] ;?>"><button class="btn btn-primary text-white">DELETE</button></a></td>
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