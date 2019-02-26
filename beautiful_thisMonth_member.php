<?php
session_start();
try{
  require_once("connectCD104.php");
  $sql = "select * from showitems where memNo={$_SESSION["memNo"]};";
  $showItemVote = $pdo->query($sql); 
  // 如果找不到投稿紀錄回傳預設值
  if($showItemVote->rowCount()==0){ //not found
      echo $_SESSION["memName"];
      echo "1w1wfffz";
      echo 0;
      echo "1w1wfffz";
      echo "img/member/member_6.png";


  }else{//如果找得資料，取回資料，送出xml文件
     while($row = $showItemVote->fetchObject()){
      echo $row->showItemName;
      echo "1w1wfffz";
      echo $row->showItemVote;
      echo "1w1wfffz";
      echo $row->showItemImg;
      echo "1w1wfffz";
      echo $row->memNo;

     }
    }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>