
$(function(){
    // 留言板檢舉(MessageBoard-report)
    // 點(留言板)檢舉按鈕

    // 點(檢舉)確認接已送出燈箱
    $('.MB-confirm__btn').click(function(e) {
    $('.MB-confirm .popup__wrap').fadeOut(100);
    $('.MB-confirm .popup__box').removeClass('transform--out').addClass('transform--in');
    // 檢舉送出燈箱
    $('.MB-report .popup__wrap').fadeIn(100);
    $('.MB-report .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    
    // 點(檢舉)確認接已送出燈箱
    $('.MB-confirm__btn').click(function(e) {
    $('.MB-confirm .popup__wrap').fadeOut(100);
    $('.MB-confirm .popup__box').removeClass('transform--out').addClass('transform--in');
    // 檢舉送出燈箱
    $('.MB-report .popup__wrap').fadeIn(100);
    $('.MB-report .popup__box').removeClass('transform--in').addClass('transform--out');
    });
    
    // 點刪除按鈕接確認刪除燈箱
    $('.delete__btn').click(function(e) {
    $('.MB-delete .popup__wrap').fadeIn(100);
    $('.MB-delete .popup__box').removeClass('transform--out').addClass('transform--in');
        });    
    



    // 關閉燈箱

    // 右上角按鈕關閉燈箱

    // 留言板檢舉系列
    $('.close-btn').click(function (e) {
    // 檢舉燈箱
    $('.MB-report .popup__wrap').fadeOut(100);
    $('.MB-report .popup__box').removeClass('transform--in').addClass('transform--out');
    // 檢舉送出燈箱
    $('.MB-confirm .popup__wrap').fadeOut(100);
    $('.MB-confirm .popup__box').removeClass('transform--in').addClass('transform--out');
    
    // 刪除確認燈箱
    $('.MB-delete .popup__wrap').fadeOut(100);
    $('.MB-delete .popup__box').removeClass('transform--in').addClass('transform--out');
    
    
        e.preventDefault();
        //停止超連結預設超連結行為
    });

    // 燈箱黑幕關閉燈箱

    // 留言板檢舉系列
    $('.popup__wrap').click(function (e) {
    
    // 檢舉燈箱
    $('.MB-report .popup__wrap').fadeOut(100);
    $('.MB-report .popup__box').removeClass('transform--in').addClass('transform--out');
    // 檢舉送出燈箱
    $('.MB-confirm .popup__wrap').fadeOut(100);
    $('.MB-confirm .popup__box').removeClass('transform--in').addClass('transform--out');
    
    // 刪除確認燈箱
    $('.MB-delete .popup__wrap').fadeOut(100);
    $('.MB-delete .popup__box').removeClass('transform--in').addClass('transform--out');
    
    
        e.preventDefault();
        //停止超連結預設超連結行為
    });

    
});