<?php 
session_start();
if(isset($_SESSION["memName"])){ 
  //如果有這筆資料順便更新檔案
  try{
    require_once("connectCD104.php");
    $sql = "update member set  memImg=:memImg,memImgTime=:memImgTime  where memNo=:memNo";

    $member = $pdo->prepare($sql);
    $member->bindValue(":memNo", $_SESSION["memNo"]);
    $member->bindValue(":memImg",$_SESSION["customer"]);
    $member->bindValue(":memImgTime",$_SESSION["time"]);
    $member->execute();

    $_SESSION["memImg"] = $_SESSION["customer"];

  }catch(PDOException $e){
    echo "error";
  }
  
}?>  