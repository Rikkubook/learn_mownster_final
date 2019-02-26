<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>做怪Mownster</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="description" content="overview &amp; stats" />
		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/mowster-css.css">
		<!-- 自己的CSS -->
    	<link rel="Shortcut Icon" type="image/x-icon" href="img/admin_back/HD-LOGO.png" ><!-- title icon -->
	</head>

	<body class="no-skin">
		<!-- 漢堡開始 -->
		<div id="navbar" class="navbar navbar-default          ace-save-state " >
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
			</div><!-- /.navbar-container -->
		</div><!-- 漢堡結束 -->
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<a href="mownster_index.php"><img src="img/admin_back/HD-LOGO.png"></a>
						<p class="">歡迎~管理者</p><!-- 抓取SESSION的管理員名字 -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<!-- nav清單內容 -->
				<ul class="nav nav-list">
					<li class=""><!-- 一個li一格 -->
						<a href="back_madmin.php">
							<span class="menu-text"> 管理者帳號管理 </span>
						</a>
					</li>

					<li class="">
						<a href="back_member.php" class="">
							<span class="menu-text">
								會員管理
							</span>
						</a>

					</li>

					<li class=""><!-- 手風琴class="dropdown-toggle" -->
						<a href="back_class.php" >
							<span class="menu-text"> 課程管理 </span>

							<!-- <b class="arrow fa fa-angle-down"></b>箭頭icon -->
						</a>
						<b class="arrow"></b>
						<!-- <ul class="submenu">手風琴裡面內容
							<li class="">
								<a href="tables.html">
									課程上下架
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.html">
									課程照片管理
								</a>

								<b class="arrow"></b>
							</li>
						</ul> -->
					</li>


					<li class="">
						<a href="back_coupon.php" class="">
							<span class="menu-text">
								優惠券管理
							</span>
						</a>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle"><!-- 手風琴 -->
							<span class="menu-text"> 檢舉管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu"><!-- 手風琴內容class="submenu" -->
							<li class="">
								<a href="back_showreport.php">
									選美留言檢舉
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="back_classreport.php">
									課程留言檢舉
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="back_bot.php">
							<span class="menu-text"> QA機器人管理 </span>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="back_items.php">
							<span class="menu-text">商品管理</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<span class="menu-text"> 訂單管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="back_classorderlist.php">
									課程訂單
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="back_itemorderlist.php">
									商品訂單
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="back_custorderlist.php">
									客製化商品訂單
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li>
						<a href="madmin_Logout.php">
							<span class="menu-text">登出</span>
						</a>
					</li>
				</ul><!-- /.nav-list -->
			</div>


