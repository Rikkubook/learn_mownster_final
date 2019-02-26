<?php
session_start();
try{
    require_once("connectCD104.php");
        //若“已製作怪獸” 商品上出現自己的怪獸;
        if(isset($_SESSION["memImg"])){
            $memImg = $_SESSION["memImg"];
        }else{
        //若“未製作怪獸”則出現預設蛋蛋圖片;   
            $memImg = "img/shop-img/egg.png";
        }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>做怪Mownster</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <?php require_once("header.php") ?>

    <div class="header-height col-12 t-0p l-0p "></div>
    <div class="mownsterImage ta-c mb-50 po-r">
        <img src="img/shop-img/hot-air-balloon.png" alt="balloon" class="w-30p w-lg-10p po-a balloon z--1">
        <div class="dis-ib">
            <!-- 請根據頁面更換小怪獸圖片連結 -->
            <img class="mownsterImage-img" src="img/shop-img/mon7.png">
            <div class="mownsterImage-textbox dis-ib ta-l pt-20 pb-20 pr-35 pl-35" style="background-color:#eee">
                <!-- 請根據頁面更換文字 -->
                <h1 class="p-0 m-0">歡迎來到商城快樂島～</h1>
                <p class="p-0 m-0">我是大嘴怪，在這裡你可以買到自己心儀的商品唷～趕快來瞧一瞧有什麼商品吧！</p>
            </div>
        </div>
    </div>

     <!-- 上面頁籤 -->
     <div class="shop-tab-title dis-f jc-c fw-w fadeInUp">
            <!-- 個人 -->
            <div class="shop-tab-sub-title w-50p w-lg-15p w-xl-10p p-10 bs-bb custom_btn pointer DD-default ta-c">
                <!-- <a href="#shop-tab01"><div class="circle m-a of-h"><img src="<?php echo $memImg;?>" alt="" class="v-c"></div>
                <p class="ta-c m-5">個人怪獸</p></a> -->
                <button class="shopTabBtn" onclick="openTab(event, 'shop-tab01')" id="defaultOpenTab"><div class="circle m-a of-h"><img src="<?php echo $memImg;?>" alt="" class="v-c"></div>
                <p class="ta-c m-5">個人怪獸</p> </button>    
            </div>
            <!-- 選美  Top.1-->
            <div class="shop-tab-sub-title w-50p w-lg-15p w-xl-10p p-10 bs-bb custom_btn pointer DD-default ta-c">
                <!-- <a href="#shop-tab02"><div class="circle m-a"><img src="img/shop-img/mownster-top1.png" alt="mownster-top1.png" class="v-c"></div>
                <p class="ta-c m-5">選美Top.1</p></a> -->
                <button class="shopTabBtn" onclick="openTab(event, 'shop-tab02')"><div class="circle m-a of-h"><img src="img/shop-img/mownster-top1.png" alt="" class="v-c"></div>
                <p class="ta-c m-5">選美Top.1</p> </button>  
            </div>
            <!-- 選美  Top.2-->    
            <div class="shop-tab-sub-title w-50p w-lg-15p w-xl-10p p-10 bs-bb custom_btn pointer DD-default ta-c">
                <!-- <a href="#shop-tab03"><div class="circle m-a"><img src="img/shop-img/mownster-top2.png" alt="mownster-top2.png" class="v-c"></div>
                <p class="ta-c m-5">選美Top.2</p></a> -->
                <button class="shopTabBtn" onclick="openTab(event, 'shop-tab03')"><div class="circle m-a of-h"><img src="img/shop-img/mownster-top2.png" alt="" class="v-c"></div>
                <p class="ta-c m-5">選美Top.2</p> </button>  
            </div>
            <!-- 選美  Top.3-->    
            <div class="shop-tab-sub-title w-50p w-lg-15p w-xl-10p p-10 bs-bb custom_btn pointer DD-default ta-c">
                <!-- <a href="#shop-tab04"><div class="circle m-a"><img src="img/shop-img/mownster-top3.png" alt="mownster-top3.png" class="v-c"></div>
                <p class="ta-c m-5">選美Top.3</p></a> -->
                <button class="shopTabBtn" onclick="openTab(event, 'shop-tab04')"><div class="circle m-a of-h"><img src="img/shop-img/mownster-top3.png" alt="" class="v-c"></div>
                <p class="ta-c m-5">選美Top.3</p> </button> 
            </div>
        </div>
    </div>

    <!-- 頁籤的商品 -->
    <div class="container mb-50 fadeInUp v-hide">
        <!-- 個人商品 -->
        <div id="shop-tab01"class="shop-tab-inner clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r v-xl-hide">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <div class="card-sm product card-bg card-bg-1 ta-c m-5 of-h ">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Bag-White.png" alt="Bag-White.png">
                        <div class="v-c w-50p">
                            <img src="<?php echo $memImg;?>"alt="">
                        </div>
                    </div>
                    <p class="ta-c mb-0 mt-0">怪獸背包</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/phone-White.png" alt="phone-White.png">
                        <div class="v-c w-30p">
                            <img src="<?php echo $memImg;?>" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸手機殼</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/pillow-White.png" alt="pillow-White.png">
                        <div class="v-c w-50p">
                            <img src="<?php echo $memImg;?>" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸抱枕</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Tshirt-White.png" alt="Tshirt-White.png">
                        <div class="v-c w-40p">
                            <img src="<?php echo $memImg;?>" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸衣服</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
            </div>
            <div class="col-2 col-xl-1 v-xl-hide">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
        <!-- Top.1 -->
        <!-- <div style="padding-bottom:100px;"></div> -->
        <div id="shop-tab02"class="shop-tab-inner clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r v-xl-hide">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <div class="card-sm product card-bg card-bg-1 ta-c m-5 of-h ">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Bag-White.png" alt="Bag-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top1.png"alt="">
                        </div>
                    </div>
                    <p class="ta-c mb-0 mt-0">怪獸背包</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/phone-White.png" alt="phone-White.png">
                        <div class="v-c w-30p">
                            <img src="img/shop-img/mownster-top1.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸手機殼</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/pillow-White.png" alt="pillow-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top1.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸抱枕</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Tshirt-White.png" alt="Tshirt-White.png">
                        <div class="v-c w-40p">
                            <img src="img/shop-img/mownster-top1.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸衣服</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
            </div>
            <div class="col-2 col-xl-1 v-xl-hide">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
        <!-- Top.1 END -->
               <!-- Top.2 -->
               <div id="shop-tab03"class="shop-tab-inner clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r v-xl-hide">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <div class="card-sm product card-bg card-bg-1 ta-c m-5 of-h ">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Bag-White.png" alt="Bag-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top2.png"alt="">
                        </div>
                    </div>
                    <p class="ta-c mb-0 mt-0">怪獸背包</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/phone-White.png" alt="phone-White.png">
                        <div class="v-c w-30p">
                            <img src="img/shop-img/mownster-top2.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸手機殼</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/pillow-White.png" alt="pillow-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top2.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸抱枕</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Tshirt-White.png" alt="Tshirt-White.png">
                        <div class="v-c w-40p">
                            <img src="img/shop-img/mownster-top2.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸衣服</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
            </div>
            <div class="col-2 col-xl-1 v-xl-hide">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
        <!-- Top.3 -->
        <div id="shop-tab04"class="shop-tab-inner clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r v-xl-hide">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <div class="card-sm product card-bg card-bg-1 ta-c m-5 of-h ">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Bag-White.png" alt="Bag-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top3.png"alt="">
                        </div>
                    </div>
                    <p class="ta-c mb-0 mt-0">怪獸背包</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/phone-White.png" alt="phone-White.png">
                        <div class="v-c w-30p">
                            <img src="img/shop-img/mownster-top3.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸手機殼</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/pillow-White.png" alt="pillow-White.png">
                        <div class="v-c w-50p">
                            <img src="img/shop-img/mownster-top3.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸抱枕</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
                <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h">
                    <a href=""></a>
                    <div class="po-r mt-10 p-10">
                        <img src="img/shop-img/Tshirt-White.png" alt="Tshirt-White.png">
                        <div class="v-c w-40p">
                            <img src="img/shop-img/mownster-top3.png" alt="">
                        </div>
                    </div>
                    <p class="ta-c mt-0 mb-0">怪獸衣服</p>
                    <p class="ta-c mt-0">NT.999</p>
                    <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-popup">加入購物車</button>
                </div>
            </div>
            <div class="col-2 col-xl-1 v-xl-hide">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>      
    </div>
    <!-- 頁籤的商品 END-->

    
    <div class="w-100p po-r pl-10 pl-lg-50 bs-bb bg-island z--1 movefrombottom v-hide">
        <div class="w-100p po-r cloudImg">
            <img src="img/shop-img/cloud-bg.png" alt="cloud" class="po-a w-30p w-lg-20p w-xl-10p ">
            <img src="img/shop-img/cloud-bg.png" alt="cloud" class="po-a w-30p w-lg-20p w-xl-10p ">
            <img src="img/shop-img/cloud-bg.png" alt="cloud" class="po-a w-30p w-lg-20p w-xl-10p ">
        </div>
        <div class="islandImg w-60p w-lg-50p w-xl-30p po-a ">
            <img src="img/shop-img/shop_island.gif" alt="island">
        </div>
    </div>
    <div class="container mt-50 mb-50 ta-c movefrombottom v-hide">
        <img src="img/shop-img/cloud.png" alt="cloud.png" class="w-170 x-center t-0p z--1">
        <h2 class="dis-ib m-15 po-r">一般商品</h2>
        <h4 class="ta-c m-5 mb-20">帽子</h4>
        <div class="clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
            <?php

                $sql = "select * from generalitems where geItemType = '帽子' and geItemStatus = 1 ";
                $pdoStatment = $pdo->query($sql);
                if($pdoStatment->rowCount() != 0){
                    while($rows = $pdoStatment->fetchObject()){
                        $img = $rows->geItemImg;
                        $imgArr = explode(",",$img);
                        $color = $rows->geItemColor;
                        $colorArr = explode(",",$color);
                ?>
                        <div class="card-sm product card-bg card-bg-2 ta-c m-5 of-h ">
                            <a href="generalProd.php?geItemNo=<?php echo $rows->geItemNo; ?>&geItemType=<?php echo $rows->geItemType; ?>"></a>
                            <div class="po-r of-h">
                            <input type="hidden">
                                <div class="w-200p fz-0 mt-10 pt-10 pb-10 po-r r-0p trans-img ta-l bs-bb">
                                    <?php
                                    for($i = 0; $i<count($imgArr); $i++){
                                    ?>
                                    <div class="w-50p dis-ib po-r bs-bb">
                                    <img src="img/shop-img/<?php echo $imgArr[$i]; ?>" alt="<?php echo $imgArr[$i]; ?>" class="w-80p">
                                    </div>
                                    <?php } ?>    
                                </div>
                            </div>
                            <div class="m-a pt-10">
                                <?php
                                    for($i = 1; $i<count($colorArr); $i+=2){
                                ?>
                                <div class="colorchoose" style="background-color:<?php echo $colorArr[$i]; ?>"></div>
                                <?php } ?>        
                            </div>
                            <p class="ta-c mt-0 mb-0"><?php echo $rows->geItemName; ?></p>
                            <p class="ta-c mt-0">NT.<?php echo $rows->geItemPrice; ?></p>
                            <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-gePopup" id="<?php echo $rows->geItemNo; ?>">加入購物車</button>
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

    <div class="container mb-50 movefrombottom v-hide">
        <h4 class="ta-c m-5 mb-20">外套</h4>
        <div class="clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <?php

                    $sql = "select * from generalitems where geItemType = '外套' and geItemStatus = 1 ";
                    $pdoStatment = $pdo->query($sql);
                    if($pdoStatment->rowCount() != 0){
                    while($rows = $pdoStatment->fetchObject()){
                ?>
                            <div class="card-sm product card-bg card-bg-3 ta-c m-5 of-h ">
                                <a href="generalProd.php?geItemNo=<?php echo $rows->geItemNo; ?>&geItemType=<?php echo $rows->geItemType; ?>"></a>
                                <div class="po-r mt-10 p-10">
                                    <img src="img/shop-img/<?php echo $rows->geItemImg; ?>" alt="<?php echo $rows->geItemImg; ?>">
                                </div>
                                <p class="ta-c mt-0 mb-0"><?php echo $rows->geItemName; ?></p>
                                <p class="ta-c mt-0">NT.<?php echo $rows->geItemPrice; ?></p>
                                <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-gePopup" id="<?php echo $rows->geItemNo; ?>">加入購物車</button>
                            </div>
                <?php
                        }
                    }

                ?>
            </div>
            <div class="col-2 col-xl-1">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
    </div>

    <div class="container mb-50 movefrombottom v-hide">
        <h4 class="ta-c m-5 mb-20">浴巾</h4>
        <div class="clearfix dis-f ai-c">
            <div class="col-2 col-xl-1 ta-r">
                <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
            </div>
            <div class="col-8 col-xl-10 owl-carousel owl-theme m-a">
                <?php

                    $sql = "select * from generalitems where geItemType = '浴巾' and geItemStatus = 1 ";
                    $pdoStatment = $pdo->query($sql);
                    if($pdoStatment->rowCount() != 0){
                    while($rows = $pdoStatment->fetchObject()){
                ?>
                            <div class="card-sm product card-bg card-bg-4 ta-c m-5 of-h ">
                                <a href="generalProd.php?geItemNo=<?php echo $rows->geItemNo; ?>&geItemType=<?php echo $rows->geItemType; ?>"></a>
                                <div class="po-r mt-10 p-10">
                                    <img src="img/shop-img/<?php echo $rows->geItemImg; ?>" alt="<?php echo $rows->geItemImg; ?>">
                                </div>
                                <p class="ta-c mt-0 mb-0"><?php echo $rows->geItemName; ?></p>
                                <p class="ta-c mt-0">NT.<?php echo $rows->geItemPrice; ?></p>
                                <button class="btn-main-lg dis-ib po-r mb-10 z-2 open-gePopup" id="<?php echo $rows->geItemNo; ?>">加入購物車</button>
                            </div>
                <?php
                        }
                    }

                ?>
            </div>
            <div class="col-2 col-xl-1">
                <img src="img/shop-img/arrow-right.png" alt="" class="next po-r w-40 pointer">
            </div>
        </div>
    </div>
    <div class="productShow po-f t-0p l-0p w-100p h-100p z-10 dis-n" id="productShow">
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