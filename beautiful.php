 <?php
session_start();
    //若“已製作怪獸” 商品上出現自己的怪獸;
    if(isset($_SESSION["memImg"])){
        $memImg = $_SESSION["memImg"];
    }else{
    //若“未製作怪獸”則出現預設蛋蛋圖片;   
        $memImg = "img/member/egg.png";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/beautiful.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/beautiful.js"></script>

    <title>做怪Mownster</title>

    <?php 
        require_once("header.php");
        require_once("member_login.php");
    ?>

      <!-- 形象小怪獸 -->
    <div class="header-height col-12 t-0p l-0p "></div>
    <div class="BF-islands po-a z--1">
        <img src="img/beautiful-img/BF-islands.png" alt="選美冒泡島">
    </div>
    <div class="mownsterImage ta-c">
        <div class="dis-ib"> 
            <!-- 請根據頁面更換小怪獸圖片連結 -->
            <div class="po-r dis-lg-ib  ta-c m-10">
                <img class="mownsterImage-img" src="img/header-img/MI-beautiful.png">
                <img class="mownsterImage-cloud dis-n po-a" src="img/beautiful-img/BF-cloud_mownsterStanding.png" alt="">
            </div>
            <div class="mownsterImage-textbox dis-ib ta-l pt-20 pb-20 pr-35 pl-35" style="background-color:#eee">
                <!-- 請根據頁面更換文字 -->
                <h1 class="p-0 m-0">歡迎來到選美冒泡島～</h1>
                <p class="p-0 m-0">我是迷妹，來這裡你可以參加選美釋放魅力，相信我,今夜你會是全場最閃亮的那顆星。</p>
            </div>
        </div>

    </div>
    <!-- 形象小怪獸 end -->

    <!-- 選美 -->
    <div class="BF po-r">
        <div class="BF-content">
            <div class="content-title">
                <h2>選美比賽</h2>
            </div>

            <!-- 選美排名 -->
            <div class="content-competition pb-50">
                <button class="hover-style btn-main-lg m-10" id="thisMonth">本月排名</button>
                <button class="btn-main-lg m-10" id="thisWeek">本週排名</button>

                <!-- 計分長條圖 -->
                <div class="competition-statisticChart card-sm pb-50 col-9 col-gl-4 m-a">

                    <div class="top">
                        <div class="rank">
                            <p>TOP-1</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text change_text"></p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img src="img/header-img/MI-make.png" alt="形象小怪獸" class="top_mowster"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name"></p>
                        <div class="ballot po-r">
                                <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <div class="top">
                        <div class="rank">
                            <p>TOP-2</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text change_text">40</p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img src="img/header-img/MI-game.png" alt="形象小怪獸" class="top_mowster"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name">天天天賦異稟</p>
                        <div class="ballot po-r">
                            <img src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <div class="top">
                        <div class="rank">
                            <p>TOP-3</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text change_text"></p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img src="img/header-img/MI-make.png" alt="形象小怪獸" class="top_mowster"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name">天賦異稟</p>
                        <div class="ballot po-r">
                            <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <div class="top top-lg">
                        <div class="rank">
                            <p>TOP-4</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text change_text"></p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img src="img/header-img/MI-make.png" alt="形象小怪獸" class="top_mowster"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name">天賦異稟</p>
                        <div class="ballot po-r">
                            <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <div class="top top-lg">
                        <div class="rank">
                            <p>TOP-5</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text change_text"></p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img src="img/header-img/MI-product.png" alt="形象小怪獸" class="top_mowster"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name">天賦異稟</p>
                        <div class="ballot po-r">
                            <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <!-- <div class="statisticChart-margin"></div> -->

                    <?php
                        // 有登入會員的情況
                        if( isset($_SESSION["memName"]) ){ 
                    ?>

                    <div class="myself">
                        <div class="rank">
                            <p>會員</p>
                        </div>
                        <div class="myself_vote">
                            <p class="top-text change_text"></p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img  id="myselfImg" src="<?php echo $memImg ;?>" alt="形象小怪獸"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name"></p>
                        <div class="ballot po-r">
                            <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>

                    <script >

                    </script>
                    <?php }else { ?>
                    <div class="myself">
                        <div class="rank">
                            <p>訪客</p>
                        </div>
                        <div class="top_vote">
                            <p class="top-text ">0</p>
                            <img src="img/beautiful-img/BF-heart.png" alt="得票數">
                        </div>
                        <div class="top-mowster"><img  id="myselfImg" src="<?php echo $memImg ;?>" alt="形象小怪獸"></div>
                        <div class="top-voteGetting"></div>
                        <p class="top-name">訪客</p>
                        <div class="ballot po-r">
                            <img class="heart" src="img/beautiful-img/BF-voteHeart.png" alt="">
                                <p class="absolute_middle">投票</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- 計分長條圖 end -->

                <!-- 投稿清單 -->
                <div class="content-participant container">
                    <h3 class="h3MP">更多參賽者</h3>
                    <div class="participant-menu ">
                        <!-- 搜尋box -->
                        <div class="menu-selector">
                            <!-- 流水號搜尋器 -->
                            <div class="serchbar dis-lg-ib float-lg-l">
                                <input type="text" placeholder="請輸入編號" id="serchbox">
                                <button class="btn-main-lg" id="serchbutton">搜尋</button>
                            </div>
                            <!-- 排序選單 -->
                            <div class="m-5 dis-lg-ib float-lg-r">
                                <!-- <select class="pl-10">
                                    <option id="toHeight">票數:低→高</option>
                                    <option id="toDown">票數:高→低</option>
                                </select> -->

                                <!-- 有登入會員的狀況 -->
                                <?php if( isset($_SESSION["memName"]) ){ ?>
                                <button class="contribute__btn btn-main-lg" href="#" onclick="contribute_expression()">我要投搞</button>

                                <script>
                                    function contribute_expression(){
                                    // 判斷是否做過做過小怪獸
                                        <?php if( $_SESSION["memImg"]!=null ){ ?>
                                        console.log("有做小怪獸");
                                        // 回傳值判斷是否投稿過，
                                        var xhr_DoYouMake = new XMLHttpRequest();
                                        xhr_DoYouMake.onload=function (){
                                            if( xhr_DoYouMake.status == 200 ){
                                                if(xhr_DoYouMake.responseText=="save!"){
                                                    console.log("沒有投稿過");
                                                    // 投稿燈箱
                                                    contribute();
                                                    document.querySelector('.BF-confirm__btn').addEventListener("click",function(){
                                                        var firstTitle = document.getElementById('firstTitle');
                                                        var firstText = document.getElementById('firstText');

                                                        var xhr = new XMLHttpRequest();
                                                        xhr.onload = function(){
                                                            if(xhr.status==200){
                                                                console.log(111);
                                                            }else{
                                                                console.log(xhr.status);
                                                            }
                                                        };
                                                        var url = "beautiful_vote.php?firstTitle="+ firstTitle.value +"&firstText=" + firstText.value;
                                                        xhr.open("Get", url, true);
                                                        xhr.send();
                                                    },true);
                                                }else{
                                                console.log("重複投稿警報!!");

                                                // 警告燈箱
                                                reVote_lightbox();
                                                $(".BF-confirm__btn").click(function(){
                                                    var firstTitle = document.getElementById('firstTitle');
                                                    var firstText = document.getElementById('firstText');

                                                    var xhr = new XMLHttpRequest();
                                                    xhr.onload = function(){
                                                        if(xhr.status==200){
                                                            console.log(111);
                                                        }else{
                                                            console.log(xhr.responseText);
                                                        }
                                                    };
                                                    var url = "beautiful_revote.php?firstTitle="+ firstTitle.value +"&firstText=" + firstText.value;
                                                    xhr.open("Get", url, true);
                                                    xhr.send();
                                                    })
                                                } 
                                                // 有沒有投稿過報錯
                                                }else{
                                                    alert( xhr_DoYouMake.status );
                                                }
                                            }
                                          
                                            var url = "beautiful_DoYouMake.php";
                                            xhr_DoYouMake.open("Get", url, true);
                                            xhr_DoYouMake.send( null );

                                            // 沒做小怪獸的情況
                                            <?php }else{ ?>
                                            console.log("沒做小怪獸");
                                            // 跳轉製作頁面通知燈箱
                                            goToMake();
                                        <?php } ?>    
                                    };
                                </script>
                                <!-- popup -->

            <!-- 投稿燈箱 -->
            <div class="BF-contribute ta-c">
                <div class="popup__wrap popup__close z-i-999">
                </div>
                <div class="popup__box col-7 col-lg-2 card-lg ta-c z-i-999">
                    <div class="ta-c">
                        <h3>選美投稿</h3>
                    </div>
                    <img class="w-60p w-lg-50p" src="<?php echo $_SESSION["memImg"]?>">
                    
                    
                    <div class="m-5">
                        <form action="">
                            <p>標題</p>
                            <input id="firstTitle" class="pl-10 bs-bb w-100p" type="text" name="vote-title" maxlength="6" placeholder="最多六個字">
                        </form>
                        <p>內容</p>
                        <textarea id="firstText" class=" bs-bb w-100p" name="vote-text" id="contribute-text" maxlength="30" placeholder="最多三十字"></textarea>
                    </div>

                    <button class="BF-confirm__btn btn-sub-sm popup__btn dis-b m-a">確認</button>
                    <div class="popup__icons dis-f fw-w">

                    </div>
                    <i class="close-btn po-r far fa-times-circle"></i>
                </div>
            </div>

            <!-- 投稿送出通知燈箱 -->
            <div class="BF-confirm ta-c po-f z-9 z-i-999">
                <!-- 燈箱外黑幕     -->
                <div class="popup__wrap popup__close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class="popup__box transform--out col-7 col-lg-2 card-lg z-i-999">
                    <p>投稿已送出</p>
                    <div class="popup__icons dis-f fw-w">
                    </div>
                    <i class="close-btn po-r far fa-times-circle"></i>
                </div>
            </div>

            <!-- 重複投稿通知燈箱 -->
            <div class="reVote ta-c po-f z-9 z-i-999">
                <!-- 燈箱外黑幕     -->
                <div class="popup__wrap popup__close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class="popup__box transform--out col-7 col-lg-2 card-lg z-i-999">
                    <p>已經投稿過囉!!</p>
                    <p>重複投稿會重新計算票數</p>
                    <p>確定要繼續嗎?</p>
                    <button class="reVote__btn btn-sub-sm popup__btn m-5 " onclick="contribute()">確定</button>
                    <div class="popup__icons dis-f fw-w">
                    </div>
                    <i class="close-btn  po-r far fa-times-circle"></i>
                </div>
            </div>

            <!-- 跳轉製作頁面通知燈箱 -->
            <div class="goToMake ta-c po-f z-9 z-i-999">
                <!-- 燈箱外黑幕     -->
                <div class="popup__wrap popup__close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class="popup__box transform--out col-7 col-lg-2 card-lg z-i-999">
                    <p>沒有小怪獸可以投稿?</p>
                    <p>先去製作小怪獸吧!</p>
                    <button class="goToMake__btn btn-sub-sm popup__btn m-5 " onclick="javascript:location.href='Makingmowns.php'">前往</button>
                    <div class="popup__icons dis-f fw-w">
                    </div>
                    <i class="close-btn po-r far fa-times-circle"></i>
                </div>
                <!-- 燈箱內容 end -->
            </div>



                               <!-- 沒登入會員的狀況 -->
                            <?php }else { ?>
                                <button class="contribute__btn btn-main-lg" href="#" onclick="abc_login()">我要投搞</button>
                                <script>
                            
                                    function abc_login(){
                                    $('.member-login .popup__wrap').fadeIn(100);
                                    $('.member-login .popup__box').removeClass('transform--out').addClass('transform--in');
                                    $('.psw-back-end .popup__wrap').fadeOut(100);
                                    $('.psw-back-end .popup__box').removeClass('transform--in').addClass('transform--out');}
                                    //按登入按鈕 頁面會重新整理
                                    $("#btnLogin").click (function(){
                                      //=====使用Ajax 回server端
                                        var xhr = new XMLHttpRequest(); 
                                        if($id('memId').value == ''){
                                            $id('login-erroMsg').innerHTML = '請輸入帳號!';
                                        }else if($id('memPsw').value == ''){
                                            $id('login-erroMsg').innerHTML = '請輸入密碼!';
                                        }else{
                                        xhr.onload = function (){
                                          if( xhr.responseText == "not found"){
                                            $id('memId').value = '';
                                            $id('memPsw').value = '';
                                            $id('memId').focus();
                                            $id('login-erroMsg').innerHTML = '帳號密碼錯誤!';
                                          }else if(xhr.responseText == "error"){
                                            $id('memId').value = '';
                                            $id('memPsw').value = '';
                                            $id('memId').focus();
                                            $id('login-erroMsg').innerHTML = '系統錯誤!';
                                          }else{ //帳密登入成功
                                            $('.member-login .popup__wrap').fadeOut(100);//會員登入關閉
                                            $('.member-login .popup__box').removeClass('transform--in').addClass('transform--out');
                                            $('.loginsuccess_popup .popup__wrap').fadeIn(100);//登入成功出現
                                            $('.loginsuccess_popup .popup__box').removeClass('transform--out').addClass('transform--in');
                                            setTimeout(function(){
                                              $('.loginsuccess_popup .popup__wrap').fadeOut(100);//登入成功關閉
                                              $('.loginsuccess_popup .popup__box').removeClass('transform--in').addClass('transform--out');
                                                history.go(0);//重新整理
                                            },300);
                                            $id('login-on02').classList.remove("member-login-popup__btn");
                                            $id('member-Img').src ="img/header-img/HD-mamber04.png";
                                            $id('login-on').href = "member.php";
                                            $id('login-on01').href = "member.php";
                                            $id('memId').value = '';
                                            $id('memPsw').value = '';
                                          }
                                        }
                                        var url = "ajaxLogin_JSON.php";
                                        xhr.open("post", url, true);
                                        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
                                        var member = {};
                                        member.memId = document.getElementById("memId").value;
                                        member.memPsw = document.getElementById("memPsw").value;
                                        var data_info = "jsonStr=" + JSON.stringify( member );
                                        xhr.send(data_info);

                                        }
                                    })

    
                                </script>
                            <?php } ?>    
                            </div>
                        </div>
                        <div class="menu-list container">
                            <div id="newCard"></div>
                            <button class="menu-list-more btn-main-sm m-20">more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lastMonthWinner pb-50">
                <div class="content-title">
                    <h2>上個月排名</h2>
                </div>
                <div class="lastMonth-BG po-r">
                    <div class="BG-card BG-card_1 card-sm z-1 po-r">
                        <button id="lastMonth-BG_leftbutton" class="z-3 po-a t-50p l-0p w-50">
                            <img src="img/class-img/arrow-left.png" alt="">
                        </button>
                        <button id="lastMonth-BG_rightbutton" class="z-3 po-a t-50p r-0p w-50">
                            <img src="img/class-img/arrow-right.png" alt="">
                        </button>
                        <div class="card-img w-50p dis-ib">
                            <img id="BG-card_img" src="img/shop-img/mownster-top1.png" alt="">
                        </div>
                        <div class="card-text">
                            <div class="rank">
                                <div class=" vote po-r dis-ib w-50">
                                    <img src="img/beautiful-img/BF-heart.png" alt="計分愛心">
                                    <p id="lastMonth_vote" class="dis-ib po-a t-0p">100</p>
                                </div>
                                <p id="lastMonth_rank" class="dis-ib card-title">第一名</p>
                            </div>
                            <p id="lastMonth_title" class="dis-ib card-title">桃園瑪麗亞凱莉</p>
                            <div class="card-text-content">
                                <p id="lastMonth_text" class="ta-c ta-lg-l">糾咪~</p>
                            </div>

                            <button class="mt-10 btn-main-lg float-lg-r " onclick="javascript:location.href='shop.php'">客製化商品</button>
                        </div>
                    </div>
                    <!-- 左側小怪獸 -->
                    <div class="po-a w-100 l-5p b-5p  " id="mowster-left_site">
                        <img src="img/shop-img/mownster-top2.png" alt="">
                    </div>
                    <!-- 右側小怪獸 -->
                    <div class="po-a w-100 r-5p b-5p  " id="mowster-right_site">
                        <img src="img/shop-img/mownster-top3.png" alt="">
                    </div>
                    <!-- 卡片後面的左側的小怪獸 -->
                    <div id="mowster-left_jumpOut" class=" po-a w-100 l-30p b-30p"><img src="img/shop-img/mownster-top3.png"
                            alt=""></div>
                    <!-- 卡片後面的右側的小怪獸 -->
                    <div id="mowster-right_jumpOut" class="po-a w-100 r-30p b-30p">
                        <img src="img/shop-img/mownster-top2.png" alt=""></div>


                </div>
            </div>
           <!-- 留言板 -->
            <div class="container pb-50 ta-c">
                <div class="comment__title po-r">
                    <div class="content-title">
                        <h2>留言板</h2>
                    </div>
                </div>
                <div class="class__comment commentBoard bs-bb pl-lg-50 pr-lg-50 pl-20 pr-20">
                    <div class="class__comment--type clear col-12 no-fl">
                        <div class="comment__memberPic col-2 bs-bb fl-l">
                            <?php if(isset($_SESSION["memName"])){ ?>
                                <img src="<?php echo  $_SESSION["memImg"];?>" alt="member">
                            <?php }else{ ?>
                                <img src="img/beautiful-img/QA_NPC.png" alt="member">
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-10 class__comments bs-bb">
                            <div class="comment__block bs-bb">
                                <ul class="bs-bb">
                                <?php if(isset($_SESSION["memName"])){ ?>
                                    <li><span class="comment--name"><?php echo $_SESSION["memName"];?></span><span class="comment__time"><?php echo date("Y-m-d",time())?> </span></li>
                                <?php }else{ ?>
                                    <li><span class="comment--name">訪客</span><span class="comment__time"><?php echo date("Y-m-d",time())?></span></li>
                                <?php } ?>
                                    <li><textarea maxlength="10" name="typeComment" id="classComment--send" placeholder="小怪獸想說什麼心裡話呢......？"></textarea></li>
                                </ul>
                                <div class="comment__arrow"></div>
                            </div>
                            <div class="comment__buttons">
                                <?php if(isset($_SESSION["memName"])){ ?>
                                    <button class="btn-main-sm" id="comment--sendText" type="submit" onclick="leaveMessage()">留言</button>
                                <?php }else{ ?>
                                    <button class="btn-main-sm member-login-popup__btn" id="comment--sendText" type="submit">留言</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="class__comment--other">
                    </div>
                    <button class="btn-main-sm" id="loadBtn">More</button>
                </div>
            </div>
            <!-- 留言板 end -->



           

             <!-- popup -->
                                    
            <div class="MB-report  ta-c po-f z-i-999">
                <!-- 燈箱外黑幕     -->
                <div class="popup__wrap popup__close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class=" popup__box transform--out col-7 col-lg-2 card-lg z-i-999">
                    <h4 class="m-5">留言檢舉</h4>
                    <select name="reportMessage">
                        <option value="1">仇恨言語</option>
                        <option value="2">色情內容</option>
                        <option value="3">外部廣告</option>
                    </select>
                    <!-- <button class="MB-confirm__btn btn-sub-sm popup__btn m-5" type="submit">確認</button> -->

                    <button class="MB-confirm__btn btn-sub-sm popup__btn m-5" onclick="reportMessage()">確認</button>
                <i class="close-btn MB-report__popup__close po-r far fa-times-circle"></i>
                </div>
            </div>

            <!-- 留言成功跳燈箱 -->
            <div class="popup__comment ta-c po-f z-9 z-i-999">
                <!-- 燈箱外黑幕-->
                <div class="popup__wrap popup__comment--close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class="popup__box MB-confirm transform--out col-7 col-lg-2 card-lg z-i-999">
                    <p id="comment--send">留言已送出</p>
                    <div class="popup__icons dis-f fw-w">
                    </div>
                    <i class="close-btn popup__comment--close po-r far fa-times-circle"></i>
                </div>
                <!-- 燈箱內容 end -->
            </div>

             <!-- 刪除燈箱 -->
            <div class="MB-delete ta-c po-f z-i-999">
                <!-- 燈箱外黑幕     -->
                <div class="popup__wrap  MB-report__popup__close z-i-999">
                </div>
                <!-- 燈箱內容 -->
                <div class="MB-delete popup__box transform--out col-7 col-lg-2 card-lg  z-i-999">
                    <p>確定刪除？</p>
                    <div class="popup__icons dis-f fw-w">
                    </div>
                    <i class="close-btn MB-report__popup__close po-r far fa-times-circle"></i>
                    <button class="MB-delete__btn btn-sub-sm popup__btn m-5" onclick="deleteMessage()">確認</button>
                </div>
            </div>
        </div>

        <!-- 檢舉送出通知燈箱 -->
        <div class="MB-confirm ta-c po-f z-9 z-i-999">
            <div class="popup__wrap MB-report__popup__close z-i-999">
            </div>
            <div class="popup__box MB-confirm transform--out col-7 col-lg-2 card-lg ">
                <p>檢舉已送出</p>
                <div class="popup__icons dis-f fw-w">
                </div>
                <i class="close-btn MB-report__popup__close po-r far fa-times-circle"></i>
            </div>
        </div>
        <!-- 投票次數上限燈箱-->
        <div class="popup--Share"> 
            <div class="popup__wrap popup__close close-btn">
            </div>
            <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
            <div class="popup__box col-9 col-lg-4 card-lg"> 
                <div class="popup__icons dis-f fd-c ai-c">
                    <h3>一日最多投3票～</h3>
                </div>
                <i class="close-btn popup__close po-r far fa-times-circle"></i>
            </div> 
        </div>

        <script src="js/B-comment.js"></script>
        <script src="js/MB-report.js"></script>      
        <script src="js/B-Message.js"></script>
        
         <?php 
        require_once("footer.php");
        ?>
</body>


</html>