<?php
try{
  require_once("connectCD104.php");
  $sql = "select * from generalitems where geItemNo=:geItemNo";
  $pdoStatment = $pdo->prepare($sql); 
  $pdoStatment->bindValue(":geItemNo", $_REQUEST["geItemNo"]);
  $pdoStatment->execute();
  
  if($pdoStatment->rowCount()==0){ //not found
  	echo "{}";
  }else{ //找得到
    //取回一筆資料
    $memRow = $pdoStatment->fetchObject();

    //送出json字串
    echo json_encode($memRow);
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>