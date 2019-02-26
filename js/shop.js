function addCart_Ajax(p_No,p_Image,p_Name,p_Size,p_Color,p_Quantity,p_Price){
    var xhr = new XMLHttpRequest();
    xhr.onload=function (){
        if( xhr.status == 200 ){
            if(document.getElementById("show-count-text").innerHTML != xhr.responseText){
                document.getElementById("show-count").style.backgroundColor = "#73c3be";
                document.getElementById("show-count-text").className += " bounceText";
                document.getElementById("show-count-text").className.replace(" bounceText", "");
                function clearbounce(){
                    document.getElementById("show-count-text").className = "v-c";
                }
                setTimeout(clearbounce, 1000);
                document.getElementById("show-count-text").innerHTML = xhr.responseText;
                document.getElementById("shoppingCart_icon").src = "img/header-img/HD-shopCar04.png";
                document.getElementById("productShow").style.display = "none";
            }
            
        }else{
            alert( xhr.status );
        }
    }
    
    var url = "addCart.php?pNo=" + p_No + "&pImage=" + p_Image + "&pName=" + p_Name + "&pSize=" + p_Size + "&pColor=" + p_Color + "&pQuantity=" + p_Quantity + "&pPrice=" + p_Price;
    xhr.open("Get", url, true);
    xhr.send( null );
}
function addCart(){
    var addCartBtn = document.getElementById("add-cart-btn");
    if (addCartBtn) {
            addCartBtn.onclick = function () {
                var p_No = document.getElementsByName("pNo")[0].value;
                var p_Image = document.getElementsByName("pImage")[0].value;
                var p_Name = document.getElementsByName("pName")[0].value; 
                pColor = document.getElementsByName("pColor");
                pSize = document.getElementsByName("pSize");
                for(var i=0;i<pSize.length;i++){
                    if(pSize[i].checked == true){
                        p_Size = pSize[i].value;
                        break;
                    }
                }
                for(var i=0;i<pColor.length;i++){
                    if(pColor[i].checked == true){
                        p_Color = pColor[i].value;
                        break;
                    }
                }
                var p_Quantity = document.getElementsByName("pQuantity")[0].value;
                var p_Price = document.getElementsByName("pPrice")[0].value;
                addCart_Ajax(p_No,p_Image,p_Name,p_Size,p_Color,p_Quantity,p_Price);
        }
    }
}

