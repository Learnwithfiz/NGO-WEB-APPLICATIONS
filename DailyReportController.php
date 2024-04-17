<?php
$connect = mysqli_connect("localhost","root","","NGO");
extract($_GET);
$account_no = $_GET['account_no'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$date = $_GET['date'];
$acc_cond = "";
if($account_no) 
{
    $acc_cond = " AND acc_num =".$account_no; 
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
$dateCond = "";
if($date)
{
    $dateCond="AND a.curren_date = '$date' " ; 
}else{
    $dateCond="";
}
$sql = "SELECT * FROM add_payment a , client b WHERE a.user_id = b.id   $acc_cond $emailcond $phoneCond $dateCond";

$q = mysqli_query($connect,$sql);
$rows = mysqli_fetch_all($q, MYSQLI_ASSOC);
$newDataArr = array();
 foreach($rows as $data)
 {
    if(!isset($newDataArr[$data['user_id']]['payment_poriman']) || ! isset($newDataArr[$data['user_id']]['name']) ||
   ! isset($newDataArr[$data['user_id']]['acc_num']) || ! isset($newDataArr[$data['user_id']]['total_paymnet']) || !isset($newDataArr[$data['user_id']]['curren_date']) || !isset($newDataArr[$data['user_id']]['phone']))
    {
        $newDataArr[$data['user_id']]['payment_poriman'] = 0;
        $newDataArr[$data['user_id']]['name'] ="";
        $newDataArr[$data['user_id']]['acc_num']=0;
        $newDataArr[$data['user_id']]['total_paymnet']=0;
        $newDataArr[$data['user_id']]['curren_date'] = "";
        $newDataArr[$data['user_id']]['phone']="";
    }
    $newDataArr[$data['user_id']]['payment_poriman'] += $data['payment_poriman'];
    $newDataArr[$data['user_id']]['Name'] = $data['Name'];
    $newDataArr[$data['user_id']]['acc_num'] = $data['acc_num'];
    $newDataArr[$data['user_id']]['total_paymnet'] = $data['total_paymnet'];
    $newDataArr[$data['user_id']]['curren_date'] = $data['curren_date'];
    $newDataArr[$data['user_id']]['phone'] = $data['phone'];
 }
//  echo "<pre>";
//  print_r( $newDataArr);


$totalPay=0;
$total=0;
foreach( $newDataArr as $user_id=>$row)
{
    ?>
     <tr>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['acc_num'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['total_paymnet'] ?></td>
        <td><?php echo $row['payment_poriman'] ?></td>
        <td><?php echo $row['total_paymnet']-$row['payment_poriman'] ?></td>
        <td><?php echo $row['curren_date'] ?></td>
     </tr>
      
    <?php

  $totalPay += $row['payment_poriman'];
  $total += $row['total_paymnet']-$row['payment_poriman'] ;
}

?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Sub Total</td>
        <td><?php echo  $totalPay ;?></td>
        <td><?php echo $total ?></td>
        <td></td>
     </tr>
<?php

?>