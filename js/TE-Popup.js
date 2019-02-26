
$(function(){
    $('.popup__btn').click(function() {
        $('.popup--Share .popup__wrap').fadeIn(500);
        $('.popup--Share .popup__box').removeClass('transform--out').addClass('transform--in');
        $('.popup--member .popup__wrap').fadeIn(500);
        $('.popup--member .popup__box').removeClass('transform--out').addClass('transform--in');
        $('.popup--mownster .popup__wrap').fadeIn(500);
        $('.popup--mownster .popup__box').removeClass('transform--out').addClass('transform--in');
        setTimeout( popupMownsterClose,3000);

    });

    $('.popup__close').click(function(e) {
        $('.popup--Share .popup__wrap').fadeOut(500);
        $('.popup--Share .popup__box').removeClass('transform--in').addClass('transform--out');

        e.preventDefault();
        //停止超連結預設超連結行為
    });

    $('.popup__memberclose').click(function(e) {
        $('.popup--member .popup__wrap').fadeOut(500);
        $('.popup--member .popup__box').removeClass('transform--in').addClass('transform--out');

        e.preventDefault();
        //停止超連結預設超連結行為
    });

    function popupMownsterClose(){
        $('.popup--mownster .popup__wrap').fadeOut(500);
        $('.popup--mownster .popup__box').removeClass('transform--in').addClass('transform--out');
    }
    
});