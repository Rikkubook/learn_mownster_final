<?php 
$adminId = $_POST["adminId"];
$adminPsw = $_POST["adminPsw"];
$adminName = $_POST["adminName"];
try{
  require_once("connectCD104.php");
  $sql = "insert into madmin (adminId,adminPsw,adminName) values(:adminId,:adminPsw,:adminName)";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":adminId", $adminId);
  $madmin->bindValue(":adminPsw", $adminPsw);
  $madmin->bindValue(":adminName", $adminName);
  $madmin->execute();

  header('location:back_madmin.php');
}catch(PDOException $e){
  echo "error";
}
?>