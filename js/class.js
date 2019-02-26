$(document).ready(function () {

    resizeCheck();
    // console.log(winWidth + 'px');
    $(window).resize(function () {
        winWidth = $(window).width();
        // console.log(winWidth + 'px');
        resizeCheck();
    });

    function checkDivHeight() {
        headerHeight = $('.header-height').height();
        // console.log(headerHeight);
        mownsterHeight = $('.mownsterImage').height();
        // console.log(mownsterHeight);

        extraHeight = headerHeight + mownsterHeight;
        // console.log(extraHeight);
    }

    function resizeCheck() {
        winWidth = $(window).width();

        checkDivHeight();

        if (winWidth < 768) {
            $('.doll--island').css("width", "100%");
            $('.print--island').css("width", "100%");
            // $('body').css('overflow-y', 'auto');
            $('.island__image--doll').css({"height": "0px", "padding-bottom": "80%"});
            $('.island__image--print').css({"height": "0px", "padding-bottom": "80%"});
            $('.island__card--doll').css({ "opacity": "1", "top": "115%", "right": "50%"});
            $('.island__card--print').css({ "opacity": "1", "top": "115%", "left": "50%" });
            $('.sun').css({ "opacity": "1"});
            
        }else{
            $('.doll--island').css("width", "50%");
            $('.print--island').css("width", "50%");
            // $('body').css('overflow-y', 'hidden');
            $('.island__image--doll').css({"height": "calc(98vh - "+ extraHeight + "px)", "padding-bottom": "0"});
            $('.island__image--print').css({"height": "calc(98vh - "+ extraHeight + "px)", "padding-bottom": "0"});
            $('.island__card--doll').css({ "opacity": "0", "top": "25%", "right": "-30%"});
            $('.island__card--print').css({ "opacity": "0", "top": "25%", "left": "-30%" });
            $('.sun').css({ "opacity": "0"});
            hoverEffect();
        }
    }

    function hoverEffect() {
        winWidth = $(window).width();
        if (winWidth >= 768) {
            //布偶島hover
            $('.doll--island').hover(function () {
                $('.mownsterImage').css({ "opacity": "0", "height": "0px" });
                checkDivHeight();
                
                $(this).css("width", "90%");
                $('.print--island').css({ "width": "10%", "opacity": "0" });
                
                $('.island__image--doll').css({ "height": "calc(98vh - "+ extraHeight + "px)", "left": "-10%" });
                $('.island__image--print').css({ "height": "calc(98vh - "+ extraHeight + "px)"});
                $('.doll__image').css({ "width": "18%", "padding-bottom": "20%", "left": "40%" });

                // $('.print--island').css({ "opacity": "0" });
                $('.pyramid--wrap').stop().animate({left: "55%", bottom: "25%"}, 400);
                $('.title--choose').stop().animate({opacity: "0"}, 500);
                $('.islands__title').stop().animate({opacity: "0"}, 200);
                $('.sun').stop().animate({opacity: "1"}, 500);
                $('.balloon--island--doll').stop().delay(400).animate({opacity: "1"}, 600);
                $('.island__card--doll').css({ "opacity": "1", "pointer-events": "auto", "right": "15%", "top": "35%" });
            }, function () {
                $('.mownsterImage').css({ "opacity": "1", "height": "auto" });
                checkDivHeight();
                
                $(this).css("width", "50%");
                $('.print--island').css({ "width": "50%", "opacity": "1"});

                $('.island__image--doll').css({ "height": "calc(98vh - "+ extraHeight + "px)", "left": "initial" });
                $('.island__image--print').css({ "height": "calc(98vh - "+ extraHeight + "px)" });
                $('.doll__image').css({ "width": "25%", "padding-bottom": "25%", "left": "55%" });
                // $('.mownsterImage').css({ "opacity": "1", "margin-top": "0" });
                // $('.print--island').css({ "opacity": "1" });
                $('.pyramid--wrap').stop().animate({left: "70%", bottom: "18%"}, 400);
                $('.title--choose').stop().animate({opacity: "1"}, 500);
                $('.sun').stop().animate({opacity: "0"}, 500);
                $('.balloon--island--doll').stop().animate({opacity: "0"}, 500);
                $('.balloon--island--print').stop().animate({opacity: "0"}, 500);
                $('.islands__title').stop().animate({opacity: "1"}, 500);
                $('.island__card--doll').css({ "opacity": "0", "pointer-events": "none", "right": "-30%", "top": "25%" });
            });
            //列印島hover
            $('.print--island').hover(function () {
                $('.mownsterImage').css({ "opacity": "0", "height": "0px" });
                checkDivHeight();

                $(this).css("width", "90%");
                $('.doll--island').css({ "width": "10%", "opacity": "0"});

                $('.island__image--print').css({ "height": "calc(98vh - "+ extraHeight + "px)", "right": "-15%" });
                $('.island__image--doll').css({ "height": "calc(98vh - "+ extraHeight + "px)"});
                $('.printer__image').css({ "width": "15%", "padding-bottom": "15%", "left": "70%" });
                $('.title--choose').stop().animate({opacity: "0"}, 100);
                $('.islands__title').stop().animate({opacity: "0"}, 200);
                $('.balloon--island--print').stop().delay(400).animate({opacity: "1"}, 600);
                $('#canvas--print').stop().animate({opacity: "1"}, 800);
                $('.island__card--print').css({ "opacity": "1", "pointer-events": "auto", "left": "15%", "top": "35%" });
            }, function () {
                $('.mownsterImage').css({ "opacity": "1", "height": "auto" });
                checkDivHeight();
                
                $(this).css("width", "50%");
                $('.doll--island').css({ "width": "50%", "opacity": "1"});

                $('.island__image--print').css({ "height": "calc(98vh - "+ extraHeight + "px)", "right": "initial" });
                $('.island__image--doll').css({ "height": "calc(98vh - "+ extraHeight + "px)"});
                $('.printer__image').css({ "width": "20%", "padding-bottom": "20%", "left": "55%" });
                $('.title--choose').stop().animate({opacity: "1"}, 100);
                $('.islands__title').stop().animate({opacity: "1"}, 100);
                $('.balloon--island--doll').stop().animate({opacity: "0"}, 100);
                $('.balloon--island--print').stop().animate({opacity: "0"}, 100);
                $('#canvas--print').stop().animate({opacity: "0"}, 100);
                $('.island__card--print').css({ "opacity": "0", "pointer-events": "none", "left": "-30%", "top": "25%" });
            });
        }
    };

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        };
    window.requestAnimationFrame = requestAnimationFrame;





});



