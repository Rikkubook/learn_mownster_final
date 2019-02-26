$(function(){ // $(document).ready(function()
    var _index = 0; //宣告一個變數為index

    // 點選button時改變下方顯示
    $('.selector__choose＿group button').click(function(){
        _index = $(this).index();
        $(this).removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
        // 選擇到的那一個先移除"原先Class"再新增"被選的Class" 前兄弟元件也移除"被選的Class"
        $('.selector__items').eq(_index).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n');

        //連接放大縮小功能在身形時停用
        if($('#bodybutton').is('.selector__choose--choosed')){
            $('.mownster__functionitems div').addClass('icon--disabled')
        }else{
            $('.mownster__functionitems div').removeClass('icon--disabled')
        }
    
    })

    
    // 點選眼睛時時改變右方顯示顯示 if(...$("").data("clicked"))
    $('#drageyes').click(function(){
        $('#eyesbutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
        $('.selector__items').eq(1).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n'); 
    });
    $('#dragmouth').click(function(){
        $('#mouthbutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
        $('.selector__items').eq(2).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n'); 
    });
    $('#dragaccessory').click(function(){
        $('#accessorybutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
        $('.selector__items').eq(3).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n'); 
    });

})