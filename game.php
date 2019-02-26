<?php session_start();
  //若“已製作怪獸” 出現自己的怪獸;
  if(isset($_SESSION["memImg"])){
      $memImg = $_SESSION["memImg"];
  }else{
  //若“未製作怪獸”則出現預設蛋蛋圖片;   
      $memImg = "img/game-img/egg.png";
  }
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" shrink-to-fit=no>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
	 <link rel="stylesheet" type="text/css" href="css/common.css">
	 <link rel="stylesheet" type="text/css" href="css/game.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/header&mowsterImg.css">
	<title>做怪Mownster</title>
<?php  
    require_once("header.php");
    require_once("member_login.php");
?>

    <div class="body_bg"></div>
    <div class="header-height col-12 t-0p l-0p "></div>
    <!-- 形象小怪獸 -->
    <div class="mownsterImage ta-c mb-50">
         <div class="dis-ib">
 
             <!-- 請根據頁面更換小怪獸圖片連結 -->
             <img class="mownsterImage-img" src="img/header-img/MI-game.png"></img>
             <div class="mownsterImage-textbox dis-ib ta-l pt-20 pb-20 pr-35 pl-35" style="background-color:#eee">
             <!-- 請根據頁面更換文字 -->
                 <h1 class="p-0 m-0">歡迎來到冒險島～</h1>
                 <p class="p-0 m-0">我是震震，來這裡你必須打敗壞羊羊獲得優惠卷，
                 試試看用不同招式打敗敵人吧！</p>
             </div>
         </div>
    </div>
    <!-- 形象小怪獸 end -->
    
    <div id="game_bg"class="game_bg">

        <!-- 扭蛋 -->
                <div class="MachineBox container po-a l-0p r-0p m-a t-lg-25p bs-bb p-0p">  
                <div id="Machine">
                    <img class="eggMachine"src="img/game-img/eggMachine.png" alt="">
                    <div class="eggButtonRing po-a 
                    l-lg-16p l-17p b-lg-10p b-8p w-lg-15p w-15p
                    "></div>
                    <img class="po-a l-16p b-lg-10p b-8p w-lg-17p w-20p" id="eggButton" src="img/game-img/eggButton.png" alt="">
                    <div id="Machine--egg" class="w-90p po-a b-lg-60p b-70p l-5p">
                        <div class="egg egg1"></div>
                        <div class="egg egg2"></div>
                        <div class="egg egg3"></div>
                        <div class="egg egg4"></div>
                        <div class="egg egg5"></div>
                        <div class="egg egg6"></div>
                        <div class="egg egg7"></div>
                        <div class="egg egg8"></div>
                        <div class="egg egg9"></div>
                    </div>
                    <div id="outEgg"></div>
                </div>
                </div>
        <div class="game_box container po-r dis-f jc-sb z-1 p-lg-30 p-10 bs-bb" >
                <div class="ready po-a v-c w-100p ta-c z-7">READY</div>
                <div class="readyGo po-a v-c w-100p ta-c z-7">GO</div>
                <!-- Start -->
                <div id="startBut"class="btn-main-lg po-a l-0p r-0p m-a t-lg-20p t-60p z-5">Start</div>
                <!-- 下火雨 -->
                <canvas id="game_rain" width="1200" height="700"></canvas>
                <!-- 我方怪獸 -->
                <div class="myMounster po-r col-lg-3 col-6">
                    <div id="star" class=""></div>
                    <!-- <img id="userImg"src="img/game-img/me.png" alt=""> -->
                    <img id="userImg"src="<?php echo $memImg;?>" alt="">
                    <!-- 我方對話框 -->
                    <div class="userTalk po-a ta-c l-lg-80p l-10p w-100p">
                        <div class="w-50p v-c">
                        	<img id="myImg" src="" alt="">
                        </div>
                    </div>
                </div>
                <!-- 我方怪獸 end -->
                    <!-- 剪刀石頭布按鈕 -->
                    <div id="imgs" class="po-a dis-f jc-sb p-5 bs-bb w-lg-350 w-100p b-0p l-0p">
                         <img src="img/game-img/ji.png" id="jiandao" class="img1"/>
                         <img src="img/game-img/rock.png" id="shitou" class="img1"/>
                         <img src="img/game-img/bu.png" id="bu" class="img1"/>
                    </div>
                <!-- win/lose/again 框框 -->
                <div id="score" class="ta-c po-a l-49p z-3 b-lg-30p b-25p">
                </div>
                <div class="winImgbox po-a l-0p r-0p m-a w-lg-100p w-95p  b-lg-0p b-40p z-3"><img id="winImg" src="" alt=""></div>
                <!-- 火山島 -->
                <img class="vocanLand po-a t-60p l-50p v-c w-lg-40p w-90p z--1" src="img/game-img/vocanLand.png" alt="">                
                <!-- 敵方怪獸 -->
                <div class="Yang po-r  col-lg-3 col-5">
                    <div class="cloud po-a w-100p r-0p r-lg-3p">
                        <img src="img/game-img/cloud.png" alt="">
                        <div id="thor" class="po-r z--1"> 
                    	   <div class="game_box--fightBox--computer thorbox po-a r-20p">
                    		  <img src="img/game-img/thor.png" alt="">
                    	   </div>
                        </div>
                    </div>
                    <div class="yangImgBox"><img id="yangImg" src="img/game-img/liveYang.png" alt=""></div>
                    <!-- 敵方對話框 -->
                    <div class="computerTalk po-a ta-c w-lg-100p w-50p">
                        <div class="w-lg-50p w-55p v-c">
                        	<img id="computer" src="" alt="">
                        </div>
                    </div>
                </div>
                <!-- 敵方怪獸 end -->
        </div>
        <!-- 1200 end -->
    </div>


    <!-- popup -->
    <div class="popup--Share"> 
        <div class="popup__wrap popup__close">
        </div>
        <!-- 手機版跳出為7(固定) 桌機約4請桌機版自己改大小 -->
        <div class="popup__box col-9 col-lg-4 card-lg"> 
            <div class="popup__icons dis-f fd-c ai-c">
                <h3>恭喜獲得</h3>
                <div class="couponImg w-lg-90p dis-f jc-c ai-c po-r mt-lg-20 mt-10">
                    <img class=""src="img/game-img/coupon.png" alt="">
                    <i class="po-a t-30p"id="coupon_title"></i>
                </div> 

            </div>
            <div class="dis-f jc-sa mt-40">
                <a class="btn-main-lg"href="shop.php">前往商城</a>
                <a class="btn-main-lg"href="game.php">結束</a>
            </div>
        </div>
    </div>


