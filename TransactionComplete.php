<?php
session_start();
$msg = "";
$errMsg = "";
try {
    require_once("connectCD104.php");

    $pdo->beginTransaction();
    
    if(isset($_SESSION["cardInformation"])){
        $sql = "insert into generalorderlist(memNo,geOdListType,geOdListCardNum,geOdListCardDMonth,geOdListCardDYear,geOdListCardSafeCode,geOdListOPName,geOdListOPPhone,geOdListOPAddress,geOdListRPName,geOdListRPPhone,geOdListRPAddress,geOdListTime,geOdListSum,geOdListStatus,geOdlistPay) values(:orderMemNo,:geOdListType,:geOdListCardNum,:geOdListCardDMonth,:geOdListCardDYear,:geOdListCardSafeCode,:geOdListOPName,:geOdListOPPhone,:geOdListOPAddress,:geOdListRPName,:geOdListRPPhone,:geOdListRPAddress, now(), :geOdListSum, '0','1')";
        $orderlist = $pdo->prepare($sql);
        
        $orderlist->bindValue(":geOdListCardNum", ($_SESSION["cardInformation"][0].'-'.$_SESSION["cardInformation"][1].'-'.$_SESSION["cardInformation"][2].'-'.$_SESSION["cardInformation"][3]));
        $orderlist->bindValue(":geOdListCardDMonth", (int)($_SESSION["cardInformation"][4]));
        $orderlist->bindValue(":geOdListCardDYear", (int)($_SESSION["cardInformation"][5]));
        $orderlist->bindValue(":geOdListCardSafeCode", (int)($_SESSION["cardInformation"][6]));
    }else{
        $sql = "insert into generalorderlist(memNo,geOdListType,geOdListOPName,geOdListOPPhone,geOdListOPAddress,geOdListRPName,geOdListRPPhone,geOdListRPAddress,geOdListTime,geOdListSum,geOdListStatus,geOdlistPay) values(:orderMemNo,:geOdListType,:geOdListOPName,:geOdListOPPhone,:geOdListOPAddress,:geOdListRPName,:geOdListRPPhone,:geOdListRPAddress, now(), :geOdListSum, '0','0')";
        $orderlist = $pdo->prepare($sql);
    }
    
    $orderlist->bindValue(":orderMemNo", $_SESSION["memNo"]);
    $orderlist->bindValue(":geOdListType", (int)($_SESSION["orderInformation"][1]));
    $orderlist->bindValue(":geOdListOPName", $_SESSION["orderInformation"][2]);
    $orderlist->bindValue(":geOdListOPPhone", (int)($_SESSION["orderInformation"][3]));
    $orderlist->bindValue(":geOdListOPAddress", $_SESSION["orderInformation"][4]);
    $orderlist->bindValue(":geOdListRPName", $_SESSION["orderInformation"][5]);
    $orderlist->bindValue(":geOdListRPPhone", (int)($_SESSION["orderInformation"][6]));
    $orderlist->bindValue(":geOdListRPAddress", $_SESSION["orderInformation"][7]);
    $orderlist->bindValue(":geOdListSum", (int)($_SESSION["orderInformation"][0]));

    $orderlist->execute();
    //取得訂單編號
    $orderNo = $pdo->lastInsertId();
 
    $sql = "insert into generalorderdetails values( :geOdListNo, :pNo, :pImage, :pColor ,:pSize, :pQuantity, :pPrice);";
    $orderitems = $pdo->prepare( $sql );
    for($i=0; $i<count($_SESSION["generalProd"]); $i++){
        $orderitems->bindValue(":geOdListNo", $orderNo);
        $orderitems->bindValue(":pNo", (int)($_SESSION["generalProd"][$i][0]));
        $orderitems->bindValue(":pImage", $_SESSION["generalProd"][$i][1]);
        $orderitems->bindValue(":pColor", $_SESSION["generalProd"][$i][5]);
        $orderitems->bindValue(":pSize", $_SESSION["generalProd"][$i][4]); 
        $orderitems->bindValue(":pQuantity", (int)($_SESSION["generalProd"][$i][6]));
        $orderitems->bindValue(":pPrice", ($_SESSION["generalProd"][$i][6] * (int)($_SESSION["generalProd"][$i][3])));
        
        $orderitems->execute();
    }

    
    $sql = "select * from generalorderlist where geOdListNo = :geOdListNo";
    $orderlist = $pdo->prepare( $sql );
    $orderlist->bindValue(":geOdListNo", $orderNo);
    $orderlist->execute();
    $row = $orderlist->fetchObject();

    $html = "";
    $html .= '<div class="v-c bg-white w-90p w-lg-50p w-xl-40p z-10 p-30 bdrs-10">';
    $html .= '<h5 class="ta-c mb-0">訂單已成立</h5>';
    $html .= '<p class="line pt-10">訂單編號：'.$row->geOdListNo.'</p>';
    $html .= '<p>訂單成立時間：'.$row->geOdListTime.'</p>';
    if($row->geOdListPay == "0"){
        $html .= '<p>訂單狀態：未付款</p>';
    }else{
        $html .= '<p>訂單狀態：已付款</p>';
    }
    $html .= '<div class="ta-c mt-20">';
    $html .= '<button class="btn-main-sm" id="close">關閉</button>';
    $html .= '</div>';
    $html .= '</div>';

    echo $html;

    if(isset($_SESSION["discountId"])){
    $sql = "delete from coupon where coupon.cpnNo = :cpnNo";
    $deletecoupon = $pdo->prepare( $sql );
    $deletecoupon->bindValue(":cpnNo", $_SESSION["discountId"]);
    $deletecoupon->execute();
    }

    $pdo->commit(); 

    if(isset($_SESSION["cardInformation"])){
        unset($_SESSION["cardInformation"]);
    }
    unset($_SESSION["orderInformation"]);
    unset($_SESSION["generalProd"]);
    if(isset($_SESSION["discount"])){
        unset($_SESSION["discount"]);
    }
    if(isset($_SESSION["discountId"])){
        unset($_SESSION["discountId"]);
    }
    
    

} catch (PDOException $e) {
    $pdo->rollBack();
    $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
    $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";	
    echo $errMsg;
} 
?>