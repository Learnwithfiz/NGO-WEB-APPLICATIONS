<?php
$connect = mysqli_connect("localhost","root","","NGO");


    $name =$_POST['name'];
    $phone=$_POST['phone'];
    $dname=$_POST['dname'];
    $msg=$_POST['msg'];
       
      
            $select ="INSERT into contact_page(Name,phone,District,mess)
            VALUES ('$name','$phone','$dname','$msg')";
            $sql=mysqli_query($connect,$select);
       
            if($sql){
              echo "<script>alert('send success')</script>";
            }
            else{
             echo "<script>alert('send failed')</script>";
            }
      
       //check phone number 
 
   
 
  
?>