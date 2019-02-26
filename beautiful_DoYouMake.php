<?php
session_start();
try{
  require_once("connectCD104.php");
  $sql = "select * from showitems where memNo={$_SESSION["memNo"]};";
  $showItemVote = $pdo->query($sql); 
  // 如果找不到投稿紀錄回傳預設值
  if($showItemVote->rowCount()==0){ //not found
    echo "save!";
  
  }else{//如果找得資料，取回資料，送出xml文件
    echo "重複投稿警報～～";
    }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>