<?php 
$cpnTypeContent = $_POST["cpnTypeContent"];
$cpnTypeOff = $_POST["cpnTypeOff"];
try{
  require_once("connectCD104.php");
  $sql = "insert into couponType (cpnTypeContent,cpnTypeOff) values(:cpnTypeContent,:cpnTypeOff)";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":cpnTypeContent", $cpnTypeContent);
  $madmin->bindValue(":cpnTypeOff", $cpnTypeOff);
  $madmin->execute();

  header('location:back_coupon.php');
}catch(PDOException $e){
  echo "error";
}
?>