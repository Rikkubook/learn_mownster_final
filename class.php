<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/class.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <title>做怪Mownster</title>
<?php
    require_once("header.php");
?>
    <!-- 形象小怪獸 -->
<canvas id="canvas--print"></canvas>
    <div class="header-height col-12 t-0p l-0p "></div>
    <div class="mownsterImage ta-c">
        <div class="dis-ib">

            <!-- 請根據頁面更換小怪獸圖片連結 -->
            <img class="mownsterImage-img" src="img/class-img/classNPC.png"></img>
            <div class="mownsterImage-textbox dis-ib ta-l pt-20 pb-20 pr-35 pl-35" style="background-color:#eee">
                <!-- 請根據頁面更換文字 -->
                <h1 class="p-0 m-0">歡迎來到課程雙子島～</h1>
                <p class="p-0 m-0">我是阿宅老師，來這裡你可以參加手作玩偶跟3D列印課程，創造出自己專屬的怪物玩偶和公仔！一起來玩吧！</p>
            </div>
        </div>
    </div>
    <!-- 形象小怪獸 end -->
    <!-- 背景 雲圖 -->
    <div class="indexCloud l-0p of-h z--1">
        <!-- 熱氣球 -->
        <img class="indexCloud--airBall w-15p po-a t-0p l-0p" src="img/class-img/hot_air_balloon.png" alt="hotAir Balloon">
        <!-- 雲 -->
        <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
        <img class="index_bgCloud1" src="img/home_image/indexCloud1.png" alt="">
        <img class="index_bgCloud2" src="img/home_image/indexCloud2.png" alt="">
        <img class="index_bgCloud2" src="img/home_image/indexCloud1.png" alt="">
    </div>
    <div class="container class--islands">
        <div class="col-12 col-lg-6 doll--island po-r">
            <div class="island__image island__image--doll po-r">
                <img src="img/class-img/doll-island.svg" alt="doll-island">
                <div class="islands__title islands__title--doll po-r">
                    <div class="islands__title__bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>cloud</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-1" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2>布娃娃課程</h2>
                </div>
            </div>
            <div class="sun">
                <div class="circle"></div>
                <div class="eyes leftEye"></div>
                <div class="eyes rightEye"></div>
                <div class="mouth"></div>
                <div class="sunrays">
                    <span>
                        <span>
                            <span></span>
                        </span>
                    </span>
                </div>
            </div>
            <div class="doll__image image__onIsland">
                <img src="img/class-img/doll__NPC.svg" alt="cute doll">
            </div>
            <div class="pyramid--wrap">
                <div class="pyramid__center">
                    <div class="pyramid__side front"></div>
                    <div class="pyramid__side back"></div>
                    <div class="pyramid__side left"></div>
                    <div class="pyramid__side right"></div>
                </div>
                <div class="pyramid__shadow"></div>
            </div>
            <div class="island__card island__card--doll">
                <div class="card__title card__title--doll po-r">
                    <div class="card__title__bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>cloud</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-1" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2>布娃娃課程</h2>
                </div>
                <p>歡迎來到布娃娃課程島，在這裡你可以做出自己的怪獸玩偶，帶回家陪伴你的生活！</p>
                <a href="class-doll.php"><button class="btn-main-lg">進入課程</button></a>
            </div>
            <div class="balloon--island balloon--island--doll">
                <div class="balloon--arrow balloon--doll"></div>
                <div class="balloon balloon1"></div>
                <div class="balloon balloon2"></div>
                <p>前往列印島</p>
            </div>
        </div>
        <div class="col-12 col-lg-6 print--island po-r">
            <div class="island__image island__image--print po-r">
                <img src="img/class-img/print-island.svg" alt="print-island">
                <div class="islands__title islands__title--print po-r">
                    <div class="islands__title__bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>cloud</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-1" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2>3D列印課程</h2>
                </div>
            </div>
            <div class="printer__image image__onIsland">
                <img src="img/class-img/3D-print-image.svg" alt="cute printer">
            </div>
            <div class="island__card island__card--print">
                <div class="card__title card__title--print po-r">
                    <div class="card__title__bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336.3 140.05">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>cloud</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-1" d="M258.47,0a83.4,83.4,0,0,0-45.22,13.05A84.87,84.87,0,0,0,122.94,13,83.47,83.47,0,0,0,77.83,0C34.85,0,0,31.35,0,70s34.85,70,77.83,70a83.56,83.56,0,0,0,45.11-13,84.87,84.87,0,0,0,90.31-.08,83.49,83.49,0,0,0,45.22,13.05c43,0,77.83-31.35,77.83-70S301.46,0,258.47,0Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2>3D列印課程</h2>
                </div>
                <p>歡迎來到3D列印課程島，在這裡你可以學到如何運用最新的3D技術，做出屬於自己的怪獸公仔！</p>
                <a href="class-print.php"><button class="btn-main-lg">進入課程</button></a>
            </div>
            <div class="balloon--island balloon--island--print">
                <div class="balloon--arrow balloon--print"></div>
                <div class="balloon balloon1"></div>
                <div class="balloon balloon2"></div>
                <p>前往布偶島</p>
            </div>
        </div>
        <div class="choose--island">
            <div class="title--choose">
                <p>［選擇課程］</p>
            </div>
        </div>
    </div>
<?php
    require_once("footer.php");
?>
<?php
    require_once("member_login.php");
?>

</body>
<script src="js/class.js"></script>
</html>