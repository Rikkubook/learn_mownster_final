
<?php
session_start();
$jsonStr = $_REQUEST["jsonStr"]; 
//接字串
$msgInfo = json_decode($jsonStr); 
//轉為php可讀

$counternum = $msgInfo->counternum;

try{
  require_once("connectCD104.php");
    $sql = "select * from classmessage where classType = :classType order by classMsgNo desc limit $counternum, 4";
    $classMsg = $pdo->prepare($sql);
    $classMsg->bindValue(":classType", $msgInfo->classType);
    $classMsg->execute();

    if(($msgInfo->classType) == 0){
        // 有登入會員的情況
        if( isset($_SESSION["memName"]) ){
    
            while($row = $classMsg->fetch()){
                echo $row["classMsgImg"]."+split";
                echo $row["classMsgName"]."+split";
                echo $row["classMsgContent"]."+split";
                echo $row["classMsgDate"]."+split";
                echo $row["memImg"]."+split";
                
            }
            echo $_SESSION["memName"];
        }else{
            while($row = $classMsg->fetch()){
                echo $row["classMsgImg"]."+split";
                echo $row["classMsgName"]."+split";
                echo $row["classMsgContent"]."+split";
                echo $row["classMsgDate"]."+split";
                echo $row["memImg"]."+split";
            }
        } 
    }else{
        // 有登入會員的情況
        if( isset($_SESSION["memName"]) ){
    
            while($row = $classMsg->fetch()){
                echo $row["classMsgImg"]."+split";
                echo $row["classMsgName"]."+split";
                echo $row["classMsgContent"]."+split";
                echo $row["classMsgDate"]."+split";
                echo $row["memImg"]."+split";
                
            }
            echo $_SESSION["memName"];
        }else{
            while($row = $classMsg->fetch()){
                echo $row["classMsgImg"]."+split";
                echo $row["classMsgName"]."+split";
                echo $row["classMsgContent"]."+split";
                echo $row["classMsgDate"]."+split";
                echo $row["memImg"]."+split";
            }
        } 
    }

  
}catch(PDOException $e){
  echo "系統錯誤";
}
?>
