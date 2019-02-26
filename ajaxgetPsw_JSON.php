<?php 
$jsonStr = $_REQUEST["jsonStr"];
$loginInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql = "select * from member where memId=:memId and memEmail=:memEmail";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $loginInfo->memId);
  $member->bindValue(":memEmail", $loginInfo->memEmail);
  $member->execute();
  if( $member->rowCount() ==0){ //查無
    echo "not found";
  }else{ //成功
    echo "success";
  }
}catch(PDOException $e){
  echo "error";
}
?>