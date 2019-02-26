<?php
session_start();
    if(isset($_SESSION["memId"])){
        for($i=0;$i<count($_SESSION["generalProd"]);$i++){
            if($_GET["pNo"] === $_SESSION["generalProd"][$i][0] && $_GET["pSize"] === $_SESSION["generalProd"][$i][4] && $_GET["pColor"] === $_SESSION["generalProd"][$i][5] && $_GET["pQuantity"] != $_SESSION["generalProd"][$i][6]){
                $_SESSION["generalProd"][$i][6] = $_GET["pQuantity"];
                break;
            }
        }
        if($i == (count($_SESSION["generalProd"]))){
            $_SESSION["discount"] = $_GET["discount"];
            if($_GET["discountId"] != null){
                $_SESSION["discountId"] = $_GET["discountId"];
            }
            
        }
        echo "success" ;
    }else{
        echo "pleaseLogin";
    }
?>