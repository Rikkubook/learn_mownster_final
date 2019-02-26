<?php
    session_start();

    $id = $_GET["geItemNo"];
    $ptype = $_GET["geItemType"];
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/shop.css"> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <?php require_once("header.php") ?>
<!-- <form action="addCart.php" method="get"> -->
    <div class="container general-prod fadeInUp mb-50">
        <div class="w-80p w-lg-70p m-a clearfix">
        <?php
        $sql = "select * from generalitems where geItemNo = $id ";
        $pdoStatment = $pdo->query($sql);
        if($pdoStatment->rowCount() != 0)
            while($rows = $pdoStatment->fetchObject()){
                    $color = $rows->geItemColor;
                    $colorArr = explode(",",$color); 
                    $img = $rows->geItemImg;
                    $imgArr = explode(",",$img);
                    $size = $rows->geItemSize;
                    $sizeArr = explode(",",$size);
            ?>
            <input type="hidden" name="pNo" value="<?php echo $rows->geItemNo ?>">
            <div class="breadcrumb mb-20 pl-10"><a href="shop.php">商城快樂島></a>一般商品-<?php echo $rows->geItemName ?></div>
            
            <div class="col-12 col-xl-5">
                
                <?php if($colorArr > 2){ ?>
                <div class="bdrs-10 of-h">
                <input type="hidden" name="pImage" value="<?php echo $imgArr[0] ?>" id="nowImg">
                    <div class="w-200p fz-0 po-r r-0p trans-img ta-l">
                        <?php for($i = 0; $i<count($imgArr); $i++){ ?>
                        <div class="w-50p dis-ib po-r bs-bb">
                            <img src="img/shop-img/<?php echo $imgArr[$i] ?>" alt="<?php echo $imgArr[$i] ?>">
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php
                }else{
                ?>
                    <div class="bdrs-10 p-10">
                        <img src="img/shop-img/<?php echo $rows->geItemImg; ?>" alt="<?php echo $rows->geItemImg; ?>">
                        <input type="hidden" name="pImage" value="<?php echo $rows->geItemImg; ?>" id="nowImg">
                    </div>
                <?php } ?>
                <div class="ta-c pt-10">
                    <?php
                        if($colorArr > 2){
                            for($i = 1; $i<count($colorArr); $i+=2){
                    ?>
                        <div class="colorchoose" style="background-color:<?php echo $colorArr[$i]; ?>"></div>
                    <?php 
                            }
                        } ?>     
                </div>
            </div>
            
            <div class="col-12 col-xl-7 ta-r">
                <h2 class="m-lg-0 ta-l"><?php echo $rows->geItemName ?></h2>
                <input type="hidden" name="pName" value="<?php echo $rows->geItemName ?>">
                <table class="ta-l shop w-100p">
                    <tr>
                        <td class="w-30p w-lg-20p w-xl-15p"><p>單價</p></td>
                        <td class="pl-5"><p>NT.<span id="price"><?php echo $rows->geItemPrice ?></span><input type="hidden" name="pPrice" value="<?php echo $rows->geItemPrice ?>"></p></td>
                        
                    </tr>
                    <tr>
                        <td class="w-30p w-lg-20p w-xl-15p"><p>尺寸</p></td>
                        <td class="selectItem">
                            <?php
                                for($i = 0; $i<count($sizeArr); $i++){
                            ?>  
                                
                                <input type="radio" name="pSize" value="<?php echo $sizeArr[$i] ?>" id="size-<?php echo $sizeArr[$i] ?>"><label for="size-<?php echo $sizeArr[$i] ?>" class="ta-c"><?php echo $sizeArr[$i] ?></label>
                                
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-30p w-lg-20p w-xl-15p"><p>顏色</p></td>
                        <td class="selectItem">
                            <?php
                                if(($colorArr > 2)){
                                    $j=0;
                                    for($i = 0; $i<count($colorArr); $i+=2){
                                        while($j<count($imgArr)){
                            ?>
                                <input type="radio" name="pColor" value="<?php echo $colorArr[$i]; ?>" id="color-<?php echo $colorArr[$i]; ?>" data-img="<?php echo $imgArr[$j] ?>"><label for="color-<?php echo $colorArr[$i]; ?>" class="ta-c"><?php echo $colorArr[$i]; ?></label>
                            <?php
                                            $j++;
                                            break;
                                        }
                                    }
                                }else{     
                            ?>
                                <input type="radio" name="pColor" value="<?php echo $rows->geItemColor; ?>" id="color-<?php echo $rows->geItemColor; ?>"><label for="color-<?php echo $rows->geItemColor; ?>" class="ta-c"><?php echo $rows->geItemColor; ?></label>
                                <?php } ?>
                         </td>
                    </tr>
                    <tr>
                        <td class="w-30p w-lg-20p w-xl-15p"><p>數量</p></td>
                        <td class="pl-5 dis-f ai-c h-60"><div class="dis-f ai-fs"><button type="button" id="btnLess"><i class="fas fa-minus"></i></button><input type="text" value="1" name="pQuantity" id="quantity"><button type="button" id="btnPlus"><i class="fas fa-plus"></i></button><div></td>
                    </tr>
                </table>
                <p class="ta-r">總價：<span id="totalPrice">500</span>元</p>
                <button type="submit" class="btn-main-lg dis-ib po-r z-2" id="add-cart-btn">加入購物車</button>
            </div>
    <?php 
    } 
    ?>    
        </div>
        
    </div>
<!-- </form> -->
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
    <div class="container mb-50 ta-c fadeInUp v-hide">
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
    <?php require_once("footer.php") ?>
    <?php require_once("member_login.php") ?>
    <?php
    
        }catch(PDOException $e){
            $errMsg = "錯誤原因：" . $e->errMessage() . "<br>" . "錯誤行號：" . $e -> getLine() . "<br>";
        }
    
     ?>
    <script src="js/owl.carousel.js"></script>
    <script src="js/shop.js"></script>
</body>
</html>