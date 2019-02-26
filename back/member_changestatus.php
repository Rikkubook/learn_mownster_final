<?php 
$memNo = $_POST["memNo"];
$memStatus = $_POST["memStatus"];
settype($memStatus,"integer");
if($memStatus==1){
  $memStatus=0;
}else{
  $memStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update member set memStatus = :memStatus where memNo = :memNo";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memNo", $memNo);
  $member->bindValue(":memStatus", $memStatus);
  $member->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_member.php');
?>