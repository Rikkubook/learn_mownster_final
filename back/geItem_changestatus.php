<?php 
$geItemNo = $_POST["geItemNo"];
$geItemStatus = $_POST["geItemStatus"];
settype($geItemStatus,"integer");
if($geItemStatus==1){
  $geItemStatus=0;
}else{
  $geItemStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update generalitems set geItemStatus = :geItemStatus where geItemNo = :geItemNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":geItemNo", $geItemNo);
  $madmin->bindValue(":geItemStatus", $geItemStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_items.php');
?>