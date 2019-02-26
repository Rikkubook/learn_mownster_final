<?php 
$classRptNo = $_POST["classRptNo"];

try{
  require_once("connectCD104.php");
  $sql = "delete from classreport where classRptNo = :classRptNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classRptNo", $classRptNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_classreport.php');
?>