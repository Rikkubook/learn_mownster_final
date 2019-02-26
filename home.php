<?php session_start();
  //若“已製作怪獸” 出現自己的怪獸;
  if(isset($_SESSION["memImg"])){
      $memImg = $_SESSION["memImg"];
  }else{
  //若“未製作怪獸”則出現預設蛋蛋圖片;   
      $memImg = "img/member/egg.png";
  }
?>
<?php
try {
  require_once("connectCD104.php");
  $sql = "select memImg from member order by memImgTime desc limit 5;";
  $home_member = $pdo->query($sql);
} catch (PDOException $e){
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
  echo "錯誤行號 : ", $e->getLine(), "<br>";
}?>


<?php
try{
  require_once("connectCD104.php");
  $sql = "SELECT classDtNo, classDtName, classDtPrice, classDtDate, classDtEnd FROM classdetails where classDtName = '布娃娃'";
  $classDateDoll = $pdo->prepare($sql); 
  $classDateDoll->execute();
  
  if($classDateDoll->rowCount()==0){ //not found
    echo "<script>alert('沒有布娃娃課程');</script>";
  }
}catch(PDOException $e){
  $errMsg = "錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
}
?>

<?php
try{
  require_once("connectCD104.php");
  $sql = "SELECT classDtNo, classDtName, classDtPrice, classDtDate, classDtEnd FROM classdetails where classDtName = '3D列印'";
  $classDatePrint = $pdo->prepare($sql); 
  $classDatePrint->execute();
  
  if($classDatePrint->rowCount()==0){ //not found
    echo "<script>alert('沒有3D列印課程');</script>";
  }
}catch(PDOException $e){
  $errMsg = "錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jin -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/difference.css">   
    <link rel="stylesheet" href="css/index-class.css">
    <!-- George -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Home-BgBirds.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Jq cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Jq vue-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <!-- 貓頭鷹 js -->
    
    <title>做怪Mownster</title>
<?php  
    require_once("header.php");
    require_once("member_login.php");
?>
    <!--第一部分開始（廣場） -->
    <div class="home_bg home_bg1">
        <!-- 背景 雲圖 -->
        <div class="indexCloud po-a l-0p z--1 of-h">
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud2" src="img/home_image/indexCloud2.png" alt="">
            <img class="index_bgCloud2" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud2" src="img/home_image/indexCloud2.png" alt="">
        </div>
        <!-- 太陽 -->
        <div class="home_bg1--sun po-a l-lg-5p l-15p t-lg-30p t-10p">
                <div class="home_bg1--circle"></div>
                <div class="home_bg1--eyes t-lg-70p t-30p">
                  <span class="home_bg1--left"></span>
                  <span class="home_bg1--right"></span>
                </div>
                <div class="home_bg1--sunrays">
                  <span/>
                  <span/>
                  <span/>
                </div>
        </div>
        <!-- 熱氣球 -->
        <div class="airball_box w-100p po-a of-h t-lg-20p t-10p"><img class="indexCloud--airBall w-25p po-a z-2 t-30p" src="img/home_image/hot air balloon-lite.gif" alt=""></div>
        <!-- 廣場內容 1200px 開始-->
        <div class="home_box1 container po-r of-h"> 
            <!-- 廣場島 -->
            <div class="home_box1--island">
                <img src="img/home_image/bigIsland.png" alt="">
            </div>
            <!-- 廣場上的五棟房子 -->
            <div class="home_box1--house dis-f jc-c ai-fe po-a t-15p l-5p">
                <div class="box1_house--item"><img src="img/home_image/square_house_01.png" alt=""></div>
                <div class="box1_house--item"><img src="img/home_image/square_house_02.png" alt=""></div>
                <div class="box1_house--item"><img src="img/home_image/square_house_03.png" alt=""></div>
                <div class="box1_house--item"><img src="img/home_image/square_house_04.png" alt=""></div>
                <div class="box1_house--item"><img src="img/home_image/square_house_05.png" alt=""></div>
            </div>
            
            <!-- 廣場上怪獸 -->
            <?php $homeBigIsland=$home_member->fetch();  ?>  
            <div id="home_box1--monster1" class="home_box1--monster z-1 t-35p l-10p"><img src="<?php echo $homeBigIsland["memImg"];?>" alt=""></div>
            <?php $homeBigIsland=$home_member->fetch();  ?> 
            <div id="home_box1--monster2" class="home_box1--monster t-25p l-10p"><img src="<?php echo $homeBigIsland["memImg"];?>" alt=""></div>
            <?php $homeBigIsland=$home_member->fetch();  ?> 
            <div id="home_box1--monster3" class="home_box1--monster z-1 l-30p t-40p"><img src="<?php echo $homeBigIsland["memImg"];?>" alt=""></div>
            <?php $homeBigIsland=$home_member->fetch();  ?> 
            <div id="home_box1--monster4" class="home_box1--monster t-25p l-40p"><img src="<?php echo $homeBigIsland["memImg"];?>" alt=""></div> 
            <?php $homeBigIsland=$home_member->fetch();  ?> 
            <div id="home_box1--monster5" class="home_box1--monster l-60p t-30p"><img src="<?php echo $homeBigIsland["memImg"];?>" alt=""></div>
        </div>
        <!-- 廣場 1200px 結束-->
    </div>
    <!-- 第一部分（廣場）結束 -->
    <!-- 路線開始 -->
    <svg width="1200" height="4980" viewBox="-100 -50 1200 4800" style="border: 0px solid #aaa; position: absolute; z-index: -10;right: 0;left: 0;margin: auto;">
        <path stroke="#823c2d" stroke-dasharray="5,5" id="star-path" fill="none"stroke-width="3" d="M681.74.46c-4,30,0,292.27-131,429C423.51,562.26,85.41,612.13,27.85,693.22c-52.16,73.49-42.35,229.14,252,352.48s411.9,407.76,237.9,678.76-390,304.75-401,517,114.67,318.5,233.35,386.1c124.74,71.05,320.65,169.9,300.65,467.88-20.23,301.45-213.36,333.64-309.36,384.64S24.74,3687.46,74.44,3965.8C130.6,4280.36,390.55,4228,507.83,4422c116.91,193.43-18.09,247.49-18.09,424.48"/>
        <path stroke="#fff" stroke-dasharray="5,5" id="" fill="none" stroke-width="4.5" d="M681.74.46c-4,30,0,292.27-131,429C423.51,562.26,85.41,612.13,27.85,693.22c-52.16,73.49-42.35,229.14,252,352.48s411.9,407.76,237.9,678.76-390,304.75-401,517,114.67,318.5,233.35,386.1c124.74,71.05,320.65,169.9,300.65,467.88-20.23,301.45-213.36,333.64-309.36,384.64S24.74,3687.46,74.44,3965.8C130.6,4280.36,390.55,4228,507.83,4422c116.91,193.43-18.09,247.49-18.09,424.48"/>
    </svg>
    <!-- 第二部分（客製化）開始 -->
    <div class="home_bg home_bg2 po-r">
    <!-- 小鳥背景開始 -->
    <div id="background-wrap" class="w-100p of-h t-lg-60p">
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
    </div>
    <!-- 小鳥背景結束 --> 
    <!-- 客制怪獸內容 1200px 開始-->
    <div class="home_box2 container po-r clearfix section section_09">
                    <!-- 路線圈圈    -->
                    <div class="home_index_title home_index_title2 z-2 ta-c po-a">
                        <div class="home_circle dis-ib ta-c">
                            1
                        </div>
                            <h3 class="home_circle_word ta-c appear">客製蛋生島</h3>
                    </div>    
                    <!-- 島主 -->
                    <div class="islandTalk islandTalk2 po-a w-20p bs-bb r-lg-40p">
                        <p class="">快來製作小怪獸吧！</p>
                    </div>
                    <div class="islandMaster islandMaster2 w-lg-10p w-30p po-a r-lg-44p r-10p"><img src="img/home_image/3.png" alt="">
                    </div>

        <img class="bgc__cloud po-a r-0p  w-40p w-lg-25p" src="img/makeimg/M-cloud.png" alt="">
        <img class="bgc__cloudisland po-a l-30p  w-50p w-lg-10p" src="img/makeimg/M-cloud2.png" alt="">
        <div class="content dis-f jc-sa w-100p fw-w">
             <!-- 左側小怪獸 -->
            <div class="mownster col-12 col-lg-5 po-r dis-f ai-c fw-w movefrombottom">
                 <!-- 左側上方島嶼與怪獸 -->
                <img src="img/makeimg/M-islands.png" alt="">
                <div class="mownster__egg col-9 po-a dis-ib  b-45p b-lg-45p animove0" >
                <!-- 底圖與第一屏換身型控制顏色 -->
                    <div class="mownster__drag dis-b po-a" id="dragarea">
                        <!-- 蛋與身形 -->
                        <div class="mownster__bodysvg dis-b">
                            <img class="mownster__body--img po-a org" src="img/makeimg/M-egg1.svg" alt="">
                            <img class="mownster__body--img po-a bodyshape1 sample dis-n">
                            <img class="mownster__body--img img--Gradation po-a dis-n" src="img/makeimg/M-bodyshape1.svg" alt="" id=>
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
            </div>
            <!-- 右側選擇 -->
            <div class="selector col-11 col-lg-6 mt-20 mt-lg-0 DD">
                <!-- 右側上方頁籤 -->
                <div id="tabs" >
                    <!-- 右側下方物件 -->
                    <div class="selector__items__group">
                        <!-- 右側下方物件 第一屏身型-->
                        <div class="po-r selector__items card-sm dis-b">
                            <h2 class="m-0 ">樣式</h2>
                            <div class="Selecter__items__group body-choose dis-f jc-se fw-w">
                                <div class="selector__body col-4 col-lg-2 po-r pointer" id="body1" >
                                    <img class="item__body" src="img/makeimg/M-bodyshape1.svg" alt="" id="srcImg">
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape2.svg" alt="" > 
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r  pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape3.svg" alt=""> 
                                </div>
                                <div class="selector__body col-4 col-lg-2 po-r mt-20 mt-lg-0 pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape4.svg" alt=""> 
                                </div> 
                                <div class="selector__body col-4 col-lg-2 po-r  mt-20 mt-lg-0 pointer">
                                    <img class="item__body" src="img/makeimg/M-bodyshape5.svg" alt=""> 
                                </div>
                            </div>
                            <h2  class="m-0">顏色</h2>
                            <div class="selecter__color">
                                <section id="picker" class="dis-f fw-w ">
                                    <input type="range" min="0" step="0.1" max="360" id="hsl-h" class="pointer col-12 ">
                                    <input type="range" min="0" step="0.1" max="100" id="hsl-s" class="pointer col-12  mdis-n">
                                    <input type="range" min="0" step="0.1" max="100" id="hsl-l" class="pointer col-12 mt-20">
                                    <div  id="sample" class="col-12 dis-b pointer"></div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn-main-lg po-a l-lg-85p l-0p r-0p m-a" href="Makingmowns.php">客製怪獸</a>
    </div>
    <!-- 客製小怪獸結束 -->


    <!-- 撈選美本週前三名 -->
    <?php
    $sql = "select * from showitems where showItemTime='本週' order by showItemVote desc limit 3;";
    $query = $pdo->query($sql);
    ?>
    <!-- 第三部分（選美）開始 -->
    <div class="home_bg home_bg3">
        <!-- 選美內容 1200px 開始-->
        <div class="home_box3 container dis-f">
            <!-- 路線圈圈 -->
            <div class="home_index_title home_index_title3 z-2 ta-c po-a">
                <div class="home_circle dis-ib ta-c movefromLeft">2
                </div>
                <h3 class="home_circle_word ta-c appear">選美冒泡島</h3>
            </div>
            <!-- 選美 前三名 -->
            <div class="home_box3--item1 col-lg-8 col-12 po-r">
                <!-- 第一名 -->
                <div class="home_box3--item1--no1 po-a l-lg-30p t-lg-5p w-lg-40p  w-30p ta-c">
                    <div class="home_box3--item1--no1box po-a l-0p r-0p m-a w-lg-70p w-90p t-5p">
                    <?php $top=$query->fetch();?>
                        <img id="home_box3--item1--no1"src="<?php echo $top["showItemImg"];?>" alt="">
                    </div>
                    <div id="<?php echo $top["memNo"];?>"class="home_box3--item1--v po-a b-lg-15p b-0p l-0p r-0p m-a w-65">
                        投票
                    </div>
                    <div class="home_box3--item1--vnum po-a t-lg-40p r-lg-2p r-0p w-55">
                        <?php echo $top["showItemVote"];?>
                    </div>
                    <h5 class="m-0 po-a b-5p l-0p r-0p m-a ">本週 Top.1</h5>
                </div>
                <!-- 第二名 -->
                <div class="home_box3--item1--no2 po-a w-lg-35p w-30p l-lg-5p t-lg-50p ta-c">
                    <div class="home_box3--item1--no2box po-a l-0p r-0p m-a w-lg-65p w-90p t-5p">
                    <?php $top=$query->fetch();?>
                        <img id="home_box3--item1--no2"src="<?php echo $top["showItemImg"];?>" alt="">
                    </div>
                    <div id="<?php echo $top["memNo"];?>" class="home_box3--item1--v po-a b-lg-15p b-0p l-0p r-0p m-a w-65">
                        投票
                    </div>
                    <div class="home_box3--item1--vnum po-a t-lg-40p r-lg-2p r-0p w-55">
                        <?php echo $top["showItemVote"];?>
                    </div>
                    <h5 class="m-0 po-a b-5p l-0p r-0p m-a">本週 Top.2</h5>
                </div>
                <!-- 第三名 --> 
                <div class="home_box3--item1--no3 po-a w-lg-35p w-30p r-lg-0p t-lg-55p ta-c">
                    <div class="home_box3--item1--no3box po-a l-0p r-0p m-a w-lg-60p w-90p t-5p">
                        <?php $top=$query->fetch();?>
                        <img id="home_box3--item1--no3"src="<?php echo $top["showItemImg"];?>" alt="">
                    </div>
                    <div id="<?php echo $top["memNo"];?>" class="home_box3--item1--v po-a b-lg-15p b-0p l-0p r-0p m-a w-65">
                        投票
                    </div>
                    <div class="home_box3--item1--vnum po-a t-lg-40p r-lg-2p r-0p w-55">
                        <?php echo $top["showItemVote"];?>
                    </div>
                    <h5 class="m-0 po-a b-5p l-0p r-0p m-a">本週 Top.3</h5>
                </div>
            </div>
    
            <!-- 選美島主 -->
            <div class="home_box3--item2 col-lg-4 col-9 po-r">
                <div class="islandTalk  islandTalk3 po-a w-50p bs-bb">
                    <p class="">選美比賽快開始了,快來參加吧！</p>
                </div>
                <div class="po-r z--1 movefromRight">
                <img src="img/home_image/home_box3_island.png" alt="">
                <div class="islandMaster islandMaster3 w-30p po-a l-0p r-0p m-a t-30p"><img src="img/home_image/4.png" alt=""></div>
                </div>
                
            </div>
            <!-- 參加選美按鈕 -->
            <a class="btn-main-lg po-a l-lg-82p l-0p r-0p m-a" href="beautiful.php">參加選美</a>
        </div>
        <!-- 選美內容 1200px結束 -->
    </div>
    <!-- 第三部分（選美）結束 -->
        <!-- 課程雙子島 -->
    <div class="home_bg home_bg4 po-r">
        <div class="home_box4 container dis-f fw-w dis-lg-b clearfix">
            <div class="of-h">
                <div class="home_box4--item1 col-12">
                    <div class="index_title index_title3 z--1 ta-c mt-10  m-a">
                        <div class="circle dis-ib ta-c movefromLeft">
                            3
                        </div>
                        <h3 class="circle_word ta-c appear">課程雙子島</h3>
                    </div>      
                </div>

                <div class="col-6 home_box4--item2 po-r mt-0">
                    <div class="w-80p m-a">
                        <img src="img/index-img/island/classdoll_island.png">
                    </div>

                    <div class="island_green_left w-30p po-a t-15p l-45p">
                        <img src="img/index-img/monster/green.png">
                    </div>

                    <div class="monster-talk monster-talk_left monster_scale po-a w-50p pb-20 bs-bb">
                        選我了解布娃娃怪獸課程
                    </div>

                    <div class="snow po-a">
                        <div class="snow__item"></div>
                        <div class="snow__item"></div>
                        <div class="snow__item"></div>
                    </div>
                </div>

                <div class="col-6 home_box4--item3 po-r">   
                    <div class="w-80p m-a">
                        <img src="img/index-img/island/class3d_island.png">
                    </div>

                    <div class="island_green_right w-30p po-a t-15p l-37p">
                        <img src="img/index-img/monster/green.png">
                    </div>

                    <div class="monster-talk monster-talk_right monster_scale po-a w-50p pb-20 bs-bb">
                        選我了解3D列印怪獸課程
                    </div>
                </div>
            </div>


            <div class="container container__class po-a l-0p t-100p">
                <div id="classCarousel" class="class--carousel dis-f bs-bb pl-lg-40 pr-lg-40">
                    <div class="flip__wrap po-r">
                        <div class="class class--doll col-12 pt-lg-10">
                            <h3>布娃娃課程</h3>
                            <div class="class__item class__item--info bs-bb">
                                <div class="class__item--doll class__image">
                                    <img src="img/home_image/doll__index.jpg" alt="doll Class">
                                </div>
                                <div class="class__item--doll class__intro">
                                    <p>想要有小怪獸娃娃陪伴嗎？很柔軟很好抱喔。趕快來看哪天開課！</p>
                                    <span class="class--price pt-lg-10 pt-5">單堂課程2000元</span>
                                </div>
                            </div>
                            <div class="class__item class__item--calendar">
                                <table>
                                    <tr class="timeBox" id="timeBox__doll--year">
                                        <th colspan="7" id="titleYear--doll"></th>
                                    </tr>
                                    <tr class="timeBox" id="timeBox__doll--month">
                                        <th><span class="arrow--left arrow arrow--doll"></span></th>
                                        <th colspan="5" id="titleMonth--doll"></th>
                                        <th><span class="arrow--right arrow arrow--doll"></span></th>
                                    </tr>
                                    <tr class="title title--doll">
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                    <tr class="week week--doll">
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                        <td><span class="days days--doll"></span></td>
                                    </tr>
                                </table>
                                <div id="dollDate--secret" class="secret__info shhhhhhhh">
                                    <ul class="secret__class--row">
                                        <?php while($dollDateRow = $classDateDoll->fetchObject() ){ ?>      
                                            <li class="doll__class--dates"><?php echo $dollDateRow->classDtDate; ?></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        
                        <div class="class class--print col-12 pt-lg-10">
                            <h3>3D列印課程</h3>
                            <div class="class__item class__item--info bs-bb">
                                <div class="class__item--print class__image">
                                    <img src="img/home_image/printer__index.png" alt="printer class">
                                </div>
                                <div class="class__item--print class__intro">
                                    <p>用最流行的3D列印做出屬於自己的小怪獸吧。快來看哪天開課吧！</p>
                                    <span class="class--price pt-lg-10 pt-5">單堂課程4000元</span>
                                </div>
                            </div>
                            <div class="class__item class__item--calendar">
                                <table>
                                    <tr class="timeBox" id="timeBox__print--year">
                                        <th colspan="7" id="titleYear--print"></th>
                                    </tr>
                                    <tr class="timeBox" id="timeBox__print--month">
                                        <th><span class="arrow--left arrow arrow--print"></span></th>
                                        <th colspan="5" id="titleMonth--print"></th>
                                        <th><span class="arrow--right arrow arrow--print"></span></th>
                                    </tr>
                                    <tr class="title">
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                    <tr class="week week--print">
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                        <td><span class="days days--print"></span></td>
                                    </tr>
                                </table>
                                <div id="printDate--secret" class="secret__info shhhhhhhh">
                                    <ul class="secret__class--row">
                                        <?php while($printDateRow = $classDatePrint->fetchObject() ){ ?>        
                                            <li class="print__class--dates"><?php echo $printDateRow->classDtDate; ?></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selector mb">
                    <ul>
                        <li id="arrowLeft" class="po-a l-25p t-50p"><img src="img/class-img/arrow-left.png" alt="arrow--left"></li>
                        <li id="arrowRight" class="po-a r-25p t-50p"><img src="img/class-img/arrow-right.png" alt="arrow--right"></li>
                    </ul>
                </div>
            </div>


            <a href="class.php" class="btn-main-lg po-a l-82p t-90p">
                了解更多
            </a>        
        </div>
    </div>

  

<!-- 遊戲冒險島 -->
    <div class="home_bg home_bg5 po-r">
        <div class="home_box5 container dis-f fw-w dis-lg-b clearfix">
            <div class="col-lg-7 col-12 home_box5--item1 mt-1">
                <div class="card_game card-lg w-40p m-a mt-lg-30 DD">
                    <h3 class="ta-c">遊戲說明</h3>
                    <img src="img/index-img/mora-02.gif">
                    <p class="dis-b">
                        快來遊戲冒險島與邪惡的羊羊猜拳戰鬥～
                    </p>
                    <p class="dis-b">
                        戰鬥獲勝的話有抽獎獎勵喔！
                    </p>                    
                </div>

            </div>

            <div class="col-lg-5 col-12 home_box5--item2  po-r order--1">
                <div class="index_title index_title4 z--1 ta-c mt-10 po-a">
                    <div class="circle dis-ib ta-c movefromRight">
                        4
                    </div>
                    <h3 class="circle_word ta-c appear">遊戲冒險島</h3>
                </div>


                <div class="island game_island po-r mt-100 movefrombottom">
                    <img src="img/index-img/island/game_island_02.png">
                </div>
                <div class="island_blue po-a t-30p l-20p w-35p">
                    <img src="img/index-img/monster/blue.png">
                </div>
                

                <div class="monster-talk po-a w-50p pb-20 bs-bb t-12p l-30p">
                快來冒險挑戰就可以拿到優惠券啊！
                </div>
            </div>

            <a href="game.php" class="btn-main-lg po-a l-82p t-90p">
                了解更多
            </a>
        </div>

        <div class="cloud_thunder1 po-a t-0p l-10p z--1 movefromLeft">
            <div class='cloud1'></div>
            <div class='cloud2'></div>
            <div class='cloud3'></div>        
            <div class='rain'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </div>
            <div class='thunder-container'>
            <div class='thunder1'></div>
            <div class='thunder2'></div>
            <div class='thunder3'></div>
            </div>
        </div>

        <div class="cloud_thunder2 po-a t-10p l-40p z--1 movefromRight">
            <div class='cloud1'></div>
            <div class='cloud2'></div>
            <div class='cloud3'></div>

            <div class='rain'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </div>
            <div class='thunder-container'>
            <div class='thunder1'></div>
            <div class='thunder2'></div>
            <div class='thunder3'></div>
            </div>
        </div> 

        <div class="cloud_thunder3 po-a b-80p l-52p z--1 movefromRight">
            <div class='cloud1'></div>
            <div class='cloud2'></div>
            <div class='cloud3'></div>        
            <div class='rain'>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
            <div class='thunder-container'>
                <div class='thunder1'></div>
                <div class='thunder2'></div>
                <div class='thunder3'></div>
            </div>
        </div>
    </div>

   


<!-- 商城 -->
    <div class="home_bg home_bg6 po-r">
        <div class="home_box6 container dis-f fw-w dis-lg-b clearfix">
            <canvas id="celebration"></canvas>
            <div class="col-lg-12 col-12 home_box6--item1 ">
                <div class="index_title index_title6 z--1 ta-c mt-10 po-a l-10p">
                    <div class="circle dis-ib ta-c movefromLeft">
                        5
                    </div>
                    <h3 class="circle_word ta-c appear">商城快樂島</h3>
                </div>

                <div class="monster-talk po-a w-20p t-6p l-28p pb-20 bs-bb">
                    快來將我們帶回家吧~
                </div>

                <div class="island_shop w-40p m-a movefrombottom">
                    <img src="img/index-img/island/shop_island.gif">
                </div>

                <div class="island_brown po-a t-15p l-30p w-16p appear">
                    <img src="img/index-img/monster/brown.png">
                </div>
            </div>

            <div class="col-lg-12 col-12 home_box6--item2">
                <div class="container mb-50">
                    <div class="shop-tab-inner clearfix dis-f ai-c">
                       <div class="col-2 col-xl-1 ta-r v-xl-hide">
                           <img src="img/shop-img/arrow-left.png" alt="" class="prev po-r w-40 pointer">
                       </div>
                       <div class="col-8 col-xl-10 owl-carousel owl-theme m-a DD">
                           <div class="card-sm product card-bg card-bg-1 ta-c m-5 of-h bg-monster-01">
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
                           <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h bg-monster-02">
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
                           <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h bg-monster-03">
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
                           <div class="card-sm product card-bg card-bg-1 bs-bb ta-c m-5 of-h bg-monster-04">
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
                </div> 
            </div>

            <a href="shop.php" class="btn-main-lg po-a l-82p t-100p">
                    了解更多
            </a>
        </div>
    </div>





<!-- 地圖區域 -->
    <div class="home_bg home_bg7 po-r">
        <div class="home_box7 container dis-f clearfix">
            <div class="home_box7--item1 col-12 ta-c po-r">
                <div class="index_title z-2 ta-c mt-10 m-a">
                    <div class="circle dis-ib ta-c movefromRight">
                        6
                    </div>
                    <h3 class="circle_word ta-c appear">店家資訊</h3>
                </div>
            </div>


            <div class="location_card po-a p-20 mr-10 dis-f z-1 DD">
                <div class="map_pic ">
                    <img src="img/index-img/store.png">
                </div>

                <div>
                    <h3 class="ml-20">Mownster台北店</h3>
                    <p class="ml-20">台北市中正區八德路一段1號</p>
                    <p class="ml-20">02-2882-5252</p>
                    <p class="ml-20">營業時間：</p>
                    <p class="ml-20">10:00 ~ 22:00</p>
                </div>      
            </div>
        </div>

        <div class="container googlemap">
        <iframe src="https://snazzymaps.com/embed/118450" width="100%" height="600px" class="map appear" style="border:none;" class=""></iframe>
        </div>       
    </div>
    <!-- popup -->
    <div class="popup--Share"> 
        <div class="popup__wrap popup__close">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-9 col-lg-4 card-lg z-5"> 
            <div class="popup__icons dis-f fd-c ai-c">
                <h3>一日最多投3票～</h3>
            </div>
            <i class="close-btn popup__close po-r far fa-times-circle"></i>
        </div> 
    </div>
    <?php require_once("footer.php");?>
</body>

<script type="text/javascript">
    // Get a reference to the <path>
var path = document.querySelector('#star-path');

// Get length of path... ~577px in this demo
var pathLength = path.getTotalLength();
// console.log(pathLength);
// #Step 3: Hide shape by offsetting dash
// Make very long dashes (the length of the path itself)
path.style.strokeDasharray = pathLength + ' ' + pathLength;

// Offset the dashes so the it appears hidden entirely
// path.style.strokeDashoffset = pathLength;
// console.log(path.style.strokeDasharray);
// #Step 4: When page scrolls, offset dash same amount as % scrolled
// When the page scrolls...
window.addEventListener("scroll", function(e) {
// What % down is it? 
  var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
// Length to offset the dashes
  var drawLength = pathLength * scrollPercentage;
// Draw in reverse
  path.style.strokeDashoffset = pathLength - drawLength + 100;
});



//泡泡飛
var screenWidth = window.screen.width;
if (screenWidth >=768){ //手機不執行
	for (var i = 0; i < 15; i++){ //泡泡數量
			var bubDiv = document.createElement('div');
			bubDiv.className = 'home_box3--bubble'; //泡泡的class名稱 
			var bubSize = Math.random() * 50 + 20 + 'px';
			bubDiv.style.width = bubSize;
			bubDiv.style.height = bubSize;
			bubDiv.style.bottom = "100px";
			bubDiv.style.left = Math.random() * document.body.offsetWidth + 'px';
			// console.log(d.style.bottom);
			// console.log(bubDiv.style.left);
			$(bubDiv).appendTo(".home_box3"); //把泡泡加到哪個div內
			Animate(bubDiv);
		}
		function Animate(bubSize) {
		  $(bubSize).animate({
		  //結束位置
		  bottom:'100%',
          left: '+=' + ((Math.random() * 100) - 50) + 'px'},
          Math.random() * 2000 + 3500,
          'linear', 
		  function() {
		  //start
		   bubSize.style.bottom = '0%';
		   Animate(bubSize)});
        }
}     
</script>

<!-- JS程式 -->
<script type="text/javascript">
    //選美投票
    if (sessionStorage['voteTimes']==undefined){
        sessionStorage.setItem("voteTimes",3); //若無sessionStorage則給3
    } 
    voteTimes = parseInt(sessionStorage.getItem("voteTimes"));
    // console.log(voteTimes);
        $(".home_box3--item1--v").on("click",function(){
        if (voteTimes > 0){    //投3次就不能投
            voteTimes--;
            sessionStorage.setItem("voteTimes",voteTimes); //sessionStrage --
            // console.log(voteTimes);
            var voteButNumId = parseInt($(this).attr("id"));//抓memNo
            var voteButNum = $(this).parent().index();//抓愛心
            // console.log(voteButNum,voteButNumId);
            document.getElementsByClassName("home_box3--item1--vnum")[voteButNum].style.animation="";
            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange=function (){
                if( xhr.readyState == 4){
                    if( xhr.status == 200 ){
                        document.getElementsByClassName("home_box3--item1--vnum")[voteButNum].innerHTML = xhr.responseText;
                        document.getElementsByClassName("home_box3--item1--vnum")[voteButNum].style.animation="rubberBand 1s";
                        // console.log(xhr.responseText);
                    }else{
                        alert( xhr.status );
                    }
                }
            }
            var url = "home_beautiful.php?votId="+voteButNumId;
            xhr.open("get",url,true);
            xhr.send(null);
        }else{
            $('.popup--Share .popup__wrap').fadeIn(500);
            $('.popup--Share .popup__wrap').fadeIn(500);
            $('.popup--Share .popup__box').removeClass('transform--out').addClass('transform--in');
            $('.popup__close').click(function(e) {
                $('.popup--Share .popup__wrap').fadeOut(500);
                $('.popup--Share .popup__box').removeClass('transform--in').addClass('transform--out');
                e.preventDefault();
            });
        };
        });
    


    $(document).ready(function(){
    function revealOnScrollL() {
    var scrolled = $(window).scrollTop();


// 島嶼左開
   $(".home_box4--item2").each(function(){
    var current = $(this), // 当前元素
    w_height = $(window).outerHeight(), //视窗高度
    offsetTop = current.offset().top; //当前元素离顶部的高度
   if (scrolled + w_height > offsetTop) {
    current.addClass("move_left");
    // current.style.backgroundColor="red";
   } 
   });



// 島嶼右開
   $(".home_box4--item3").each(function(){
    var current = $(this), // 当前元素
    w_height = $(window).outerHeight(), //视窗高度
    offsetTop = current.offset().top; //当前元素离顶部的高度
   if (scrolled + w_height > offsetTop) {
    current.addClass("move_right");
    // current.style.backgroundColor="red";
   } 
   });


// 抵銷首頁課程對話框縮小
   $(".monster_scale").each(function(){
    var current = $(this), // 当前元素
    w_height = $(window).outerHeight(), //视窗高度
    offsetTop = current.offset().top; //当前元素离顶部的高度
   if (scrolled + w_height > offsetTop) {
    current.addClass("scale_stop");
    // current.style.backgroundColor="red";
   } 
   });


// 課程日期出現
   $(".container__class").each(function(){
    var current = $(this), // 当前元素
    w_height = $(window).outerHeight(), //视窗高度
    offsetTop = current.offset().top; //当前元素离顶部的高度
   if (scrolled + w_height > offsetTop) {
    current.addClass("class_apear");
    // current.style.backgroundColor="red";
   } 
   });



// 物體浮現   
  $(".appear").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("fadeIn");
    } else {
      current.removeClass("fadeIn");
    }
  });


// 物體左邊進入
   $(".movefromLeft").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("fadeInLeft");
    } else {
      current.removeClass("fadeInLeft");
    }
  });


