<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$reportReason = json_decode($jsonStr); 
//轉為php可讀

switch ($reportReason) { 
    case 1: 
        $message='仇恨言語';
        break; 
    case 2: 
        $message='色情內容';
        break; 
    case 3: 
        $message='外部廣告';
        break; 
    default:
        $message='系統錯誤';
} ;

$showRptNo = null;

try{
  require_once("connectCD104.php");
  $sql = "insert into showreport value(:showRptNo,:showMsgNo,:showRptContent,:showRptWhy)";
  $member = $pdo->prepare($sql);
  $member->bindValue(":showRptNo",$showRptNo);
  $member->bindValue(":showMsgNo",$_SESSION["showMsgNo"]);
  $member->bindValue(":showRptContent", $_SESSION["showMsgContent"]);
  $member->bindValue(":showRptWhy", $message);
  $member->execute();

  echo "成功";

}catch(PDOException $e){
    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
    echo $errMsg;
}

?>