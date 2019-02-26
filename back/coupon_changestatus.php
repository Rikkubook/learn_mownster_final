<?php 
$cpnTypeNo = $_POST["cpnTypeNo"];
$cpnTypeStatus = $_POST["cpnTypeStatus"];
settype($cpnTypeStatus,"integer");
if($cpnTypeStatus==1){
  $cpnTypeStatus=0;
}else{
  $cpnTypeStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update couponType set cpnTypeStatus = :cpnTypeStatus where cpnTypeNo = :cpnTypeNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":cpnTypeNo", $cpnTypeNo);
  $madmin->bindValue(":cpnTypeStatus", $cpnTypeStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_coupon.php');
?>