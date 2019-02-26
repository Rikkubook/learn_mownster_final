//眼睛換頁
function ClikDragEyes(){
  $('#eyesbutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
  $('.selector__items').eq(1).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n'); 
  $('.mownster__functionitems div').removeClass('icon--disabled')
}
//嘴巴換頁
function ClikDragMouth(){
$('#mouthbutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
$('.selector__items').eq(2).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n'); 
$('.mownster__functionitems div').removeClass('icon--disabled')
}

//配件換頁
function ClikDragAccessory(){
$('#accessorybutton').removeClass('selector__choose').addClass('selector__choose--choosed').siblings().removeClass('selector__choose--choosed');
$('.selector__items').eq(3).removeClass('dis-n').addClass('dis-b').siblings().removeClass('dis-b').addClass('dis-n');
$('.mownster__functionitems div').removeClass('icon--disabled')
}


//添加拖曳事件並順便換頁籤 點擊也可以
$(function() {
  $( "#drageyes" ).draggable({ containment: "parent",
    start: function(){ClikDragEyes()}
  });
  $( "#dragmouth" ).draggable({ containment: "parent",
    start: function(){ClikDragMouth()}
  });
  $( "#dragaccessory" ).draggable({ containment: "parent",
    start: function(){ClikDragAccessory()}
  });
  // 點選眼睛時時改變右方顯示顯示 if(...$("").data("clicked"))
  $('#drageyes').click(function(){ClikDragEyes()});
  $('#dragmouth').click(function(){ClikDragMouth()});
  $('#dragaccessory').click(function(){ClikDragAccessory()});
});