function showGeneralProd(jsonStr){
    var str;
    var generalProd = JSON.parse( jsonStr );
    if(generalProd.geItemNo){
        var colorArr = generalProd.geItemColor.split(",");
        var sizeArr = generalProd.geItemSize.split(",");
        var imgArr = generalProd.geItemImg.split(",");
        
            str+="<div class='productShow-warp bg-white w-100p w-lg-600 z-10 m-a p-10 bs-bb'>";
                str+="<div class='close-popup po-a pointer' id='close-popup'><i class='fas fa-times v-c'></i></div>";
                str+="<div class='productShow-content mb-50 clearfix'>";
                    str+="<input type='hidden' name='pNo' value='"+generalProd.geItemNo+"'>";
                    str+="<div class='col-12 col-lg-5'>";
                        str+="<div class='bdrs-10 of-h'>";
                        str+="<input type='hidden' name='pImage' value='"+imgArr[0]+"' id='nowImg'>"
                        if(imgArr.length > 1){
                            str+="<div class='w-200p fz-0 po-r r-0p trans-img ta-l'>";
                            for(var i=0; i<imgArr.length;i++){
                                str+="<div class='w-50p dis-ib po-r bs-bb'>";
                                    str+="<img src='img/shop-img/"+imgArr[i]+"' alt='"+imgArr[i]+"'>";
                                str+="</div>";
                            }
                            str+="</div>";
                        }else{
                            str+="<div class='p-10'>";
                                str+="<img src='img/shop-img/"+imgArr[0]+"' alt='"+imgArr[0]+"'>";
                            str+="</div>";
                        }    
                        str+="</div>";
                        if(colorArr.length > 1){
                        str+="<div class='ta-c pt-10'>";
                        for(var i=1;i<colorArr.length;i+=2){
                            str+="<div class='colorchoose ' style='background-color:"+colorArr[i]+"'></div>";
                        }
                        str+="</div>";
                        }
                    str+="</div>";
            

                    str+="<div class='col-12 col-lg-7 ta-r'>";
                        str+="<h2 class='m-lg-0 ta-l'>"+generalProd.geItemName+"</h2>";
                        str+="<input type='hidden' name='pName' value='"+generalProd.geItemName+"'>";
                        str+="<table class='ta-l shop w-100p'>";
                            str+="<tr>";
                                str+="<td class='w-20p w-xl-15p'>";
                                    str+="<p>單價</p>";
                                str+="</td>";
                                str+="<td  class='pl-5'>";
                                    str+="<p>NT.<span id='price'>"+generalProd.geItemPrice+"</span><input type='hidden' name='pPrice' value='"+generalProd.geItemPrice+"'></p>";
                                str+="</td>";
                            str+="</tr>";
                            str+="<tr>";
                                str+="<td class='w-20p w-xl-15p'>";
                                    str+="<p>尺寸</p>";
                                str+="</td>";
                                str+="<td class='selectItem'>";
                                for(var i=0;i<sizeArr.length;i++){
                                    str+="<input type='radio' name='pSize' value='"+sizeArr[i]+"' id='size-"+sizeArr[i]+"'><label for='size-"+sizeArr[i]+"' class='ta-c'>"+sizeArr[i]+"</label>";
                                }
                                str+="</td>";
                            str+="</tr>";
                            str+="<tr>";
                                str+="<td class='w-20p w-xl-15p'>";
                                    str+="<p class='colorText'>顏色</p>";
                                str+="</td>";
                                str+="<td class='selectItem'>";
                                if(colorArr.length > 1){
                                    var j=0;
                                    for(var i=0;i<colorArr.length;i+=2){
                                        while(j<imgArr.length){
                                            str+="<input type='radio' name='pColor' value='"+colorArr[i]+"' id='color-"+colorArr[i]+"' data-img='"+imgArr[j]+"'><label for='color-"+colorArr[i]+"' class='ta-c'>"+colorArr[i]+"</label>";
                                            j++;
                                            break;
                                        }
                                    }
                                }else{
                                    str+="<input type='radio' name='pColor' value='"+generalProd.geItemColor+"' id='color-"+generalProd.geItemColor+"'><label for='color-"+generalProd.geItemColor+"' class='ta-c'>"+generalProd.geItemColor+"</label>";
                                }   
                                str+="</td>";
                            str+="</tr>";
                            str+="<tr>";
                                str+="<td class='w-20p w-xl-15p'>";
                                    str+="<p>數量</p>";
                                str+="</td>";
                                str+="<td class='pl-5 dis-f ai-c h-60'><div class='dis-f ai-fs'><button id='btnLess'><i class='fas fa-minus'></i></button><input type='text' value='1' name='pQuantity' id='quantity'><button id='btnPlus'><i class='fas fa-plus'></i></button></div></td>";
                            str+="</tr>";
                        str+="</table>";
                        str+="<p class='ta-r mt-0 mb-50 mb-lg-0'>總價：<span id='totalPrice'></span>元</p>";
                        
                    str+="</div>";
                    str+="<div class='po-a b-0p w-100p l-0p b-0p z-10 shop-add-btn'><button class='btn-main-lg dis-ib w-100p' id='add-cart-btn'>加入購物車</button></div>";
                str+="</div>";
            str+="</div>";
    }
    var productShow = document.getElementById("productShow");
    document.getElementById("productShow").innerHTML = str;
    startTotalPrice();
    inputReadOnly();
    colorChoose();
    colorSelect();
    theColor();
    cPopup();
    addCart();
}

function getGeneralProd(generalProdId){
    var xhr = new XMLHttpRequest();
    xhr.onload=function (){
         if( xhr.status == 200 ){
  
            showGeneralProd( xhr.responseText );
         }else{
            alert( xhr.status );
         }
    }
    
    var url = "getGeneralProd.php?geItemNo=" + generalProdId;
    xhr.open("Get", url, true);
    xhr.send( null );
  }