</body>

　<script type="text/javascript">
  var imgsId = document.getElementById("imgs");
  var jiandao = document.getElementById("jiandao");
  var shitou = document.getElementById("shitou");
  var bu = document.getElementById("bu");
  var myImg = document.getElementById("myImg");
  var computer = document.getElementById("computer");
  var score = document.getElementById("score");
  var thor = document.getElementById("thor");
  var star = document.getElementById("star");
  var yangImg = document.getElementById("yangImg");
  var Machine = document.getElementById("Machine");
  var eggButton = document.getElementById("eggButton");
  var egg = document.getElementsByClassName("egg");
  var outEgg = document.getElementById("outEgg");
  var winImg = document.getElementById("winImg");
  var n = 2;
  var screenWidth = window.screen.width;
  var imgs = ["img/game-img/ji.png","img/game-img/rock.png","img/game-img/bu.png"];
  //視窗震動
  function shakeWindow(e){
        var loop = 0; //統計震動次數
        var timer; //定時器引用
        var offx; //水平偏移量
        var offy; //垂直偏移量
        var dir; //控制震動方向
        
        timer = setInterval(function(){
        var win = document.getElementById("game_bg");
        if (loop > 100)
        {   
        clearInterval(timer); //震動次數超過100就停止定時器
        }
        dir = Math.random()*10 > 5 ? 1 : -1; //獲得震動方向
        offx = Math.random()*20*dir;
        offy = Math.random()*20*dir;
        win.style.marginTop = offx+"px";
        win.style.marginLeft = offy+"px";
        loop++;
        },10) //每隔10毫秒震動一次
    }
