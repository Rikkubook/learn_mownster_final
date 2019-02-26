<?php
$memNo = $_REQUEST["votId"];
try {
//後端票數+1
  require_once("connectCD104.php");
  $sql = "update showitems set showitemvote= showitemvote + 1 where memNo =$memNo";
  $home_member = $pdo->exec($sql);
//傳到前端  
  $sql2 = "select showitemvote from showitems where memNo =$memNo";
  $home_member2 = $pdo->query($sql2);
  $showitemvote = $home_member2->fetchObject();
  echo $showitemvote->showitemvote;
} catch (PDOException $e) {
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
  echo "錯誤行號 : ", $e->getLine(), "<br>";
}?>