function oGePopup(){
    var openPopup = document.getElementsByClassName("open-gePopup");
    if (openPopup) {
    for (var i = 0; i < openPopup.length; i++) {
            openPopup[i].onclick = function () { 
            productShow.style.display = "block";
            getGeneralProd(this.id); 
            }
        }
    }
}

function cPopup(){
    var closePopup = document.getElementById("close-popup");
    if(closePopup){
        closePopup.onclick = function () { productShow.style.display = "none"; }
    }
}
function theColor(){
    var color = document.getElementsByName("pColor");
    if(color){
        if(color.length>1){
            var nowImg = document.getElementById("nowImg");                
            for(var i=0;i<color.length;i++){
                color[i].onchange = function(){
                    if(this.checked){
                        nowImg.value = this.dataset.img;
                    }
                }
            }
            
        }
    }
}
function carousel(){
    $('.owl-carousel').each(function () {
        $(this).owlCarousel({
            loop: false,
            margin: 15,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4,
                }
            },
        });

        $(this).siblings().find('.next').click(function () {
            $(this).parent().siblings('.owl-carousel').trigger('next.owl.carousel');
        });
        $(this).siblings().find('.prev').click(function () {
            $(this).parent().siblings('.owl-carousel').trigger('prev.owl.carousel');
        });
    });
}

function showMon(){
    var card = document.querySelectorAll('.product');
    for (var i = 0; i < card.length; i++) {
        card[i].onmouseenter = function () {
            let grandpa = this.parentNode.parentNode.parentNode.parentNode;
            let fa = this.parentNode.parentNode.parentNode;
            if (grandpa.firstElementChild.className.indexOf("monAni") > -1 && grandpa.firstElementChild.nextElementSibling.className.indexOf("monAni") > -1) {
                return false;
            } else {
                var theLeft = this.getBoundingClientRect().left;
                var theWidth = window.getComputedStyle(this.parentNode, null).getPropertyValue("width");
                var theGrandpaLeft = grandpa.getBoundingClientRect().left;

                bot = 85;

                monImg = document.createElement("img");
                monImg.src = "img/shop-img/mon7.png";

                monDiv = document.createElement("div");
                monDiv.style.width = "80px";
                monDiv.style.position = "absolute";
                monDiv.className = "monAni";
                monDiv.style.left = (parseInt(theLeft) - parseInt(theGrandpaLeft) + parseInt(theWidth) / 2 - parseInt(monDiv.style.width) / 2) + "px";
                monDiv.style.bottom = bot + "%";

                monDiv.appendChild(monImg);
                grandpa.insertBefore(monDiv, fa);

                function monAniUp() {

                    if (bot < 93) {
                        bot += 1.5;
                        monDiv.style.bottom = bot + "%";
                        setTimeout(monAniUp, 1);
                    } else {
                        clearTimeout(theTimer);
                        monDiv.className += " bounceMon";
                    }

                }
                theTimer = setTimeout(monAniUp, 5);
            }
        };

        card[i].onmouseleave = function () {
            theNode = this.parentNode.parentNode.parentNode.parentNode.firstElementChild;
            function monAniDown() {

                if (bot > 85) {
                    bot -= 1;
                    theNode.style.bottom = bot + "%";
                    setTimeout(monAniDown, 3);
                } else {
                    clearTimeout(theTimer2);
                    if (theNode.className.indexOf("monAni") > -1) {
                        theNode.parentNode.removeChild(theNode);
                    }

                }
            }
            theTimer2 = setTimeout(monAniDown, 5);
        };

    }
}
function colorSelect(){
    var selectItem = document.getElementsByClassName("selectItem");
    if(selectItem){
        for(var i=0;i<selectItem.length;i++){
            if(selectItem[i].firstElementChild.type == "radio"){
                selectItem[i].firstElementChild.checked = true;
            }
            
        }
    }
}
function colorChoose(){
    var colorchoose = document.querySelectorAll('.colorchoose');
    if(colorchoose){
        for (var i = 0; i < colorchoose.length; i++) {
        if (i % 2 == 1) {
            colorchoose[i].onclick = function () {
                this.parentNode.previousElementSibling.firstElementChild.nextElementSibling.style.right = '100%';
            }
        } else if (i % 2 == 0) {
            colorchoose[i].onclick = function () {
                this.parentNode.previousElementSibling.firstElementChild.nextElementSibling.style.right = '0';
            }
        }
        }
    }
}

