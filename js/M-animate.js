
$(document).ready(function(){
    function revealOnScrollL(){
    var scrolled = $(window).scrollTop();


    // 物體下方進入
    $(".movefrombottom").each(function(){
        var current = $(this), // 当前元素
        w_height = $(window).outerHeight(), //视窗高度
        offsetTop = current.offset().top-50; //当前元素离顶部的高度
        // 计算高度差（此处预留50是为了看效果）
        // 当元素进入视窗时，添加class
        if (scrolled + w_height> offsetTop) {
        current.addClass("fadeInUp");
        } else {
        current.removeClass("fadeInUp");
        }
    });


    // 物體Q彈化
    $(".DD").each(function(){
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
  $(window).on("scroll", revealOnScrollL);
 

  
});