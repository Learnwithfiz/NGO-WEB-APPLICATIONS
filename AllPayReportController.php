<?php
$connect = mysqli_connect("localhost","root","","NGO");
extract($_GET);
$account_no = $_GET['account_no'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$acc_cond = "";
if($account_no) 
{
    $acc_cond = " AND b.acc_num =".$account_no; 
}else{
    $acc_cond ="";  
}
$emailcond="";
if($email) 
{
    $emailcond = " AND b.nid =".$email; 
}else{
    $emailcond ="";  
}
$phoneCond ="";
if($phone)
{
    $phoneCond = "AND b.phone = ".$phone;
}else{
    $phoneCond="";  
}
$sql = "SELECT * FROM add_payment a , client b WHERE a.user_id= b.id $acc_cond $emailcond $phoneCond";
$q = mysqli_query($connect,$sql);
$totalPay=0;
while($row= mysqli_fetch_array($q))
{
    ?>
     <tr>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['acc_num'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['total_paymnet'] ?></td>
        <td><?php echo $row['payment_poriman'] ?></td>
        <td><?php echo $row['curren_date'] ?></td>
     </tr>
      
    <?php

  $totalPay += $row['payment_poriman'];
}

?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Sub Total</td>
        <td><?php echo  $totalPay ;?></td>
        <td></td>
     </tr>
<?php

?>