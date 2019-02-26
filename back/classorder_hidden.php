<?php 
$classOdNo = $_POST["classOdNo"];
$classOdStatus = 1;

try{
  require_once("connectCD104.php");
  $sql = "update classorderlist set classOdStatus = :classOdStatus where classOdNo = :classOdNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classOdNo", $classOdNo);
  $madmin->bindValue(":classOdStatus", $classOdStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_classorderlist.php');
?>