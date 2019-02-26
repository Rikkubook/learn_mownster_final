function openLoginPopup(){
    var loginButton = document.getElementById("login-button");
    if(loginButton){
            loginButton.onclick = function(){
                document.getElementById("please-login").style.display = "none";
                $('.member-login .popup__wrap').fadeIn(100);//會員登入出現
                $('.member-login .popup__box').removeClass('transform--out').addClass('transform--in');
                
            };
    }
}
function cPopup(){
    var closePopup = document.getElementById("close-popup");
    if(closePopup){
        closePopup.onclick = function () { document.getElementById("please-login").style.display = "none"; }
    }
}
function checkOrder_Ajax(p_No,p_Image,p_Name,p_Size,p_Color,p_Quantity,p_Price,discount = null,discount_Id = null){
    var str;
    var xhr = new XMLHttpRequest();
    xhr.onload=function (){
        if( xhr.status == 200 ){
            if(xhr.responseText === "pleaseLogin"){
                str +="<div class='please-login-warp bg-white w-100p w-lg-600 z-10 m-a p-10 bs-bb'>";
                    str+="<div class='close-popup po-a pointer' id='close-popup'><i class='fas fa-times v-c'></i></div>";
                    str+="<h3 class='ta-c'>請先登入</h3>";
                    str+="<div class='ta-c'><button class='btn-main-sm member-login-popup__btn' id='login-button'>登入</button></div>"
                
                var pleaseLogin = document.getElementById("please-login");
                pleaseLogin.innerHTML = str;
                pleaseLogin.style.display = "block";
                cPopup();
                openLoginPopup();
            }else if(xhr.responseText === "success"){
                
                location.href = "checkOrder.php";
            }

            
        }else{
            alert( xhr.status );
        }
    }

    var url = "updateOrder.php?pNo=" + p_No + "&pImage=" + p_Image + "&pName=" + p_Name + "&pSize=" + p_Size + "&pColor=" + p_Color + "&pQuantity=" + p_Quantity + "&pPrice=" + p_Price + "&discount=" + discount + "&discountId=" + discount_Id;
    xhr.open("Get", url, true);
    xhr.send( null );
}
function checkOrder(){
    var check=document.getElementById("check");
    if(check){
        check.onclick = function(){
        
        var Form = document.getElementsByTagName("form");
        for(var i=0;i<Form.length;i++){
            var p_No = document.getElementsByName("pNo")[i].value;
            var p_Image = document.getElementsByName("pImage")[i].value;
            var p_Name = document.getElementsByName("pName")[i].value;
            var p_Price = document.getElementsByName("pPrice")[i].value;
            var p_Size = document.getElementsByName("pSize")[i].value;
            var p_Color = document.getElementsByName("pColor")[i].value;
            var p_Quantity = document.getElementsByName("pQuantity")[i].value;
            if(document.getElementById("discount")){
                var discount = document.getElementById("discount").value;
                var discount_Id = document.getElementById("discount").options[document.getElementById("discount").selectedIndex].id.split("-")[1];
                if(discount_Id === ""){
                    discount_Id = null;
                }
            }
            
            checkOrder_Ajax(p_No,p_Image,p_Name,p_Size,p_Color,p_Quantity,p_Price,discount,discount_Id);
            }
        }
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

var theDiscount;
function comDiscount(){
    var discount = document.getElementById("discount");
    if(discount){
        discount.onchange = function () {
            theDiscount = parseInt(discount.value);
            comSum(theDiscount);
        }
        comSum(theDiscount);
    }
}

function comSum(dis = 100) {
    var totalPrice = document.getElementsByClassName("totalPrice");
    if(totalPrice){
        sum = 0;
        
        for (var i = 0; i < totalPrice.length; i++) {
            sum += parseInt(totalPrice[i].innerHTML);
        }
        var sumTotalPrice = document.getElementById("sumTotalPrice");
        if(sumTotalPrice){
            sumTotalPrice.innerHTML = parseInt(sum * dis / 100);
        }
        
    }
}

function changePrice(evt, num = null) {
    var thisPrice = parseInt(evt.currentTarget.parentNode.parentNode.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.innerHTML);
    var thisTotalPrice = evt.currentTarget.parentNode.parentNode.nextElementSibling.firstElementChild.firstElementChild;
    if (num != null) {
        addNum = parseInt(num);
        if (addNum == 1) {
            var changeNum = parseInt(evt.currentTarget.previousElementSibling.value);
            changeNum += addNum;
            if (changeNum >= 99) {
                changeNum = 99;
            }
            evt.currentTarget.previousElementSibling.value = changeNum;

        } else {
            var changeNum = parseInt(evt.currentTarget.nextElementSibling.value);
            changeNum += addNum;
            if (changeNum <= 1) {
                changeNum = 1;
            }
            evt.currentTarget.nextElementSibling.value = changeNum;
        }
    } else {
        var changeNum = parseInt(evt.currentTarget.value);
    }
    thisTotalPrice.innerHTML = thisPrice * changeNum;
    if(document.getElementById("discount")){
        comDiscount();
    }else{
        comSum();
    }
    
}
function quantityLess(){
    var btnLess = document.getElementsByClassName("btnLess");
    if(btnLess){
        for (var i = 0; i < btnLess.length; i++) {
            btnLess[i].onclick = function () { changePrice(event, -1); }
        }
    }
}
function quantityPlus(){
    var btnPlus = document.getElementsByClassName("btnPlus");
    if(btnPlus){
        for (var i = 0; i < btnPlus.length; i++) {
            btnPlus[i].onclick = function () { changePrice(event, 1); }
        }
    }
}
function inputReadOnly(){
    var quantity = document.getElementsByClassName("quantity");
    if(quantity){
        for (var i = 0; i < quantity.length; i++) {
            quantity[i].min = 1;
            quantity[i].max = 99;
            quantity[i].readOnly = true;
        }
    }
}
function showInitPrice(){
    var thePrice = document.getElementsByClassName("thePrice");
    if(thePrice){
        var quantity = document.getElementsByClassName("quantity");
        var totalPrice = document.getElementsByClassName("totalPrice");
        for(var i=0;i<thePrice.length;i++){
            totalPrice[i].innerHTML = parseInt(thePrice[i].innerHTML) * parseInt(quantity[i].value);
        }
        comSum();
    }
}
function choosePay(evt, payTypeName = null) {
    if(payTypeName != null){
        // Declare all variables
        var i, payTypeDetail, paybtn;

        // Get all elements with class="payTypeDetail" and hide them
        payTypeDetail = document.getElementsByClassName("payTypeDetail");
        for (i = 0; i < payTypeDetail.length; i++) {
            payTypeDetail[i].style.display = "none";
        }

        // Get all elements with class="paybtn" and remove the class "active"
        paybtn = document.getElementsByClassName("paybtn");
        for (i = 0; i < paybtn.length; i++) {
            paybtn[i].className = paybtn[i].className.replace(" active", "");
        }

        // Show the current payType, and add an "active" class to the button that opened the payType
        document.getElementById(payTypeName).style.display = "block";
        evt.currentTarget.className += " active";
    }
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

function sLine(){
    var shoppingCart = document.getElementsByClassName("shoppingCart");
    if(shoppingCart){
        for(var i=0;i<shoppingCart.length;i++){
            shoppingCart[i].parentNode.style.borderBottom = "1px solid #c8c8c8";
        }
    }
}
        



function init(){
    sLine();
    carousel();
    choosePay();
    inputReadOnly();
    quantityPlus();
    quantityLess();
    showInitPrice();
    comDiscount();
    checkOrder();

    if(document.body.clientWidth > 768){
        showMon();
    }

    $(window).resize(function(){
        if(document.body.clientWidth > 768){
            showMon();
        }
    })
}


window.onload = init;