$(document).ready(function(){
    //按Start
    $('#startBut').click(function(){
        $('#startBut').css('display','none');
        $('.cloud').css('animation','cloudAction 2.3s linear forwards');
        $('.yangImgBox').css('animation','yangAction 2.2s linear 0.5s forwards');
        $('#userImg').css('animation','userAction 3s linear 3s forwards');
        $('.ready').css('animation','readyAction 1.5s linear 4.5s forwards');
        $('.readyGo').css('animation','readyGoAction 1.5s linear 6s');

        setTimeout(function(){
            $('.yangImgBox').css('filter','drop-shadow(0px -20px 40px #f00)');
        },2500)
        setTimeout(function(){
            $('#imgs').css('visibility','visible');
            // 跑馬燈
            timerId = setInterval( imgsRun, 300);
        },7500)

        function imgsRun (){
            // console.log(n);
            imgsId.children[n].style.filter="";
                n++;
                if (n == 3){n = 0;}
            imgsId.children[n].style.filter="drop-shadow(0px 0px 15px #55ff33)";
        }
    })

}); 
 // console.log(imgs[0]);
 jiandao.onclick = function(){
     var imgSrc = jiandao.getAttribute("src");
     myImg.setAttribute("src",imgSrc);
     checkImg(imgSrc);
    //  停止跑馬燈
    clearInterval( timerId );
    imgsId.children[n].style.filter="";
 }
 shitou.onclick = function(){
     var imgSrc = shitou.getAttribute("src");
     myImg.setAttribute("src",imgSrc);
     checkImg(imgSrc);
    //  停止跑馬燈
    clearInterval( timerId );
    imgsId.children[n].style.filter="";
 }
 bu.onclick = function(){
     var imgSrc = bu.getAttribute("src");
     myImg.setAttribute("src",imgSrc);
     checkImg(imgSrc);
    //  停止跑馬燈
    clearInterval( timerId );
    imgsId.children[n].style.filter="";
 }

//猜拳事件
 function checkImg(imgSrc){
     $('.userTalk').css('display','block');
     $('.computerTalk').css('display','block');
     var myIndex = imgs.indexOf(imgSrc);
    //  console.log(myIndex);
     var intervalId = setInterval(function(){
     var num = parseInt(Math.random()*3);
      // console.log(num);
      computer.setAttribute("src",imgs[num]);
     },30);
     
     setTimeout(function(){
         clearInterval(intervalId); //停止setInterval
         var comSrc = computer.getAttribute("src");
         var comIndex = imgs.indexOf(comSrc);
         // 平手
         if(myIndex==comIndex){
             score.innerHTML = "Again";
         // 贏!!! 
         }else if(myIndex==0&&comIndex==2
                  || myIndex==1&&comIndex==0
                  || myIndex==2&&comIndex==1){

            // 取消 剪刀石頭布onclick function
            jiandao.onclick = function(){};
            shitou.onclick = function(){};
            bu.onclick = function(){};
            // 出剪刀的話 有閃電打下
            if(myIndex==0){
                thor.style.zIndex="2";
                thor.style.animation="fadeInDown .3s linear 3"
                shakeWindow();
            //出石頭的話 隕石落下 
            }else if (myIndex==1){
                star.setAttribute("class","star");
                shakeWindow();

            //出布的話 賞降龍十八掌 
            }else if (myIndex==2){
                bu.setAttribute("class","fadeRight"); 
                yangImg.setAttribute("class","buHitYang")
                yangImg.style.transform="rotateY(1800deg)";
                setTimeout(function(){
                    shakeWindow();
                },800)
            }
            //出現 win 畫面
            score.innerHTML = "";
            setTimeout(function(){
                winImg.setAttribute("src","img/game-img/gameWin.gif");
            },2500)    
            // 將羊換成死羊
            setTimeout(function(){
                yangImg.setAttribute("src","img/game-img/deadYang.png");
                yangImg.setAttribute("class","deadYang");
            },800)
            // 出現扭蛋機
             setTimeout(function(){
                winImg.setAttribute("src","");
                Machine.setAttribute("class","bounce");
                Machine.style.display="block";
            },5000)
         // 輸 ！！ 
         }else{
             score.innerHTML = "Lose";
         }
     },1000);
 }
