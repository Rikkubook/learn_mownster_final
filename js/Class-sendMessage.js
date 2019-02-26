//上傳照片時的預覽
window.addEventListener("load", function () {
    document.getElementById("uploadPicture").onchange = function (e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function () {
            document.getElementById('previewImg').style.display = "block";
            document.querySelector("#previewImg img").src = reader.result;
        }
        reader.readAsDataURL(file);
    };
}, false);
//留言送後端
function leaveMessage(){
    var textarea = $('#classComment--send').val();
    var classType = $('#classType').val();
    var sendText = document.getElementById('textareaMessage');
    sendText.value = textarea;
    // console.log(sendText.value);
    var sendType = document.getElementById('messageType').value;
    sendType = classType;
    // console.log(sendType);

    if(textarea==""){
        // $('#classComment--send').text('不能送空白留言');
        $('.popup__msgAlert .popup__wrap').fadeIn(500);
        $('.popup__msgAlert .popup__box').removeClass('transform--out').addClass('transform--in');
    }else{
        //=====使用Ajax 回server端
        var xhr = new XMLHttpRequest(); 

        xhr.onload = function (){ //測試用
            // console.log(xhr.responseText.slice(-2));
            if (xhr.responseText.slice(-2) == "成功") {
                // console.log(xhr.responseText);
                $('.popup__comment .popup__wrap').fadeIn(500);
                $('.popup__comment .popup__box').removeClass('transform--out').addClass('transform--in');
                $('#classComment--send').val("");
                setTimeout(function(){ history.go(0); }, 1000);
                //增加節點
            }else{
                // console.log(xhr.responseText);
            }
        }
        var messageForm = document.getElementById("messageForm");
        var formData = new FormData(messageForm);

        var url = "Class-commentSendDB.php";
        xhr.open("post", url, true);
        // xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        // var  sendMessage ={};
        // sendMessage.classType = classType;
        // sendMessage.classMsgContent = textarea;
        // console.log(formData);
        // var data_info = "jsonStr=" + JSON.stringify( sendMessage );
        xhr.send(formData);
    }
}

// 跳燈箱時先判斷是哪一則被檢舉 要跟跳燈箱寫一起
// 依據檢舉跳燈箱的資料塞入後端
function reportMessage(){
    //=====使用Ajax 回server端
    var xhr = new XMLHttpRequest(); 

    xhr.onload = function (){ //測試用
        if( xhr.responseText == "成功"){
            // alert("reportMessage成功");
        }else{
            // console.log(xhr.responseText);
        }
    }
    
    var reportReason = $("#reportMessage").val();
    // console.log(reportReason);
    var url = "Class-reportSendDB.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    
    var data_info = "jsonStr=" + JSON.stringify( reportReason );
    xhr.send(data_info);
    
}

//依據刪除跳燈箱的資料塞入後端
function deleteMessage(){
    //=====使用Ajax 回server端
    var xhr = new XMLHttpRequest(); 

    xhr.onload = function (){ //測試用
        if( xhr.responseText == "成功"){
            $('.MB-delete .popup__wrap').fadeOut(100);
            $('.MB-delete .popup__box').removeClass('transform--in').addClass('transform--out');
            // alert("deleteMessage成功");
            console.log(xhr.responseText);
            history.go(0);
        }else{
            console.log(xhr.responseText);
            alert("deleteMessage系統錯誤");
        }
    }
        
    // var reportReason =$("select[name='reportMessage']").val();
    // console.log(reportReason);
    var url = "Class-deleteSendDB.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    // var data_info = "jsonStr=" + JSON.stringify( reportReason );
    xhr.send('');
}

$(function(){
    $('.popup__comment--close').click(function(e) {
    $('.popup__comment .popup__wrap').fadeOut(500);
    $('.popup__comment .popup__box').removeClass('transform--in').addClass('transform--out');

    e.preventDefault();
    //停止超連結預設超連結行為
    });
});
        