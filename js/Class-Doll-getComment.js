
$(function(){
 // 留言
    // 留言者名稱
    var dollMsgImg = new Array();
    // 留言者名稱
    var dollMsgName = new Array();
    // 留言者訊息
    var dollMsgContent = new Array();
    // 留言者日期
    var dollMsgDate = new Array();
    // 留言圖片
    var memImg= new Array();

    //登入者

    var counter = 0;
    var listStop =4;

    document.getElementById('loadBtn').addEventListener('click', commentList);
    classType = $('#classType').val();

    // 留言清單
    function commentList(){
        // alert('commentList')
        var xhr= new XMLHttpRequest();

        xhr.onload = function(){
            // 若成功傳回字串
            if (xhr.status == 200) {
                // 把回傳字串分割(分號做分隔)
                // console.log(xhr.responseText);
                sub_str = xhr.responseText.substr(1).trim();
                var responseitem = sub_str.split("+split");
                // console.log(sub_str);
                // console.log(responseitem);

                // 字串總長度
                var responseitemlen =  responseitem.length-1;
                // 分類切完的字串
                for(var i=0; i<responseitemlen; i++){
                    var type = i%5;
                    switch(type){
                        // 名稱
                        case 0:
                            if (responseitem[i] == "") {
                                responseitem[i] = "null";
                            }
                            dollMsgImg.push(responseitem[i]);
                        break;
                        case 1:
                            dollMsgName.push(responseitem[i]);
                            break;
                        // 內容
                        case 2:
                            dollMsgContent.push(responseitem[i]);
                            break;
                        // 日期
                        case 3:
                            dollMsgDate.push(responseitem[i]);
                            break;
                        // 圖片
                        case 4:
                            if(responseitem[i]==""){
                                responseitem[i]="/img/beautiful-img/QA_NPC.png";
                            }
                            memImg.push(responseitem[i]);
                        break;
                    }
                }

                someone=responseitem[responseitem.length - 1];
                // console.log(someone);
                // console.log(dollMsgImg);
                // console.log(dollMsgName);
                // console.log(dollMsgContent);
                // console.log(dollMsgDate);
                // console.log(memImg);
               
                list();
                // 選定要增加內容的div
   
            }else{
                // console.log(xhr.responseText);
            }   
        };
        
        function list() {
            // 當起始<終止變數(全域變數)
            while (counter < listStop) {
                // 選定要增加內容的div
                var addComment = document.querySelector('.comment__block--show');

                if (dollMsgName[counter] == undefined) {
                    document.getElementById('loadBtn').style.display = 'none';
                    break;
                } else {
                    if (dollMsgName[counter] == someone) {
                        // alert('no~');
                        // console.log(dollMsgName[counter]);
                        if (dollMsgImg[counter] == "null") {
                            addComment.innerHTML += '<div class="class__comment--single own__comment--doll col-12 no-fl">' +
                            '<div class="comment__memberPic bs-bb fl-l">' +
                            '<img src="' + memImg[counter] +
                            '" alt="member">' +
                            '</div>' +
                            '<div class="col-12 col-lg-10 class__comments bs-bb">' +
                            '<div class="comment__block bs-bb">' +
                            '<ul class="bs-bb">' +
                            '<li><span class="comment--name">' + dollMsgName[counter] +
                            '</span><span class="comment__time">' +
                            dollMsgDate[counter] +
                            '</span></li>' +
                            '<li><span class="comment--text doll__comment--text">' +
                            dollMsgContent[counter] +
                            '</span></li>' +
                            '</ul>' +
                            '<div class="comment__arrow"></div>' +
                            '</div>' +
                            '<div class="comment__buttons">' +
                            '<button class="delete__btn btn-main-sm" id="comment--delete" type="submit">刪除</button>' +
                            '</div>' +
                            '</div>';
                            counter++;
                        }else{
                            //印出自己有照片的留言
                            addComment.innerHTML += '<div class="class__comment--single own__comment--doll col-12 no-fl">' +
                                '<div class="comment__memberPic bs-bb fl-l">' +
                                '<img src="' + memImg[counter] +
                                '" alt="member">' +
                                '</div>' +
                                '<div class="col-12 col-lg-10 class__comments bs-bb">' +
                                '<div class="comment__block bs-bb">' +
                                '<ul class="bs-bb">' +
                                '<li><span class="comment--name">' + dollMsgName[counter] +
                                '</span><span class="comment__time">' +
                                dollMsgDate[counter] +
                                '</span></li>' +
                                '<li><span class="comment--text doll__comment--text">' +
                                dollMsgContent[counter] +
                                '</span></li>' +
                                '</ul>' +
                                '<div class="comment__image">' +
                                '<img class="photo--btn" src="' + dollMsgImg[counter] + '" alt="messagePic">' +
                                '</div>' +
                                '<div class="comment__arrow"></div>' +
                                '</div>' +
                                '<div class="comment__buttons">' +
                                '<button class="delete__btn btn-main-sm" id="comment--delete" type="submit">刪除</button>' +
                                '</div>' +
                                '</div>';
                            counter++;
                        }
                    } else {
                        if (dollMsgImg[counter] == "null") {
                            addComment.innerHTML += '<div class="class__comment--single col-12 no-fl">' +
                            '<div class="comment__memberPic bs-bb fl-l">' +
                            '<img src="' +
                            memImg[counter] +
                            '" alt="member">' +
                            '</div>' +
                            '<div class="col-12 col-lg-10 class__comments bs-bb">' +
                            '<div class="comment__block bs-bb">' +
                            '<ul class="bs-bb">' +
                            '<li><span class="comment--name">' +
                            dollMsgName[counter] +
                            '</span><span class="comment__time">' +
                            dollMsgDate[counter] +
                            '</span></li>' +
                            '<li><span class="comment--text doll__comment--text">' +
                            dollMsgContent[counter] +
                            '</span></li>' +
                            '</ul>' +
                            '<div class="comment__arrow"></div>' +
                            '</div>' +
                            '<div class="comment__buttons">' +
                            '<button class="MB-report-popup__btn  btn-main-sm" id="comment--report" type="submit">檢舉</button>' +
                            '</div>' +
                            '</div>';
                            // addComment.after(newlist);
                            counter++;
                        }else{
                            //印出非自己但有照片的留言
                            addComment.innerHTML += '<div class="class__comment--single col-12 no-fl">' +
                                '<div class="comment__memberPic bs-bb fl-l">' +
                                '<img src="' + memImg[counter] +
                                '" alt="member">' +
                                '</div>' +
                                '<div class="col-12 col-lg-10 class__comments bs-bb">' +
                                '<div class="comment__block bs-bb">' +
                                '<ul class="bs-bb">' +
                                '<li><span class="comment--name">' + dollMsgName[counter] +
                                '</span><span class="comment__time">' +
                                dollMsgDate[counter] +
                                '</span></li>' +
                                '<li><span class="comment--text doll__comment--text">' +
                                dollMsgContent[counter] +
                                '</span></li>' +
                                '</ul>' +
                                '<div class="comment__image">' +
                                '<img class="photo--btn" src="' + dollMsgImg[counter] + '" alt="messagePic">' +
                                '</div>' +
                                '<div class="comment__arrow"></div>' +
                                '</div>' +
                                '<div class="comment__buttons">' +
                                '<button class="MB-report-popup__btn btn-main-sm" id="comment--delete" type="submit">檢舉</button>' +
                                '</div>' +
                                '</div>';
                                counter++;
                        }
                    }
                    // 註冊照片燈箱功能
                    $('.photo--btn').click(function (e) {
                        $('#popup__photo img').attr("src", "");

                        $('.popup__photoBox .popup__wrap').fadeIn(100);
                        $('.popup__photoBox .popup__box').removeClass('transform--out').addClass('transform--in');

                        // console.log($(this).attr("src"));
                        $('#popup__photo img').attr("src", $(this).attr("src"));

                        e.preventDefault();
                        //停止超連結預設超連結行為
                    });
                    //等事件註冊完再建立跳檢舉燈箱
                    $('.MB-report-popup__btn').click(function () {
    
                        var checkMsgNo = $(this).parents('.class__comments').find('.comment--text').text();
                        // console.log(checkMsgNo);
    
                        var xhr = new XMLHttpRequest();
    
                        xhr.onload = function () { //測試用
                            if (xhr.responseText == "錯誤") {
                                // console.log(xhr.responseText);
                            } else {
                                // alert("checkMsgNo成功");
                                // reponum=xhr.responseText;
                                // console.log(reponum);
                            }
                        }
    
                        var url = "Class-reportSession.php";
                        xhr.open("post", url, true);
                        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    
                        var data_info = "jsonStr=" + JSON.stringify(checkMsgNo);
                        xhr.send(data_info);
    
                        // 開背景黑幕
                        $('.MB-report .popup__wrap').fadeIn(100);
                        // 換class名稱
                        $('.MB-report .popup__box').removeClass('transform--out').addClass('transform--in');
    
                    });
    
                    //等事件註冊完再建立跳刪除燈箱
                    $('.delete__btn').click(function (e) {
                        var checkMsgNo = $(this).parents('.class__comments').find('.comment--text').text();
                        // console.log(checkMsgNo);
    
                        var xhr = new XMLHttpRequest();
    
                        xhr.onload = function () { //測試用
                            if (xhr.responseText == "錯誤") {
                                // alert("checkMsgNo系統錯誤");
                            } else {
                                // alert("checkMsgNo成功");
                                // reponum=xhr.responseText;
                                // console.log(reponum);
                            }
                        }
    
                        var url = "Class-reportSession.php";
                        xhr.open("post", url, true);
                        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    
                        var data_info = "jsonStr=" + JSON.stringify(checkMsgNo);
                        xhr.send(data_info);
    
                        $('.MB-delete .popup__wrap').fadeIn(100);
                        $('.MB-delete .popup__box').removeClass('transform--out').addClass('transform--in');
                    });
                }
            }
            listStop += 4;
            // 當起始<終止變數(全域變數)
        };

        var url = "Class-getComment.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

        var sendType = {};
        sendType.classType = classType;
        sendType.counternum = counter;

        // console.log(sendType);
        var data_info = "jsonStr=" + JSON.stringify(sendType);

        xhr.send(data_info);
        // console('cut'+counter);
    }

    commentList();
    
});