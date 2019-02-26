<?php 
session_start();
$str = "";
if(isset($_SESSION["generalProd"])){
    $str .='<div class="clearfix dis-f ai-c mb-10 cart-popup-item-title">';
            $str .= '<div class="col-2 pt-10 pb-10"><p>圖片</p></div>';
            $str .= '<div class="col-4 pt-10 pb-10"><p>名稱</p></div>';
            $str .= '<div class="col-3 pt-10 pb-10"><p>顏色</p></div>';
            $str .= '<div class="col-3 pt-10 pb-10"><p>尺寸</p></div>';
            $str .= '</div>';
        for($i=0;$i<count($_SESSION["generalProd"]);$i++){
            $str .='<div class="clearfix dis-f ai-c cart-popup-item">';
            $str .= '<div class="col-2"><p><img src="img/shop-img/'.$_SESSION["generalProd"][$i][1].'" alt="'.$_SESSION["generalProd"][$i][1].'"></p></div>';
            $str .= '<div class="col-4"><p>'.$_SESSION["generalProd"][$i][2].'</p></div>';
            $str .= '<div class="col-3"><p>'.$_SESSION["generalProd"][$i][5].'</p></div>';
            $str .= '<div class="col-3"><p>'.$_SESSION["generalProd"][$i][4].'</p></div>';
            $str .= '</div>';
        }
    }
    echo $str;
    ?>