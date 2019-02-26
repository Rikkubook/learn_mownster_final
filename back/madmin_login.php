<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>做怪Mownster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="Shortcut Icon" type="image/x-icon" href="img/admin_back/HD-LOGO.png" >
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/admin_back.css">
</head>
<body >
	<!-- container開始 -->
		<!-- 雲開始 -->
		<!-- <div id="admin-cloud" class="w-80p">
			<img src="img/admin_back/indexCloud1.png">
		</div>
		<div id="admin-cloud01" class="w-80p">
			<img src="img/admin_back/indexCloud1.png">
		</div> --><!-- 雲結束 -->
	<div class="container h-100p po-r bs-bb">
		<!-- logo開始 -->
		<div id="admin-logo" class="w-30p w-lg-15p m-a pt-50">
			<img src="img/admin_back/HD-LOGO.png">
		</div><!-- logo結束 -->
		<!-- 會員島嶼 -->
		<div id="home-island" class="w-60p w-lg-45p">
			<img src="img/admin_back/bigIsland.png">
		</div><!-- 會員島嶼結束 -->
		<!-- 會員島嶼房子 -->
		<div id="home-house" class="dis-f ai-fe jc-c w-10p w-lg-6p"">
			<img class="" src="img/admin_back/square_house_01.png">
			<img class="" src="img/admin_back/square_house_02.png">
			<img class="" src="img/admin_back/square_house_03.png">
			<img class="" src="img/admin_back/square_house_04.png">
			<img class="" src="img/admin_back/square_house_05.png">
		</div><!-- 會員島嶼房子結束 -->
		<!-- 會員島嶼島民 -->
		<img id="home-member-1" class="w-14p w-lg-10p" src="img/admin_back/member_8.png">
		<img id="home-member-2" class="w-14p w-lg-10p" src="img/admin_back/member_12.png">
		<img id="home-member-3" class="w-14p w-lg-10p" src="img/admin_back/member_10.png">
		<img id="home-member-4" class="w-14p w-lg-10p" src="img/admin_back/member_11.png"><!-- 會員島嶼島民結束 -->
		<!-- 誕生島島嶼 -->
		<div id="egg-island" class="w-40p w-lg-26p">
			<img src="img/admin_back/customize_island_02.png">
		</div><!-- 誕生島島嶼結束 -->
		<!-- 遊戲島島嶼 -->
		<div id="game-island" class="w-30p w-lg-20p">
			<img src="img/admin_back/game_island_02.png">
		</div><!-- 遊戲島島嶼結束 -->


    
    	<!-- 後台登入卡片 -->
    	<div class="card-lg ta-c po-a v-c z-10">
            <h1 class="mb--10">後台登入</h1>
            <table class="ta-l m-a">
                <tr>
                    <td class="pt-20">
                        <p class="dis-n dis-lg-ib">帳號：</p>
                    </td>
                    <td class="pt-20">
                        <input id="adminId" type="text" class="w-100p" placeholder="請輸入帳號">
                    </td>
                </tr>
                <tr>
                    <td class="pt-20">
                        <p class="dis-n dis-lg-ib">密碼：</p>
                    </td>
                    <td class="pt-20">
                        <input id="adminPsw" type="password" class="w-100p" value="" placeholder="請輸入密碼">
                    </td>
                </tr>
                <tr>
                    <td id="login-erroMsg" colspan="2" class="ta-c pb-10">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="ta-c">
                        <input onclick = "sendForm()" class="btn-sub-lg dis-b dis-lg-ib m-a " type="submit" id="btnLogin" name="btnUpdate" value="登入">
                    </td>
                </tr>
            </table>
        </div><!-- 後台登入卡片結束 -->
    </div><!-- container結束 -->
    <script src="js/madmin_login_ajax.js"></script>
</body>
</html>