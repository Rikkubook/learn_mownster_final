<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$reportReason = json_decode($jsonStr); 
//轉為php可讀


try{
  require_once("connectCD104.php");
  $sql = "insert into classreport (classMsgNo,classRptContent,classRptWhy) value(:classMsgNo,:classRptContent,:classRptWhy)";
  $classReport = $pdo->prepare($sql);
  $classReport->bindValue(":classMsgNo",$_SESSION["classMsgNo"]);
  $classReport->bindValue(":classRptContent", $_SESSION["classMsgContent"]);
  $classReport->bindValue(":classRptWhy", $reportReason);
  $classReport->execute();

  echo "成功";

}catch(PDOException $e){
    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
    echo $errMsg;
}

?>