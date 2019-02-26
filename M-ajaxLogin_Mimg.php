<?php 
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"];
$loginInfo = json_decode($jsonStr);

try{
  require_once("connectCD104.php");
  $sql = "select * from member where memId=:memId and memPsw=:memPsw";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $loginInfo->memId);
  $member->bindValue(":memPsw", $loginInfo->memPsw);
  $member->execute();

  if( $member->rowCount() ==0){ //查無此人
	  echo "not found";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $member->fetchObject();
    if($memRow->memStatus==1){
    echo "stop";
    //被停權
    }else{
    echo $memRow->memNo;
    //寫入session
  	$_SESSION["memNo"] = $memRow->memNo;
  	$_SESSION["memId"] = $memRow->memId;
  	$_SESSION["memName"] = $memRow->memName;
  	$_SESSION["memEmail"] = $memRow->memEmail;
    $_SESSION["memTel"] = $memRow->memTel;
    $_SESSION["memImg"] = $memRow->memImg;
    $_SESSION["memPsw"] = $memRow->memPsw;
  }
}
}catch(PDOException $e){
  echo "error";
}


if(isset($_SESSION["customer"])){ 
//如果有這筆資料順便更新檔案
  try{
    require_once("connectCD104.php");
    $sql = "update member set  memImg=:memImg,memImgTime=:memImgTime where memId=:memId and memPsw=:memPsw";

    $member = $pdo->prepare($sql);
    $member->bindValue(":memId", $loginInfo->memId);
    $member->bindValue(":memPsw", $loginInfo->memPsw);
    $member->bindValue(":memImg",$_SESSION["customer"]);
    $member->bindValue(":memImgTime",$_SESSION["time"]);
    $member->execute();

    $_SESSION["memImg"] = $_SESSION["customer"];

  }catch(PDOException $e){
    echo "error";
  }
}
?>