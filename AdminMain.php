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

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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

.font-color{
  background: linear-gradient(to bottom,#2980b9,#2c3e50);
  -webkit-text-fill-color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
}

.content div{
  padding: 5px 0;
}

.timeDiv{
  position: relative;
}

#time{
  text-shadow: 0 0 55px #2980b9;
  font-size: 4.5rem;
}

#med{
  position:absolute;
  top: 15px;
  right: 0;
}

.dayDiv{
  display: flex;
}

.dayDiv span{
  font-size: 0.9rem;
  opacity: 0.4;
  margin:0 4px;
}
a{
  font-size:0.9rem !important;
}
.fas{
  font-size:0.9rem !important; 
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
        <h6 class="text-white "> Pages</h6>
       <a href="sidebar.php"> <i class="fas p-2 bar fa-home"></i><span id="Text" class="d-none"> Home Page</span></a><br><br>
    
      
       <div class="navbarr">
        
   
        
        
           <div class="dropdown-container">
           <a href="servicesAdminPage.php"> <i class="fas p-2 ml-2 bar fa-info"></i><span id="Text2" class="d-none">Services page &#8711;</span></a>
           <div class="dropdown-content">
           <a href="HelpAdmin.php">Help</a>
           </div>
        </div>
  <br><br><br>
       </div>
        <a href="noticePageAdmin.php"> <i class="fas  p-2  bar fa-briefcase"></i><span id="Text3" class="d-none">Notice </span></a><br><br>

       <a href="GalleryAdmin.php"> <i class="fas p-2  bar fa-images"></i><span id="Text4" class="d-none">Gallery page</span></a><br><br>
       <a href="moderateNotice.php"> <i class="fas p-2  bar fa-briefcase"></i><span id="Text5" class="d-none">Mod notice</span></a><br><br>
       <a href="AllPay.php"> <i class="fas p-2  bar fa-briefcase"></i><span id="Text7" class="">All Pay</span></a><br><br>
       <div class="dropdown-container">
           <a href="servicesAdminPage.php"> <span id="Text2" class="">Report &#8711;</span></a>
           <div class="dropdown-content">
           <a href="DailyReport.php">Daily Report</a>
           <a href="MonthlyReport.php">Monthly Report</a>
          
           </div>
        </div>
      </div>
 
    <br><br><br><br>
    
        
            <div class="row p-0 m-0">
                <div class="col-lg-1"></div>
                <div class="col-lg-3 p-3">
                    
                    <div class="box text-center p-3" >
                    <div class="content">

<div class="timeDiv">

  <span class="font-color" id="time"></span>

  <span class="font-color" id="sec"></span>

  <span class="font-color" id="med"></span>

</div>

<div class="dayDiv">

  <span class="font-color day">SUN</span>

  <span class="font-color day">MON</span>

  <span class="font-color day">TUE</span>

  <span class="font-color day">WED</span>

  <span class="font-color day">THU</span>

  <span class="font-color day">FRI</span>

  <span class="font-color day">SAT</span>

</div>

<span class="font-color" id="full-date"></span>

</div>
    
   </div>   
       </div>
        
                <div class="col-lg-3 p-3">
                
            
                    <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                    <h3 class="box  text-dark"><i class="fa-solid text-warning fa-hands-holding-child"></i> Total Moderators</h3>
                  
                    <?php  
                         $sq="SELECT * FROM moderate";
                         $qu =mysqli_query($connect,$sq);
                         $num= mysqli_num_rows($qu);



                      ?>
                   <span style="font-size:2rem"><?php  echo $num;  ?></span>

                   
                    <button class="btn btn-success"><a href="moderateView.php">View Moderate</a></button>
                     
                    </div>   
                </div>

                    <div class="col-lg-3 p-3">
                
                    <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                    <h3 class="box  text-dark"><i class="fa-solid fa-cart-shopping text-warning"></i> Total Payments</h3>
                  
                    
                    <h4 class="text-dark mt-5"style="font-size:1.7rem">00</h4>
 
                    
                    </div>   
                    </div>

                    <div class="col-lg-2 p-3">
                          
                    <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                    <h3 class="box  text-dark"><i class="fa-solid text-warning fa-hands-holding-child"></i> notification</h3>
                  
                    
                    <i style="font-size:2rem " class=" text-warning ml-2 fa-solid fa-bell"></i>
                    <i style="font-size:2rem " class=" text-warning fa-solid fa-comment-sms"></i>
 
                    
                    </div>  
                        </div>
                        </div>
                        
                    </div>
                    
        </div>
                
            <div class="row p-0 m-0">
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                    <h3 class="box  text-dark"><i class="fa-solid text-warning fa-hands-holding-child"></i> add moderate</h3>
                  
                    
                 
                    <br>
                    <button class="btn btn-success"><a href="moderate.php">Add moderate</a></button>
                    </div> 
                </div>

              <div class="col-lg-3">
                     
              <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                    <h3 class="box  text-dark"> <i style="font-size:2rem " class=" text-warning fa-solid fa-comment-sms"></i> Total message</h3>
                  
                    <?php  
                         $sq="SELECT * FROM contact_page";
                         $qu =mysqli_query($connect,$sq);
                         $num= mysqli_num_rows($qu);



                      ?>
                   <span style="font-size:2rem"><?php  echo $num;  ?></span>

                  <button class="btn btn-success"> <a  href="ContactPageAdmin.php">View massege</a></button>
                
                   
                    
                    </div>   
                  
                
                </div> 
                <div class="col-lg-3">
                     
                     <div class="box  text-center p-3" style="width:90%;height:150px;border-radius:20px;box-shadow:2px 3px 10px black">
                           <h3 class="box  text-dark"> <i style="font-size:2rem " class=" text-warning fa-solid fa-comment-sms"></i> Total Application</h3>
                         
                           <?php  
                                $sq="SELECT * FROM application_user";
                                $qu =mysqli_query($connect,$sq);
                                $num= mysqli_num_rows($qu);
       
       
       
                             ?>
                          <span style="font-size:2rem"><?php  echo $num;  ?></span>
       
                         <button class="btn btn-success"> <a  href="ApplicationPageAdmin.php">View Application</a></button>
                       
                          
                           
                           </div>   
                         
                       
                       </div> 
              </div>
          </div>

          
         
   <br><br><br><br>
        <div class="row p- m-0">
         <div class="col-lg-1"></div>
            <div class="col-lg-11">
                
          <div id="chartContainer" style="height: 470px; width: 100%;"></div>


            </div>
        </div>
       


      <script>
          var icon = document.getElementById("icon");
       
          var sidenavId = document.getElementById('sidenavId');
          var Text = document.getElementById('Text');
          var Text2 = document.getElementById('Text2');
          var Text3 = document.getElementById('Text3');
          var Text4 = document.getElementById('Text4');
          var Text5 = document.getElementById('Text5');
          var Text7 = document.getElementById('Text7');
          icon.addEventListener('click',function () {
            let c  = document.getElementById('cross');
                sidenavId.classList.toggle('sidebarclose')
                sidenavId.classList.toggle('sidebaropen');
                Text.classList.toggle('d-none');
                Text2.classList.toggle('d-none');
                Text3.classList.toggle('d-none');
                Text4.classList.toggle('d-none');
                Text5.classList.toggle('d-none');
                c.classList.toggle('d-block');
                c.classList.toggle('d-none');
                Text7.classList.toggle('d-none');
          })

        
       
             
          window.onload = function () {   
          var options = {
	title: {
		text: "Admin pannel last 10 year account "              
	},
    axisY: { 
        title: "Total People percentage (PDB) increment rate  ", 
        suffix: "%", 
        includeZero: false ,
       
      }, 
      axisX:{
          title:"Last 10 Year PDB(NGO) 2012 to 2021 ...",
         
      },
    
	data: [              
	{
		// Change type to "doughnut", "line", "splineArea", etc.
		type: "column",
		dataPoints: [
			{ label: "january 2012",  y: 800  },
			{ label: "january 2013", y: 1000  },
			{ label: "january 2014", y: 700  },
			{ label: "january 2015",  y: 1100  },
            { label: "january 2016",  y: 900  },
            { label: "january 2017",  y: 1300 },
            { label: "january 2018",  y: 1350},
            { label: "january 2019",  y: 1250},
            { label: "january 2020",  y: 2000  },
			{ label: "january 2021",  y: 3080  }
          
		]
	}
	]
};

$("#chartContainer").CanvasJSChart(options);
}       
       
    

$(document).ready(function () {
  function currentTime() {
    var date = new Date();
    var day = date.getDay();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var month = date.getMonth();
    var currDate = date.getDate();
    var year = date.getFullYear();
    var monthName = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    var showDay = $('.dayDiv span')
    var midDay= "AM"
    midDay = (hour>=12)? "PM":"AM";
    hour = (hour==0)?12:((hour<12)? hour:(hour-12));
    hour = updateTime(hour);
    min = updateTime(min);
    sec = updateTime(sec);
    currDate= updateTime(currDate);
    $("#time").html(`${hour}:${min}`);
    $("#sec").html(`${sec}`);
    $("#med").html(`${midDay}`);
    $("#full-date").html(`${monthName[month]} ${currDate} ${year}`);
    showDay.eq(day).css('opacity','1')
  }
  updateTime = function(x){
    if(x<10){ 
      return "0"+x
    }
    else{
      return x;
    }
  }
  setInterval(currentTime,1000);
});

    
           
        
    
      </script>

      <!--bootstrap cdn ..........-->
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--bootstrap cdn ends ..........-->
</body>
</html>