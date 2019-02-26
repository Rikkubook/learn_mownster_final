<?php
    session_start();
try{
    require_once("connectCD104.php");
?>
<!DOCTYPE html>
<html lang="en">

<head class="shop">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>做怪Mownster</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/shoppingCart.css">
    <style>
        *{
            /* outline: 1px solid red; */
        }
    </style>
    <?php require_once("header.php") ?>

    <div class="container mt-200">
        <h2 class="ta-c">付款明細</h2>
        <div class="clearfix shoppingCart-title dis-n dis-lg-f p-10">
            <div class="col-2 dis-f ai-c jc-c">
                <h5 class="m-0">商品圖片</h5>
            </div>
            <div class="col-2 dis-f ai-c jc-c">
                <h5 class="m-0">商品名稱</h5>
            </div>
            <div class="col-2 dis-f ai-c jc-c">
                <h5 class="m-0">單價</h5>
            </div>
            <div class="col-1 dis-f ai-c jc-c">
                <h5 class="m-0">尺寸</h5>
            </div>
            <div class="col-1 dis-f ai-c jc-c">
                <h5 class="m-0">顏色</h5>
            </div>
            <div class="col-2 dis-f ai-c jc-c">
                <h5 class="m-0">數量</h5>
            </div>
            <div class="col-2 dis-f ai-c jc-c">
                <h5 class="m-0">小計</h5>
            </div>

        </div>
    </div>
    <?php
        for($i=0;$i<count($_SESSION["generalProd"]);$i++){
    ?>
    <div class="container mb-10 mb-lg-0">
        <div class="shoppingCart w-100p dis-f fw-w po-r p-10 m-a bs-bb clearfix">
            <div class="col-6 col-lg-2 dis-f">
                <div class="po-r w-50p m-a">
                    <img src="img/shop-img/<?php echo $_SESSION["generalProd"][$i][1]; ?>" alt="<?php echo $_SESSION["generalProd"][$i][1]; ?>">
                </div>
            </div>
            <div class="col-6 col-lg-2 dis-b dis-lg-f ai-c jc-c">
                <p><?php echo $_SESSION["generalProd"][$i][2]; ?></p>
                <p class="dis-lg-n">單價：<?php echo $_SESSION["generalProd"][$i][3]; ?></p>
                <p class="dis-lg-n">尺寸：<?php echo $_SESSION["generalProd"][$i][4]; ?></p>
                <p class="dis-lg-n">顏色：<?php echo $_SESSION["generalProd"][$i][5]; ?></p>
                <p class="dis-lg-n">數量：<?php echo $_SESSION["generalProd"][$i][6]; ?></p>
            </div>
            <div class="col-lg-2 dis-n dis-lg-f ai-c jc-c">
                <p>$<?php echo $_SESSION["generalProd"][$i][3]; ?></p>
            </div>
            <div class="col-lg-1 dis-n dis-lg-f ai-c jc-c">
                <p><?php echo $_SESSION["generalProd"][$i][4]; ?></p>
            </div>
            <div class="col-lg-1 dis-n dis-lg-f ai-c jc-c">
                <p><?php echo $_SESSION["generalProd"][$i][5]; ?></p>
            </div>
            <div class="col-lg-2 dis-n dis-lg-f ai-c jc-c">
                <p><?php echo $_SESSION["generalProd"][$i][6]; ?></p>
            </div>
            <div class="col-12 col-lg-2 dis-b ta-r dis-lg-f ai-c jc-c">
                <p>小計：<span class="totalPrice"><?php echo ((integer)$_SESSION["generalProd"][$i][3] * (integer)$_SESSION["generalProd"][$i][6]); ?></span>元</p>
            </div>

        </div>
    </div>
    <?php
        }
    ?>
    <div class="container mb-50 bg-white p-20 bs-bb">
        <p class="ta-r">
            <?php 
            if(isset($_SESSION["discount"]) && $_SESSION["discount"] != 100){ echo "<span class='dis-b dis-lg-ib'>已使用<span id='discount'>" . (int)$_SESSION["discount"]/10 . "</span>折優惠券<span class='dis-n dis-lg-ib'>，</span></span>"; }else{ echo "<span class='dis-b dis-lg-ib'>未使用優惠券<span id='discount'></span><span class='dis-n dis-lg-ib'>，</span></span>";} ?>總計付款金額為：<span id="sumTotalPrice"></span>元</p>
        <h5 class="mb-5 line">請選擇付款方式</h5>
        <div class="payType fz-0 ">
            <button class="btn-main-lg paybtn" onclick="choosePay(event, 'online')" id="defaultOpen" value="0">線上付款</button>
            <button class="btn-main-lg paybtn" onclick="choosePay(event, 'cash')" value="1">貨到付款</button>
        </div>

        <!-- payType content -->
        <div id="online" class="payTypeDetail mt-20 mb-50">
            <div>
                <p class="mb-5 dis-lg-ib">信用卡卡號</p>
                <input type="text" name="creditCard-1">
                <span>-</span>
                <input type="text" name="creditCard-2">
                <span>-</span>
                <input type="text" name="creditCard-3">
                <span>-</span>
                <input type="text" name="creditCard-4">
            </div>
            <div>
                <p class="mb-5 dis-lg-ib">有效期限</p>
                <select name="chooseMonth" id="chooseMonth"></select>
                <select name="chooseYear" id="chooseYear"></select>
            </div>
            <div>
                <p class="mb-5 dis-lg-ib">安全碼</p>
                <input type="text" name="creditCardSafeCode">
            </div>

        </div>

        <div id="cash" class="payTypeDetail">
            <p>您已選擇貨到付款，請點選『進行結帳』完成購買。</p>
        </div>
        <div class="clearfix line">
            <div class="col-lg-6">
                <h5 class="mb-5">訂購人資訊</h5>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">訂購人姓名</span><input type="text" name="order-person-name" value="<?php echo $_SESSION["memName"] ?>"></p>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">訂購人電話</span><input type="text" name="order-person-phone" value="<?php echo $_SESSION["memTel"] ?>"></p>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">訂購人地址</span><input type="text" name="order-person-address"></p>
            </div>
            
            <div class="col-lg-6">
                <h5 class="mb-5">收件人資訊</h5>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">收件人姓名</span><input type="text" name="receive-person-name"></p>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">收件人電話</span><input type="text" name="receive-person-phone"></p>
                <p class="mt-5 mb-5"><span class="w-100 dis-ib">收件人地址</span><input type="text" name="receive-person-address"></p>
            </div>
        </div>
        
        
    </div>
    <div class="container ta-c mb-50">
    <button class="btn-main-lg" id="returnPreviousPage">回上一頁</button>
        <button class="btn-main-lg" id="checkInfo">確認結帳</button>
    </div>
    
    <div class="paycheck po-f t-0p l-0p w-100p h-100p dis-n" id="infoShow"></div>
    <div class="paycheck po-f t-0p l-0p w-100p h-100p dis-n" id="orderSubmit"></div>
    <?php require_once("footer.php") ?>
    <?php require_once("member_login.php") ?>
    <?php
    
        }catch(PDOException $e){
            $errMsg = "錯誤原因：" . $e->errMessage() . "<br>" . "錯誤行號：" . $e -> getLine() . "<br>";
        }   

?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/checkOrder.js"></script>
    </body>

</html>