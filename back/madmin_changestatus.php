<?php 
$adminNo = $_POST["adminNo"];
$adminStatus = $_POST["adminStatus"];
settype($adminStatus,"integer");
if($adminStatus==1){
  $adminStatus=0;
}else{
  $adminStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update madmin set adminStatus = :adminStatus where adminNo = :adminNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":adminNo", $adminNo);
  $madmin->bindValue(":adminStatus", $adminStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_madmin.php');
?>