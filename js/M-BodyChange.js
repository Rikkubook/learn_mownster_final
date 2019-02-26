$(function(){ // $(document).ready(function()
var _index = 0; //宣告一個變數為index
$('.selector__body').click(function(){
    _index = $(this).index()+1;

    var  bodysvg = $('.mouster__bodysvg');   //獲取所有節點的dom數組  
    var  len = bodysvg.length;                //數組長度
    console.log(len);
    for ( var  i= 0; i< len; i++){  
        $('.mouster__bodysvg').eq(i).removeClass('dis-b').addClass('dis-n');
    } 
    $('.mouster__bodysvg').eq(_index).removeClass('dis-n').addClass('dis-b')
})
})