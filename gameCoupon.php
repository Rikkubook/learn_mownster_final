<?php
// $couponNo = $_GET["couponNo"];
session_start();
try {
  require_once("connectCD104.php");
  $num = rand(1,5); //5張優惠卷亂數出現
  $sql = "select * from coupontype where cpnTypeNo=".$num;
  $coupon = $pdo->query($sql);
  $cpnTypeContent=$coupon->fetch();
  $couponNo = $cpnTypeContent["cpnTypeNo"];
  echo $cpnTypeContent["cpnTypeContent"];//優惠卷內容傳到前端頁面
  $sql2 = "insert into coupon(memNo,cpnTypeNo,cpnDate)values(:memNo,:cpnTypeNo,:cpnDate)";//後端更新coupon資料表
  $couponNew = $pdo->prepare($sql2);
  $couponNew->bindValue(':memNo',$_SESSION["memNo"]);
  $couponNew->bindValue(':cpnTypeNo',$couponNo);
  $couponNew->bindValue(':cpnDate',date("Y-m-d"));
  $couponNew->execute();
} catch (PDOException $e) {
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
  echo "錯誤行號 : ", $e->getLine(), "<br>";
}?>