// (function () {
//     var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
//         function (callback) {
//             window.setTimeout(callback, 1000 / 60);
//         };
//     window.requestAnimationFrame = requestAnimationFrame;
// })();


var flakes = [],
    canvas = document.getElementById("canvas--print"),
    ctx = canvas.getContext("2d"),
    flakeCount = 400,
    mX = -100,
    mY = -100

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

function snow() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (var i = 0; i < flakeCount; i++) {
        var flake = flakes[i],
            x = mX,
            y = mY,
            minDist = 150,
            x2 = flake.x,
            y2 = flake.y;

        var dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y)),
            dx = x2 - x,
            dy = y2 - y;

        if (dist < minDist) {
            var force = minDist / (dist * dist),
                xcomp = (x - x2) / dist,
                ycomp = (y - y2) / dist,
                deltaV = force / 2;

            flake.velX -= deltaV * xcomp;
            flake.velY -= deltaV * ycomp;

        } else {
            flake.velX *= .98;
            if (flake.velY <= flake.speed) {
                flake.velY = flake.speed
            }
            flake.velX += Math.cos(flake.step += .05) * flake.stepSize;
        }

        ctx.fillStyle = "rgba(255,255,255," + flake.opacity + ")";
        flake.y += flake.velY;
        flake.x += flake.velX;

        if (flake.y >= canvas.height || flake.y <= 0) {
            reset(flake);
        }


        if (flake.x >= canvas.width || flake.x <= 0) {
            reset(flake);
        }

        ctx.beginPath();
        ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
        ctx.fill();
    }
    requestAnimationFrame(snow);
};

function reset(flake) {
    flake.x = Math.floor(Math.random() * canvas.width);
    flake.y = 0;
    flake.size = (Math.random() * 3) + 2;
    flake.speed = (Math.random() * 1) + 0.5;
    flake.velY = flake.speed;
    flake.velX = 0;
    flake.opacity = (Math.random() * 0.5) + 0.3;
}

function init() {
    for (var i = 0; i < flakeCount; i++) {
        var x = Math.floor(Math.random() * canvas.width),
            y = Math.floor(Math.random() * canvas.height),
            size = (Math.random() * 3) + 2,
            speed = (Math.random() * 1) + 0.5,
            opacity = (Math.random() * 0.5) + 0.3;

        flakes.push({
            speed: speed,
            velY: speed,
            velX: 0,
            x: x,
            y: y,
            size: size,
            stepSize: (Math.random()) / 30,
            step: 0,
            opacity: opacity
        });
    }

    snow();
};

canvas.addEventListener("mousemove", function (e) {
    mX = e.clientX,
        mY = e.clientY
});

window.addEventListener("resize", function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
})

init();