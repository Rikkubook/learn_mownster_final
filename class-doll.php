<?php
session_start();
?>
<?php
try{
  require_once("connectCD104.php");
  $sql = "SELECT classDtNo, classDtName, classDtPrice, classDtDate, classDtEnd FROM classdetails where classDtName = '布娃娃' and classDtStatus = 1";
  $classDate = $pdo->prepare($sql); 
  $classDate->execute();
  
  if($classDate->rowCount()==0){ //not found
  	echo "<script>alert('沒有布娃娃課程');</script>";
  }
}catch(PDOException $e){
  $errMsg = "錯誤原因 : " . $e->getMessage(). "<br>".	"錯誤行號 : ". $e->getLine(). "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/Class-individual.css">
    <link rel="stylesheet" href="css/Class-plane.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <title>做怪Mownster</title>
<?php
    require_once("header.php");
?>

   <div class="class__wrap">
        <div class="island__bg--class">
            <img src="img/class-img/doll-island.svg" alt="island__bg">
        </div>
        <!-- 背景 雲圖 -->
        <div class="indexCloud po-a l-0p z--1 of-h">
            <!-- 熱氣球 -->
            <img class="indexCloud--airBall w-15p po-a t-0p l-0p" src="img/class-img/hot_air_balloon.png" alt="hotAir balloon">
            <!-- 雲 -->
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
            <img class="index_bgCloud2" src="img/home_image/indexCloud2.png" alt="">
            <img class="index_bgCloud2" src="img/home_image/indexCloud1.png" alt="">
        </div>


        <div class="container container__banner">
            <div class="dollClass__title po-r">
                <div class="title__bg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                        <defs>
                            <style>.cls-cloud{fill:#fff;}</style>
                        </defs>
                        <title>cloud</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-cloud" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <h2>布娃娃課程</h2>
            </div>
            <div class="class__banner bs-bb po-r">
                <div class="airBanner">
                    <div class="banner__carousel--wrap">
                        <ul class="banner__carousel dollPage">
                            <li id="doll__banner--image">
                                <img src="img/class-img/class-banner/ClassBanner_doll_big.png" alt="doll class banner">
                            </li>
                            <li id="print__banner--image">
                                <img src="img/class-img/class-banner/ClassBanner_print_big.png" alt="print class banner">
                            </li>
                        </ul>
                        <ul class="banner__button"></ul>
                    </div>
                    <div id="arrowLeft--carousel" class="carousel--arrow">
                        <img src="img/class-img/arrow-left.svg" alt="carousel--arrow">
                    </div>
                    <div id="arrowRight--carousel" class="carousel--arrow">
                        <img src="img/class-img/arrow-right.svg" alt="carousel--arrow">
                    </div>
                    <div class="plane__wrap plane">
                        <span class="passenger--plane">
                            <img src="img/class-img/classNPC.png" alt="classNPC">
                        </span>
                        <div class="p-body">
                            <div class="p-parts">
                                <div class="part-one">
                                    <span class="po-up"></span>
                                    <span class="po-middle"></span>
                                    <span class="po-down"></span>
                                </div>
                                <div class="part-two">
                                    <span class="pt-wing"></span>
                                </div>
                                <div class="part-three">
                                    <span class="roll"></span>
                                </div>
                                <div class="helix">
                                    <span class="h-base"></span>
                                    <span class="h-rotor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container c__class__doll bs-bb">
            <div class="class__doll--planning col-12 no-fl">
                <div class="dollClass__title po-r">
                    <div class="title__bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                            <defs>
                                <style>.cls-cloud{fill:#fff;}</style>
                            </defs>
                            <title>cloud</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-cloud" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2>課程預約</h2>
                </div>
                <div class="class__planning--wrap dis-f bs-bb pr-20 pr-lg-0 pl-20 pl-lg-0">
                    <div class="class__planning--info col-12 col-lg-5 bs-bb no-fl card-sm">
                        <h3>讓心中的怪獸重生成可愛玩偶!</h3>
                        <div class="class__location">
                            <span>地點</span>
                            <span>台北市中正區八德路一段1號</span>
                        </div>
                        <div class="class__planning--price">
                            <span>價格</span>
                            <span>每堂每人2000元</span>
                        </div>
                        <h3>課程簡介</h3>
                        <div class="class__info--wrap">
                            <p>記得小時候，手上抱著一隻喜歡的布娃娃，是多麼令人安心嗎？有時候會不會覺得，為什麼都沒辦法有隻跟別人完全不一樣，自己專屬的布娃娃呢？</p>
                            <p>在我們的作怪店面裡，我們可以幫你達成夢想！只要參加布娃娃課程，就可以做出一隻獨一無二的怪獸娃娃！不用自己備料，無需經驗，只要帶著充滿熱誠的心，就會有專業導師教你一步步做出心目中的怪獸娃娃！另外，這堂課也非常適合親子一同參與，作怪教室裡絕對是孩子能安全玩樂的場地！快來參加吧！</p>
                        </div>
                        <div class="info__more">
                            <span class="info__more--img">
                                <svg class="Expander__trigger-Icon" width="40" height="12" stroke="#787878">
                                    <polyline points="12,2 20,10 28,2" stroke-width="3" fill="none"></polyline>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="pb-lg-30 class__planning--calendar doll__planning--calendar col-12 col-lg-5 bs-bb no-fl">
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
                            <table class="secret__class">
                                <?php while($dollDateRow = $classDate->fetchObject() ){ ?>
                                <tr class="class__number <?php echo $dollDateRow->classDtNo; ?>">	
                                    <td class="doll__class--dates"><?php echo $dollDateRow->classDtDate; ?></td>
                                    <td class="doll__end--dates"><?php echo $dollDateRow->classDtEnd; ?></td>
                                </tr>
                                <?php }?>
                            </table>
                        </div>
                        <div class="class__date">
                            <div class="class__date--info">
                                <span>上課日期</span>
                                <span id="showDollDate" class="showDate">請於上方月曆點選日期</span>
                            </div>
                            <div class="class__date--time">
                                <span>上課時段</span>
                                <span id="showDollTime" class="showTime">請選擇上課日期</span>
                            </div>
                            <div class="class__date--people">
                                <span>參加人數</span>
                                <select name="people" id="peopleTotalDoll" class="peopleTotal" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="class__date--price">
                                <span>總金額</span>
                                <span id="totalPriceDoll">$2000元</span>
                            </div>
                            <div id="payClass--errorMsg"></div>
                            <div class="class__date--reserve">
                                <?php if( isset($_SESSION["memName"]) ){ ?>
                                <button class="btn-main-lg pay-popup__btn" type="button" id="class_reserve" onclick="checkClassInfo()">預約課程</button>
                                <?php }else { ?>
                                <button class="btn-main-lg" type="button" id="class_reserve" onclick="checkClassInfo()">預約課程</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container__photo">
            <div class="dollClass__title po-r">
                <div class="title__bg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                        <defs>
                            <style>.cls-cloud{fill:#fff;}</style>
                        </defs>
                        <title>cloud</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-cloud" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <h2>課程花絮</h2>
            </div>
            <div class="class__photos">
                <div class="photo--carousel">
                    <div class="item--carousel photoA">
                        <img src="img/class-img/doll-class/doll9.jpeg" alt="doll class photo">
                    </div>
                    <div class="item--carousel photoB">
                        <img src="img/class-img/doll-class/doll11.jpeg" alt="doll class photo">
                    </div>
                    <div class="item--carousel photoC">
                        <img src="img/class-img/doll-class/doll15.jpg" alt="doll class photo">
                    </div>
                    <div class="item--carousel photoD">
                        <img src="img/class-img/doll-class/doll6.jpeg" alt="doll class photo">
                    </div>
                    <div class="item--carousel photoE">
                        <img src="img/class-img/doll-class/doll7.jpeg" alt="doll class photo">
                    </div>
                    <div class="item--carousel photoF">
                        <img src="img/class-img/doll-class/doll12.jpeg" alt="doll class photo">
                    </div>
                </div>
            </div>
            <div class="selector--photo selector__mb--photo">
                <ul>
                    <li id="arrowLeft--photo"><img src="img/class-img/arrow-left.svg" alt="arrow--left"></li>
                    <li id="arrowRight--photo"><img src="img/class-img/arrow-right.svg" alt="arrow--right"></li>
                </ul>
            </div>
        </div>

        <!-- comment -->
        <div class="container c__comment">
            <div class="comment__title po-r">
                <div class="title__bg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                        <defs>
                            <style>.cls-cloud{fill:#fff;}</style>
                        </defs>
                        <title>cloud</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-cloud" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <h2>留言板</h2>
            </div>
            <div class="class__comment commentBoard ta-c bs-bb pl-lg-50 pr-lg-50 pl-20 pr-20">
                <div class="class__comment--type doll__comment--type col-12 no-fl">
                    <div class="comment__memberPic col-2 bs-bb fl-l">
                        <?php if(isset($_SESSION["memName"])){ ?>
                        <img src="<?php echo $_SESSION["memImg"];?>" alt="member">
                        <?php }else{ ?>
                        <img src="img/class-img/QA_NPC.png" alt="member">
                        <?php } ?>
                    </div>
                    <div class="col-12 col-lg-10 class__comments bs-bb">
                        <div class="comment__block bs-bb">
                            <ul class="bs-bb">
                                <li>
                                    <?php if(isset($_SESSION["memName"])){ ?>
                                    <span class="comment--name"><?php echo $_SESSION["memName"];?></span>
                                    <span class="comment__time"><?php echo date("Y-m-d",time())?> </span>
                                     <?php }else{ ?>
                                    <span class="comment--name">訪客</span>
                                    <span class="comment__time"><?php echo date("Y-m-d",time())?></span>
                                     <?php } ?>
                                </li>
                                <li>
                                    <?php if(isset($_SESSION["memName"])){ ?>
                                    <textarea name="typeComment" id="classComment--send" placeholder="小怪獸想說什麼心裡話呢......？"></textarea>
                                    <?php }else{ ?>
                                    <textarea name="typeComment" id="classComment--send" class="member-login-popup__btn" placeholder="小怪獸想說什麼心裡話呢......？"></textarea>
                                    <?php } ?>
                                    <input id="classType" type="hidden" value="0">
                                </li>
                            </ul>
                            <div id="previewImg" class="upload__preview">
                                <img src="" alt="preview">
                            </div>
                            <div class="comment__arrow"></div>
                        </div>
                        <div class="comment__buttons">
                            <form id="messageForm">
                                <div class="upload--alert">
                                    <p>注意:檔案上限8MB，限jpg或png</p>
                                </div>
                                <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
                                <input type="hidden" name="textareaMessage" id="textareaMessage">
                                <input type="hidden" name="messageType" id="messageType" value="0">
                                <label id="comment--uploadPic">
                                    <input type="file" id="uploadPicture" name="uploadPic" accept=".jpg,.png">
                                    <p>上傳照片</p>
                                </label>
                                <?php if(isset($_SESSION["memName"])){ ?>
                                <button class="btn-main-sm" id="comment--sendText" type="button" onclick="leaveMessage()">留言</button>
                                <?php }else{ ?>
                                <button class="btn-main-sm member-login-popup__btn" id="comment--sendText" type="button">留言</button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="comment__block--show">
                    <!-- <div class="class__comment--single own__comment--doll col-12 no-fl">
                        <div class="comment__memberPic bs-bb fl-l">
                            <img src="img/class-img/badNPC.png" alt="member">
                        </div>
                        <div class="col-12 col-lg-10 class__comments bs-bb">
                            <div class="comment__block bs-bb">
                                <ul class="bs-bb">
                                    <li><span class="comment--name">Amos</span><span class="comment__time">2018/12/12</span></li>
                                    <li><span class="comment--text doll__comment--text">哪有！我做的才可愛</span></li>
                                </ul>
                                <div class="comment__image">
                                    <img class="photo--btn" src="img/class-img/monster-doll.jpg" alt="messagePic">
                                </div>
                                <div class="comment__arrow"></div>
                            </div>
                            <div class="comment__buttons">
                                <button class="btn-main-sm" id="comment--delete" type="submit">刪除</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <button class="btn-main-sm" id="loadBtn">More</button>
            </div>
        </div>
    </div>


<!-- 照片燈箱 -->
<div class="popup__photoBox">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box col-10 col-lg-6 card-sm ta-c z-i-999">
        <div id="popup__photo">
            <img src="" alt="popup__photo">
        </div>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn photo__close po-r far fa-times-circle"></i>
    </div>
</div>


<!-- 刪除燈箱 -->
<div class="MB-delete">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box col-7 col-lg-2 card-lg ta-c z-i-999">
        <h4>刪除留言</h4>
        <p>確認刪除?</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn MB-report__close po-r far fa-times-circle"></i>
        <button class="MB-delete__btn btn-sub-sm popup__btn m-5" onclick="deleteMessage()">確認</button>
    </div>
</div>
    <!-- 檢舉燈箱 -->
<div class="MB-report">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class=" popup__box col-7 col-lg-3 card-lg ta-c z-i-999">
        <h4 class="m-5">留言檢舉</h4>
        <select name="" id="reportMessage">
            <option value="仇恨言語">仇恨言語</option>
            <option value="色情內容">色情內容</option>
            <option value="外部廣告">外部廣告</option>
        </select>
        <button class="MB-confirm__btn btn-sub-sm popup__btn m-5" onclick="reportMessage()">確認</button>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn MB-report__popup__close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 檢舉送出通知燈箱 -->
<div class="MB-confirm">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box MB-confirm col-7 col-lg-3 card-lg z-i-999 ta-c ">
        <p>檢舉已送出</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn MB-report__popup__close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 課程不能報名通知燈箱 -->
<div class="popup__alertClass">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box col-7 col-lg-3 card-lg ta-c z-i-999 ">
        <p>此課程已超過開課一周前的報名期限</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn popup__alert--close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 付款燈箱 -->
<div class="payClass--popup">
    <div class="popup__wrap popup__wrap--Pay popup__close z-i-999">
    </div>
    <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
    <div class="popup__box col-7 col-lg-5 card-lg ta-c z-i-999">
        <h1 class="mb--10">請輸入信用卡</h1>
        <form action="">
            <div id="online" class="payTypeDetail mt-20">
                <div class="card__number">
                    <?php if( isset($_SESSION["memName"]) ){ ?>
                        <input type="hidden" id="pay__memNo" value="<?php echo $_SESSION['memNo']?>">
                    <?php }else { ?>
                        <input type="hidden" id="pay__memNo" value="">
                    <?php } ?>
                    <input type="hidden" id="classNo" value="">
                    <input type="hidden" id="classPrice" value="">
                    <span class="input--wrap">
                        <input type="text" id="cardNo1" name="creditCard-1" class="mb--card--adjust">
                        <span>-</span>
                    </span>
                    <span class="input--wrap">
                        <input type="text" name="creditCard-2" id="cardNo2">
                        <span>-</span>
                    </span>
                    <span class="input--wrap">
                        <input type="text" name="creditCard-3" id="cardNo3">
                        <span>-</span>
                    </span>
                    <input type="text" name="creditCard-4" id="cardNo4">
                </div>
                <div>
                    <p class="mb-5">有效期限</p>
                    <select name="chooseMonth" id="chooseMonth"></select>
                    <select name="chooseYear" id="chooseYear"></select>
                </div>
                <div>
                    <p class="mb-5">安全碼</p>
                    <input type="text" name="creditCardSafeCode">
                </div>
                <div class="ta-c mt-20">
                    <button type="button" class="btn-main-lg" id="submitCard" onclick="checkCard()">確認送出</button>
                </div>
            </div>
        </form>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn popup__card--close po-r far fa-times-circle"></i>
    </div>
</div>

<!-- 已付費通知燈箱 -->
<div class="popup__confirmPay">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box col-7 col-lg-3 card-lg ta-c z-i-999 ">
        <p>付款成功，請至信箱收取詳情</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn popup__confirmPay--close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 留言成功跳燈箱 -->
<div class="popup__comment">
    <!-- 燈箱外黑幕-->
    <div class="popup__wrap popup__comment--close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box MB-confirm transform--out col-7 col-lg-2 card-lg ta-c z-i-999">
        <p id="comment--send" class="ta-c">留言已送出</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn popup__comment--close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 禁止留言通知燈箱 -->
<div class="popup__msgAlert">
    <!-- 燈箱外黑幕     -->
    <div class="popup__wrap popup__close z-i-999">
    </div>
    <!-- 燈箱內容 -->
    <div class="popup__box col-7 col-lg-3 card-lg ta-c z-i-999 ">
        <p>不能送空白留言或只上傳照片</p>
        <div class="popup__icons dis-f fw-w">
        </div>
        <i class="close-btn popup__msgAlert--close po-r far fa-times-circle"></i>
    </div>
    <!-- 燈箱內容 end -->
</div>

<!-- 跳島飛機 -->
<div class="island__plane--wrap island__plane">
    <span class="island__plane--passenger">
        <img class="npc--body" src="img/class-img/body.svg" alt="classNPC">
    </span>
    <div class="wave--sign">
        <img src="img/class-img/hand_sign.svg" alt="sign">
        <p class="jump__island"><a href="class-print.php">前往列印島</a></p>
    </div>
    <div class="p-body">
        <div class="p-parts">
            <div class="part-one">
                <span class="po-up"></span>
                <span class="po-middle"></span>
                <span class="po-down"></span>
            </div>
            <div class="part-two">
                <span class="pt-wing"></span>
            </div>
            <div class="part-three">
                <span class="roll"></span>
            </div>
            <div class="helix">
                <span class="h-base"></span>
                <span class="h-rotor"></span>
            </div>
        </div>
    </div>
</div>
<!-- 手機跳島氣球 -->
<div class="balloon__island balloon__island--wrap mb">
    <div class="balloon__sign">
        <img src="img/class-img/arrow_sign_1.svg" alt="arrow sign">
        <p class="jump__island--mb"><a href="class-print.php">列印島</a></p>
    </div>
    <div class="balloon balloon1"></div>
    <div class="balloon balloon2"></div>
</div>
<?php
    require_once("footer.php");
?>

<?php
    require_once("member_login.php");
?>
</body>
<script src="js/Class-Doll-Calendar.js"></script>
<script src="js/Class-individual.js"></script>
<script src="js/MB-report.js"></script>
<script src="js/Class-sendMessage.js"></script>
<script src="js/Class-Doll-getComment.js"></script>
<script src="js/class_ajax.js"></script>
<script>
    var carousel = $(".photo--carousel"),
        currentDeg = 0;

    function rotateNext() {
        currentDeg = currentDeg - 60;
        carousel.css({
            "-webkit-transform": "translate(-50%,-50%) rotateY(" + currentDeg + "deg)",
            "transform": "translate(-50%,-50%) rotateY(" + currentDeg + "deg)"
        });
    }

    function rotateLast() {
        currentDeg = currentDeg + 60;
        carousel.css({
            "-webkit-transform": "translate(-50%,-50%) rotateY(" + currentDeg + "deg)",
            "transform": "translate(-50%,-50%) rotateY(" + currentDeg + "deg)"
        });
    }

    $("#arrowRight--photo").on("click", rotateNext);
    $("#arrowLeft--photo").on("click", rotateLast);

    var chooseMonth = document.getElementById("chooseMonth");
        for (var i = 1; i <= 12; i++) {
            var t = i + "月";
            var v = i;
            var new_option = new Option(t, v);
            chooseMonth.options.add(new_option);
        }
        var nowTime = new Date();
        var theYear = nowTime.getFullYear();

        var chooseYear = document.getElementById("chooseYear");
        for (var i = 0; i < 20; i++) {
            var t = theYear + i + "年";
            var v = theYear + i;
            var new_option = new Option(t, v);
            chooseYear.options.add(new_option);
        }
</script>

</html>