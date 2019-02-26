<?php 
$botContent = $_POST["botContent"];
$botAns = $_POST["botAns"];
try{
  require_once("connectCD104.php");
  $sql = "insert into bot (botContent,botAns) values(:botContent,:botAns)";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":botContent", $botContent);
  $madmin->bindValue(":botAns", $botAns);
  $madmin->execute();

  header('location:back_bot.php');
}catch(PDOException $e){
  echo "error";
}
?>