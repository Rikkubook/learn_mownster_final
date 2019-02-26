
//留言送後端
function leaveMessage(){
        var textarea = $('#classComment--send').val();

        if(textarea==""){
            $('#comment--send').text('不能送空白留言');
            $('.popup__comment .popup__wrap').fadeIn(500);
            $('.popup__comment .popup__box').removeClass('transform--out').addClass('transform--in');
        }else{
            //=====使用Ajax 回server端
            var xhr = new XMLHttpRequest(); 

            xhr.onload = function (){ //測試用
                if( xhr.responseText == "成功"){
                    $('.popup__comment .popup__wrap').fadeIn(500);
                    $('.popup__comment .popup__box').removeClass('transform--out').addClass('transform--in');
                    $('#classComment--send').val("");
                    setTimeout(function(){history.go(0);},1000);
                    //增加節點
                }else{
                    alert("系統錯誤");
                }
            }

            var url = "B-commentSendDB.php";
            xhr.open("post", url, true);
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
            
            console.log(textarea);
            var data_info = "jsonStr=" + JSON.stringify( textarea );
            
            xhr.send(data_info);
        }
        
    }
    
    //跳燈箱時先判斷是哪一則被檢舉 要跟跳燈箱寫一起

    //依據檢舉跳燈箱的資料塞入後端
    function reportMessage(){
        //=====使用Ajax 回server端
        var xhr = new XMLHttpRequest(); 

        xhr.onload = function (){ //測試用
            if( xhr.responseText == "成功"){
                // alert("reportMessage成功");
            }else{
                alert("reportMessage系統錯誤");
            }
        }
            
        var reportReason =$("select[name='reportMessage']").val();
        console.log(reportReason);
        var url = "B-reportSendDB.php";
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
                    history.go(0);
            }else{
                alert("deleteMessage系統錯誤");
            }
        }
            
        // var reportReason =$("select[name='reportMessage']").val();
        // console.log(reportReason);
        var url = "B-deleteSendDB.php";
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
        