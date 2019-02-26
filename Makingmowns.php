<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Rwd -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">

    <title>做怪Mownster</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/M-Makingmowns.css">
    <link rel="stylesheet" href="css/header&mowsterImg.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/M-BgBirds.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="css/difference.css"> -->

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymowns">
    
    <!-- Jq vue-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Draggable -->
    <!-- <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" defer></script>

<?php require_once("header.php")?>
<?php require_once("member_login.php")?>

    <!-- FB分享外掛開始 -->
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.2&appId=923155807875988&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- FB分享外掛結束 -->
    <!-- 小鳥背景開始 -->
        <div id="background-wrap" class="background-wrap">
                <div class="x1">
                        <div class="bird"><span class="beak"></span></div>
                </div>
                <div class="x2">
                    <div class="bird"><span class="beak"></span></div>
                </div>
                        
                <div class="x3">
                    <div class="bird"><span class="beak"></span></div>
                </div>
                        
                <div class="x4">
                    <div class="bird"><span class="beak"></span></div>
                </div>
                        
                <div class="x5">
                    <div class="bird"><span class="beak"></span></div>
                </div>
                
                
            
            <div class="clouds">
            
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
            height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud big front slowest">
            <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
            c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
            C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
            S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
            height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant smaller">
            <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
            c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
            C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
            S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
            </svg>
            
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
            height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud small slow">
            <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
            c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
            C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
            S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
            </svg>
            
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
            height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant super-slow massive">
            <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
            c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
            C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
            S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
            </svg>
            
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
            height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud slower">
            <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
            c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
            C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
            S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
            </svg>
            
            </div>
        </div>
    <!-- 小鳥背景結束 -->
    <!-- 形象小怪獸 -->
    <div class="header-height col-12 t-0p l-0p " ></div>
    <div class="mownsterImage ta-c">
        <div class="dis-ib">
            <!-- 請根據頁面更換小怪獸圖片連結 -->
            <img class="mownsterImage-img" src="img/header-img/MI-make.png">
            <div class="mownsterImage-textbox dis-ib ta-l pt-20 pb-20 pr-35 pl-35" style="background-color:#eee">
            <!-- 請根據頁面更換文字 -->
                <h1 class="p-0 m-0">歡迎來到客製蛋生島～</h1>
                <p class="p-0 m-0">我是花花，在這裡你可以創造屬於自己的小怪獸，接下來就由我來幫你介紹如何創造唷！</p>
            </div>
        </div>
    </div>
    <!-- 形象小怪獸結束 -->
    <!-- 客製小怪獸開始 -->
    <!-- container -->
    <div id="trigger_04"></div>
    <div class="container po-r clearfix section section_09">
        <img class="bgc__cloud po-a r-0p  w-40p w-lg-25p" src="img/makeimg/M-cloud.png" alt="雲">
        <img class="bgc__cloudisland po-a l-30p  w-50p w-lg-10p" src="img/makeimg/M-cloud2.png" alt="雲">
        <div class="content dis-f jc-sa w-100p fw-w">
             <!-- 左側小怪獸 -->
            <div class=" mownster  col-10 col-lg-5 po-r dis-f ai-c fw-w">
                 <!-- 左側上方島嶼與怪獸 -->
                <img class="movefrombottom" src="img/makeimg/M-islands.png" alt="島嶼">
                <div class="mownster__egg col-9 po-a dis-ib  b-45p b-lg-45p animove0" >
                <!-- 底圖與第一屏換身型控制顏色 -->
                    <div class="mownster__drag dis-b po-a" id="dragarea">
                        <!-- 蛋與身形 -->
                        <div class="mownster__bodysvg dis-b">
                            <img class="mownster__body--img po-a org" src="img/makeimg/M-egg1.svg" alt="身體">
                            <img class="mownster__body--img po-a bodyshape1 sample dis-n" alt="隱影">
                            <img class="mownster__body--img img--Gradation po-a dis-n" src="img/makeimg/M-bodyshape1.svg" alt="遮罩">
                        </div>
                        <!-- 外框與內容物件 -->
                        <div class="mownster__clip clip0">
                            <div class="mownster__eyesposition w-30p po-r t-23p l-35p" id="drageyes">
                                <img class="mownster__egg--img" src="" alt="">
                            </div>
                            <div class="mownster__mouthposition w-30p po-r t-25p l-35p" id="dragmouth">
                                <img class="mownster__egg--img" src="" alt="">
                            </div>
                            <div class="mownster__accessoryposition w-45p po-r t-26p l-27p" id="dragaccessory">
                                <img class="mownster__egg--img" src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 左側下方選擇--桌機 -->
                <div class="for--desk">
                    <div class="mownster__buttons col-7 col-lg-9 card-sm po-a l-50p">
                        <div class="mownster__functionitems dis-f jc-sa ai-c w-100p">
                            <!-- 可用.toggleClass -->
                            <div class="mownster__plus col-3 ta-c pointer icon--disabled plus" >
                                <i class="fas fa-plus va-m"></i>
                            </div>
                            <div class="mownster__minus col-3 ta-c pointer icon--disabled minus">
                                <i class="fas fa-minus va-m"></i>
                            </div>
                            <div class="mownster__turn col-3 ta-c pointer icon--disabled turn">
                                <i class="fas fa-undo va-m"></i>
                            </div>
                            <div class="mownster__trash col-3 ta-c pointer icon--disabled trash">
                                <i class="fas fa-trash-alt va-m"></i>
                            </div>
                        </div>
                        <div class="mownster__functionbuttons dis-if jc-sa ai-c mt-20 w-100p">
                            <button class="mownster__confirm btn-sub-sm fz-b popup__btn btn--disabled">確認</button>
                            <button class="mownster__reset btn-sub-sm fz-b reset__btn">重設</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 右側選擇 -->
            <div class="selector col-11 col-lg-6 mt-10 mt-lg-0">
                <!-- 右側上方頁籤 -->
                <div id="tabs" >
                    <div class="tabs selector__choose＿group mb-20 dis-f jc-se">
                        <button class="selector__choose--choosed choose--body btn-main-lg ml-5 mr-5" id="bodybutton">身型</button>
                        <button class="selector__choose btn-main-lg ml-5 mr-5" id="eyesbutton">眼睛</button>
                        <button class="selector__choose btn-main-lg ml-5 mr-5" id="mouthbutton">嘴巴</button>
                        <button class="selector__choose btn-main-lg ml-5 mr-5" id="accessorybutton">配件</button>
                    </div>
                    <!-- 右側下方物件 -->
                    <div class="selector__items__group DD">
                        <!-- 右側下方物件 第一屏身型-->
                        <div class="selector__items card-sm dis-b">
                            <h2 class="mt-0 ">樣式</h2>
                            <div class="Selecter__items__group body-choose dis-f jc-se fw-w">
                                <div class="selector__body col-4 col-lg-2 po-r pointer" id="body1" >
                                    <img class="item__body" src="img/makeimg/M-bodyshape1.svg" alt="第一身形" id="srcImg">
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape2.svg" alt="第二身形"> 
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r  pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape3.svg" alt="第三身形"> 
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r mt-20 mt-lg-0 pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape4.svg" alt="第四身形"> 
                                </div> 
                                <div class="selector__body col-4 col-lg-2 po-r  mt-20 mt-lg-0 pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape5.svg" alt="第五身形"> 
                                </div>
                            </div>
                            <h2  class="">顏色</h2>
                            <div class="selecter__color">
                                <section id="picker" class="dis-f fw-w ">
                                    <input type="range" min="0" step="0.1" max="360" id="hsl-h" class="pointer col-12 ">
                                    <input type="range" min="0" step="0.1" max="100" id="hsl-s" class="pointer col-12  mdis-n">
                                    <input type="range" min="0" step="0.1" max="100" id="hsl-l" class="pointer col-12 mt-20">
                                    <div  id="sample" class="col-12 dis-b pointer"></div>
                                </section>
                            </div>
                        </div>
                        <!-- 右側下方物件 第二屏眼睛-->
                        <div class="selector__items card-sm dis-n">
                            <h2 class="mt-0 ">樣式</h2>   
                            <div class="Selecter__items__group dis-f jc-se ai-c fw-w">
                                <div class="selector__eye col-5 bs-bb pt-lg-20 pb-lg-20 pl-lg-40 pr-lg-40 pointer">
                                    <img id="eye1" src="img/makeimg/M-eyes-1.svg" alt="眼睛一">  
                                </div>
                                <div class="selector__eye col-5 bs-bb pt-lg-20 pb-lg-20 pl-lg-40 pr-lg-40 pointer">
                                    <img src="img/makeimg/M-eyes-2.svg" alt="眼睛二"> 
                                </div>
                                <div class="selector__eye col-5 bs-bb pt-lg-20 pb-lg-20 pl-lg-40 pr-lg-40 pointer">
                                    <img src="img/makeimg/M-eyes-3.svg" alt="眼睛三"> 
                                </div>
                                <div class="selector__eye col-3 bs-bb pt-lg-20 pb-lg-20 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/M-eyes-4.svg" alt="眼睛四"> 
                                </div> 
                                <div class="selector__eye col-3 bs-bb pt-lg-20 pb-lg-20 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/M-eyes-5.svg" alt="眼睛五"> 
                                </div>
                            </div>
                        </div>
                        <!-- 右側下方物件 第三屏嘴巴-->
                        <div class="selector__items card-sm dis-n">
                            <h2 class="mt-0 ">樣式</h2>   
                            <div class="Selecter__items__group dis-f jc-se fw-w ">
                                <div class="selector__mouth col-6 col-lg-5 bs-bb mt-20 mt-lg-0 pt-lg-20 pb-lg-20 pl-lg-30 pr-lg-30 pointer">
                                    <img src="img/makeimg/M-mouth-1.svg" alt="嘴巴一">  
                                </div>
                                <div class="selector__mouth col-6 col-lg-5 bs-bb mt-20 mt-lg-0 pt-lg-20 pb-lg-20 pl-lg-30 pr-lg-30 pointer">
                                    <img src="img/makeimg/M-mouth-2.svg" alt="嘴巴二"> 
                                </div>
                                <div class="selector__mouth col-6 col-lg-5 bs-bb mt-20 mt-lg-0 pt-lg-20 pb-lg-20 pl-lg-30 pr-lg-30 pointer">
                                    <img src="img/makeimg/M-mouth-3.svg" alt="嘴巴三"> 
                                </div>
                                <div class="selector__mouth col-6 col-lg-5 bs-bb mt-20 mt-lg-0 pt-lg-20 pb-lg-20 pl-lg-30 pr-lg-30 pointer">
                                    <img src="img/makeimg/M-mouth-4.svg" alt="嘴巴四"> 
                                </div> 
                            </div>
                        </div>
                        <!-- 右側下方物件 第四屏配件-->
                        <div class="selector__items card-sm dis-n ai-c">
                            <h2 class="mt-0 ">樣式</h2>   
                            <div class="Selecter__items__group dis-f jc-se fw-w ">
                                <div class="selector__accessory col-4  bs-bb pt-lg-10 pb-lg-10 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/Ｍ-accessory-1.svg" alt="配件一">  
                                </div>
                                <div class="selector__accessory col-4  bs-bb pt-lg-10 pb-lg-10 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/Ｍ-accessory-2.svg" alt="配件二">   
                                </div>
                                <div class="selector__accessory col-4  bs-bb pt-lg-10 pb-lg-10 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/Ｍ-accessory-3.svg" alt="配件三">  
                                </div>
                                <div class="selector__accessory col-5  bs-bb pt-lg-0 pb-lg-0 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/Ｍ-accessory-4.svg" alt="配件四"> 
                                </div>
                                <div class="selector__accessory col-5  bs-bb pt-lg-0 pb-lg-0 pl-lg-20 pr-lg-20 pointer">
                                    <img src="img/makeimg/Ｍ-accessory-5.svg" alt="配件五"> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 左側下方選擇--手機 -->
            <div class="for--phone col-11 mt-20">
                <div class="mownster__buttons card-sm">
                    <div class="mownster__functionitems dis-f jc-sa ai-c w-100p">
                        <div class="mownster__plus col-3 ta-c pointer icon--disabled plus">
                            <i class="fas fa-plus va-m"></i>
                        </div>
                        <div class="mownster__minus col-3 ta-c pointer icon--disabled minus">
                            <i class="fas fa-minus va-m"></i>
                        </div>
                        <div class="mownster__turn col-3 ta-c pointer icon--disabled turn">
                            <i class="fas fa-undo va-m"></i>
                        </div>
                        <div class="mownster__trash col-3 ta-c pointer icon--disabled trash">
                            <i class="fas fa-trash-alt va-m"></i>
                        </div>
                    </div>
                    <div class="mownster__functionbuttons dis-if jc-sa ai-c mt-20 w-100p">
                        <button class="mownster__confirm btn-sub-sm fz-b popup__btn btn--disabled">確認</button>
                        <button class="mownster__reset btn-sub-sm fz-b reset__btn">重設</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 課製小怪獸結束 -->
    
     <!-- popup開始 -->
    <?php if(isset($_SESSION["memName"])){ ?>
        <div class="popup--Share">
            <div class="popup__wrap popup__close z-i-998">
            </div>
            <div class="popup__box col-7 col-lg-4 card-lg z-i-998">
                <div class="popup__icons dis-f fw-w">
                    <a href="shop.php" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c order-1  pointer">
                        <img id="pro" src="img/makeimg/M-popicon-01.svg" alt="客製商品icon">
                        <h5 class="mt-0 mb-0 ta-c">客製商品</h5>
                    </a>
                    <a href="beautiful.php" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c order-2  pointer">
                        <img src="img/makeimg/M-popicon-02.svg" alt="參加選美icon">
                        <h5 class="mt-0 mb-0 ta-c">參加選美</h5>
                    </a>
                    <a id="fbclick" class="popup__icon icon--fb col-6 col-lg-4 dis-f fd-c ai-c order-3 pointer">
                        <img src="img/makeimg/M-popicon-03.svg" alt="分享社群icon">
                        <h5 class="mt-0 mb-0 ta-c">分享社群</h5>
                    </a>
                    <a href="class-doll.php" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-4 pointer">
                        <img src="img/makeimg/M-popicon-04.svg" alt="手做布偶icon">
                        <h5 class="mt-0 mb-0 ta-c">手做布偶</h5>
                    </a>
                    <a href="class-print.php" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-5  pointer">
                        <img src="img/makeimg/M-popicon-05.svg" alt="3D列印icon">
                        <h5 class="mt-0 mb-0 ta-c">3D列印</h5>
                    </a>
                    <a href="#" id="download" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-6 pointer">
                        <img src="img/makeimg/M-popicon-06.svg" alt="下載圖片icon">
                        <h5 class="mt-0 mb-0 ta-c">下載圖片</h5>
                    </a>
                </div>
                <i class="close-btn popup__close po-r far fa-times-circle"></i>
            </div>
        </div>
        <?php if(!$_SESSION["memImg"]==Null){ ?>
                <div class="popup--member">
                    <div class="popup__wrap  popup__memberclose z-i-999">
                    </div>
                    <div class="popup__box col-7 col-lg-4 card-lg z-i-999">
                        <div class="popup__meminfor">
                            <h5 class="ta-c">是否用將誕生的小怪獸取代目前小怪獸?</h5>
                            <div class="mownster__member dis-if jc-sa ai-c mt-20 w-100p">
                                <button class="btn-sub-sm fz-b popup__memberclose" onclick="sendtochangeImg()">確認</button>
                                <button class="btn-sub-sm fz-b popup__memberclose">取消</button>
                            </div>
                        </div>
                        <i class="close-btn popup__memberclose po-r far fa-times-circle"></i>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="popup--member">
                    <div class="popup__wrap  popup__memberclose z-i-999">
                    </div>
                    <div class="popup__box col-7 col-lg-4 card-lg z-i-999">
                        <div class="popup__meminfor">
                            <h5 class="ta-c">確認誕生小怪獸?</h5>
                            <div class="mownster__member dis-if jc-sa ai-c mt-20 w-100p">
                                <button class="btn-sub-sm fz-b popup__memberclose" onclick="sendtochangeImg()">確認</button>
                                <button class="btn-sub-sm fz-b popup__memberclose">取消</button>
                            </div>
                        </div>
                        <i class="close-btn popup__memberclose po-r far fa-times-circle"></i>
                    </div>
                </div>
                <?php    } ?>
    <?php }else { ?>
            <div class="popup--Share z-i-998">
                <div class="popup__wrap popup__close z-i-998">
                </div>
                <div class="popup__box col-7 col-lg-4 card-lg z-i-998">
                    <div class="popup__icons dis-f fw-w">
                        <a  class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c order-1  member-login-popup__btn pointer">
                            <img id="pro" src="img/makeimg/M-popicon-01.svg" alt="客製商品icon">
                            <h5 class="mt-0 mb-0 ta-c">客製商品</h5>
                        </a>
                        <a  class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c order-2  member-login-popup__btn pointer">
                            <img src="img/makeimg/M-popicon-02.svg" alt="參加選美icon">
                            <h5 class="mt-0 mb-0 ta-c">參加選美</h5>
                        </a>
                        <a id="fbclick" class="popup__icon icon--fb col-6 col-lg-4 dis-f fd-c ai-c order-3 pointer">
                            <img src="img/makeimg/M-popicon-03.svg" alt="分享社群icon">
                            <h5 class="mt-0 mb-0 ta-c">分享社群</h5>
                        </a>
                        <a  class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-4 member-login-popup__btn pointer">
                            <img src="img/makeimg/M-popicon-04.svg" alt="手做布偶icon">
                            <h5 class="mt-0 mb-0 ta-c">手做布偶</h5>
                        </a>
                        <a class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-5  member-login-popup__btn pointer">
                            <img src="img/makeimg/M-popicon-05.svg" alt="3D列印icon">
                            <h5 class="mt-0 mb-0 ta-c">3D列印</h5>
                        </a>
                        <!-- <a  id="download" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-6 pointer"> -->
                        <a   href="#" id="download" class="popup__icon col-6 col-lg-4 dis-f fd-c ai-c mt-lg-20 order-6 pointer" >
                            <img src="img/makeimg/M-popicon-06.svg" alt="下載圖片icon">
                            <h5 class="mt-0 mb-0 ta-c">下載圖片</h5>
                        </a>
                    </div>
                    <i class="close-btn popup__close po-r far fa-times-circle"></i>
                </div>
            </div>
    <?php } ?>


    <div class="popup--mownster">
        <div class="popup__wrap  popup__memberclose z-i-999">
        </div>
        <div class="popup__box col-7 col-lg-4  z-i-999">
            <img  class="eggBirth w-80p w-lg-40p v-c" src="img\makeimg\egg3.gif" alt="誕生動畫ｚｓｓｓｓｓ" srcset="">
        </div>
    </div>
    <!-- popup結束 -->

    <!-- FB內嵌語法開始 -->
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ffrontend.iiietc.ncu.edu.tw%2Fdemo-projects%2FCD104%2FCD104G2%2FMakingmowns.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
    <!-- FB內嵌語法結束 -->

    <!-- 為了存圖使用開始-->
        <div class="group__svg--disn dis-n">
            <!-- body1 -->
            <svg xmlns="http://www.w3.org/2000/svg" id="svg1"  viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
                <path fill="#AEAEAE"  stroke="none" class="sample"  d="M213.1,116.9c0.7-38.2-20.9-77.8-65.9-89.6c1.4-12.6-28.4-28.5-32.7-6.2c-6.1-8.3-29.2-17.6-26.1,9.1
                    C76.1,25.9,45.5,27,62.1,50.6c-12.8-1.9-33,2.6-15.5,24.2c-12.8,0.3-33.9,13-3.3,35.4c-0.9,4.7-1.5,9.4-1.8,14
                    c-8.7,14.7-18.8,34-23.7,43.6c-3.1,5.3-5,8.8-5,8.8l10-3.2l4.1,9.3c-0.3-1.2-0.3-2.6-0.1-4.2l0.6,1.5c-1.7-4.2,7.1-19.5,15.7-32.9
                    c4.7,20.1,17.7,37.4,42.6,47.1l2.7,26.8c-31.7,3.9-24.7,23.8-7.6,22.8c6.5,0.8,15.1-1.6,23.7-9.9v-34.4c6.2,1.2,12.9,2,20,2.5
                    c7.4,0.2,14.4-0.5,20.8-1.8l2.1,31.9c21.1,10.9,32.7,11.7,37.8,8.3c13.2-5.3-4.7-31.8-21.7-19.8v-26.4c3.6-1.7,7-3.6,10.2-5.7
                    c19.3-11.4,31.7-30.5,36.6-51.7C217.7,154.5,226,178,226,178l3.3-10.5l6.7,4c0.3-0.8,0.4-1.7,0.4-2.7
                    C238.9,157.6,221.9,130.2,213.1,116.9z"/>
            </svg>
            <!-- body2 -->
            <svg  xmlns="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
            <path fill="#AEAEAE"  stroke="none" class="sample" d="M203,154.7c4.8-2.7,7.4-8,6.4-13.3c-0.5-2.3-1.6-4.4-3.2-6.2c-1.2-2.9-3.3-5.4-6-7c4.7-3,7.2-8.7,6.3-14.4
                c-1.1-6.1-5.8-10.6-11.6-11.6c3.4-4.5,3.9-10.6,1-15.7c-3-5.3-9.1-7.9-14.8-6.9c1.4-4.6,0.4-9.8-2.9-13.5c8.6-18.7,9-38.1,9-38.1
                c1.3-10.1-5.8-19.6-15.9-20.9c-10.1-1.3-19.6,5.8-20.9,15.9c-0.8,5.1,0.6,9.9,3.7,13.6c3.2,7.6,4.4,14.5,4.4,20.5
                c-1.6-3-4.3-5.4-7.8-6.7c-5.8-2.1-12-0.2-15.9,4.2c-2.2-5.1-7.2-8.7-13.2-8.7c-6.1,0-11.4,3.9-13.5,9.3c-3.9-4-9.8-5.6-15.4-3.7
                c-0.7,0.2-1.3,0.5-1.9,0.9c0.5-4.8,1.8-10.1,4.2-15.8c2.9-3.7,4.3-8.5,3.5-13.6C97.4,12.8,87.9,5.8,77.8,7.1
                C67.7,8.3,60.6,17.8,62.1,27.9c0,0,0.4,18.5,8.5,36.9c-1,0.5-2,1.1-2.9,1.8c-4.7,4-6.3,10.3-4.3,15.7c-5.5-0.6-11.1,1.9-14.1,7.1
                c-3,5.3-2.4,11.9,1.4,16.4c-5.5,1.3-9.8,5.6-10.8,11.4c-1.1,6.1,1.9,11.9,6.9,14.9c-3.3,2.1-5.5,5.5-6.2,9.4c-0.5,1-0.9,2.1-1.2,3.3
                c-1.1,5.6,1.9,10.9,7.1,13.6c-4.8,2.7-7.4,8-6.4,13.3c1.1,5.6,5.9,9.8,11.7,10.8c-3.4,4.2-4,9.8-1,14.4c3.2,5,9.3,7.2,15.1,6.4
                c-1.6,5,0,10.4,4.7,14c4.8,3.7,11.4,4,16.7,1.3c0.3,5,3.8,9.5,9.1,11.5l-2.4,6.3c-1,2.7,1,5.6,3.9,5.6h16c3,0,5-3,3.9-5.8l-3.2-7.4
                c2.6,3.4,7,5.6,12,5.6c5.4,0,10.2-2.6,12.6-6.6l-3.2,8.7c-1,2.6,1,5.5,3.7,5.5h16.4c2.9,0,4.8-2.9,3.7-5.6l-3.2-7.5
                c5.5-2.1,9-6.9,9-12.1c5.1,2.2,11.4,1.8,16-1.6c4.8-3.7,6.4-9.5,4.3-14.6c5.6,0.6,11.4-1.8,14.4-6.6c3.2-5,2.4-10.9-1.4-15.1
                c5.5-1.1,9.9-5.1,11.1-10.6S208.1,157.4,203,154.7z"/>
            </svg>
            <!-- body3 -->
            <svg  xmlns="http://www.w3.org/2000/svg" id="svg3"  viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
            <path fill="#AEAEAE"  stroke="none" class="sample" d="M205.9,90.5c-4.2-4.8-9.3-9-15.1-11.4c-0.7-0.3-1.7-0.7-2.9-1c0-5.9-0.1-11-0.4-14.2c-0.7-9.7-0.8-13.7-2.6-18.8
                c-0.4-1.6-0.9-3.1-1.6-4.9c-2.6-6.4-6.7-11.9-14.4-18.3c-7.7-6.4-17.8-8.2-25.5-9.1c-7.5-1-18.1-0.5-18.1-0.5s-15.2-1-24.6,1.8
                c-9.3,2.7-13.2,5-17.3,9.6c-13.6,14.4-17,35-17,54.6c0,0.2,0,0.4,0,0.7c0,0.3,0,0.5,0,0.8c0,0.5,0,1,0,1.5c-1.4,0.6-2.6,1.2-3.4,1.7
                c-5.5,3.2-10.1,7.9-13.6,13.2c-12,17.8-18.1,42.5-11.7,63.9c0.2,0.5,0.3,1,0.5,1.4c0,0,0.8,7.5,2.1,11.4c1.1,2.6,2.4,5.1,5.3,7.5
                c2.9,2.6,4.7,0.6,4.7,0.6s0.5-3.8-0.2-6.4c0,0.1,0,0.1,0.1,0.2c-0.1-0.3-0.1-0.5-0.2-0.8c0.4,0.8,1.3,2.2,2.4,3.3
                c1.2,1.2,2.6,2,3.9,0.8c0.2-0.2,0.3-0.3,0.5-0.5c-0.1-0.1-0.1-0.1-0.2-0.2c1.9-2.9-2.3-9.1-4-10.9c0,0,6.4,2.1,9.5,0.9
                c0.3-0.1,0.6-0.2,0.9-0.4c0,0-0.1,0-0.2,0c0.4-0.3,0.7-0.6,0.8-1.1c1.1-3.9-2.4-5.1-7.1-5.8c-4.7-0.6-4.7-0.6-6.4-3.2
                c-1-2.5-1.6-5.2-1.9-8.2c0.1,0.6,0.3,1.2,0.5,1.8c0.2,0.6,0.5,1.1,0.8,1.6c-3.5-17.6,5.9-44.2,17.3-54.3c0.2,6.2,0.4,12.3,0.5,18.5
                c0.2,9,0.2,18.1,0.3,27.1c0.2,6.9,0.2,14,0.3,20.9c0,4.7,0.2,9.3,0.2,14c0,0.2,0,0.3,0,0.5c0,1,0,1.8,0,2.6c0,3.8,0,3.9,0,3.9l1-1.5
                c0,4.2,0,4.2,0,4.2l5.9-9.1l6.7,14.6l6.7-14.5l5,15.5l0-0.1l0.9,2.9l6.7-21.9l0.5,1.3l0.5,43.4L79.7,242l42.9-5.1V190l2.4,5.2
                l7.5-15.5v10.5v46.7l42.9,5.1l-22.3-22.3l0.3-30.2l2.9,8.4l6.7-22l8.5,19.3l6.7-20.2l8.5,10.1c0,0,1.8-59.7,0.8-67.9
                c0-3.9,0.2-13.5,0.3-23.8c0.5,0.3,1,0.6,1.5,0.9c12.8,8.7,25.5,35.5,23.1,53.4c0.1-0.1,0.2-0.2,0.2-0.4c0,0.2,0,0.5-0.1,0.7
                c-1.8,2.6-1.8,2.6-6.3,3.2c-4.5,0.6-8,1.9-6.7,5.8c0,0.1,0.1,0.2,0.2,0.3c-0.1,0-0.1,0-0.2,0c0.3,0.5,0.7,0.9,1.3,1.1
                c0.1,0,0.2,0.1,0.3,0.1c0,0,0,0,0,0c2.8,1,8.1-0.6,9-0.9c-0.1,0-0.1,0.1-0.1,0.2c0-0.1,0.1-0.1,0.1-0.2c0.1,0,0.1,0,0.1,0
                c-1.7,1.8-5.9,8.3-3.7,11.1c0,0,0,0,0,0c0,0,0.1,0,0.1,0.1c0.1,0.1,0.1,0.2,0.2,0.3c2.9,2.6,6.3-4.5,6.3-4.5
                c-1.1,2.6-0.6,7.5-0.6,7.5s1.8,1.9,4.5-0.6c2.9-2.6,4-5.1,5.1-7.5c0.6-2.4,1.3-6.3,1.6-8.8c0.5-0.8,0.6-1.6,1-2.6
                C228.7,130.3,219.9,106.5,205.9,90.5z M49.6,173.4C49.6,173.4,49.6,173.3,49.6,173.4C49.6,173.3,49.6,173.3,49.6,173.4
                C49.6,173.4,49.6,173.4,49.6,173.4z"/>
            </svg>
            <!-- body4 -->
            <svg  xmlns="http://www.w3.org/2000/svg" id="svg4"  viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
            <path  fill="#AEAEAE"  stroke="none" class="sample" d="M214.6,157.2c-1.9-7.8-5.3-15.2-9.4-21.9c-3-5-5.8-10-8.9-14.8c-1.9-3-3.4-5.2-3.6-8.7c-0.5-12.7-0.2-25.1-2-37.8
                c-2.3-15.6-8.7-31.1-20.3-42.2c-2.3-2.3-5.8-4.2-7.2-7.5c-2-5.3-5.2-10.2-9.2-14.1c-0.5-0.3-0.8-0.6-1.2-0.8c-0.2,0-0.5,0-0.6,0
                c-0.9,0-1.7,0.4-2.2,1.1c-1.5,1.6-4.2,6.2-4.2,6.2s0.5,0.2,1.2,0.3c-0.3,0.1-0.6,0.1-1.1,0c-2.7-0.9-5.5-1.1-8.1-1.2
                c-9.5-0.6-19.1-0.6-28.6-0.5c-2.3-6.2-5.8-6.8-8.4-6V8.8c-2.2-0.8-5.9,11.2-5.9,11.2l0.6-0.2c-0.1,0.4-0.2,0.6-0.2,0.6
                c-4,3.5-9.1,5.6-13.4,8.6c0-0.1,0-0.2,0-0.3c-0.2,0-0.3,0.2-0.5,0.3c-3.4,2.5-6.2,6.4-8.7,10.2c-3.3,4.8-5.3,10.5-6.2,16.2
                c-1.4,8.1-1.6,16.6-1.4,24.8c0.1,4.6,0.3,9.3,0.6,13.9c0-0.1-0.1-0.1-0.1-0.2c0.1,0.5,0.1,1,0.2,1.5c0.1,1.1,0.1,2.1,0.2,3.2
                c0.2,3.4,0.6,6.9,0.9,10.3c0.2,1.8,0.7,3.9,0.7,5.8c0,1.5-0.3,2.9-1.2,4.1c-2.3,3-5.3,5.3-7.8,8.3c-2.8,3.3-5.3,6.7-7.8,10.3
                c-2.8,4.1-5.2,8.4-6.5,13.3c-0.2,0.6-0.4,1.1-0.6,1.7c-1.2,4.1-2.8,8.7-1.7,13c0.3,1.4,1.2,2.8,2.3,3.8c2.4,2.4,6.3,3.3,8.9,0.4
                c1.3-1.4,1.8-3.5,1.8-5.5c0-1.6-0.3-3.3-0.8-4.6c-0.9-2.4-1.7-4.2-1.7-6.2c0-1.2,0.4-2.5,1.4-3.9c1.7-2.7,4.4-4.8,6.9-6.7
                c3.6-2.6,7.4-5,11.6-6.7c4,12.6,4.8,26,6.5,39c0.8,6.2,1.6,12.5,1.9,18.7c0.3,4.4,1.9,10-0.6,14.1c-1.8,3-5.7,4.3-9.3,4.3
                c-0.8,0-1.6-0.1-2.3-0.2c-5.5-1.1-9.7-5-13.1-9.1c-2-2.5-3.7-5.5-5.9-7.8c0,0,0,0.1,0,0.1c0,0-0.1-0.1-0.1-0.1
                c-0.3,0.9-0.3,1.9-0.5,2.8c-1.3,10.7,3.5,20.9,10.9,28.4c3.4,3.4,7.3,6.3,11.4,8.5c15,7.7,32.6,7.7,48.7,3.7
                c8.1-2,15.9-5.2,23.3-9.4c0-0.1-0.1-0.1-0.1-0.2c6.8-3.9,13.1-8.7,18.7-14.2c6.4-6.4,11.6-13.9,15.8-22c0,0,0,0,0,0
                c3.4-6.6,6.2-13.7,8.5-20.8c1.6-5.2,3-10.3,4.1-15.6c3.4-15.8,0.8-18.9,3.1-18.6c2.8,0.3,5.6,3.9,7.2,5.8c2,2.5,3.9,5.3,4.8,8.4
                c0.9,3.3,0.9,6.9-0.3,10.2c-0.6,1.6-1.7,3.1-3,4.4c-1.4,1.4-3.1,2.8-2,5.2c1.7,3.6,7.2,5.8,10.8,4.4c2.3-0.8,3.9-3.3,4.5-5.8
                C216.1,165.9,215.7,161.4,214.6,157.2z"/>
            </svg>
            <!-- body5 -->
            <svg xmlns="http://www.w3.org/2000/svg" id="svg5"    viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
                <path  fill="#AEAEAE"  stroke="none" class="sample" d="M246.8,176.5c-0.5-6.3-1.6-12.7-3.3-18.8c-2.5-8.9-5.9-17.1-10.3-24.9c-3.6-6.2-7.8-12-12.5-17.3c-1-1-1.9-1.9-2.9-3
                    c0.7-0.1,1.3-0.2,2-0.2c0.2,0,0.5,0,0.8,0c1.6,0.2,3.2,0.6,4.8,0.8c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0.3,0,1,0,1.1-0.3
                    c0.2-0.3,0.2-1,0-1.3c-0.3-0.6-0.8-1.1-1.4-1.6s-1.3-0.6-2.2-1.1c1,0,1.6,0,2.2-0.2c1.6-0.2,3.3-0.5,4.9-0.8c0.3,0,0.6-0.5,0.6-0.6
                    c0-0.3-0.3-0.8-0.5-1c-0.6-0.3-1.3-0.6-1.9-0.6c-1.4-0.2-3-0.2-4.3-0.3c-1.4-0.2-3-0.2-4.8-0.3c0.5-0.5,0.6-0.6,0.8-0.8
                    c1.6-1.3,3-2.9,3.6-4.8c0.2-0.6,0.5-1.4-0.2-1.7c-0.3-0.2-0.6-0.2-0.8-0.2c-0.3,0-0.6,0.1-0.9,0.2c-1,0.5-1.9,1.1-2.9,1.9
                    c-1.1,1-2,1.8-3.1,2.9c0,0,0-0.1,0-0.1c0.3-2.7,0-5.2-1-7.9c-0.2-0.5-0.6-1-1-1c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.3,0-1,0.3-1.3,0.8
                    c-1.1,1.6-1.4,3.6-1.4,5.5c0,0.3,0,0.6-0.2,1.2c-0.5-0.9-0.7-1.5-1-2c-0.3-0.6-0.8-1.3-1.3-1.9c-1-1.1-1.9-2.2-3.6-2.7
                    c-0.3-0.1-0.5-0.1-0.7-0.1c-0.6,0-1,0.5-0.8,1.4c0.2,0.8,0.5,1.4,0.8,2.1c0.3,0.8,1,1.4,1.3,2.2c0.3,1,0.6,1.9,1,3.1
                    c-0.2-0.1-0.4-0.1-0.4-0.1c-1.7-1.1-3.5-2.2-5.2-3.6c0,0,0,0.1,0.1,0.2c-0.1-0.1-0.2-0.1-0.2-0.2c-0.3-0.2-0.5-0.6-0.5-1
                    c-0.3-1.9-0.5-4-1-5.7c0-0.3,0-0.5,0-0.6v-0.2c0-0.3,0-0.8,0-1.1c0-0.3,0-0.8,0-1.1s0-0.8-0.2-1.1c0-0.3-0.2-0.8-0.2-1.1
                    s-0.2-0.8-0.2-1.1s-0.2-0.8-0.2-1.1c0-0.3-0.2-0.8-0.2-1.1s-0.2-0.6-0.3-1.1c-0.2-0.3-0.2-0.6-0.3-1.1c-0.2-0.3-0.2-0.6-0.3-1.1
                    c-0.2-0.3-0.2-0.6-0.3-1.1c-0.2-0.3-0.2-0.6-0.3-1.1c-0.2-0.3-0.3-0.6-0.3-1.1c-0.2-0.3-0.3-0.6-0.3-1c-0.2-0.3-0.3-0.6-0.5-1
                    c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1
                    c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1c-0.2-0.3-0.3-0.6-0.5-1s-0.3-0.6-0.5-1
                    c-0.2-0.3-0.3-0.6-0.5-0.8c-0.2-0.3-0.3-0.6-0.5-0.8c-0.2-0.3-0.3-0.6-0.5-0.8c-0.2-0.3-0.3-0.5-0.5-0.8s-0.3-0.5-0.5-0.8
                    s-0.3-0.5-0.5-0.8s-0.3-0.5-0.5-0.8c-0.2-0.3-0.3-0.5-0.5-0.8c-0.2-0.3-0.3-0.5-0.5-0.8c-0.2-0.2-0.3-0.5-0.5-0.6
                    c-0.2-0.2-0.3-0.5-0.5-0.6c-0.2-0.2-0.3-0.5-0.5-0.6c-0.2-0.2-0.3-0.5-0.5-0.6c-0.2-0.2-0.3-0.5-0.5-0.6c-0.2-0.2-0.3-0.3-0.5-0.6
                    c-0.2-0.2-0.3-0.3-0.5-0.5s-0.3-0.3-0.5-0.5s-0.3-0.3-0.5-0.5s-0.3-0.3-0.3-0.5c-0.2-0.2-0.3-0.3-0.3-0.5c-0.2-0.2-0.2-0.3-0.3-0.5
                    c-0.2-0.2-0.2-0.3-0.3-0.3c-0.2-0.2-0.2-0.2-0.3-0.3c-0.2-0.2-0.2-0.2-0.3-0.3c-0.2-0.2-0.2-0.2-0.3-0.3c-0.3-0.3-0.6-0.6-1-1
                    c-0.2-0.2-0.5-0.3-0.6-0.5c-0.1-0.2-0.3-0.2-0.5-0.3c-0.3-0.2-0.8-0.5-1.1-0.6c-0.3-0.2-0.8-0.5-1.1-0.6c-0.3-0.2-0.8-0.5-1.1-0.6
                    c-0.3-0.2-0.8-0.5-1.1-0.6c-0.5-0.2-0.8-0.3-1.3-0.6c-0.5-0.2-0.8-0.3-1.3-0.5s-0.8-0.3-1.3-0.5s-0.8-0.3-1.3-0.5
                    c-0.3-0.2-0.6-0.3-1-0.3c-1.3-0.5-2.5-0.8-4-1.4c0.3-0.2,0.5-0.2,0.6-0.2c5.4,0.5,10.5,1.7,15.4,4.1c-3-5.2-7.4-8.9-12.7-11.2
                    c0-0.2,0-0.2,0.2-0.3c2.7-0.3,5.2-0.6,7.9-1.1c0-0.2,0-0.2,0-0.3c-4.6-3.8-9.8-5.2-15.7-4.9c0-0.2,0-0.2,0-0.3
                    c2.2-1.3,4.6-2.7,6.8-4.1c-5.2-1.9-10.5-1.7-15.8-0.5c1.1-2.5,3.2-4.3,5.1-5.9c-5.2-1-10.1-0.2-15,1.7c1-4,3.3-6.8,6.2-9
                    c-9.5,2.9-16.9,8.4-22.5,17.1c-0.8-3.8,0-7.6,1-11.1c-3.2,3.6-4.9,7.9-6,12.8c-2.5-2.7-5.1-4.8-8.1-6.2c-3.5-1.7-8.2-3.2-9.3-2.9
                    c3.2,2.5,5.7,5.5,7.3,9.7c-4-0.8-7.9-1.3-11.6-0.8c-4,0.5-7.6,1.4-10.9,3.5c3,0.5,5.5,1.4,7.8,3.8c-3.8,0.5-7.4,1.1-10.9,2.7
                    c-3.5,1.4-6.7,3.5-9.5,6c2.1,0.3,4.3,0.6,6.5,0.8c-0.2,0.2-0.3,0.3-0.3,0.3C77.7,47.1,76,48,74.5,49c-0.5,0.3-0.8,0.6-1.3,0.8
                    c0.5,1.2-20.1,22.5-20.1,43.6c0,0.2,0,0.3,0,0.5c-0.3,2.1-0.6,4.1-1,6.2c0,0.2-0.2,0.5-0.3,0.6c-1.7,1.3-3.8,2.5-5.7,3.8
                    c0-0.3,0-0.6,0.2-0.8c0.3-1.6,1-3,1.9-4.3c0.5-0.6,0.8-1.4,1-2.2c0.2-1-0.3-1.4-1.3-1.3c-0.6,0.2-1.3,0.5-1.7,0.8
                    c-1.7,1.3-3,3.3-4,5.2c-0.2,0.2-0.2,0.3-0.5,0.6c0-1,0-1.7-0.2-2.7c-0.2-1.6-0.5-3.3-1.6-4.6c-0.6-0.6-1.3-0.6-1.6,0.3
                    c-0.3,0.6-0.5,1.4-0.8,2.1c-0.5,2.1-0.6,4.3-0.5,6.5c-0.3-0.2-0.5-0.5-0.6-0.6c-1.3-1.6-2.7-3.2-4.4-4.3c-0.6-0.5-1.4-1-2.2-0.3
                    c-0.6,0.6-0.3,1.6,0,2.5c0.5,1.2,1.3,2.2,2.2,3.1c-2.8,0.2-5.4,0.3-8.2,0.6c-0.8,0-1.6,0.3-2.5,0.6c-0.3,0.2-0.5,0.5-0.5,0.8
                    s0.3,0.6,0.6,0.6c1.3,0.3,2.5,0.6,3.8,0.8c1,0.2,2.1,0.2,3.2,0.2c-0.5,0.3-1,0.5-1.4,0.6c-0.8,0.3-1.7,0.8-2.1,1.9
                    c-0.2,0.5-0.2,1.1,0,1.4s0.8,0.3,1.1,0.3c1.6-0.2,3.2-0.6,4.8-0.8c0.8-0.2,1.7,0,2.7,0c0,0.2,0.2,0.2,0.2,0.3
                    c-0.2,0.2-0.3,0.2-0.5,0.3c-3.3,3.3-6.2,6.8-9,10.6c-4.1,5.7-7.6,11.7-10.5,18.2c-3.3,7.3-5.7,14.7-7.4,22.6
                    C5,170,4.2,176.6,4.6,183.3c0.2,3.5,0.5,6.7,1.9,9.8c0,0,0,0.2,0,0.3c0,0,1.9,3.5,3.3,4.3c1.1,0.5,2.2,1,3.3,1.3
                    c0.2,0,0.3,0.2,0.5,0.3c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0,0c0.2,1.1,0.6,2.5,1,3.6c0.3,1,1.1,1,1.7,0.2c0.3-0.5,0.6-1.1,1-1.7
                    c0.2-0.6,0.3-1.3,0.5-2c0.7-0.2,1.1-0.5,1.1-0.5c0.6-0.3,1.6-0.3,2.5-0.5c0,0,0,0,0.2,0h0.1c0.1,0.1,0.3,0.3,0.5,0.5
                    c0.6,1.3,1.4,2.5,2.2,3.6c0.3,0.3,1.1,0.8,1.4,0.6c0.3-0.2,0.6-1,0.8-1.4c0.3-1.6,0.2-3.3-0.3-4.8c0,0,0-0.1-0.1-0.1
                    c0.3-0.2,0.5-0.4,0.7-0.5c0,0,0,0,0.2-0.2c0.8-0.5,1.7-1,2.5-1.6c0.2-0.2,0.3-0.2,0.4-0.3c0.1,0,0.2,0.1,0.3,0.3
                    c1.3,1.4,2.7,2.9,4,4.3c1,1,1.6,0.8,1.9-0.5c0.6-2.9,0.2-5.4-1.4-7.8c-0.1-0.1-0.1-0.1-0.1-0.2c0.2-0.3,0.2-0.4,0.2-0.4
                    c0-0.2,0-0.3,0.2-0.5c0.8-1.3,1.6-2.9,2.1-4.3c1.4-4.1,1.7-8.6,2.2-13c0.6-6.3,1.3-13,2.1-19.3c0.1-0.9,0.3-1.7,0.4-2.6
                    c1.2-5.9,3.1-11.4,5.5-16.8c-0.1,0.2-0.3,0.4-0.5,0.6c0.3-0.6,0.5-1.2,0.8-1.8c0-0.2,0.2-0.2,0.5-0.5c0,0.5,0.2,0.8,0.2,1
                    c0,2.1,0.2,4.1,0.2,6.2c0.2,6.5,0.8,13,1.7,19.3c1.1,8.2,2.9,16.3,5.9,24.1c0.8,1.9,1.6,4.1,2.5,5.9c1.7,3.8,4.1,7,7.3,9.8
                    c4.1,3.6,8.7,6,13.6,8.2c0.8,0.3,1.1,0.8,1.4,1.7c1.3,5.4,2.7,10.6,3.8,16c0.2,0.5,0.2,1.1,0.3,1.7c-0.2,0-0.3,0-0.3-0.2
                    c-1.6-3.3-4-6-6.8-8.2c-2.5-1.7-5.1-3.2-8.2-3.2c-2.7,0.2-4.6,2.2-4.4,4.9c0,0.6,0.3,1.3,0.6,2.1c-0.3-0.2-0.6-0.2-1.1-0.2
                    c-2.5-0.5-4.6-0.2-6.2,1.9c-1.6,2.1-1.3,4.6,0.6,6.2c0,0,0.2,0.2,0.2,0.3c-0.3,0.2-0.5,0.2-0.8,0.3c-0.8,0.3-1.7,0.6-2.5,1.3
                    c-3,2.1-3,6,0,8.2c1.4,1,3,1.6,4.6,1.7c6.2,1,12.7,1.3,18.8,1.3c5.2-0.2,10.5-0.5,15.7-1.3c1.7-0.3,2.9-1.1,3.3-3.2
                    c0.2-0.6,0.2-1.3,0.3-1.9c0.2-2.5,0.2-5.1,0.3-7.6c0.2-5.2,1.1-10.5,2.2-15.5c0.2-0.8,0.5-1,1.1-0.8c7.3,1.1,14.4,1.4,21.7,1.6
                    c2.5,0,4.8,0,7.3-0.2c4.9-0.3,9.7-0.8,14.6-1.1c2.2-0.2,2.2-0.3,3,1.9c1,4.4,1.7,8.9,1.9,13.5c0,3,0.2,5.9,0.3,8.9
                    c0.2,2.5,1.1,4,3.2,4.3c0.6,0.2,1.3,0.2,2.1,0.3c5.9,0.6,11.6,1.3,17.6,1c4.8-0.2,9.3-0.5,13.9-1c1.7-0.2,3.6-0.8,5.2-1.6
                    c3.2-1.4,4-4.6,2.1-7.3c-0.8-1.3-2.2-2.1-3.6-2.7c-0.3-0.2-0.6-0.3-1-0.5c2.7-2.2,2.7-5.4,0-7.6c-1-0.8-2.1-1.1-3.5-1.1
                    c-1,0-1.9,0.2-3.2,0.3c0-0.2,0-0.2,0-0.3c1.6-2.5,0-5.9-2.9-6.5c-1.7-0.3-3.6,0-5.4,0.6c-3.6,1.6-6.7,4.3-9,7.8
                    c-0.6,0.8-1.1,1.7-1.7,3c0-0.5,0-0.6,0-0.8c1.3-5.9,2.9-11.7,4.3-17.6c0-0.3,0.5-0.6,0.8-0.8c3.6-1.4,7.3-3.3,10.5-5.5
                    c3.3-2.2,6.2-4.8,8.4-8.4c1.1-1.9,2.2-4,3.3-6c1-2.2,2.1-4.4,3-6.7c2.1-6,3.5-12.5,4.6-18.8c1.3-8.7,2.1-17.4,2.2-26.1
                    c0-1,0.2-2.1,0.2-3.2h0.2c0.2,0.3,0.3,0.5,0.3,0.8c1.1,3,2.2,5.7,3.3,8.7c1.9,5.5,3,11.2,3.8,17.3c0.5,4,0.8,8.1,1.3,12
                    c0.2,2.1,0.2,4.3,0.5,6.3c0.5,4.6,1.3,9,4.3,12.8c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.2c-1.7,2.1-2.1,4.8-1.7,7.6
                    c0,0.5,0.5,1.1,0.8,1.4c0.3,0.2,1-0.3,1.3-0.6c1.3-1.3,2.7-2.9,4-4.1c0.1-0.1,0.2-0.2,0.4-0.2c0.1,0,0.2,0.1,0.3,0.1
                    c1,0.5,1.7,1.1,2.9,1.7c0.1,0.1,0.3,0.2,0.5,0.3c0,0.2,0,0.3-0.1,0.6c-0.5,1.4-0.6,3.2-0.3,4.8c0.2,0.5,0.5,1.3,1,1.4
                    c0.3,0.2,1.1-0.3,1.4-0.8c0.8-1.1,1.4-2.2,2.2-3.6c0.1-0.1,0.2-0.2,0.3-0.3c0.2,0,0.3,0.1,0.4,0.1c0,0,0.2,0,0.3,0
                    c0.8,0.2,1.4,0.5,2.2,0.5c0.3,0,0.5,0.2,0.5,0.2c0,0,0.1,0,0.1,0c0.2,0.2,0.3,0.5,0.5,0.8c0.3,1.3,0.8,2.7,1.3,3.8
                    c0.5,1,1.3,0.8,1.7-0.2c0.5-1.1,0.8-2.5,1.1-3.8c0.2-0.5,0.3-0.6,0.5-0.8c0,0,0,0-0.1,0c0.1,0,0.1,0,0.1,0c0.2,0,0.2-0.2,0.3-0.2
                    c1-0.3,1.9-0.6,2.9-1.1c0.2-0.2,0.3-0.2,0.5-0.2c0.1,0,0.1,0.1,0.2,0.1c-0.1,0.1-0.3,0.2-0.4,0.2c0.4-0.2,0.6-0.1,0.7,0.3
                    c0.5,0.8,0.8,1.7,1.4,2.7c0.5,0.8,1.1,0.8,1.4,0c1-2.1,1.3-4.2,0.3-6.4c0.3-0.8,0.5-1.6,0.9-2.6c0.8-3.5,1-7,1-10.5
                    C247,179.2,247,177.9,246.8,176.5z"/>
            </svg>
            <img src="img/makeimg/M-bodyshapecan1.svg" id="can1">
            <img src="img/makeimg/M-bodyshapecan2.svg" id="can2">
            <img src="img/makeimg/M-bodyshapecan3.svg" id="can3">
            <img src="img/makeimg/M-bodyshapecan4.svg" id="can4">
            <img src="img/makeimg/M-bodyshapecan5.svg" id="can5">
        </div>
   <!-- 傳圖到資料庫開始-->
        <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>
        <input type="hidden" value="save image"/>
        <canvas id="myCanvas" width="250" height="250"></canvas>
    <!-- 傳圖到資料庫結束-->

    <!-- 引入 燈箱換頁並換session -->
    <script src="js/M-PopupLogin.js"></script>

    <!-- 引入 燈箱換頁並換session -->
    <script src="js/M-animate.js"></script>

    <!-- 引入 換頁籤功能.js-->
    <script src="js/M-FunctionButtons.js"></script>

    <!-- 引入 建立canavs與遮罩   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.1.0/fabric.all.min.js"></script>
    <script src="js/M-Canvas.js"></script>

    <!-- 引入 物件拖曳功能 -->
    <script src="js/M-DragInArea.js"></script>

    <!-- 引入 換頁籤Pagetab.js-->
    <script src="js/M-Pagetab.js"></script>

    <!-- 引入右側點換物件.js -->
    <script src="js/M-ChangeItem.js"></script>

    <!-- 引入換Color.js -->
    <script src="js/M-ColorPicker.js"></script>
    
    <!-- 引入hover的時候圖片換路徑 -->
    <script src="js/M-HoverImageChange.js"></script>

    <!-- 引入Popup.js -->
    <script src="js/TE-Popup.js"></script>

    <!-- 引入Imgtosvg.js -->
    <!-- <script src="js/M-Imgtosvg.js"></script> -->

    <!-- 引入 newdownload.js -->
    <script src="js/M-newDownload.js"></script>

    <!-- 引入canvas下載功能 -->
    <!-- <script src="js/M-Downlad.js"></script> -->

    <?php require_once("footer.php")?>
</body>
</html>