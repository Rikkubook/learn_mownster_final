$(document).ready(function () {

    // carouselWrap = document.getElementsByClassName('banner__carousel--wrap');
    // console.log(carouselWrap);

    checkHeight();
    sizeCheck();
    switchBanner();
    infoAccordion();
    countImage();
    bannerCarousel();
    $(window).resize(function () {
        var winWidth = $(window).width();
        switchBanner();
        checkCarousel();
        sizeCheck();
        infoAccordion();
        checkHeight();
    });
    
    function sizeCheck() {
        var winWidth = $(window).width();
        if (winWidth < 768) {
            $('.class__info--wrap p+p').hide();
            $('.info__more').removeClass('open');
            $('.info__more--img').removeClass('open');
        } else {
            $('.class__info--wrap p+p').show();
        }
    }

    function checkCarousel() {
        // var divWidth = carouselWrap.clientWidth;
        divWidth = $('.banner__carousel--wrap').width();
        // console.log(divWidth);
        // $('.banner__carousel li').width(divWidth + 'px');
        // $('.banner__carousel li').width(50 + '%');
        // $('.banner__carousel').width(divWidth * imgCount);
        // $('.banner__carousel').width(200 + '%');

        if ($('.banner__carousel').css('left') != '0px' ) {
            $('.banner__carousel').css({'left': '-100%'});
            // $('.banner__carousel').animate({
            //     "left": divWidth * -1 + "px"
            // }, 300);
            $('.banner__button li').removeClass('clickMe');
            $('.banner__button li:nth-child(2)').addClass('clickMe');
        }else{
            $('.banner__carousel').css({'left': '0' });
            // $('.banner__carousel').animate({
            //     "left": 0 + "px"
            // }, 300);
            $('.banner__button li').removeClass('clickMe');
            $('.banner__button li:nth-child(1)').addClass('clickMe');
        }
    }

    function countImage() {
        imgCount = $('.banner__carousel li').length;
        // console.log(imgCount);
        for (var i = 0; i < imgCount; i++) {
            $('.banner__button').append('<li></li>');
        }
    }
    

    function bannerCarousel() {
        // console.log('banner寬='+divWidth+'px');
        // $('.banner__carousel').width(divWidth * imgCount);
        // $('.banner__carousel li').width(divWidth);
        
        var divWidth = $('.banner__carousel--wrap').width();

        $('.banner__button li:nth-child(1)').addClass('clickMe');

        $('#arrowLeft--carousel').click(function () {
            // console.log($('.banner__carousel').css('left'));
            if ($('.banner__carousel').css('left') != '0px') {
                $('.banner__carousel').css({'left': '0px'});
                // $('.banner__carousel').animate({
                //     "left" : "0px"
                // }, 300);
                $('.banner__button li').removeClass('clickMe');
                $('.banner__button li:nth-child(1)').addClass('clickMe');
            }
        });
        $('#arrowRight--carousel').click(function () {
            // console.log($('.banner__carousel').css('left'));
            if ($('.banner__carousel').css('left') == '0px') {
                $('.banner__carousel').css({'left': '-100%'});
                // $('.banner__carousel').animate({
                //     "left": divWidth * -1 +"px"
                // }, 300);
                $('.banner__button li').removeClass('clickMe');
                $('.banner__button li:nth-child(2)').addClass('clickMe');
            }
        });
    }

    function switchBanner() {
        var winWidth = $(window).width();
        if (winWidth < 768) {
            $('#print__banner--image img').attr("src", "img/class-img/class-banner/ClassBanner_print_small.png");
            $('#doll__banner--image img').attr("src", "img/class-img/class-banner/ClassBanner_doll_small.png");
        } else {
            $('#print__banner--image img').attr("src", "img/class-img/class-banner/ClassBanner_print_big.png");
            $('#doll__banner--image img').attr("src", "img/class-img/class-banner/ClassBanner_doll_big.png");
        }
    }

    function infoAccordion() {
        var winWidth = $(window).width();
        if (winWidth < 768) {
            $('.info__more').click(function () {
                // $('.class__info--wrap').toggleClass('open');
                $('.class__info--wrap p+p').stop().slideToggle();
                $('.info__more').toggleClass('open');
                $('.info__more--img').toggleClass('open');
            });
        }
    }
    

    function checkHeight() {
        var winWidth = $(window).width();
        $('.class__planning--info').css("height", 'initial');
        $('.class__planning--calendar').css("height", 'initial');

        if (winWidth >= 768) {
            minHeight = $('.class__planning--wrap').height();;
            
            $('.class__planning--info').css("height", minHeight+'px');
            $('.class__planning--calendar').css("height", minHeight+'px');
        }
    }

    // 會員付費燈箱
    // $('.member-pay-popup__btn').click(function () {
    //     $('.payClass--popup .popup__wrap').fadeIn(100);
    //     $('.payClass--popup .popup__box').removeClass('transform--out').addClass('transform--in');
    // });

    // 照片燈箱按鈕
    $('.photo--btn').click(function (e) {
        $('#popup__photo img').attr("src", "");
        
        $('.popup__photoBox .popup__wrap').fadeIn(100);
        $('.popup__photoBox .popup__box').removeClass('transform--out').addClass('transform--in');

        // console.log($(this).attr("src"));
        $('#popup__photo img').attr("src", $(this).attr("src"));

        e.preventDefault();
        //停止超連結預設超連結行為
    });
    $('.close-btn.photo__close').click(function (e) {
        $('.popup__photoBox .popup__wrap').fadeOut(100);
        $('.popup__photoBox .popup__box').removeClass('transform--in').addClass('transform--out');
        $('#popup__photo img').attr("src", "");

        e.preventDefault();
        //停止超連結預設超連結行為
    });
    $('.reloadClass').click(function (e) {
        $('.payClass--popup .popup__wrap').fadeOut(100);
        $('.payClass--popup .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__confirmPay .popup__wrap').fadeOut(100);
        $('.popup__confirmPay .popup__box').removeClass('transform--in').addClass('transform--out');
        history.go(0);

        e.preventDefault();
        //停止超連結預設超連結行為
    });
    $('.close-btn').click(function (e) {
        $('.payClass--popup .popup__wrap').fadeOut(100);
        $('.payClass--popup .popup__box').removeClass('transform--in').addClass     ('transform--out');

        $('.popup__confirmPay .popup__wrap').fadeOut(100);
        $('.popup__confirmPay .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__alertClass .popup__wrap').fadeOut(100);
        $('.popup__alertClass .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__comment .popup__wrap').fadeOut(100);
        $('.popup__comment .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__msgAlert .popup__wrap').fadeOut(100);
        $('.popup__msgAlert .popup__box').removeClass('transform--in').addClass('transform--out');
        e.preventDefault();
        //停止超連結預設超連結行為
    });
    $('.popup__photoBox .popup__close').click(function (e) {
        $('.popup__photoBox .popup__wrap').fadeOut(100);
        $('.popup__photoBox .popup__box').removeClass('transform--in').addClass('transform--out');
        $('#popup__photo img').attr("src", "");

        e.preventDefault();
        //停止超連結預設超連結行為
    });
    $('.popup__close').click(function (e) {
        $('.payClass--popup .popup__wrap').fadeOut(100);
        $('.payClass--popup .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__confirmPay .popup__wrap').fadeOut(100);
        $('.popup__confirmPay .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__alertClass .popup__wrap').fadeOut(100);
        $('.popup__alertClass .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__comment .popup__wrap').fadeOut(100);
        $('.popup__comment .popup__box').removeClass('transform--in').addClass('transform--out');

        $('.popup__msgAlert .popup__wrap').fadeOut(100);
        $('.popup__msgAlert .popup__box').removeClass('transform--in').addClass('transform--out');
        e.preventDefault();
        //停止超連結預設超連結行為
    });

});
function verification(){
    var creditCardSafeCode = document.getElementsByName("creditCardSafeCode");
    if(creditCardSafeCode){
        for(var i=0;i<creditCardSafeCode.length;i++){
            creditCardSafeCode[i].onkeypress = function(){
                return event.keyCode>=48 && event.keyCode<=57;
            }
            creditCardSafeCode[i].oninput = function(){
                if(this.value.length>3){this.value=this.value.slice(0,3);}
            }
        }
    }  
        
    var creditCard = document.querySelectorAll("input[name^='creditCard-']");
    if(creditCard){
        for(var i=0;i<creditCard.length;i++){
            creditCard[i].onkeypress = function(){
                return event.keyCode>=48 && event.keyCode<=57;
            }
            creditCard[i].oninput = function(){
                if(this.value.length>4){this.value=this.value.slice(0,4);}
            }
        }
    }
}
function init() {
    verification();
}
window.onload = init;