<?php
$connect = mysqli_connect("localhost","root","","NGO");
extract($_GET);
$user_id = $_POST['user_id'];
$payment_poriman = $_POST['payment_poriman'];
$currentDate = date("Y-m-d"); 
 $sql = "INSERT INTO add_payment(user_id,payment_poriman,curren_date) VALUES('$user_id','$payment_poriman','$currentDate')";
 $ex = mysqli_query($connect,$sql);
 if($sql)
 {
    echo "success";
 }else{
    echo "failed";
 }
?>