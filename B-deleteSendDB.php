<?php 
ob_start();
session_start();

try{
  require_once("connectCD104.php");
  $sql = "delete from showmessage where showMsgNo=:showMsgNo";
  $member = $pdo->prepare($sql);
  $member->bindValue(":showMsgNo",$_SESSION["showMsgNo"]);
  $member->execute();

  echo "成功";

}catch(PDOException $e){
    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
    echo $errMsg;
}

?>