<?php 
$classMsgNo = $_POST["classMsgNo"];
$classRptNo = $_POST["classRptNo"];

try{
  require_once("connectCD104.php");
  $sql = "delete from classreport where classMsgNo = :classMsgNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classMsgNo", $classMsgNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
?>
<?php 

try{
  require_once("connectCD104.php");
  $sql = "delete from classmessage where classMsgNo = :classMsgNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":classMsgNo", $classMsgNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_classreport.php');
?>