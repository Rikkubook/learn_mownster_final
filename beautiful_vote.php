<?php
session_start();
try{
  require_once("connectCD104.php");
  // $memNo = $_SESSION["memNo"];
  // $memImg = $_SESSION["memImg"];
  $firstTitle = $_REQUEST["firstTitle"];
  $firstText = $_REQUEST["firstText"];

  $sql = "insert into showitems(memNo,showItemName,showItemDetail,showItemVote,showItemImg) values(:memNo,:firstTitle,:firstText,:votenumber,:memImg)";
  $vote = $pdo->prepare($sql); 
  $vote->bindValue(':memNo',$_SESSION["memNo"]);
  $vote->bindValue(':firstTitle',$firstTitle);
  $vote->bindValue(':firstText',$firstText);
  $vote->bindValue(':votenumber',0);
  $vote->bindValue(':memImg',$_SESSION["memImg"]);
  $vote->execute();
  // var_dump($memNo);
  // var_dump($memImg);
  var_dump($firstTitle);
  var_dump($firstText);


}catch(PDOException $e){
  echo $e->getMessage();
}
?>