<?php 
$showRptNo = $_POST["showRptNo"];

try{
  require_once("connectCD104.php");
  $sql = "delete from showreport where showRptNo = :showRptNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":showRptNo", $showRptNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_showreport.php');
?>