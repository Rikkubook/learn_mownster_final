<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"];
$loginInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql = "select * from madmin where adminId=:adminId and adminPsw=:adminPsw";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":adminId", $loginInfo->adminId);
  $madmin->bindValue(":adminPsw", $loginInfo->adminPsw);
  $madmin->execute();

  if( $madmin->rowCount() ==0){ //查無此人
	  echo "not found";
  }else{ //登入成功
    echo "success";
    //自資料庫中取回資料
  	$madminRow = $madmin->fetchObject();
  	//寫入session
  	$_SESSION["adminNo"] = $madminRow->adminNo;
  	$_SESSION["adminId"] = $madminRow->adminId;
  	$_SESSION["adminName"] = $madminRow->adminName;
  }
}catch(PDOException $e){
  echo "error";
}
?>