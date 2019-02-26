$('#btnLogin').attr('onclick', "sendClassForm()");

function $id(id) {
    return document.getElementById(id);
}

function $class(className) {
    return document.getElementsByClassName(className);
}

function $all(all) {
    return document.querySelectorAll(all);
}
$id('payClass--errorMsg').style.color = 'red';
$id('getPsw-erroMsg').style.color = 'red';
$id('login-erroMsg').style.color = 'red';
$id('register-erroMsg').style.color = 'red'; //錯誤訊息紅色

function checkClassInfo() {
    var showDate = document.getElementsByClassName("showDate");
    
    // console.log(showDate[0].innerHTML);
    
    if (showDate[0].innerHTML == "請於上方月曆點選日期") {
        $id('payClass--errorMsg').innerHTML = "請點選日期！";
        return false;
    }
    else if ($('#class_reserve').hasClass('pay-popup__btn')) {
        $('.payClass--popup .popup__wrap').fadeIn(100);
        $('.payClass--popup .popup__box').removeClass('transform--out').addClass('transform--in');
        
        return false;
    }else{
        $('.member-login .popup__wrap').fadeIn(100); //會員登入出現
        $('.member-login .popup__box').removeClass('transform--out').addClass('transform--in');
        $('#btnLogin').addClass('jumpLightBox');
        return false;
    }
}

//登入
function sendClassForm() {
    //=====使用Ajax 回server端
    
    var xhr = new XMLHttpRequest();

    if ($id('memId').value == '') {
        $id('memId').focus();
        $id('login-erroMsg').innerHTML = '請輸入帳號!';
    } else if ($id('memPsw').value == '') {
        $id('memPsw').focus();
        $id('login-erroMsg').innerHTML = '請輸入密碼!';
    } else {
        xhr.onload = function () {

            if (xhr.responseText == "not found") {
                $id('memId').value = '';
                $id('memPsw').value = '';
                $id('memId').focus();
                $id('login-erroMsg').innerHTML = '帳號密碼錯誤!';
            } else if (xhr.responseText == "stop") {
                $id('memId').value = '';
                $id('memPsw').value = '';
                $id('memId').focus();
                $id('login-erroMsg').innerHTML = '此帳號已被停權!';
            }else if (xhr.responseText == "error") {
                $id('memId').value = '';
                $id('memPsw').value = '';
                $id('memId').focus();
                $id('login-erroMsg').innerHTML = '系統錯誤!';
            } else { //帳密登入成功

                var memNo = xhr.responseText;
                // console.log("會員號碼為"+memNo);

                $('#pay__memNo').val(memNo);

                $('.member-login .popup__wrap').fadeOut(100); //會員登入關閉
                $('.member-login .popup__box').removeClass('transform--in').addClass('transform--out');
                if ($('#btnLogin').hasClass('jumpLightBox') == true) {
                    $('.payClass--popup .popup__wrap').fadeIn(100); 
                    $('.payClass--popup .popup__box').removeClass('transform--out').addClass('transform--in');
                    $('#class_reserve').addClass('pay-popup__btn');
                    $('.payClass--popup .popup__wrap--Pay').addClass('reloadClass');
                    $('.payClass--popup .close-btn').addClass('reloadClass');
                    $('.popup__confirmPay .popup__wrap--Pay').addClass('reloadClass');
                    $('.popup__confirmPay .close-btn').addClass('reloadClass');

                    $('.reloadClass').click(function (e) {
                        $('.payClass--popup .popup__wrap').fadeOut(100);
                        $('.payClass--popup .popup__box').removeClass('transform--in').addClass('transform--out');

                        $('.popup__confirmPay .popup__wrap').fadeOut(100);
                        $('.popup__confirmPay .popup__box').removeClass('transform--in').addClass('transform--out');
                        history.go(0);

                        e.preventDefault();
                        //停止超連結預設超連結行為
                    });

                    return false;
                }
                $('.loginsuccess_popup .popup__wrap').fadeIn(100); //登入成功出現
                $('.loginsuccess_popup .popup__box').removeClass('transform--out').addClass('transform--in');
                setTimeout(function () {
                    $('.loginsuccess_popup .popup__wrap').fadeOut(100); //登入成功關閉
                    $('.loginsuccess_popup .popup__box').removeClass('transform--in').addClass('transform--out');
                }, 1000);
                $id('login-on02').classList.remove("member-login-popup__btn");
                $id('member-Img').src = "img/header-img/HD-mamber04.png";
                $id('login-on').href = "member.php";
                $id('login-on01').href = "member.php";
                $id('memId').value = '';
                $id('memPsw').value = '';
                $('#class_reserve').addClass('pay-popup__btn');
                history.go(0);
            }
        }
        var url = "ajaxLogin_JSON.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        var member = {};
        member.memId = document.getElementById("memId").value;
        member.memPsw = document.getElementById("memPsw").value;
        var data_info = "jsonStr=" + JSON.stringify(member);
        xhr.send(data_info);

    }
} //登入結束

