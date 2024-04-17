<?php
     $connect = mysqli_connect("localhost","root","","NGO");
     session_start();
     $headline=$crtitle= $Table_title=$taka=$Intereset=$week=$Monthly=$Year="";
   
      $welcome="";
      $user_id = $_SESSION['user_id'];
      if($user_id==true){
         $welcome = "Welcome ";
      }
      else{
          header('location:admin_Login.php');
      }







      if(isset($_POST['add'])){
       
       
        $headline =$_POST['headline'];
      
        $crtitle=$_POST['crtitle'];
        $Table_title=$_POST['Table_title'];
        $taka=$_POST['taka'];
        $Intereset=$_POST['Intereset'];
        $week=$_POST['week'];
        $Monthly=$_POST['Monthly'];
        $Year=$_POST['Year'];
       

       
      
            $sql= "INSERT INTO  services_page (headline,carousle_title,Table_title	,Taka,Interest,weekk,Monthly,yearr) 
            VALUES('$headline','$crtitle','$Table_title','$taka','$Intereset','$week','$Monthly','$Year')";
           
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
         <h1 class="  p-4 text-muted">Services Page </h1>
         <div class="row"style="border:4px solid green;padding:20px; ">
             <div class="col-lg-4">
                <div class="logo">
                    

                     <form action="" method="POST" >
                     
                              

                          
                           <div>
                               <p> Ttile Headline </p>
                               <input type="text" name="headline"><br><br>
                           </div>
                             <div>
                               <p> Carousel Title  </p>
                               <input type="text" name="crtitle"><br><br>
                           </div>
                         
                           <div>
                  <p>Table_title  </p>
                     <input type="text"name="Table_title" ><br><br>
                  </div>
                  <div>
                     <p>Taka </p>
                     <input type="text"name="taka"><br><br>
                 </div>
                
               
                </div> 
             </div>
           
            <div class="col-lg-4">
              

            <div>
                     <p> Interest </p>
                     <input type="text"name="Intereset"><br><br>
                 </div>

                 <div>
                     <p> week  </p>
                     <input type="text"name="week"><br><br>
                 </div>

                 <div>
                     <p> Monthly  </p>
                     <input type="text"name="Monthly"><br><br>
                 </div>

                 <div>
                     <p> Year  </p>
                     <input type="text"name="Year"><br><br>
                 </div>
                         <button name="add" class="btn btn-block bg-dark text-white">Add Data</button>
                        </form>
                
                    </div>
            
               
         </div>
     </div>
<br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="table">
                      <table>
                           <tr>
                         
                            <th>SL.</th>
                            <th>Headline </th>
                            <th>Carousel Title</th>
                            <th>Table Title</th>
                            <th>Taka</th>
                            <th>Interest</th>
                            <th>Week</th>
                            <th>Monthly</th>
                            <th>Year</th>
                            <th>Edit</th>
                            <th>Delete</th>
                           </tr>





                           <?php
                                $select = "SELECT * FROM  services_page";
                                $mysql = mysqli_query($connect,$select);
                                
                                $i=1;
                                while($row= mysqli_fetch_array($mysql)){ ?>
                                
                                <tr>
                                <td><?php  echo  $i ; ?></td>
                                    <td><?php  echo $row['headline'] ; ?></td>
                                    
                                    
                                    <td><?php  echo $row['carousle_title'] ; ?></td>
                                    <td><?php  echo $row['Table_title'] ; ?></td>
                                    <td><?php  echo $row['Taka'] ; ?></td>
                                    <td><?php  echo $row['weekk'] ; ?></td>
                                    <td><?php  echo $row['Taka'] ; ?></td>
                                    <td><?php  echo $row['Monthly'] ; ?></td>
                                    <td><?php  echo $row['yearr'] ; ?></td>


                                    <td><a id="a-href" href="ServicesEdit.php?id=<?php  echo $row['Id'] ;?>"><button class="btn btn-primary text-white">Edit</button></a></td>
                                    <td><a id="a-href" href="servicesPage_delete.php?id=<?php  echo $row['Id'] ;?>"><button class="btn btn-primary text-white">DELETE</button></a></td>
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