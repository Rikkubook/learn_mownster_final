<?php 
$classDtName = $_POST["classDtName"];
$classDtDate = $_POST["classDtDate"];
$classDtEnd = $_POST["classDtEnd"];
$classDtPrice = $_POST["classDtPrice"];
try{
  require_once("connectCD104.php");
  $sql = "insert into classdetails (classDtName,classDtDate,classDtEnd,classDtPrice) values(:classDtName,:classDtDate,:classDtEnd,:classDtPrice)";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classDtName", $classDtName);
  $madmin->bindValue(":classDtDate", $classDtDate);
  $madmin->bindValue(":classDtEnd", $classDtEnd);
  $madmin->bindValue(":classDtPrice", $classDtPrice);
  $madmin->execute();

  header('location:back_class.php');
}catch(PDOException $e){
  echo "error";
}
?>