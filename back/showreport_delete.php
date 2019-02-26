<?php 
$showMsgNo = $_POST["showMsgNo"];
$showRptNo = $_POST["showRptNo"];

try{
  require_once("connectCD104.php");
  $sql = "delete from showreport where showMsgNo = :showMsgNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":showMsgNo", $showMsgNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
?>
<?php 

try{
  require_once("connectCD104.php");
  $sql = "delete from showmessage where showMsgNo = :showMsgNo";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":showMsgNo", $showMsgNo);
  $madmin->execute();
}catch(PDOException $e){
  echo "error";
}
  header('location:back_showreport.php');
?>