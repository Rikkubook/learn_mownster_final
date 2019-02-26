
<?php
ob_start();
session_start();


$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$counternum = json_decode($jsonStr); 
//轉為php可讀


try{
  require_once("connectCD104.php");
    $sql = "select * from showmessage order by showMsgNo desc limit $counternum,4";
    $pdoStatement = $pdo->prepare($sql);
    // $pdoStatement->bindValue(":counternum",$counternum);
    $pdoStatement->execute();
    // echo ":counternum";

  if(isset($_SESSION["memName"])){
    while($row = $pdoStatement->fetch()){
        echo $row["showMsgName"]."+split";
        echo $row["showMsgContent"]."+split";
        echo $row["showMsgDate"]."+split";
        echo $row["memImg"]."+split";
    }
    echo $_SESSION["memName"];
  }else{
    while($row = $pdoStatement->fetch()){
      echo $row["showMsgName"]."+split";
      echo $row["showMsgContent"]."+split";
      echo $row["showMsgDate"]."+split";
      echo $row["memImg"]."+split";
    }
  }
  
}catch(PDOException $e){
  echo "系統錯誤";
}
?>
