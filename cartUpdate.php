<?php 
session_start();
$pNo = $_GET["pNo"];
$pSize = $_GET["pSize"];
$pColor = $_GET["pColor"];

for($i=0;$i<count($_SESSION["generalProd"]);$i++){
    if($pNo === $_SESSION["generalProd"][$i][0] && $pSize === $_SESSION["generalProd"][$i][4] && $pColor === $_SESSION["generalProd"][$i][5]){
        unset($_SESSION["generalProd"][$i]);
        break;
    }
}
$tmp_arr = array_values($_SESSION["generalProd"]);
$_SESSION["generalProd"] = $tmp_arr;

if(count($_SESSION["generalProd"]) < 1){
    unset($_SESSION["generalProd"]);
}
header("location:shoppingCart.php");
?>