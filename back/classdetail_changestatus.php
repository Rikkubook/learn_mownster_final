<?php 
$classDtNo = $_POST["classDtNo"];
$classDtStatus = $_POST["classDtStatus"];
settype($classDtStatus,"integer");
if($classDtStatus==1){
  $classDtStatus=0;
}else{
  $classDtStatus=1;
}

try{
  require_once("connectCD104.php");
  $sql = "update classdetails set classDtStatus = :classDtStatus where classDtNo = :classDtNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classDtNo", $classDtNo);
  $madmin->bindValue(":classDtStatus", $classDtStatus);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_class.php');
?>