<?php
$str = $_POST["str"];
try {
	require_once('connectCD104.php');
	$pdo = new PDO($dsn, $user, $password); 

    $sql = "SELECT * FROM `bot` WHERE botContent LIKE :str and botStatus = 1";
    $botContent = $pdo->prepare( $sql);
    $botContent->bindValue(":str", '%'.$str.'%');
    $botContent->execute();

    if( $botContent->rowCount() == 0){
        echo 0;
    }else{
    	$botRow = $botContent->fetchObject();
    	echo $botRow->botAns;
    }

} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統有異常狀況,請通知維護人員<br>";

}  
?>