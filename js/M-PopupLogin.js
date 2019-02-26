$("#btnLogin").attr("onclick", "sendFormMoster()"); 
for(i=0;i<=5;i++){
    $(".popup__icon").eq(i).click(function(){
        $(this).addClass("click").siblings().removeClass('click');
    });
    // document.getElementsByClassName("popup__icon")[i].onclick = function(){
    //     $(this).addClass("click").siblings().removeClass('click');
    // };
}

//登入
function sendFormMoster(){
    //=====使用Ajax 回server端
    var xhr = new XMLHttpRequest(); 
    if($id('memId').value == ''){
        $id('login-erroMsg').innerHTML = '請輸入帳號!';
    }else if($id('memPsw').value == ''){
        $id('login-erroMsg').innerHTML = '請輸入密碼!';
    }else{
    xhr.onload = function (){
    if( xhr.responseText == "not found"){
        $id('memId').value = '';
        $id('memPsw').value = '';
        $id('memId').focus();
        $id('login-erroMsg').innerHTML = '帳號密碼錯誤!';
      }else if(xhr.responseText == "stop"){
        $id('memId').value = '';
        $id('memPsw').value = '';
        $id('memId').focus();
        $id('login-erroMsg').innerHTML = '此帳號已被停權!';
      }else if(xhr.responseText == "error"){
        $id('memId').value = '';
        $id('memPsw').value = '';
        $id('memId').focus();
        $id('login-erroMsg').innerHTML = '系統錯誤!';
      }else{ //帳密登入成功
        $('.member-login .popup__wrap').fadeOut(100);//會員登入關閉
        $('.member-login .popup__box').removeClass('transform--in').addClass('transform--out');
        $('.loginsuccess_popup .popup__wrap').fadeIn(100);//登入成功出現
        $('.loginsuccess_popup .popup__box').removeClass('transform--out').addClass('transform--in');
        setTimeout(function(){
        $('.loginsuccess_popup .popup__wrap').fadeOut(100);//登入成功關閉
        $('.loginsuccess_popup .popup__box').removeClass('transform--in').addClass('transform--out');
        },1000);
        $id('login-on02').classList.remove("member-login-popup__btn");
        $id('member-Img').src ="img/header-img/HD-mamber04.png";
        $id('login-on').href = "member.php";
        $id('login-on01').href = "member.php";
        $id('memId').value = '';
        $id('memPsw').value = '';
        // history.go(0);

        var pupupicon0 =document.getElementsByClassName("popup__icon")[0]
        if(pupupicon0.classList.contains("click")){
            setTimeout(function(){
            location.href =  "shop.php" },1000);
        };

        var pupupicon1 =document.getElementsByClassName("popup__icon")[1]
        if(pupupicon1.classList.contains("click")){
            setTimeout(function(){
            location.href =  "beautiful.php" },1000);
        };

        var pupupicon1 =document.getElementsByClassName("popup__icon")[3]
        if(pupupicon1.classList.contains("click")){
            setTimeout(function(){
            location.href =  "class-doll.php" },1000);
        };

        var pupupicon1 =document.getElementsByClassName("popup__icon")[4]
        if(pupupicon1.classList.contains("click")){
            setTimeout(function(){
            location.href =  "class-print.php" },1000);
        };
    }
    }
    var url = "M-ajaxLogin_Mimg.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
    var member = {};
    member.memId = document.getElementById("memId").value;
    member.memPsw = document.getElementById("memPsw").value;
    var data_info = "jsonStr=" + JSON.stringify( member );
    xhr.send(data_info);

    }
}
//登入結束


// 呼叫ajax的js
function sendtochangeImg(){
    //=====使用Ajax 回server端
    var xhr = new XMLHttpRequest(); 
    var url = "M-changMimg.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
    xhr.send("");

}