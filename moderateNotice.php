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
      
      
       

       
            $sql= "INSERT INTO  admin_notice (TITLE,TEXTT,date) VALUES('$title','$text',now())";
           
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
   
    <br><br><br><br>
     <div class="container ">
        <a href="adminMain.php"><button class="btn btn-primary p-2">back</button></a>
         <h1 class="  p-4 text-muted">Notice  </h1>
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
                           <button name="add" class="btn btn-block bg-dark text-white">Notice</button> 
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
                            <th>date</th>
                            <th>Edit</th>
                            <th>DELETE</th>
                           </tr>





                           <?php
                                $select = "SELECT * FROM admin_notice";
                                $mysql = mysqli_query($connect,$select);
                                
                                $i=0;
                                while($row= mysqli_fetch_array($mysql)){ ?>
                                
                                <tr>
                                     <td><?php  echo $row['TITLE'] ; ?></td>
                                    <td><?php  echo $row['TEXTT'] ; ?></td>
                                    <td><?php  echo $row['date'] ; ?></td>


                                    <td><a id="a-href" href="moderatenoticeEdite.php?id=<?php  echo $row['Id'] ;?>"><button class="btn btn-primary text-white">Edit</button></a></td>
                                    <td><a id="a-href" href="NoticeDelete.php?id=<?php  echo $row['Id'] ;?>"><button onclick="return confirm('are you sure')" class="btn btn-primary text-white">DELETE</button></a></td>
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





















   
      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>