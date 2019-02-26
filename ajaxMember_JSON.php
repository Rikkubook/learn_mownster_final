<?php 
$jsonStr = $_REQUEST["jsonStr"];
$loginInfo = json_decode($jsonStr);
try{
  require_once("connectCD104.php");
  $sql = "update member set memName=:memName,memPsw=:memPsw,memEmail=:memEmail,memTel =:memTel where memNo=:memNo";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memNo", $loginInfo->memNo);
  $member->bindValue(":memName", $loginInfo->memName);
  $member->bindValue(":memPsw", $loginInfo->memPsw);
  $member->bindValue(":memEmail", $loginInfo->memEmail);
  $member->bindValue(":memTel", $loginInfo->memTel);
  $member->execute();
}catch(PDOException $e){
  echo "error";
}
?> <!-- 修改結束 -->
<?php //將修改後的資料存取成新的SESSION
ob_start();
session_start(); 
try{
  require_once("connectCD104.php");
  $sql = "select * from member where memNo=:memNo";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memNo", $loginInfo->memNo);
  $member->execute();
    //自資料庫中取回資料
    $memRow = $member->fetchObject();
    //寫入session
    $_SESSION["memNo"] = $memRow->memNo;
    $_SESSION["memId"] = $memRow->memId;
    $_SESSION["memName"] = $memRow->memName;
    $_SESSION["memEmail"] = $memRow->memEmail;
    $_SESSION["memTel"] = $memRow->memTel;
    $_SESSION["memImg"] = $memRow->memImg;
    $_SESSION["memPsw"] = $memRow->memPsw;
}catch(PDOException $e){
  echo "error";
}
?> <!-- 存取SESSION結束 -->
