<?php 
$jsonStr = $_REQUEST["jsonStr"];
$loginInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql = "insert into member (memName,memId,memPsw,memEmail,memTel) values(:memName,:memId,:memPsw,:memEmail,:memTel)";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memName", $loginInfo->memName);
  $member->bindValue(":memId", $loginInfo->memId);
  $member->bindValue(":memPsw", $loginInfo->memPsw);
  $member->bindValue(":memEmail", $loginInfo->memEmail);
  $member->bindValue(":memTel", $loginInfo->memTel);
  $member->execute();
}catch(PDOException $e){
  echo "error";
}
?>