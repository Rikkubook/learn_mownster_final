<?php
try{
  require_once("connectCD104.php");
  $start = $_REQUEST["counter"];
  $sql = "select * from showitems order by showItemNo DESC limit $start,6 ;";
  $menuList = $pdo->prepare($sql); 
  $menuList ->execute();

  $lists = $menuList->fetchAll();
  if($menuList->rowCount()==0){ //not found
  	echo "<center>查無此人</center>";
  }else{//如果找得資料，取回資料，送出xml文件
  foreach( $lists as $listData => $data){
    echo $lists[$listData][0]."=adadd+";
    echo $lists[$listData][2]."=adadd+";
    echo $lists[$listData][3]."=adadd+";
    echo $lists[$listData][4]."=adadd+";
    echo $lists[$listData][5]."=adadd+";
    echo $lists[$listData][1]."=adadd+";

  }
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>