//檢查信用卡
function checkCard() {
    var creditCard = document.querySelectorAll("input[name^='creditCard-']");
    for (var i = 0; i < creditCard.length; i++) {
        if (creditCard[i].value === "" || creditCard[i].value === null) {
            alert(creditCard[i].parentNode.firstElementChild.innerHTML + "資料不完整");
            return false;
        }
    }
    var creditCardSafeCode = document.querySelectorAll("input[name='creditCardSafeCode']");
    if (creditCardSafeCode[0].value === "" || creditCardSafeCode[0].value === null) {
        alert(creditCardSafeCode[0].parentNode.firstElementChild.innerHTML + "資料不完整");
        return false;
    }
    var theMonth = document.getElementById("chooseMonth").value;
    var theYear = document.getElementById("chooseYear").value;
    getClassNo();
}


function getClassNo() {
    var selectDate = document.getElementsByClassName("showDate")[0].innerHTML;
    // console.log(selectDate);
    var selectYear = selectDate.split('/')[0];
    // console.log(selectYear);
    var selectMonth = selectDate.split('/')[1];
    // console.log(selectMonth);
    var selectDay = selectDate.split('/')[2];
    // console.log(selectDay);

    if (selectMonth.toString().length == 1) {
        var sendDate = selectYear+"-"+"0"+selectMonth+"-"+selectDay;
    }else{
        var sendDate = selectYear + "-" + selectMonth + "-" + selectDay;
    }
    // console.log(sendDate);

    var xhr = new XMLHttpRequest();

    xhr.onload = function () {

        if (xhr.responseText == "not found") {
            alert("字串有錯喔");
            
        } else { //回傳課程資料成功
            // console.log(xhr.responseText);
            var classInfo = JSON.parse(xhr.responseText);
            
            // console.log(classInfo);

            var selectClassNo = classInfo.classDtNo;
            // console.log("報名課程序號為"+selectClassNo);
            
            var selectClassPrice = classInfo.classDtPrice;
            // console.log("報名課程價格為" + selectClassPrice);

            $("#classNo").val(selectClassNo);
            $("#classPrice").val(selectClassPrice);
            // console.log($("#classNo").val());
            // console.log($("#classPrice").val());

            payClassForm();
        }
    }
    var url = "Class-ajaxClassNo.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    var checkClass = {};
    checkClass.classDtDate = sendDate;
    var data_info = "jsonStr=" + JSON.stringify(checkClass);
    xhr.send(data_info);

}

function payClassForm() {

    var classPrice = document.getElementById("classPrice").value;
    // console.log(classPrice);
    var peopleAmount = document.getElementsByClassName('peopleTotal')[0].value;
    // console.log(peopleAmount);
    var totalPrice = classPrice * parseInt(peopleAmount);
    // console.log(totalPrice);

    var xhr = new XMLHttpRequest();

    xhr.onload = function () {
        if(xhr.status == "200"){
            if (xhr.responseText == "success") {
                // console.log(xhr.responseText);
                //關閉付費燈箱
                $('.payClass--popup .popup__wrap').fadeOut(100);
                $('.payClass--popup .popup__box').removeClass('transform--in').addClass('transform--out');
                //跳出付款確認燈箱
                $('.popup__confirmPay .popup__wrap').fadeIn(100);
                $('.popup__confirmPay .popup__box').removeClass('transform--out').addClass('transform--in');
            } else {
                // console.log(xhr.responseText);
            }
        }else{
            alert(xhr.status);
        }
    }

    var url = "Class-ajaxPayClass.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    var classOrder = {};
    classOrder.memNo = document.getElementById("pay__memNo").value;
    // console.log(classOrder.memNo);
    classOrder.classDtNo = document.getElementById("classNo").value;
    classOrder.classOdSum = totalPrice;
    // classOrder.classOdTime = orderTime;
    classOrder.classOdCount = peopleAmount;
    classOrder.classOdStatus = "0";
    var data_info = "jsonStr=" + JSON.stringify(classOrder);
    xhr.send(data_info);

}