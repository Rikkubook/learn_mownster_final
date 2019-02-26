<?php 
$botNo = $_POST["botNo"];
$botTag = $_POST["botTag"];
settype($botTag,"integer");
if($botTag==1){
  $botTag=0;
}else{
  $botTag=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update bot set botTag = :botTag where botNo = :botNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":botNo", $botNo);
  $madmin->bindValue(":botTag", $botTag);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_bot.php');
?>