// 扭蛋機按鈕
eggButton.onclick = function(){
  eggButton.style.transition="transform 1.5s";
  eggButton.style.transform="rotate(360deg)";
  $('.eggButtonRing').css('display','none');
  eggroll();
} 
//扭蛋事件
function eggroll(){
  	var i;
  	for (i = 0; i < egg.length; i++) {
  		//扭蛋機裡的扭蛋 亂數移動
  		var xy_x = (Math.random()* (-5) + 3);
  		var xy_y = (Math.random()* (-10) + 5);
  	    egg[i].style.transition="transform 1.3s";
        egg[i].style.transform = "translate3d("+xy_x+"%,"+xy_y+"px,0)";
  	}
    //隨機出現一顆扭蛋	
    //亂數1~3 ceil 無條件進位
    var num = Math.ceil(Math.random()* 3);
		outEgg.style.background= "url(img/game-img/outegg"+num+".png) no-repeat";
		outEgg.style.backgroundSize="100%";
		outEgg.style.animation="eggout 2s linear .5s forwards";

    setTimeout(function(){ 
      //打開這顆扭蛋
      outEgg.style.background= "url(img/game-img/outegg"+num+"-2.png) no-repeat";
      outEgg.style.backgroundSize="100%";
      //跳出優惠卷 或 登入畫面
      setTimeout(function(){
          //判斷是否登入
          <?php
          if( isset($_SESSION["memName"]) ){?>
            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange = function (){
                if( xhr.readyState == 4){
                    if( xhr.status == 200 ){
                        document.getElementById("coupon_title").innerHTML = xhr.responseText;
                        console.log(xhr.responseText);
                    }else{
                        alert( xhr.status );
                    }
                }
            };
            // var url = "gameCoupon.php?couponNo="+document.getElementById("couponNo").value;
            var url ="gameCoupon.php";
            xhr.open("get",url,true);
            xhr.send(null);  
            $('.popup--Share .popup__wrap').fadeIn(500);
            $('.popup--Share .popup__wrap').fadeIn(500);
            $('.popup--Share .popup__box').removeClass('transform--out').addClass('transform--in');
            $('.popup__close').click(function(e) {
            $('.popup--Share .popup__wrap').fadeOut(500);
            $('.popup--Share .popup__box').removeClass('transform--in').addClass('transform--out');
            e.preventDefault();
            });
          //未登入則出現登入燈箱
          <?php }else{?>
            // login()
            $('.member-login .popup__wrap').fadeIn(100);
            $('.member-login .popup__box').removeClass('transform--out').addClass('transform--in');
            $('.psw-back-end .popup__wrap').fadeOut(100);
            $('.psw-back-end .popup__box').removeClass('transform--in').addClass('transform--out');

          <?php } ?> 
      },1000)
    },3000)
		eggButton.onclick = function(){};

}



// 下雨
if (screenWidth >= 768){
    var c = document.getElementById('game_rain');
    var ctx = c.getContext('2d');

    var w = 1200; var h = 700;
    var x = 100; var y = 100;

    var particles = [];
    for(i = 0; i < 100; i++) {
    particles.push(new rain);
    }

    function rain() {
    this.x = Math.random() * w;
    this.y = Math.random() * h;
    
    this.vx = -0.75;
    this.vy = Math.random() * 10;
    
    this.rainh = 5;
    this.rainw = 10;
    }

    function makeItRain() {
    ctx.fillStyle = 'rgba(40, 40, 41, .5)';
    ctx.fillRect(0, 0, w, h);
    
    for(t = 0; t < particles.length; t++) {
        var p = particles[t];
        
        ctx.beginPath();
        ctx.fillStyle = '#fb5';
        ctx.fillRect(p.x, p.y, p.rainh, p.rainw);
        
        p.y += p.vy;
        p.x += p.vx;
        
        //decides size based on velocity to create 3d effect
        if(p.y > h + p.rainh) {
        p.y = -p.rainh;
        };
        if(p.x < -p.rainh) {
        p.x = w + p.rainh;
        };
        if(p.vy < 6) {
        p.rainh = 3;
        p.rainw = 6;
        };
        if(p.vy < 4) {
        p.rainh = 2;
        p.rainw = 4;
        };
        if(p.vy < 2) {
        p.vy = 3.5;
        };
    }
    }
    setInterval(makeItRain, 50);
}
</script>
</html>