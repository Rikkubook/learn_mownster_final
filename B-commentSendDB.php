<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$textareaInfo = json_decode($jsonStr); 
//轉為php可讀

$showMsgNo = null;
$date=date("Y-m-d",time());

try{
  require_once("connectCD104.php");
  $sql = "insert into showmessage value(:showMsgNo,:memNo,:showMsgName,:showMsgContent,:showMsgDate,:memImg)";
  $member = $pdo->prepare($sql);
  $member->bindValue(":showMsgNo",$showMsgNo);
  $member->bindValue(":memNo", $_SESSION["memNo"]);
  $member->bindValue(":showMsgName", $_SESSION["memName"]);
  $member->bindValue(":showMsgContent", $textareaInfo);
  $member->bindValue(":showMsgDate", $date);
  $member->bindValue(":memImg", $_SESSION["memImg"]);
  $member->execute();
  echo "成功";

}catch(PDOException $e){
    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
    echo $errMsg;
}

?>
