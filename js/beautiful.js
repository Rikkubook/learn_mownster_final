
$(document).ready(function(){

    //投票限制
    if (sessionStorage['voteTimes']==undefined){
        sessionStorage.setItem("voteTimes",3); //若無sessionStorage則給3
        // console.log(111,sessionStorage['voteTimes']);
    }
        voteTimes = parseInt(sessionStorage.getItem("voteTimes"));
         // console.log(222,sessionStorage['voteTimes']);
    // 預設顯示本月排名
    thisMonth();

    // 點擊本月排名按鍵
    var thisMonth_btn = document.getElementById('thisMonth');
    var thisWeek_btn = document.getElementById('thisWeek');
    thisMonth_btn.onclick = function(){
        thisWeek_btn.classList.remove("hover-style");
        thisMonth_btn.classList.add("hover-style");
        thisMonth();
    };

    // 點擊本週排名按鍵
    thisWeek_btn.onclick = function(){
        thisMonth_btn.classList.remove("hover-style");
        thisWeek_btn.classList.add("hover-style");
        thisWeek();
    }
    
    var printmode = "";
    $("#serchbutton").click(function(){
        serchNamber();
        var printmode = "serch";
    });
    

    // 投稿清單
    addMenuList();
    var menuListMore = document.querySelector('.menu-list-more');
    menuListMore.onclick = function(){
        list_stop+=6;
        addMenuList();
    };

    
    // 增加按鈕點擊投票事件
    buttonAddClickEvent();
    // 上個月排名

    // 小怪獸跑位
    lastMonthRunning();

    // 投票
    // 點擊投票按鈕觸發投票事件
    


});
    function thisMonth (){

        // 月排行前5名
        // html上的top-text(愛心裡的總票數)
        var topTexts_DOM = document.querySelectorAll('.top-text');
        // html上的top-voteGetting(長條圖的本體色塊)
        var topVoteGetting_DOM = document.querySelectorAll('.top-voteGetting');
        // html上的top-name(投稿會員名稱)
        var topTextName_DOM = document.querySelectorAll('.top-name');
        // html上的會員小怪獸圖案
        var mownsterImg_DOM = document.querySelectorAll('.top-mowster>img');
        var topmemNo = document.querySelectorAll('.top');

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
        // 若成功傳回字串
            if (xhr.status == 200) {
                // console.log(xhr.responseText);
                // 把回傳字串分割(分號做分隔)
                var responseAll = xhr.responseText.split("cccsacq");
                // 前五名總票數字串
                var topTexts = new Array;
                // 會員名稱字串
                var topName = new Array;
                // 形象小怪獸路徑
                var mownsterImg = new Array;
                // 會員編號
                var topmemNo = new Array;
                // 切完的字串分類
                for(var i=0; i<responseAll.length-1; i++){
                    var type = i%4;
                    switch(type){
                        case 0:
                        topTexts.push(responseAll[i]);
                        break;
                        case 1:
                        topName.push(responseAll[i]);
                        break;
                        
                        case 2:
                        mownsterImg.push(responseAll[i]);
                        break;
                        
                        case 3:
                        topmemNo.push(responseAll[i]);
                        break;
                    }
                }
                        // console.log(topTexts); 
                        // console.log(topName); 
                        // console.log(mownsterImg);
                        // console.log(topmemNo);

                // 將回傳字串填入html
                for(let i=0 ; i<6 ; i++ ){
                        
                    // 前五名名稱
                    topTexts_DOM[i].innerText = topTexts[i];
                    // 小怪獸圖案
                    mownsterImg_DOM[i].src = mownsterImg[i];
                    // 計算分數長條圖的高度並填入
                    var  topVoteGetting_height = topTexts[i]/ topTexts[0]*300;
                    topVoteGetting_DOM[i].style.height = topVoteGetting_height+"px";
                    topTextName_DOM[i].innerText = topName[i];
                    // console.log(topmemNo[i]);
                    document.querySelectorAll('.ballot')[i].setAttribute("id",topmemNo[i]);
                }

                // 各色長條圖背景
                topVoteGetting_DOM[0].style.backgroundColor = "#ec8383";
                topVoteGetting_DOM[1].style.backgroundColor = "#ecbc83";
                topVoteGetting_DOM[2].style.backgroundColor = "#eccd83";
                topVoteGetting_DOM[3].style.backgroundColor = "#ece583";
                topVoteGetting_DOM[4].style.backgroundColor = "#c5ec83";
                topVoteGetting_DOM[5].style.backgroundColor = "#83d2ec";

            }else{
                alert(xhr.status);
            };
        };
    var url = "beautiful_thisMonth.php";
    xhr.open("Get",url, true);
    xhr.send(null);

   };

    // 本週排名(五人的戰爭)
    function thisWeek(){
        // 週排名前五
        // html上的top-text(愛心裡的總票數)
        var topTexts_DOM = document.querySelectorAll('.top-text');
        // html上的top-voteGetting(長條圖的本體色塊)
        var topVoteGetting_DOM = document.querySelectorAll('.top-voteGetting');
        // html上的top-name(投稿會員名稱)
        var topTextName_DOM = document.querySelectorAll('.top-name');
        // html上的會員小怪獸圖案
        var mownsterImg_DOM = document.querySelectorAll('.top-mowster>img');

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            // 若成功傳回字串
            if (xhr.status == 200) {
                // 把回傳字串分割(分號做分隔)
                var responseAll = xhr.responseText.split("cccsacq");
                // 前五名總票數字串
                var topTexts = new Array;
                // 會員名稱字串
                var topName = new Array;
                // 形象小怪獸路徑
                var mownsterImg = new Array;
                // 會員編號
                var topmemNo = new Array;
                // 切完的字串分類
                for(var i=0; i<responseAll.length-1; i++){
                    var type = i%4;
                    switch(type){
                        case 0:
                        topTexts.push(responseAll[i]);
                        break;
                        
                        case 1:
                        topName.push(responseAll[i]);
                        break;
                        
                        case 2:
                        mownsterImg.push(responseAll[i]);
                        break;
                        
                        case 3:
                        topmemNo.push(responseAll[i]);
                        break;
                    }
                }
                for(let i=0 ; i<6 ; i++ ){
                    // 將回傳字串填入html
                        
                    // 前五名名稱
                    topTexts_DOM[i].innerText = topTexts[i];
                    // 小怪獸圖案
                    mownsterImg_DOM[i].src = mownsterImg[i];
                    // 計算分數長條圖的高度並填入
                    var  topVoteGetting_height = topTexts[i]/ topTexts[0]*300;
                    topVoteGetting_DOM[i].style.height = topVoteGetting_height+"px";
                    topTextName_DOM[i].innerText = topName[i];
                    console.log(topmemNo[i]);
                    document.querySelectorAll('.ballot')[i].setAttribute("id",topmemNo[i]);
                }
                console.log(mownsterImg);

                // 各色長條圖背景
                topVoteGetting_DOM[0].style.backgroundColor = "#ec8383";
                topVoteGetting_DOM[1].style.backgroundColor = "#ecbc83";
                topVoteGetting_DOM[2].style.backgroundColor = "#eccd83";
                topVoteGetting_DOM[3].style.backgroundColor = "#ece583";
                topVoteGetting_DOM[4].style.backgroundColor = "#c5ec83";
                topVoteGetting_DOM[5].style.backgroundColor = "#83d2ec";
            }else{
                alert(xhr.status);
            }
        };
        var url = "beautiful_thisWeek.php";
        xhr.open("Get",url, true);
        xhr.send(null);
    };


    // 增加按鈕點擊投票事件
    function buttonAddClickEvent(){
        var ballots = document.querySelectorAll('.ballot');
        var ballots_len = ballots.length;
        // 點擊長條圖區域的投票按鈕
        for (var y = 0 ; y <ballots_len; y++) {
           ballots[y].addEventListener('click', voteAddOne_statisticChart, false);

        }
        var menuListBallots = document.querySelectorAll('.menuList_ballot');
        var menuListBallots_len = menuListBallots.length;
        // console.log(menuListBallots);
        // 點擊選美清單區域的投票按鈕
        for (var z = 0 ; z <menuListBallots_len; z++) {
          menuListBallots[z].addEventListener('click', voteAddOne_menuList, false);
        console.log("增加按鈕點擊投票事件");

        }
    };

    // 投票事件_長條圖區域
    function voteAddOne_statisticChart(){
        console.log(111);

            console.log("長條圖投票區");
        if (voteTimes > 0){
             //投3次就不能投
            voteTimes--;
            sessionStorage.setItem("voteTimes",voteTimes); //sessionStrage --

            var voteIn =document.querySelector('.ballot')[0];
            // 抓按鈕上匯入資料時印上的會員ID，
            var voteButNumId = parseInt($(this).attr("id"));
            // 在這個大框框裡，你的爸爸是爺爺的第幾個孩子
            var voteButNum = $(this).parent().index();
            console.log(voteButNum);
            console.log(voteButNum,voteButNumId);
                
            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange=function (){
                if( xhr.readyState == 4){
                    if( xhr.status == 200 ){
                        // 看你爸爸是排第幾個，分數就傳到第幾個的愛心裡面
                        document.querySelectorAll('.change_text')[voteButNum].innerHTML = xhr.responseText;     
                    }else{
                        alert( xhr.status );
                    }
                }
            }
            var url = "beautiful_ballot.php?votId="+voteButNumId;
            console.log("beautiful_ballot.php?votId="+voteButNumId);
            xhr.open("get",url,true);
            xhr.send(null);
        }else{
            $('.popup--Share .popup__wrap').fadeIn(100);
            $('.popup--Share .popup__box').removeClass('transform--out').addClass('transform--in');
            $('.close-btn').click(function (e) {
                $('.popup--Share .popup__wrap').fadeOut(100);
                $('.popup--Share .popup__box').removeClass('transform--in').addClass('transform--out');
            });

        }
        
    }
    

    // 投票事件_選美清單區域
    function voteAddOne_menuList(){

        if (voteTimes > 0){
             //投3次就不能投
            voteTimes--;
            sessionStorage.setItem("voteTimes",voteTimes); //sessionStrage --
            
            var voteIn =document.querySelector('.menuList_ballot')[0];
            // 抓按鈕上匯入資料時印上的會員ID，
            var voteButNumId = parseInt($(this).attr("id"));
            // 在這個大框框裡，你的爸爸是第幾個
            var voteButNum = $(this).parent().index();
            console.log(voteButNum);
            console.log(voteButNum,voteButNumId);
                
            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange=function (){
                if( xhr.readyState == 4){
                    if( xhr.status == 200 ){
                        // 看你爸爸是排第幾個，分數就傳到第幾個的愛心裡面
                        document.querySelectorAll('.menuList-change_text')[voteButNum].innerHTML = xhr.responseText;     
                    }else{
                        alert( xhr.status );
                    }
                }
            }
            var url = "beautiful_ballot.php?votId="+voteButNumId;
            console.log("beautiful_ballot.php?votId="+voteButNumId);
            xhr.open("get",url,true);
            xhr.send(null);
        }else{
            $('.popup--Share .popup__wrap').fadeIn(100);
            $('.popup--Share .popup__box').removeClass('transform--out').addClass('transform--in');
            $('.close-btn').click(function (e) {
                $('.popup--Share .popup__wrap').fadeOut(100);
                $('.popup--Share .popup__box').removeClass('transform--in').addClass('transform--out');
            });

        }
    }
    // 會員投稿(第一次)
    function vote(){
        var firstTitle = document.getElementById('firstTitle');
        var firstText = document.getElementById('firstText');

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(xhr.xhr.status==200){
                console.log(111);
            }else{
                alert(xhr.status);
            }
        };
        var url = "beautiful_vote.php?firstTitle="+ firstTitle.value +"&firstText=" + firstText.value;
        xhr.open("Get", url, true);
        xhr.send( null );
    };

    // 投稿清單
        // 流水號陣列
        var serialNumber = new Array();
        // 標題陣列
        var title = new Array();
        // 內文陣列
        var menuList_content = new Array();
        // 票數陣列
        var vote = new Array();
        // 圖片連結陣列
        var imgAddress = new Array();
        // 會員編號陣列
        var memberNo = new Array();

    var counter = 0;
    var list_stop =6;

    // 選美清單
    function addMenuList(){
        var xhr_menuList = new XMLHttpRequest();
        xhr_menuList.onload = function(){
            // 若成功傳回字串
            if (xhr_menuList.status == 200) {
                // 把回傳字串分割(分號做分隔)
                var responseAll = xhr_menuList.responseText.split("=adadd+");
                // console.log(xhr_menuList.responseText);
                // 字串總長度
                var responseAlllen =  responseAll.length-1;
                // 分類切完的字串
                for(var i=0; i<responseAlllen; i++){
                    var type = i%6;
                    switch(type){
                        // 流水編號
                        case 0:
                            serialNumber.push(responseAll[i]);
                            break;
                        // 標題
                        case 1:
                            title.push(responseAll[i]);
                            break;
                        // 內文
                        case 2:
                            menuList_content.push(responseAll[i]);
                            break;
                        // 票數
                        case 3:
                            vote.push(responseAll[i]);
                            break;
                        // 圖片連結
                        case 4:
                            imgAddress.push(responseAll[i]);
                            break;
                        case 5:
                            memberNo.push(responseAll[i]);
                    }
                }
                console.log(serialNumber);
                print();
                
        
            }else{
                alert(xhr.status);
            }
            buttonAddClickEvent();
        };
        console.log("陣列起始:"+counter);
        console.log("陣列結束:"+list_stop);
    var url = "beautiful_menuList.php?counter="+counter;
    xhr_menuList.open("Get",url, true);
    xhr_menuList.send(null);
    }

