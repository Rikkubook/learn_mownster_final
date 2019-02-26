<?php 
$botNo = $_POST["botNo"];
$botStatus = $_POST["botStatus"];
settype($botStatus,"integer");
if($botStatus==1){
  $botStatus=0;
}else{
  $botStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update bot set botStatus = :botStatus where botNo = :botNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":botNo", $botNo);
  $madmin->bindValue(":botStatus", $botStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_bot.php');
?>