<?php 
$jsonStr = $_REQUEST["jsonStr"];
$classInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql1 = "insert into classorderlist(memNo,classDtNo,classOdTime,classOdCount,classOdSum, classOdStatus) values(:memNo,:classDtNo,now(),:classOdCount,:classOdSum, :classOdStatus)";
  $classOrder = $pdo->prepare($sql1);
  $classOrder->bindValue(":memNo", $classInfo->memNo);
  $classOrder->bindValue(":classDtNo", $classInfo->classDtNo);
  $classOrder->bindValue(":classOdCount", $classInfo->classOdCount);
  $classOrder->bindValue(":classOdSum", $classInfo->classOdSum);
  $classOrder->bindValue(":classOdStatus", $classInfo->classOdStatus);
  $classOrder->execute();

  $sql2 = "update classdetails set classDtCount = classDtCount + :classOdCount where classDtNo = :classDtNo";
  $updateClass = $pdo->prepare($sql2);
  $updateClass->bindValue(":classDtNo", $classInfo->classDtNo);
  $updateClass->bindValue(":classOdCount", $classInfo->classOdCount);
  $updateClass->execute();

    echo "success";

}catch(PDOException $e){
  echo $e->getMessage();
}


?>