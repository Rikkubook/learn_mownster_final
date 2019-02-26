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
    <script src="js/jquery-3.3.1.min.js"></script>
    <?php require_once("header.php") ?>
    <?php
        if(isset($_SESSION["generalProd"]) === false){
     ?>
        <div class="container mt-200 mb-50 pb-5">
        <h2 class="ta-c pt-50 pb-50">還沒有選購商品，請前往選購</h2>
        </div>
     <?php
        }else{
    ?> 
    
        <div class="container mt-200">
            <h2 class="ta-c">購物車</h2>
            <div class="clearfix shoppingCart-title dis-n dis-lg-f p-10">
                <div class="col-2 dis-f ai-c jc-c">
                    <h5 class="m-0">商品圖片</h5>
                </div>
                <div class="col-2 dis-f ai-c jc-c">
                    <h5 class="m-0">商品名稱</h5>
                </div>
                <div class="col-1 dis-f ai-c jc-c">
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
                <div class="col-1 dis-f ai-c jc-c">
                    <h5 class="m-0">刪除</h5>
                </div>

            </div>
        </div>
    
        <?php 
        for($i=0;$i<count($_SESSION["generalProd"]);$i++){ 
        ?>
        <form action="cartUpdate.php" method="get">
        <div class="container mb-10 mb-lg-0">
            <div class="shoppingCart w-100p dis-f fw-w po-r p-10 m-a bs-bb clearfix">
                <div class="col-6 col-lg-2 dis-f">
                    <div class="po-r w-50p m-a">
                        <img src="img/shop-img/<?php echo $_SESSION["generalProd"][$i][1] ?>" alt="<?php echo $_SESSION["generalProd"][$i][1] ?>">
                        <input type="hidden" name="pImage" value="<?php echo $_SESSION["generalProd"][$i][1] ?>">
                    </div>
                </div>
                <div class="col-6 col-lg-2 dis-b dis-lg-f ai-c jc-c pt-15 pt-lg-0 bs-bb">
                    <p><?php echo $_SESSION["generalProd"][$i][2] ?></p>
                    <input type="hidden" name="pName" value="<?php echo $_SESSION["generalProd"][$i][2] ?>">
                    <p class="dis-lg-n">單價：$<?php echo $_SESSION["generalProd"][$i][3] ?></p>
                    <p class="dis-lg-n">尺寸：<?php echo $_SESSION["generalProd"][$i][4] ?></p>
                    <p class="dis-lg-n">顏色：<?php echo $_SESSION["generalProd"][$i][5] ?></p>
                </div>
                <div class="col-lg-1 dis-n dis-lg-f ai-c jc-c">
                    <p>$<span class="thePrice"><?php echo $_SESSION["generalProd"][$i][3] ?></span></p>
                    <input type="hidden" name="pPrice" value="<?php echo $_SESSION["generalProd"][$i][3] ?>">
                </div>
                <div class="col-lg-1 dis-n dis-lg-f ai-c jc-c">
                    <p><?php echo $_SESSION["generalProd"][$i][4] ?></p>
                    <input type="hidden" name="pSize" value="<?php echo $_SESSION["generalProd"][$i][4] ?>">
                </div>
                <div class="col-lg-1 dis-n dis-lg-f ai-c jc-c">
                    <p><?php echo $_SESSION["generalProd"][$i][5] ?></p>
                    <input type="hidden" name="pColor" value="<?php echo $_SESSION["generalProd"][$i][5] ?>">
                </div>
                <div class="col-6 col-lg-2 dis-f ai-c jc-c"><div class="dis-f ai-fs jc-c"><button type="button" class="btnLess"><i class="fas fa-minus"></i></button><input
                        type="text" value="<?php echo $_SESSION["generalProd"][$i][6] ?>" name="pQuantity" class="quantity"><button type="button" class="btnPlus"><i
                            class="fas fa-plus"></i></button></div></div>
                <div class="col-6 col-lg-2 dis-f ai-c jc-c">
                    <p>小計：<span class="totalPrice"></span></p>
                </div>
                
                <div class="col-1 dis-n dis-lg-f ai-c jc-c"><input type="hidden" name="pNo" value="<?php echo $_SESSION["generalProd"][$i][0] ?>"><button type="submit" class="btn-sub-sm">刪除</button></div>
                <div class="po-a r-5p t-5p dis-lg-n"><button type="submit" class="trash"><i class="fas fa-trash-alt"></i></button></div>

            </div>
        </div>
        </form>
        <?php
        }
        ?>
        <!-- <div class="container dis-n dis-lg-b bg-YG bs-bb"></div> -->
        <div class="container bg-white mb-10 mb-lg-0 p-20 bs-bb ta-r">
            <?php if(isset($_SESSION["memId"])){ ?>
            <div class="ta-r dis-ib">
                <span>使用優惠券</span>
                <select name="discount" id="discount" class="w-100">
                    <option value="100">-</option>
                    <?php
                        $sql = "select c.cpnNo,m.memNo,ct.cpnTypeContent,ct.cpnTypeOff from coupon c,coupontype ct,member m where c.cpnTypeNo = ct.cpnTypeNo and c.memNo = m.memNo and m.memNo = :memNo and ct.cpnTypeStatus = 0 ";
                        $pdoStatment = $pdo->prepare($sql);
                        $pdoStatment->bindValue(":memNo",$_SESSION["memNo"]);
                        $pdoStatment->execute();
                        if($pdoStatment->rowCount() != 0){
                        while($rows = $pdoStatment->fetchObject()){
                    ?>
                    
                    <option value="<?php echo $rows->cpnTypeOff; ?>" id="cou-<?php echo $rows->cpnNo; ?>"><?php echo $rows->cpnTypeContent; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <span class="dis-n dis-lg-ib">，</span>
            </div>
            <?php
            }else{
            ?>
            <p class="pt-25 mt-0 mb-0">登入後即可使用優惠券</p>
            <?php
            }
            ?>
            <p class="ta-r dis-lg-ib mb-0 mt-15 mt-lg-0">總計：<span id="sumTotalPrice"></span>元</p>
        </div>
    
        <div class="cotainer ta-c">
            <a class="btn-main-lg dis-ib mt-50 mb-50" href="shop.php">繼續購物</a>
            <button type="submit" class="btn-main-lg mt-50 mb-50" id="check">進行結帳</button>
            
        </div>
        <?php
            }
        ?>
        <?php   $sql = "select * from generalitems where geItemStatus = 1";
            $pdoStatment = $pdo->query($sql);     
            $count=$pdoStatment->rowCount();


            $itemRand = rand(5,7);
            $itemArr = [];
            
            for($i=0; $i<$itemRand; $i++){
                $theItemRand = rand(0,($count-1));
                if(in_array($theItemRand,$itemArr)){
                    $i--;
                }
                else{
                    $itemArr[] = $theItemRand; 
                }
            }
    ?>
    <div class="container mb-50 ta-c">
            <h4 class="ta-c m-5 mb-20">推薦商品</h4>
            <div class="clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <?php
                    for($i=0; $i<count($itemArr); $i++){
                        $sql = "select * from generalitems where geItemStatus = 1 ORDER by geItemNo LIMIT $itemArr[$i], 1";
                        $pdoStatment = $pdo->query($sql);
                        if($pdoStatment->rowCount() != 0)
                            while($rows = $pdoStatment->fetchObject()){
                                $img = $rows->geItemImg;
                                $imgArr = explode(",",$img);
                    
                ?>
                <div class="product card-sm card-bg card-bg-5 ta-c m-5 of-h ">
                    <a href="generalProd.php?geItemNo=<?php echo $rows->geItemNo; ?>&geItemType=<?php echo $rows->geItemType; ?>"></a>
                    <div class="po-r mt-10 p-10">
                    <img src="img/shop-img/<?php echo $imgArr[0]; ?>" alt="<?php echo $imgArr[0]; ?>">
                    </div>
                    <p class="ta-c mt-0 mb-0"><?php echo $rows->geItemName; ?></p>
                    <p class="ta-c mt-0">NT.<?php echo $rows->geItemPrice; ?></p>
                </div>
                <?php 
                        }
                    } 
                ?>
            </div>
            <div class="col-2 col-xl-1 ta-l">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
    </div>
    <div class="please-login po-f t-0p l-0p w-100p h-100p z-10 dis-n" id="please-login"></div>
    <?php require_once("footer.php") ?>
    
    <?php require_once("member_login.php") ?>
    <?php
    
    }catch(PDOException $e){
        $errMsg = "錯誤原因：" . $e->errMessage() . "<br>" . "錯誤行號：" . $e -> getLine() . "<br>";
    }   

?>

    <script src="js/owl.carousel.js"></script>
    <script src="js/shoppingCart.js"></script>
    </body>

</html>