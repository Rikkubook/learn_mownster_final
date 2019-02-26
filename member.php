<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>做怪Mownster</title>
    <link rel="stylesheet" href="css/common.css"><!-- 共用 -->
    <link rel="stylesheet" href="css/member.css"><!-- 會員 -->
<?php require_once("header.php");?><!-- nav -->
        <div class="indexCloud po-a l-0p z--1 of-h h-100p "><!-- 背景動畫-雲 -->
            <!-- 雲 -->
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <!-- <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt=""> -->
            <img class="index_bgCloud2" src="img/home_image/indexCloud2.png" alt="">
            <!-- <img class="index_bgCloud2" src="img/home_image/indexCloud1.png" alt=""> -->
        </div><!-- 背景動畫-雲結束 -->
    <div class="container bs-bb pt---100 pt---150 clearfix"><!-- container開始 -->
        <h1 class="col-12 ta-c">會員中心</h1><!-- 標題 -->
        <div class="col-12" id="member-tabs-group"><!-- 頁籤JS使用範圍 -->
            <!-- 頁籤按鈕 -->
            <div class="of-h wrap dis-f jc-se fw-w fd-r w-80p m-a" id="member-tabs">
                <a class="btn-main-lg mb-10 member-tab po-r memberactive">會員資訊</a>
                <a class="btn-main-lg mb-10 member-tab po-r">商品訂單</a>
                <a class="btn-main-lg mb-10 member-tab po-r">課程訂單</a>
                <a class="btn-main-lg mb-10 member-tab po-r">優惠券</a>
            </div><!-- 頁籤按鈕結束 -->
            <!-- 全部頁籤內容 -->
            <div class="wrap dis-f jc-sa fw-w fd-r mb-50">
                <!-- 會員資訊頁籤 -->
                <div class="card-lg w-100p w-xl-800 selector__items dis-b">

                        <table class="col-12 col-lg-4 col-xl-4 ta-c">
                            <tr>
                                <td><h2 class="mt-0">會員資訊</h2></td>
                            </tr>
                            <?php $memImg = $_SESSION["memImg"]; if($_SESSION['memImg'] == ''){?>
                            <tr>
                                <td>
                                    <img class="mb-10 w-80p" id="memImg" src='img/member-img/M-egg.png' alt="會員">
                                </td>
                            </tr>
                            <tr>
                                <td><a class="btn-sub-lg dis-b m-a mb-10" href="Makingmowns.php">創造怪獸</a></td>
                            </tr>

                            <?php }else{?>
                            <tr>
                                <td><!-- 抓SESSION,拿memImg -->
                                    <?php echo '<img class="mb-10 w-80p" id="memImg" src='.$memImg.' alt="">';?>
                                </td>
                            </tr>
                            <tr>
                                <td><a class="btn-sub-lg dis-b m-a mb-10" href="Makingmowns.php">修改怪獸</a></td>
                            </tr>
                        <?php }?>
                            <tr>
                                <td><a class="btn-sub-lg dis-b m-a mb-10" href="beautiful.php">參加選美</a></td>
                            </tr>
                            <tr><!-- 刪除SESSION -->
                                <td><a href="member_Logout.php"><input class="btn-sub-lg dis-b m-a " type="button" name="btnUpdate" value="登出"></a></td>
                            </tr>
                        </table>
                        <table class="col-12 col-lg-6 col-xl-6 ml-xl-50 m-a mt-xl-10p ">
                            <tr><!-- 會員資訊使用SESSION資料 -->
                                <td><p class="dis-ib">帳號</p></td>
                                <td><?php echo '<input id="modify-memNo" type="hidden"  value='.$_SESSION["memNo"].'>';?>
                                    <?php echo $_SESSION["memId"];?></td>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">姓名</p></td>
                                <td><?php echo '<input id="modify-memName" type="text" class="w-100p" value='.$_SESSION["memName"].'></td>';?>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">舊密碼</p></td>
                                <td><?php echo '<input id="modify-memPsw" type="hidden" class="w-100p" value='.$_SESSION["memPsw"].'>';?>
                                    <input id="modify-memPswOld" type="password" class="w-100p" placeholder="如要修改，請輸入密碼"></td>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">修改密碼</p></td>
                                <td><input  type="password" id="modify-memPswChange" class="w-100p" placeholder="請輸入新密碼"></td>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">確認密碼</p></td>
                                <td><input id="modify-memPswCheck"  type="password" class="w-100p" placeholder="請再次輸入新密碼"></td>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">電話</p></td>
                                <td><?php echo '<input id="modify-memTel" type="text" class="w-100p" value='.$_SESSION["memTel"].'></td>';?>
                            </tr>
                            <tr>
                                <td><p class="dis-ib">信箱</p></td>
                                <td><?php echo '<input id="modify-memEmail" type="text" class="w-100p " value='.$_SESSION["memEmail"].'></td>';?>
                            </tr>
                            <tr class="mt-10">
                                <td id="modify-erroMsg" colspan="2" class="ta-c">
                                </td>
                            </tr>
                            <tr class="mt-10">
                                <td colspan="2"><!-- AJAX修改會員資訊 -->
                                    <input onclick="ModifyForm()" class="btn-sub-lg 
                                    dis-b m-a " type="submit" value="修改">
                            </tr>
                        </table>
                </div><!-- 會員資訊頁籤結束 -->
                <!-- 商品訂單頁籤 -->
                <div  class="card-lg w-100p w-xl-800 selector__items dis-n">
                    <div class="Wrap" id="app">
                    <?php
                        try{
                            require("connectCD104.php");
                            $sql = "select *
                                    from generalorderlist where memNo =".$_SESSION['memNo'];
                            $pdoStatement = $pdo->query( $sql);
                        } catch(PDOException $e) {
                            $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                        };
                    ?>
                    <?php 
                    if( $pdoStatement->rowCount() ==0){ ?><!-- 如果沒有優惠券的狀態 -->
                        <div class='w-100p h-48p ta-c'>
                            <p>目前還沒有商品訂單唷~<br>趕快前往
                                <a style="color: #f09600;" href="shop.php">商城快樂島</a>購買怪獸商品吧~</p>
                        </div>
                    <?php }else if($pdoStatement->rowCount() ==1 ||$pdoStatement->rowCount() ==2){ ?>
                        <!-- <div class='w-100p h-item-fixed'>
                        </div> -->
                    <?php
                         while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="card-sm bs-bb col-12 member-order ">
                            <form action="" class="clearfix">
                                <div class="">
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">'.$row["geOdListTime"].'</p>' ;?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">訂單編號：'.$row["geOdListNo"].'</p>' ;?>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="m-0">狀態：處理中</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">'.$row["geOdListSum"].'</p>' ;?>
                                    </div>
                                </div>
                            </form>
   
                        
                            <expander animation="bounceIn">
                          <?php   try{
                            require("connectCD104.php");
                             $sql = "select * from generalitems as gi,generalorderdetails go where gi.geItemNo = go.geItemNo and go.geOdListNo =".$row["geOdListNo"];
                            $pdetail = $pdo->query( $sql);
                        } catch(PDOException $e) {
                            $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                        };
                    ?>
                    <?php
                         while($rowdetail = $pdetail->fetch(PDO::FETCH_ASSOC)){
                    ?>
                                <div class="col-12 dis-lg-f jc-c memberbt">
                                    <div class="col-12 col-lg-3">
                                        <?php echo '<img class="w-100" src="img/shop-img/'.$rowdetail["geItemImg"].'" alt="一般商品">' ;?>
                                    </div>
                                    <div class="col-12 col-lg-4 ta-l">
                                        <div>
                                            <?php echo '<p class="m-0">'.$rowdetail["geItemName"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">尺寸：'.$rowdetail["geOdDtSize"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">數量：'.$rowdetail["geOdDtCount"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">價錢：'.$rowdetail["geOdDtPrice"].'元</p>' ;?>
                                        </div>
                                    </div>
                                </div>
                         <?php }?>
                            </expander>
                        </div>
                         <?php }?>
                        <!-- </div> -->
                        <div class='w-100p h-item-fixed'>
                        </div>
                    <?php }else{ ?>
                    <?php
                         while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="card-sm bs-bb col-12 member-order ">
                            <form action="" class="clearfix">
                                <div class="">
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">'.$row["geOdListTime"].'</p>' ;?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">訂單編號：'.$row["geOdListNo"].'</p>' ;?>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="m-0">狀態：處理中</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo '<p class="m-0">總額： '.$row["geOdListSum"].'元</p>' ;?>
                                    </div>
                                </div>
                            </form>
   
                        
                            <expander animation="bounceIn">
                          <?php   try{
                            require("connectCD104.php");
                             $sql = "select * from generalitems as gi,generalorderdetails go where gi.geItemNo = go.geItemNo and go.geOdListNo =".$row["geOdListNo"];
                            $pdetail = $pdo->query( $sql);
                        } catch(PDOException $e) {
                            $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                        };
                    ?>
                    <?php
                         while($rowdetail = $pdetail->fetch(PDO::FETCH_ASSOC)){
                    ?>
                                <div class="col-12 dis-lg-f jc-c memberbt">
                                    <div class="col-12 col-lg-3">
                                        <?php echo '<img class="w-100" src="img/shop-img/'.$rowdetail["geItemImg"].'" alt="一般商品">' ;?>
                                    </div>
                                    <div class="col-12 col-lg-4 ta-l">
                                        <div>
                                            <?php echo '<p class="m-0">'.$rowdetail["geItemName"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">尺寸：'.$rowdetail["geOdDtSize"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">數量：'.$rowdetail["geOdDtCount"].'</p>' ;?>
                                        </div>
                                        <div>
                                            <?php echo '<p class="m-0">價錢：'.$rowdetail["geOdDtPrice"].'元</p>' ;?>
                                        </div>
                                    </div>
                                </div>
                         <?php }?>
                            </expander>
                        </div>
                         <?php }};?>
                    </div>
                </div><!-- 商品訂單頁籤結束 -->
                <!-- 課程訂單頁籤 -->
                <div class="card-lg w-100p w-xl-800 selector__items dis-n">
                    <div id="member-class"><!-- 全部課程最外層 -->
                    <?php //課程撈資料，用SESSION的memNO撈出對應的會員資料
                        try{
                            require("connectCD104.php");
                            $sql = "select col.classOdNo,cd.classDtName,cd.classDtDate,col.classOdStatus,col.classOdCount
                                from classdetails cd,classorderlist col where cd.classDtNo = col.classDtNo and memNo=".$_SESSION['memNo'];
                            $pdoStatement = $pdo->query( $sql);
                        } catch(PDOException $e) {
                            $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                        };
                    ?>
                    <?php 
                    if( $pdoStatement->rowCount() ==0){ ?><!-- 如果沒有優惠券的狀態 -->
                        <div class='w-100p h-48p ta-c'>
                            <p>目前還沒有課程訂單唷~<br>趕快前往
                                <a style="color: #f09600;" href="class.php">課程雙子島</a>預約課程吧~</p>
                        </div>
                    <?php }else if($pdoStatement->rowCount() ==1||$pdoStatement->rowCount() ==2||$pdoStatement->rowCount() ==3){ ?>
                        <div class='w-100p h-fixed'>
                    <?php while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){?>
                        <div class="clearfix member-class"><!-- 課程線條使用 -->
                            <div class="col-12 dis-lg-f jc-c ta-c"><!-- 課程置中 -->
                                <div class="col-12 col-lg-3 mb-10 mt-10"><!-- 課程圖片 -->
                                    <?php if($row['classDtName']=='布娃娃'){
                                        echo '<img class="w-150" src="img/member-img/doll.jpg" alt="布娃娃">';
                                    }else{
                                        echo '<img class="w-150" src="img/member-img/3dprint.jpg" alt="3D列印">';
                                    };?>
                                </div><!-- 課程圖片結束 -->
                                <div class="col-12 col-lg-3 mb-10 mt-10 ta-l"><!-- 課程內容 -->
                                    <div class="">
                                        <p class="m-0">編號：<?php echo $row['classOdNo'];?>號</p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">名稱：<?php echo $row['classDtName'];?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">日期：<?php echo $row['classDtDate'];?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">時間：下午 1：30</p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">狀態：<?php if($row['classOdStatus']==1){echo '已到課';
                                        }else{echo '未到課';}?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">人數： <?php echo $row['classOdCount'];?>人</p>
                                    </div>
                                </div><!-- 課程內容結束 -->
                                <div class="col-12 col-lg-3"><!-- 課程按鈕 -->
                                    <div class="m-lg-40"><!-- 課程狀態按鈕,已到未到 -->
                                        <?php if($row['classOdStatus']==1){ ?>
                                            <a href="class-doll.php" class="btn-sub-lg dis-b mb-10 m-a">課程留言</a>
                                            <button class="btn-sub-lg dis-b mb-10 m-a member-QR">QRcode</button>
                                        <?php }else{ ?>
                                            <input class="member-class-cancle-btn btn-sub-lg dis-b mb-10 m-a" type="submit" name="btnCancel" value="取消課程">
                                            <button class="btn-sub-lg dis-b mb-10 m-a member-QR">QRcode</button> 
                                        <?php }?>
                                    </div><!-- 課程狀態按鈕結束 -->
                                </div><!-- 課程按鈕結束 -->
                            </div><!-- 課程置中結束 -->
                        </div><!-- 課程線條使用結束 -->
                    <?php };?> <!-- 課程撈資料結束 -->
                        </div>
                    <?php }else{ ?>
                    <?php while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){?>
                        <div class="clearfix member-class"><!-- 課程線條使用 -->
                            <div class="col-12 dis-lg-f jc-c ta-c"><!-- 課程置中 -->
                                <div class="col-12 col-lg-3 mb-10 mt-10"><!-- 課程圖片 -->
                                    <?php if($row['classDtName']=='布娃娃'){
                                        echo '<img class="w-150" src="img/member-img/doll.jpg" alt="布娃娃">';
                                    }else{
                                        echo '<img class="w-150" src="img/member-img/3dprint.jpg" alt="3D列印">';
                                    };?>
                                </div><!-- 課程圖片結束 -->
                                <div class="col-12 col-lg-3 mb-10 mt-10 ta-l"><!-- 課程內容 -->
                                    <div class="">
                                        <p class="m-0">編號：<?php echo $row['classOdNo'];?>號</p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">名稱：<?php echo $row['classDtName'];?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">日期：<?php echo $row['classDtDate'];?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">時間：下午 1：30</p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">狀態：<?php if($row['classOdStatus']==1){echo '已到課';
                                        }else{echo '未到課';}?></p>
                                    </div>
                                    <div class="">
                                        <p class="m-0">人數： <?php echo $row['classOdCount'];?>人</p>
                                    </div>
                                </div><!-- 課程內容結束 -->
                                <div class="col-12 col-lg-3"><!-- 課程按鈕 -->
                                    <div class="m-lg-40"><!-- 課程狀態按鈕,已到未到 -->
                                        <?php if($row['classOdStatus']==1){ ?>
                                            <a href="class-doll.php" class="btn-sub-lg dis-b mb-10 m-a">課程留言</a>
                                            <button class="btn-sub-lg dis-b mb-10 m-a member-QR">QRcode</button>
                                        <?php }else{ ?>
                                            <input class="member-class-cancle-btn btn-sub-lg dis-b mb-10 m-a" type="submit" name="btnCancel" value="取消課程">
                                            <button class="btn-sub-lg dis-b mb-10 m-a member-QR">QRcode</button> 
                                        <?php }?>
                                    </div><!-- 課程狀態按鈕結束 -->
                                </div><!-- 課程按鈕結束 -->
                            </div><!-- 課程置中結束 -->
                        </div><!-- 課程線條使用結束 -->
                    <?php }};?> <!-- 課程撈資料結束 -->
                    </div><!-- 全部課程最外層結束 -->
                </div><!-- 課程訂單頁籤結束 -->
                <!-- 優惠頁籤 -->
                <div class="card-lg w-100p w-lg-800 selector__items dis-n">
                    <?php //優惠券撈資料，用SESSION的memNO撈出對應的會員資料
                        try{
                            require("connectCD104.php");
                            $sql = "select ct.cpnTypeContent,ct.cpnTypeOff,c.cpnDate
                                from coupon c,coupontype ct
                                where c.cpnTypeNo = ct.cpnTypeNo
                                and memNo=".$_SESSION['memNo'];
                            $pdoStatement = $pdo->query( $sql);
                        } catch(PDOException $e) {
                            $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                        };
                    ?>
                    <?php 
                    if( $pdoStatement->rowCount() ==0){ ?><!-- 如果沒有優惠券的狀態 -->
                        <div class='w-100p h-48p ta-c'>
                            <p>目前還沒有優惠券唷~<br>趕快前往
                                <a style="color: #f09600;" href="game.php">遊戲冒險島</a>取得優惠券吧~</p>
                        </div>
                    <?php }else if($pdoStatement->rowCount() ==1||$pdoStatement->rowCount() ==2){ ?> 
                        <div class='w-100p h-fixed'>
                    <?php while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){ ?>
                        <div class="member-border clearfix dis-lg-f jc-c"><!-- 優惠線條使用 -->
                            <div class="col-lg-3 dis-n dis-lg-b">
                            <?php if($row['cpnTypeOff']==50){
                                echo '<img class="w-150 mt-20" src="img/member-img/5-coupon.png" alt="5折優惠券">' ;
                            }else if($row['cpnTypeOff']==60){
                                echo '<img class="w-150 mt-20" src="img/member-img/6-coupon.png" alt="6折優惠券">' ;
                            }else if($row['cpnTypeOff']==70){
                                echo '<img class="w-150 mt-20" src="img/member-img/7-coupon.png" alt="7折優惠券">' ;
                            }else if($row['cpnTypeOff']==80){
                                echo '<img class="w-150 mt-20" src="img/member-img/8-coupon.png" alt="8折優惠券">' ;
                            }else{
                                echo '<img class="w-150 mt-20" src="img/member-img/9-coupon.png" alt="9折優惠券">' ;
                            }?>
                            </div>
                            <table class="col-12 col-lg-4">
                                <tr>
                                    <td>優惠</td>
                                    <td class="p-lg-10"><?php echo $row['cpnTypeOff']/10;?>折優惠</td>
                                </tr>
                                <tr>
                                    <td>優惠內容</td>
                                    <td class="p-lg-10"><?php echo $row['cpnTypeContent'];?></td>
                                </tr>
                                <tr>
                                    <td>到期日</td>
                                    <td class="p-lg-10"><?php echo $row['cpnDate'];?></td>
                                </tr>
                            </table>
                        </div><!-- 優惠線條使用結束 -->
                    <?php } ?>
                        </div>
                    <?php }else{
                    while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){?>
                        <div class="member-border clearfix dis-lg-f jc-c"><!-- 優惠線條使用 -->
                            <div class="col-lg-3 dis-n dis-lg-b">
                            <?php if($row['cpnTypeOff']==50){
                                echo '<img class="w-150 mt-20" src="img/member-img/5-coupon.png" alt="5折優惠券">' ;
                            }else if($row['cpnTypeOff']==60){
                                echo '<img class="w-150 mt-20" src="img/member-img/6-coupon.png" alt="6折優惠券">' ;
                            }else if($row['cpnTypeOff']==70){
                                echo '<img class="w-150 mt-20" src="img/member-img/7-coupon.png" alt="7折優惠券">' ;
                            }else if($row['cpnTypeOff']==80){
                                echo '<img class="w-150 mt-20" src="img/member-img/8-coupon.png" alt="8折優惠券">' ;
                            }else{
                                echo '<img class="w-150 mt-20" src="img/member-img/9-coupon.png" alt="9折優惠券">' ;
                            }?>
                            </div>
                            <table class="col-12 col-lg-4">
                                <tr>
                                    <td>優惠</td>
                                    <td class="p-lg-10"><?php echo $row['cpnTypeOff']/10;?>折優惠</td>
                                </tr>
                                <tr>
                                    <td>優惠內容</td>
                                    <td class="p-lg-10"><?php echo $row['cpnTypeContent'];?></td>
                                </tr>
                                <tr>
                                    <td>日期</td>
                                    <td class="p-lg-10"><?php echo $row['cpnDate'];?></td>
                                </tr>
                            </table>
                        </div><!-- 優惠線條使用結束 -->
                    <?php }};?> <!-- 會員撈資料結束 -->
                </div><!-- 優惠頁籤結束 -->
            </div><!-- 全部頁籤內容結束 -->
        </div><!-- 頁籤JS使用範圍結束 -->
    </div><!-- container結束 -->
    <!-- modifysuccess -->
    <div class="modifysuccess_popup">
        <div class="popup__wrap member-login-popup__close z-i-999">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-7 col-lg-4 card-lg ta-c z-i-999">
            <div>
                <h4>修改成功!</h4>
            </div>
            <div class="popup__icons dis-f fw-w">
            </div>
            <i class="close-btn member-login-popup__close po-r far fa-times-circle"></i>
        </div>
    </div><!-- modifysuccess-end -->
<?php require_once("member_login.php");?><!-- 會員登入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.19/vue.min.js"></script>
    <script src="js/member_center_ajax.js"></script><!-- 會員中心JS -->
    <script src="js/member.js"></script><!-- 會員VUE.JS -->
    <script src="js/memberclick.js"></script><!-- 會員頁籤JS -->
    <?php require_once('footer.php');?>
</body>
</html>