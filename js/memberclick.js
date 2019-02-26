//---JQuery---
$(function(){ //頁籤 $(document).ready(function()
    var _index = 0; //宣告一個變數為index
    $('#member-tabs a').click(function(){
        _index = $(this).index();
        $(this).addClass('memberactive').siblings().removeClass('memberactive');
        // 選擇到的那一個先移除"原先Class"再新增"被選的Class" 前兄弟元件也移除"被選的Class"
        $('.selector__items').eq(_index).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n');
    });
});//頁籤結束
$(function () {// QR燈箱
  $('.member-QR').click(function (e) {
    $('.qrcode_popup .popup__wrap').fadeIn(100);
    $('.qrcode_popup .popup__box').removeClass('transform--out').addClass('transform--in');
    e.preventDefault();
  });
});//QR燈箱結束
$(function () {// 取消課程按鈕
  $('.member-class-cancle-btn').click(function (e) {
    $(this).parents('.member-class').remove();
    e.preventDefault();// 移除選取的祖輩層
  });
});//取消課程按鈕結束
$(function () {// 訂單取消按鈕
  $('.member-oder-cancle-btn').click(function (e) {
    $(this).parents('.member-order').remove();
    e.preventDefault();// 移除選取的祖輩層
  });
});// 訂單取消按鈕結束