// 物體右邊進入
   $(".movefromRight").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("fadeInRight");
    } else {
      current.removeClass("fadeInRight");
    }
  });


// 物體上方進入
   $(".movefromTop").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("fadeInDown");
    } else {
      current.removeClass("fadeInDown");
    }
  });


// 物體下方進入
  $(".movefrombottom").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("fadeInUp");
    } else {
      current.removeClass("fadeInUp");
    }
  });


// 物體Q彈化
  $(".DD").each(function(){
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度
    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height > offsetTop) {
      current.addClass("rubberBand");
    } else {
      current.removeClass("rubberBand");
    }
  });

  };
  $(window).on("scroll", revealOnScrollL);
 });
</script>

<script src="js/index.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/index-shop.js" defer></script>
<script src="js/index-doll.js"></script>
<script src="js/index-print.js"></script>
<!-- 課程的JS -->
<script>
$(document).ready(function () {
    var frontAngle = 0;
    var backAngle = 180;
    $('#arrowRight').click(function () {
        frontAngle += 180;
        backAngle += 180;
        // console.log('前面'+frontAngle+'deg');
        // console.log('後面'+backAngle+'deg');
        $('.class--doll').css('pointer-events', 'none');
        $('.class--print').css('pointer-events', 'none');
        $('.class--doll').css('transform', 'rotateY(' + frontAngle + 'deg)');
        $('.class--print').css('transform', 'rotateY(' + backAngle + 'deg)');
        $('.class--doll').css('pointer-events', 'auto');
        $('.class--print').css('pointer-events', 'auto');
    });
    $('#arrowLeft').click(function () {
        frontAngle -= 180;
        backAngle -= 180;
        // console.log('前面'+frontAngle+'deg');
        // console.log('後面'+backAngle+'deg');
        $('.class--doll').css('pointer-events', 'none');
        $('.class--print').css('pointer-events', 'none');
        $('.class--doll').css('transform', 'rotateY(' + frontAngle + 'deg)');
        $('.class--print').css('transform', 'rotateY(' + backAngle + 'deg)');
        $('.class--doll').css('pointer-events', 'auto');
        $('.class--print').css('pointer-events', 'auto');
    });
});
</script>
    <!-- 引入右側點換物件.js -->
    <script src="js/M-ChangeItem.js"></script>
    <!-- 引入換Color.js -->
    <script src="js/M-ColorPicker.js"></script>
    <!-- 引入hover的時候圖片換路徑 -->
    <script src="js/M-HoverImageChange.js"></script>
</html>