function inputReadOnly(){
    var quantity = document.getElementById("quantity");
    if(quantity){
        quantity.readOnly = true;
    }
}

function changeTotalPrice() {
    var getTotalPrice = parseInt(price.innerHTML) * parseInt(quantity.value);
    if (quantity.value === "") {
        totalPrice.innerHTML = "0";
    } else {
        totalPrice.innerHTML = getTotalPrice;
    }

}

function changeQuantity(num) {
    newValue = parseInt(quantity.value) + num;
    if (newValue < 1) {
        newValue = 1;
    } else if (newValue > 99) {
        newValue = 99;
    } else {
        quantity.value = newValue;
    }
    changeTotalPrice();
}

function startTotalPrice(){
    var totalPrice = document.getElementById("totalPrice");
    if (totalPrice) {
        var getTotalPrice = parseInt(price.innerHTML) * parseInt(quantity.value);

        quantity.min = "1";
        quantity.max = "99";

        totalPrice.innerHTML = getTotalPrice;
        

        var btnLess = document.getElementById("btnLess");
        btnLess.onclick = function () { changeQuantity(-1); };
        var btnPlus = document.getElementById("btnPlus");
        btnPlus.onclick = function () { changeQuantity(1); };
    }
}

function revealOnScrollL() {
    var scrolled = $(window).scrollTop();

    // 物體浮現   
    $(".appear").each(function () {
        var current = $(this), // 当前元素
            w_height = $(window).outerHeight(), //视窗高度
            offsetTop = current.offset().top; //当前元素离顶部的高度
        // 计算高度差（此处预留50是为了看效果）
        // 当元素进入视窗时，添加class
        if (scrolled + w_height > offsetTop) {
            current.addClass("fadeIn");
        }
    });


    // 物體左邊進入
    $(".movefromLeft").each(function () {
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
    $(".movefromRight").each(function () {
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
    $(".movefromTop").each(function () {
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
    $(".movefrombottom").each(function () {
        var current = $(this), // 当前元素
            w_height = $(window).outerHeight(), //视窗高度
            offsetTop = current.offset().top; //当前元素离顶部的高度
        // 计算高度差（此处预留50是为了看效果）
        // 当元素进入视窗时，添加class
        if (scrolled + w_height > offsetTop) {
            current.addClass("fadeInUp");
        }
    });


    // 物體Q彈化
    $(".DD").each(function () {
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

function openTab(evt, payTypeName) {
    // Declare all variables
    var i, shopTabInner, shopTabBtn;

    // Get all elements with class="shopTabInner" and hide them
    shopTabInner = document.getElementsByClassName("shop-tab-inner");
    for (i = 0; i < shopTabInner.length; i++) {
        shopTabInner[i].style.display = "none";
    }

    // Get all elements with class="shopTabBtn" and remove the class "activeShopTab"
    shopTabBtn = document.getElementsByClassName("shopTabBtn");
    for (i = 0; i < shopTabBtn.length; i++) {
        shopTabBtn[i].className = shopTabBtn[i].className.replace(" activeShopTab", "");
    }

    // Show the current payType, and add an "activeShopTab" class to the button that opened the payType
    document.getElementById(payTypeName).style.display = "flex";
    evt.currentTarget.className += " activeShopTab";
}






function init(){
    $(".DD-default").each(function () {
        $(this).addClass("rubberBand");
    }   );
    
    $(window).on("scroll", revealOnScrollL);
    startTotalPrice();
    inputReadOnly();
    colorChoose();
    colorSelect();
    carousel();
    theColor();
    oGePopup();   
    addCart();

    if(document.body.clientWidth > 768){
        showMon();
    }

    $(window).resize(function(){
        if(document.body.clientWidth > 768){
            showMon();
        }
    })

    document.getElementById("defaultOpenTab").click();

}

window.onload = init;