<?php
$connect = mysqli_connect("localhost","root","","NGO");

extract($_GET);
$id = $_GET['id'];
$sql = "SELECT * FROM client WHERE id = $id";
$rtn = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($rtn);
echo json_encode($data);
?>

