<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"];
$classInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql = "select classDtNo, classDtPrice from classdetails where classDtDate = :classDtDate";
  $getClass = $pdo->prepare($sql);
  $getClass->bindValue(":classDtDate", $classInfo->classDtDate);
  $getClass->execute();

  if( $getClass->rowCount() ==0){ //查無此人
	  echo "not found";
  }else{ //登入成功
    //自資料庫中取回資料
    $getClassRow = $getClass->fetchObject();
    
    $getClassDetail["classDtNo"] = $getClassRow->classDtNo;
    $getClassDetail["classDtPrice"] = $getClassRow->classDtPrice;
    //丟回JSON
    echo json_encode($getClassDetail);
  }
}catch(PDOException $e){
  echo "error";
}
?>