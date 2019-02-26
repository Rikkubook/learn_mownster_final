
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header&mowsterImg.css">
    <link rel="stylesheet" href="css/popup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="img/header-img/LOGO_new02.png" >
    <style>
        
    </style>
</head>
<body >
    <!-- header fixd-->

        <!-- fixd背景雲 -->

        <!-- fixd內容 -->
    <div class="header HD-cloud   col-12 po-f t-0p l-0p z-10">
        <div class="header-context container mb-20 pt-5 ">
            
            <!-- 漢堡按鈕 -->
            <input type="checkbox" id="HD-menuControl">
            <div class="burger w-40p ta-l va-m dis-ib po-r">
                <div class="burger-line1"></div>
                <div class="burger-line2"></div>
                <div class="burger-line3"></div>
                <div class="burger-line4"></div>
                <div class="burger-line5"></div>
            <label for="HD-menuControl" class="burger-btn w-100p dis-ib"></label>
            </div>
            
            <!-- LOGO -->
            <div class="LOGO w-20p ta-c va-m dis-ib w-lg-12p">
                <a href="home.php">
                <img class="w-60 w-lg-80p" src="img/header-img/LOGO_new02.png" alt="首頁">
            </a>
            </div>

            <!-- QR -->
            <div class="QR w-40p ta-c va-m dis-ib">
                <a href="#">
                <img class="w-50 ta-l" src="img/header-img/HD-QR_unuseful.png" alt="QR Code">
                </a>
            </div>

            <!-- 漢堡選單 -->
            <nav class="burger-menu po-r">
                    <ul class="m-0 p-0">

                        <!-- 客製蛋生島 -->
                        <li class="changeColor po-r pt-10 pb-10 pl-10 pr-10">
                            <div class="HD-mownster dis-ib va-m ">
                                <a href="Makingmowns.php">
                                    <img src="img/header-img/MI-make.png" alt="客製蛋生島">
                                
                            </div>
                                <div class="HD-textbox dis-ib pl-10 va-m">
                                    <a href="Makingmowns.php">
                                    <span class="dis-ib HD-text_font_CH">客製蛋生島</span>
                                    <!-- span防止p往上跑 -->
                                    <span class="burger-menu--br"> </span>
                                    <span class="dis-ib HD-text_font_EN">[Customize]</span>
                                </a>
                            </div>
                        </li>

                        <!-- 選美冒泡島 -->
                        <li class="changeColor po-r pt-5 pb-5 pl-10 "> 
                            <div class="HD-mownster dis-ib va-m">
                                <a href="beautiful.php">  
                                    <img src="img/header-img/MI-beautiful.png" alt="選美冒泡島">
                                </div>
                                <div class="HD-textbox dis-ib pl-10 va-m">
                                    <a href="beautiful.php">
                                    <span class="dis-ib HD-text_font_CH">選美冒泡島</span>
                                    <!-- span防止p往上跑 -->
                                    <span class="burger-menu--br"> </span>
                                    <span class="dis-ib HD-text_font_EN">[ Voting ]</span>
                                </a>
                            </div>
                        </li>

                        <!-- 課程雙子島 -->
                        <li class="changeColor po-r pt-5 pb-5 pl-10 ">
                            <div class=" HD-mownster dis-ib va-m">
                                <a href="class.php">   
                                    <img src="img/header-img/MI-class.png" alt="課程雙子島">
                                </div>
                                <div class="HD-textbox dis-ib pl-10 va-m">
                                    <span class="dis-ib HD-text_font_CH">課程雙子島</span>
                                    <span class="dis-ib HD-text_font_EN">[ Course ]</span>
                                </a>
                            </div>
                        </li>

                        <!-- 遊戲冒險島 -->
                        <li class="changeColor po-r pt-5 pb-5 pl-10 ">
                            <div class="HD-mownster dis-ib va-m">
                                <a href="game.php">   
                                    <img src="img/header-img/MI-game.png" alt="遊戲冒險島">
                                </div>
                                <div class="HD-textbox dis-ib pl-10 va-m">
                                    <span class="dis-ib HD-text_font_CH">遊戲冒險島</span>
                                    <!-- span防止p往上跑 -->
                                    <span class="burger-menu--br"> </span>
                                    <span class="dis-ib HD-text_font_EN"> [ Game ] </span>
                                </a>
                            </div>
                        </li>

                        <!-- 商城快樂島 -->
                        <li class="changeColor po-r pt-5 pb-5 pl-10 ">   
                            <div class="HD-mownster dis-ib va-m">
                                <a href="shop.php">
                                    <img src="img/header-img/MI-product.png" alt="商城快樂島">
                                </div>
                                <div class="HD-textbox dis-ib pl-10 va-m">
                                    <span class="dis-ib HD-text_font_CH">商城快樂島</span>
                                    <!-- span防止p往上跑 -->
                                    <span class="burger-menu--br"> </span>
                                    <span class="dis-ib HD-text_font_EN"> [ Shop ] </span>
                                </a>
                            </div>
                        </li>

                        <!-- 會員&購物車 -->
                        <li class=" po-r pt-5 pb-5 pl-10 ">   
                            <div class="button">
                            <?php if( isset($_SESSION["memName"]) ){?>
                                <div class="changeColor pb-10 w-lg-50p">
                                    <a href="member.php" class="button-img dis-ib va-m">
                                        <img class=" w-90p" src="img/header-img/HD-mamber04.png" alt="會員中心">
                                    </a>
                                <div class="changeColor button-text dis-ib pl-10 va-m">
                                    <a href="member.php">
                                        <span id="spanLogin" class="dis-ib HD-text_font_CH">會員中心</span>
                                        <span class="dis-ib HD-text_font_EN">[ Member ]</span>
                                    </a>
                                </div>
                            </div>
                            <?php }else { ?>
                            <div id="login-on02" class="changeColor member-login-popup__btn pb-10 w-lg-50p">
                                <a href="#" id="login-on" class="button-img dis-ib va-m">
                                    <img id="member-Img" class=" w-90p" src="img/header-img/HD-mamber02.png" alt="會員中心">
                                </a>
                                <div class="changeColor button-text dis-ib pl-10 va-m">
                                    <a href="#" id="login-on01">
                                        <span id="spanLogin" class="dis-ib HD-text_font_CH">會員登入</span>
                                        <span class="dis-ib HD-text_font_EN">[ Member ]</span>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="w-35 changeColor w-lg-50p po-r" id="shoppingCart-popup-wrap">
                                <a href="shoppingCart.php" class="button-img dis-ib va-m po-r">
                                    <div class="w-30 z-10 po-a" id="show-count" <?php if(isset($_SESSION["generalProd"])){?> style="background-color:#73c3be" <?php } ?> ><span class="v-c" id="show-count-text"><?php if(isset($_SESSION["generalProd"])){echo count($_SESSION["generalProd"]);} ?></span></div>
                                        <?php if(isset($_SESSION["generalProd"])){?>
                                            <img class="w-90p" id="shoppingCart_icon" src="img/header-img/HD-shopCar04.png" alt="購物車">
                                        <?php }else{ ?>
                                            <img class="w-90p" id="shoppingCart_icon" src="img/header-img/HD-shopCar02.png" alt="購物車"> 
                                        <?php } ?>
                                        
                                </a>
                            <?php  ?>
                            <div class="changeColor w-500 po-a v-hide of-h pb-10" id="shoppingCart-popup"></div>
                                
                                </div>
                            </div>
                        </li>
                    </ul>
            </nav>   
        </div>   
    </div>
    <!-- header end -->




 <!-- QA機器人 -->
    <div id="chatBot" class="clearfix  dis-lg-b">
        <div class="chatBot-contenier-wrap">
            <h3 class="m-0 p-0p">詢問蛋蛋怪</h3>
            <i class="far fa-times-circle"></i>
            <div id="chatBot-content" class="clearfix">
                <div id="chatBot-container">
                    <p class="chatBot-content-A">Hi~我是蛋蛋怪，您的任何問題可點擊下方關鍵字或直接輸入詢問內容喔!</p>
                    <div style="clear:both"></div>
                </div>
            </div>
            <ul class="chatBot-keyword clearfix">
            <?php
                try{
                    require("connectCD104.php");
                    $sql = "select *
                            from bot where botStatus = 1 and botTag = 0";
                    $pdoStatement = $pdo->query( $sql);
                } catch(PDOException $e) {
                    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".  "錯誤行號 : ". $e->getLine(). "<br>";
                };
            ?>
            <?php
                 while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
            ?>
                <li><?php echo $row["botContent"] ;?></li>
            <?php }?>
                <!-- 
                <li>客製怪獸</li>
                <li>怪獸選美</li>
                <li>3D列印</li>
                <li>布娃娃</li>
                <li>優惠折扣</li>
                <li>客製化商品</li>
                <li>營業時間</li>
                <li>店家地址</li>
                <li>店家電話</li>   -->            
            </ul>
            <div class="chatBot-text-Wrap">
                <button type="submit" id="chatBot-search" class="nextBTN">
                    送出
                </button>
                <input type="text" class="chatBot-text">
                <div id="UserText"></div>
            </div>          
        </div>

        <label for="close-chatBot" class="close-chatBot-pic">
            <img src="img/header-img/egg_QA.png" alt="詢問蛋蛋怪" class="chatBot-pic">
            <span class="chatBot-title">快來問我問題吧</span>
        </label>    
    </div>

    <div class="QA_phone_icon dis-lg-n po-f b-2p r-2p z-10">
        <img src="img/header-img/QA_phone_icon.png">
    </div>







    <script>

    // header的背景雲，動態補背景顏色
    $('.burger-btn').click(function(){
        if($('.HD-cloud').css("backgroundColor")=="rgba(0, 0, 0, 0)"){
        $('.HD-cloud').css("backgroundColor","#CFE6AE");
        }else{
        $('.HD-cloud').css("backgroundColor","rgba(0, 0, 0, 0)");    
        }        
    });
    // 根據視窗寬度跟漢堡選單開啟與否判斷是否要做背景補色修正
    $(window).resize(function(){
        if( $(window).width() > 768){
            $('.HD-cloud').css("backgroundColor","rgba(0, 0, 0, 0)");
        }else if($(window).width() < 768 && $('.burger-menu').css('display') == 'block'){
        $('.HD-cloud').css("backgroundColor","#CFE6AE");

        };

    });
    // 漢堡按鈕內三條線動畫控制
    $('.burger-btn').click(function(){
        if($('.burger-menu').css('display') == 'none'){
            console.log($('.burger-menu').css('display'));
            $('.burger').addClass('open');
        }else{
            $('.burger').removeClass('open');
        }
    });

    // 增減class變換漢堡內三條線樣式





    // QA機器人
    //開關機器人
    $('.far').click(function(){
          $('.chatBot-contenier-wrap').css({
            'visibility':'hidden',
       });
      });

    $('.close-chatBot-pic').click(function(){
        $('.chatBot-contenier-wrap').css({
          'visibility':'visible',
     });
    });

    $('.QA_phone_icon').click(function(){
        $('.chatBot-contenier-wrap').css({
          'visibility':'visible',
     });
    });

    //輸入框
    var chatUserText = document.getElementsByClassName("chatBot-text")[0];
    //內容第一層overflow
    var content = document.getElementById("chatBot-content");
    //內容第二層(包p)
    var container = document.getElementById("chatBot-container");
    //要被丟進PHP跟關鍵字搭配的字
    var botSearch = "";

    function $id(id) {
      return document.getElementById(id);
    }
    //刪除小黑點
    function delQpoint() {
      // console.log(container.lastChild.previousSibling.tagName);
      // console.log(container.lastChild.tagName);
      container.removeChild(container.lastChild.previousSibling); //刪除container的最後一個小孩的上一個兄弟
      container.removeChild(container.lastChild); //刪除container的最後一個小孩
    }

    //卷軸維持在最底端
    function chatBotScrollTo(container, content) {
      //找到對話框的高度，並設定變數
      let h = container.offsetHeight;
      //送出的同時滾動卷軸到最後一筆留言
      content.scrollTo({
        top: h,
        left: 0,
        behavior: "smooth"
      });
    }

    //新增內容
    function addChatText(text) {
      //使用者打的文字存入隱藏標籤內
      $id("UserText").innerHTML = text;
      //設變數存要新增的內容，文字放隱藏標籤的純文字。
      let newText =
        "<p class='chatBot-content-Q'>" +
        $id("UserText").innerText +
        "</p><div style='clear:both'></div>";
      //隱藏標籤的純文字存入變數botSearch(關鍵字搜尋)
        botSearch = $id("UserText").innerText;
      //清空隱藏標籤
        $id("UserText").innerHTML = "";
      //把使用者的文字加到對話區
      container.innerHTML += newText;
      //清空輸入框的字
      chatUserText.value = "";
      //捲軸更新
      chatBotScrollTo(container, content);
    }


    function CallAjax(text) {
      var BotText ="";
      //傳PHP端
      var obj = {};
      obj.keyword = text;
      str = text;
      // var jsonStr = JSON.stringify(obj);

      //回server端,取回關鍵字內容, 放到頁面上
      var xhr = new XMLHttpRequest();
      xhr.onload = function() {
        if (xhr.status == 200) {
          if (xhr.responseText== 0) {
            //回傳的資料中有not found
            BotText = "嗚嗚~請查詢其他關鍵字";
          } 
          else {
            //查有此keyword
            BotText = xhr.responseText;
          }

          //把關鍵字內容加到對話區
          container.innerHTML += `<p class="chatBot-content-A">${BotText}</p><div style="clear: both"></div>`;
          //卷軸滑到底
          chatBotScrollTo(container, content);
        } else {
          alert(xhr.status);
        }
      };

      xhr.open("post", "chatBotSaveSession.php", true);
      xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
      var data_info = "str=" + str;
      xhr.send(data_info);
    }

    chatUserText.addEventListener("keyup", function() {
      //小黑點
      var Qpoint = document.querySelectorAll(".chatBot-content-Q span");
      //HTML包含小黑點
      let newText = `<p class="chatBot-content-Q"><span></span><span></span><span></span></p><div style="clear: both"></div>`;
      //輸入字串長度大於等於1時，新增div包含小白點
      if (chatUserText.value != "") {
        //如果內容沒有空值
        if (
          chatUserText.value === null ||
          chatUserText.value.match(/^ *$/) !== null
        ) {
          //如果內容的值是空白值
          $id("chatBot-search").disabled = true;
          return;
        }
        if (Qpoint.length < 1) {
          //判斷有沒有小黑點,沒有就加。
          $("#chatBot-container").append(newText);
        }
        if (window.event.which == 13) {
          //判斷鍵盤有按下Enter,就送出內容
          delQpoint();
          addChatText(chatUserText.value);
          CallAjax(botSearch);
        }
      }else{
        if (Qpoint.length >= 1) {
          //小黑點
          delQpoint();
        }
      }
      chatBotScrollTo(container, content);
    });
    $id("chatBot-search").addEventListener("click", function() {
      if (chatUserText.value != "") {
        //清除小黑點
        delQpoint();
        //再新增文字
        addChatText(chatUserText.value);
        //判斷關鍵字同時CallAjax()
        CallAjax(botSearch);
      }
    });

    //使用關鍵字
    var keyword = document.querySelectorAll(".chatBot-keyword li");
    for (let i = 0; i < keyword.length; i++) {
      keyword[i].addEventListener("click", function() {
        var Qpoint = document.querySelectorAll(".chatBot-content-Q span");

        if (Qpoint.length >= 1) { //如果有小黑點
          //清除小黑點
          delQpoint();
        }
        //新增文字
        addChatText(keyword[i].innerText);
        //回傳關鍵字
        CallAjax(keyword[i].innerText);
      });
    }

    //捲動關鍵字項目-算出總寬度
    var keywordWrap = document.querySelector(".chatBot-keyword");
    var cc = 0;
    var maxW = 0;
    var keywordWidth = [];


    keywordWrap.onmousewheel = addKey;
    function addKey(e) {
     
      var e = e || window.event; //看是哪個瀏覽器
      // console.log();
      if (keywordWrap.contains(e.target)) { //如果摸到時包含ul子層
        var orient = event.deltaY;
        if (orient > 0) {
          cc += 35;
          if (cc > maxW) {
            cc = maxW;
          }
        } else if (orient < 0) {
          cc -= 35;
          if (cc < 0) {
            cc = 0;
          }
        }
        keywordWrap.scrollTo({
          top: 0,
          left: cc,
          behavior: "smooth"
        });
      }
      event.preventDefault();
      e.stopPropagation();
    }

    function showCartPopup_Ajax(){
        var xhr = new XMLHttpRequest();
    xhr.onload=function (){
        if( xhr.status == 200 ){
            if(xhr.responseText != ""){
                if(document.body.clientWidth > 768){
                    document.getElementById("shoppingCart-popup").style.visibility = "visible";
                    document.getElementById("shoppingCart-popup").innerHTML = xhr.responseText;
                }
            }
               
        }else{
            alert( xhr.status );
        }
    }
    
    var url = "showCartPopup.php";
    xhr.open("Get", url, true);
    xhr.send( null );
    }

    var shoppingCartIcon = document.getElementById("shoppingCart-popup-wrap");
    shoppingCartIcon.onmouseenter = function(){
        showCartPopup_Ajax();
    }

    var shoppingCartPopupWrap = document.getElementById("shoppingCart-popup-wrap");
    shoppingCartPopupWrap.onmouseleave = function(){
        document.getElementById("shoppingCart-popup").style.visibility = "hidden";
    }
    if(document.body.clientWidth < 768){
        // $(".QR").append( $("#shoppingCart-popup-wrap"));
        $("#shoppingCart-popup-wrap").appendTo(".QR");
        $(".QR").css({"display":"inline-flex",
                      "align-items":"center",
                      "justify-content":"flex-end",
                      "padding-right":"25px",
                      "box-sizing":"border-box",
                    });
        $("#shoppingCart-popup-wrap").css({"margin-left":"10px"});
        $(".button-img #shoppingCart_icon").css({"width":"100%"});
    }else{
        $("#shoppingCart-popup-wrap").appendTo(".button");
        $(".QR").css({"display":"none"});
        $("#shoppingCart-popup-wrap").css({"margin-left":"0"});
        $(".button-img #shoppingCart_icon").css({"width":"40px"});
    }

    $(window).resize(function(){
        if(document.body.clientWidth < 768){
        // $(".QR").append( $("#shoppingCart-popup-wrap"));
        $("#shoppingCart-popup-wrap").appendTo(".QR");
        $(".QR").css({"display":"inline-flex",
                      "align-items":"center",
                      "justify-content":"flex-end",
                      "padding-right":"25px",
                      "box-sizing":"border-box",
                    });
        $("#shoppingCart-popup-wrap").css({"margin-left":"10px"});
        $(".button-img #shoppingCart_icon").css({"width":"100%"});
    }else{
        $("#shoppingCart-popup-wrap").appendTo(".button");
        $(".QR").css({"display":"none"});
        $("#shoppingCart-popup-wrap").css({"margin-left":"0"});
        $(".button-img #shoppingCart_icon").css({"width":"40px"});
    }
    })
    $('.QR>a').click(function(e){
        $('.qrcode_popup .popup__wrap').fadeIn(100);
        $('.qrcode_popup .popup__box').removeClass('transform--out').addClass('transform--in');
        e.preventDefault();
    })
    </script>
    
    <!-- display: inline-flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 30px;
    box-sizing: border-box; -->

    <!-- header end -->