function print(){
    // 選定要增加內容的div
    var newCard = document.getElementById('newCard');
    // 當起始<終止變數(全域變數)


    while(counter<list_stop){
    console.log("陣列起始:"+counter);
    console.log("陣列結束:"+list_stop);
        // 若有東西可以印
            console.log(serialNumber[counter]);
        if (serialNumber[counter]!=undefined) {
            newCard.innerHTML+='<div class="list-card card-sm w-350 dis-ib"><img class="w-60p" src="'
            +imgAddress[counter]+'" alt=""><h4 class="ta-l">標題：'+title[counter]
            +'</h4><p class="ta-l">'+menuList_content[counter]+'</p><div class="card-info dis-ib ta-l w-60p va-m"><p>得票數：</p><p class="menuList-change_text">'+vote[counter]+'</p><p>編號:'+serialNumber[counter]+
            '</p></div><div id="'+memberNo[counter]+'" class="va-m ta-c dis-ib w-40p menuList_ballot  po-r"><img src="img/beautiful-img/BF-voteHeart.png" alt="投票愛心"><p class="absolute_middle">投票</p></div></div>'
             counter++;
        }else{
            console.log(111);
            // 沒東西可以印-->more消失and終止目前動作
            document.querySelector('.menu-list-more').style.display = "none";
            break;
            }
        }
    }

    // 搜尋編號
    function serchNamber(){
        console.log(document.getElementById('serchbox').value);
        var xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(xhr.responseText);
                // showMember( xhr.responseText );
                if(xhr.responseText != "not found"){
                    var member = JSON.parse( xhr.responseText );
                     // console.log(JSON.parse( xhr.responseText ));
                     // console.log($('#serchbox').val());
                    var serchboxValue = $('#serchbox').val();
                    console.log(serchboxValue);
                    // console.log(member[serchboxValue].showItemNo);

                    if(serchboxValue==""){
                        alert("請輸入搜尋編號");
                    }else if( member.showItemNo!==undefined){
                       var newCard = document.getElementById('newCard');
                        newCard.innerHTML='<div class="list-card card-sm w-350 dis-ib"><img class="w-60p" src="'
                        +member.showItemImg+'" alt=""><h4 class="ta-l">標題：'+member.showItemName
                        +'</h4><p class="ta-l">'+member.showItemDetail+'</p><div class="card-info dis-ib ta-l w-60p va-m"><p>得票數：</p><p class="menuList-change_text">'+member.showItemVote+'</p><p>編號:'+member.showItemNo+
                        '</p></div><div id="'+member.memNo+'" class="va-m ta-c dis-ib w-40p menuList_ballot  po-r"><img src="img/beautiful-img/BF-voteHeart.png" alt="投票愛心"><p class="absolute_middle">投票</p></div></div>'
                        document.querySelector('.menu-list-more').style.display = "none";
                    }
                    buttonAddClickEvent();
                }else{
                    alert("這個號碼尚未投稿喔～");
                    }
                }else{
                    alert( xhr.status );
            }
        }
  
    var url = "beautiful_serchbox.php?serchboxtext=" + document.getElementById('serchbox').value;
    xhr.open("Get", url, true);
    xhr.send( null );
    }   

    

    // 投稿燈箱

    // 點我要投稿按鈕
    function contribute(){
        $('.BF-contribute .popup__wrap').fadeIn(100);
        $('.BF-contribute .popup__box').removeClass('transform--out').addClass('transform--in');

        // 點(投稿)確認接已送出燈箱
        $('.BF-confirm__btn').click(function(e) {
            $('.BF-contribute .popup__wrap').fadeOut(100);
            $('.BF-contribute .popup__box').removeClass('transform--out').addClass('transform--in');
            // 投稿送出燈箱
            $('.BF-confirm .popup__wrap').fadeIn(100);
            $('.BF-confirm .popup__box').removeClass('transform--out').addClass('transform--in');
            setTimeout(function(){
                // 跳轉模式(0=重新載入)
                history.go(0);
            },500)
            
        });

    
    // 右上按鈕關閉燈箱
    $('.close-btn').click(function (e) {
        // 投稿燈箱
        $('.BF-contribute .popup__wrap').fadeOut(100);
        $('.BF-contribute .popup__box').removeClass('transform--in').addClass('transform--out');
        
        // 投稿送出燈箱
        $('.BF-confirm .popup__wrap').fadeOut(100);
        $('.BF-confirm .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    $('.popup__wrap').click(function (e) {
        // 投稿燈箱
        $('.BF-contribute .popup__wrap').fadeOut(100);
        $('.BF-contribute .popup__box').removeClass('transform--in').addClass('transform--out');
        
        // 投稿送出燈箱
        $('.BF-confirm .popup__wrap').fadeOut(100);
        $('.BF-confirm .popup__box').removeClass('transform--in').addClass('transform--out');
    });

    };

     // 重複投稿通知燈箱控制
    function reVote_lightbox(){
    $('.reVote .popup__wrap').fadeIn(100);
    $('.reVote .popup__box').removeClass('transform--out').addClass('transform--in');
    $('.close-btn').click(function (e) {
        $('.reVote .popup__wrap').fadeOut(100);
        $('.reVote .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    $('.reVote__btn').click(function (e) {
        $('.reVote .popup__wrap').fadeOut(100);
        $('.reVote .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    $('.popup__wrap').click(function (e) {
        $('.reVote .popup__wrap').fadeOut(100);
        $('.reVote .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    
    }

    // 跳轉make頁面燈箱控制
    function goToMake(){
    $('.goToMake .popup__wrap').fadeIn(100);
    $('.goToMake .popup__box').removeClass('transform--out').addClass('transform--in');
    $('.close-btn').click(function (e) {
        $('.goToMake .popup__wrap').fadeOut(100);
        $('.goToMake .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    }

   
    
 
    
    

    // 小怪獸跑位(上個月排名)
    function lastMonthRunning(){

        // 按下左邊按鍵的情況
        $('#lastMonth-BG_leftbutton').click(function(){
            removeclass();
            addClass_leftBtn();
            changImg_leftBtn();
            $('#lastMonth-BG_rightbutton').css('pointer-events',"none");
            $('#lastMonth-BG_leftbutton').css('pointer-events',"none");
            var lag_button_click=setTimeout(function(){  
            $('#lastMonth-BG_rightbutton').css('pointer-events',"auto");
            $('#lastMonth-BG_leftbutton').css('pointer-events',"auto");
            },1000);  
        });
    // 按下右邊按鍵的情況
        $('#lastMonth-BG_rightbutton').click(function(){
            removeclass();
            addClass_rightBtn();
            changImg_rightBtn();
            $('#lastMonth-BG_rightbutton').css('pointer-events',"none");
            $('#lastMonth-BG_leftbutton').css('pointer-events',"none");
            var lag_button_click=setTimeout(function(){  
            $('#lastMonth-BG_rightbutton').css('pointer-events',"auto");
            $('#lastMonth-BG_leftbutton').css('pointer-events',"auto");
            },1000);  
        });
    // 左邊按鍵增加動畫class
        function addClass_leftBtn(){
            // 設置計時器&新增動畫(間隔太快不會刷新動畫效果)
            var run_left=setInterval(function(){
            // 左側小怪獸
            $('#mowster-left_site').addClass('run_toRight');
            $('#mowster-left_site img').addClass('shackbody');
            // 右側小怪獸
            $('#mowster-right_site').addClass('BG-right_img');
            $('#mowster-right_site img').addClass('mawaru_right');
            // 後方小怪獸
            $('#mowster-left_jumpOut').addClass('left_jumpOut');
            $('#mowster-left_jumpOut img').addClass('mawaru-out_left');
            // 卡片中的小怪獸
            $('#BG-card_img').addClass('card_zoomInOut');
            window.clearInterval(run_left);
            },100);    
        };
        // 右邊按鍵增加動畫class
        function addClass_rightBtn(){
            // 設置計時器&新增動畫(間隔太快不會刷新動畫效果)
            var run_right=setInterval(function(){
                // 左側小怪獸
                $('#mowster-left_site').addClass('BG-left_img');
                $('#mowster-left_site img').addClass('mawaru_left');
                // 右側小怪獸
                $('#mowster-right_site').addClass('run_toLeft');
                $('#mowster-right_site img').addClass('shackbody');
                // 後方小怪獸
                $('#mowster-right_jumpOut').addClass('right_jumpOut');
                $('#mowster-right_jumpOut img').addClass('mawaru-out_right');
                // 卡片中的小怪獸
                $('#BG-card_img').addClass('card_zoomInOut');
                window.clearInterval(run_right);
            },100);       
        };    
        // 刪除原先的動畫class
        function removeclass(){
            // 左側小怪獸
            $('#mowster-left_site').removeClass('run_toRight BG-left_img');
            $('#mowster-left_site img').removeClass('shackbody mawaru_left');
            // 右側小怪獸
            $('#mowster-right_site').removeClass('run_toLeft BG-right_img');
            $('#mowster-right_site img').removeClass('shackbody mawaru_right');
            // 後方小怪獸(左)
            $('#mowster-left_jumpOut').removeClass('left_jumpOut');
            $('#mowster-left_jumpOut img').removeClass('mawaru-out_left');
            // 後方小怪獸(右)
            $('#mowster-right_jumpOut').removeClass('right_jumpOut');
            $('#mowster-right_jumpOut img').removeClass('mawaru-out_right');
            // 卡片中的小怪獸
            $('#BG-card_img').removeClass('card_zoomInOut');
        };
        
        // 偷換小怪獸的圖(右邊按鍵)
        function changImg_rightBtn(){
            var lowtype;
            // 依卡片裡的圖片路徑做換圖的判斷
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top1.png'){
                lowtype = 1;
            };
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top2.png'){
                lowtype = 2;
            };
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top3.png'){
                lowtype = 3;
            };
        
            console.log(lowtype);
        
            switch (lowtype){
                case 1:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top2.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top3.png');
                $('#mowster-right_jumpOut img').attr('src','img/shop-img/mownster-top1.png');
                var lag_BGCard_img=setTimeout(function(){
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top2.png');
                    $('#lastMonth_vote').text('80');
                    $('#lastMonth_rank').text('第二名');
                    $('#lastMonth_title').text('天竺奧蘭多布魯');
                    $('#lastMonth_text').text('阿彌陀佛，老衲遁入空門前也是一笑傾城，艷冠群芳的大帥哥阿');
                    
                },600);
                break;

                case 2:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top3.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top1.png');
                $('#mowster-right_jumpOut img').attr('src','img/shop-img/mownster-top2.png');
                    var lag_BGCard_img=setTimeout(function(){    
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top3.png');
                    console.log($('#BG-card_img').attr('src'));
                    $('#lastMonth_vote').text('79');
                    $('#lastMonth_rank').text('第三名');
                    $('#lastMonth_title').text('牛魔王');
                    $('#lastMonth_text').text('哞哞哞，人家是老帥哥');
                    },600);

                break;
            
                case 3:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top1.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top2.png');
                $('#mowster-right_jumpOut img').attr('src','img/shop-img/mownster-top3.png');
                    var lag_BGCard_img=setTimeout(function(){    
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top1.png');
                    console.log($('#BG-card_img').attr('src'));
                    $('#lastMonth_vote').text('100');
                    $('#lastMonth_rank').text('第一名');
                    $('#lastMonth_title').text('桃園瑪麗亞凱莉');
                    $('#lastMonth_text').text('糾咪~');
                    },600);
                break;
            };    
                
        };
        
        // 偷換小怪獸的圖(左邊按鍵)
        function changImg_leftBtn(){
            var lowtype;
            
            // 依卡片裡的圖片路徑做換圖的判斷
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top1.png'){
                lowtype = 1;
            };
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top2.png'){
                lowtype = 2;
            };
            if($('#BG-card_img').attr('src')=='img/shop-img/mownster-top3.png'){
                lowtype = 3;
            };
            switch (lowtype){
                case 1:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top2.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top3.png');
                $('#mowster-left_jumpOut img').attr('src','img/shop-img/mownster-top1.png');
                var lag_BGCard_img=setTimeout(function(){    
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top3.png');
                    $('#lastMonth_vote').text('79');
                    $('#lastMonth_rank').text('第三名');
                    $('#lastMonth_title').text('牛魔王');
                    $('#lastMonth_text').text('哞哞哞，人家是老帥哥');
                },600);
                break;

                case 2:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top3.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top1.png');
                $('#mowster-left_jumpOut img').attr('src','img/shop-img/mownster-top2.png');
                var lag_BGCard_img=setTimeout(function(){    
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top1.png');
                    $('#lastMonth_vote').text('100');
                    $('#lastMonth_rank').text('第一名');
                    $('#lastMonth_title').text('小甜心布朗母');
                    $('#lastMonth_text').text('糾咪~');
                },600);
                break;

                case 3:
                $('#mowster-left_site img').attr('src','img/shop-img/mownster-top1.png');
                $('#mowster-right_site img').attr('src','img/shop-img/mownster-top2.png');
                $('#mowster-left_jumpOut img').attr('src','img/shop-img/mownster-top3.png');
                var lag_BGCard_img=setTimeout(function(){    
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top2.png');
                    $('#BG-card_img').attr('src','img/shop-img/mownster-top2.png');
                    $('#lastMonth_vote').text('80');
                    $('#lastMonth_rank').text('第二名');
                    $('#lastMonth_title').text('天竺奧蘭多布魯');
                    $('#lastMonth_text').text('阿彌陀佛，老衲遁入空門前也是一笑傾城，艷冠群芳的大帥哥阿');
                },600);
            };
        };
    };

