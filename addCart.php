<?php 
session_start();
if(isset($_SESSION["generalProd"])=== false){
    $_SESSION["generalProd"][] = [$_GET["pNo"],$_GET["pImage"],$_GET["pName"],$_GET["pPrice"],$_GET["pSize"],$_GET["pColor"],$_GET["pQuantity"]];
}else{
    $newStr = $_GET["pNo"] . $_GET["pSize"] . $_GET["pColor"];
    for($i=0;$i<count($_SESSION["generalProd"]);$i++){
        $strArr[] = $_SESSION["generalProd"][$i][0] . $_SESSION["generalProd"][$i][4] . $_SESSION["generalProd"][$i][5];
    }
    if(in_array($newStr,$strArr)){
        echo count($_SESSION["generalProd"]);
        exit();
    }else{
        $_SESSION["generalProd"][] = [$_GET["pNo"],$_GET["pImage"],$_GET["pName"],$_GET["pPrice"],$_GET["pSize"],$_GET["pColor"],$_GET["pQuantity"]];
        
    }
}

echo count($_SESSION["generalProd"]);

?>