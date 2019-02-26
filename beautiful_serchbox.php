<?php
try{
  require_once("connectCD104.php");
  // $sql = "select * from showitems order by(CASE WHEN showItemNo = :serchboxtext THEN 0 ELSE 1 END) ,showItemNo DESC;";
  $sql = "select * from showitems where showItemNo = :serchboxtext;";
  $member = $pdo->prepare($sql); 
  $member->bindValue(":serchboxtext", $_REQUEST["serchboxtext"]);
  $member->execute();
  
  if($member->rowCount()==0){ //not found
  	// echo "未找到符合搜尋的結果";
    echo "not found";
  }else{ //找得到
    //取回資料
    $memRow = $member->fetch();
    //送出json字串
    echo json_encode($memRow);
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>