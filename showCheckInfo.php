<?php
ob_start();
session_start();

$jsonStr = $_REQUEST["jsonStr"];
$orderInformation = json_decode($jsonStr);
$_SESSION["orderInformation"] = [$orderInformation->totalPrice,$orderInformation->payType,$orderInformation->orderPersonName,$orderInformation->orderPersonPhone,$orderInformation->orderPersonAddress,$orderInformation->receivePersonName,$orderInformation->receivePersonPhone,$orderInformation->receivePersonAddress];
if($orderInformation->payType === "0"){
$_SESSION["cardInformation"] = [$orderInformation->creditCardNum_1,$orderInformation->creditCardNum_2,$orderInformation->creditCardNum_3,$orderInformation->creditCardNum_4,$orderInformation->month,$orderInformation->year,$orderInformation->cardSafeCode];
}
try{
  	$html = '<div class="v-c bg-white w-90p w-lg-40p w-xl-40p z-10 p-30 bdrs-10">';
    $html .= '<p>應付金額：' .$_SESSION["orderInformation"][0]. '元</p>';
    if($_SESSION["orderInformation"][1] === "0"){
        $html .= '<h5 class="mt-0 mb-5 line">信用卡資訊</h5>';
        $html .= '<p class="mt-5 mb-5">信用卡卡號：'.$_SESSION["cardInformation"][0].'-'.$_SESSION["cardInformation"][1].'-'.$_SESSION["cardInformation"][2].'-'.$_SESSION["cardInformation"][3].'</p>';
        $html .= '<p class="mt-5 mb-5">有效期限：'.$_SESSION["cardInformation"][4].'/'.$_SESSION["cardInformation"][5].'</p>';
        $html .= '<p class="mt-5 mb-5">安全碼：'.$_SESSION["cardInformation"][6].'</p>';
    }
    $html .= '<h5 class="mb-5 line">訂購人資訊</h5>';
    $html .= '<p class="mt-5 mb-5">訂購人資訊：'.$_SESSION["orderInformation"][2].'</p>';
    $html .= '<p class="mt-5 mb-5">訂購人電話：'.$_SESSION["orderInformation"][3].'</p>';
    $html .= '<p class="mt-5 mb-5">訂購人地址：'.$_SESSION["orderInformation"][4].'</p>';
    $html .= '<h5 class="mb-5 line">收件人資訊</h5>';
    $html .= '<p class="mt-5 mb-5">收件人資訊：'.$_SESSION["orderInformation"][5].'</p>';
    $html .= '<p class="mt-5 mb-5">收件人電話：'.$_SESSION["orderInformation"][6].'</p>';
    $html .= '<p class="mt-5 mb-5">收件人地址：'.$_SESSION["orderInformation"][7].'</p>';
    $html .= '<div class="ta-c mt-20">';
    $html .= '<button class="btn-main-lg" id="submitInfo">確認無誤</button>';
    $html .= '<button class="btn-main-sm ml-20" id="cancel">取消</button>';
    $html .= '</div>';
    $html .= '</div>';

    echo $html;

}catch(PDOException $e){
  echo "error";
}
?>