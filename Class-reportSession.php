<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$checkMstext = json_decode($jsonStr); 
//轉為php可讀


try{
  require_once("connectCD104.php");
  $sql ="select * from classmessage where classMsgContent=:classMsgContent";
  $member = $pdo->prepare($sql);
  $member->bindValue(":classMsgContent",$checkMstext);
  $member->execute();

  $memRow = $member->fetchObject();
  $_SESSION["classMsgNo"] = $memRow->classMsgNo;
  $_SESSION["classMsgContent"] = $checkMstext;
  

  //送出被檢舉的編號
//   echo $memRow->showMsgNo;
echo "成功";

}catch(PDOException $e){
    echo "錯誤";
}

?>