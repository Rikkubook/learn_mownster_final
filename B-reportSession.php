<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$checkMstext = json_decode($jsonStr); 
//轉為php可讀


try{
  require_once("connectCD104.php");
  $sql ="select * from showmessage where showMsgContent=:showMsgContent";
  $member = $pdo->prepare($sql);
  $member->bindValue(":showMsgContent",$checkMstext);
  $member->execute();

  $memRow = $member->fetchObject();
  $_SESSION["showMsgNo"] = $memRow->showMsgNo;
  $_SESSION["showMsgContent"] = $checkMstext;
  

  //送出被檢舉的編號
//   echo $memRow->showMsgNo;
echo "成功";

}catch(PDOException $e){
    echo "錯誤";
}

?>