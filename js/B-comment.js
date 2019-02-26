
$(function(){
 // 留言
        // 留言者名稱
        var showMsgName = new Array();
        // 留言者訊息
        var showMsgContent = new Array();
        // 留言者日期
        var showMsgDate = new Array();
        // 留言圖片
        var memImg= new Array();

        //登入者

    var counter = 0;
    var listStop =4;

    document.getElementById('loadBtn').addEventListener('click',commentList);

    // 留言清單
    function commentList(){
        // alert('commentList')
        var xhr= new XMLHttpRequest();

        xhr.onload = function(){
            // 若成功傳回字串
            if (xhr.status == 200) {
                // 把回傳字串分割(分號做分隔)
                console.log(xhr.responseText);
                sub_str = xhr.responseText.substr(1);
                var responseitem = sub_str.split("+split");
                // console.log(responseitem);

                // 字串總長度
                var responseitemlen =  responseitem.length-1;
                // 分類切完的字串
                for(var i=0; i<responseitemlen; i++){
                    var type = i%4;
                    switch(type){
                        // 名稱
                        case 0:
                            showMsgName.push(responseitem[i]);
                            break;
                        // 內容
                        case 1:
                            showMsgContent.push(responseitem[i]);
                            break;
                        // 日期
                        case 2:
                            showMsgDate.push(responseitem[i]);
                            break;
                        // 圖片
                        case 3:
                            if(responseitem[i]==""){
                                responseitem[i]="/img/beautiful-img/QA_NPC.png";
                            }
                            memImg.push(responseitem[i]);
                        break;
                    }
                }

                someone=responseitem[responseitem.length - 1];

                console.log(showMsgName);
                console.log(showMsgContent);
                console.log(showMsgDate);
                console.log(memImg);
               

                // 選定要增加內容的div
               
                list();

                function list(){
                    // alert('hi~');
                    console.log(counter);
                    console.log(listStop);
                    while(counter<listStop){
                   
                        var addComment =document.querySelector('.class__comment--other');
                        // var addComment =$('.class__comment--other');
                        
                        if(showMsgName[counter]==undefined){
                            document.getElementById('loadBtn').style.display='none';
                            break;
                        }else{
                            if(showMsgName[counter]==someone){
                                console.log(showMsgName[counter]);
                                // alert('no~');
                                addComment.innerHTML+='<div class="class__comment--single member__comment clear col-12 no-fl">'+
                                    '<div class="comment__memberPic bs-bb fl-l">'+
                                    '<img src="'+memImg[counter]+
                                    '" alt="member">'+
                                '</div>'+
                                '<div class="col-12 col-lg-10 class__comments bs-bb">'+
                                    '<div class="comment__block bs-bb">'+
                                        '<ul class="bs-bb">'+
                                            '<li><span class="comment--name">'+showMsgName[counter]+
                                            '</span><span class="comment__time">'+
                                                showMsgDate[counter]+
                                            '</span></li>'+
                                            '<li><span class="comment--text">'+
                                                showMsgContent[counter]+
                                            '</span></li>'+
                                        '</ul>'+
                                        '<div class="comment__arrow"></div>'+
                                    '</div>'+
                                    '<div class="comment__buttons">'+
                                        '<button class="delete__btn btn-main-sm" id="comment--delete" type="submit">刪除</button>'+
                                    '</div>'+
                                '</div>';
                                // $('.class__comment--single').css("background-color","#c8cd5f");
                                counter++;
                            }else{
                                addComment.innerHTML+='<div class="class__comment--single clear col-12 no-fl">'+
                                        '<div class="comment__memberPic bs-bb fl-l">'+
                                        '<img src="'+
                                            memImg[counter]+
                                        '" alt="member">'+
                                    '</div>'+
                                    '<div class="col-12 col-lg-10 class__comments bs-bb">'+
                                        '<div class="comment__block bs-bb">'+
                                            '<ul class="bs-bb">'+
                                                '<li><span class="comment--name">'+
                                                    showMsgName[counter]+
                                                '</span><span class="comment__time">'+
                                                    showMsgDate[counter]+
                                                '</span></li>'+
                                                '<li><span class="comment--text">'+
                                                    showMsgContent[counter]+
                                                '</span></li>'+
                                            '</ul>'+
                                            '<div class="comment__arrow"></div>'+
                                        '</div>'+
                                        '<div class="comment__buttons">'+
                                            '<button class="MB-report-popup__btn  btn-main-sm" id="comment--report" type="submit">檢舉</button>'+
                                        '</div>'+
                                    '</div>';
                            // addComment.after(newlist);
                            counter++;
                            }
                        }
    
    
    
                        //等事件註冊完再建立跳檢舉燈箱
                        $('.MB-report-popup__btn').click(function() {
    
                            var checkMsgno=$(this).parents('.class__comments').find('.comment--text').text();
                            // console.log(checkMsgno);
                    
                            var xhr = new XMLHttpRequest();
                            
                            xhr.onload = function (){ //測試用
                                if( xhr.responseText == "錯誤"){
                                    alert("checkMsgno系統錯誤");
                                }else{
                                    // alert("checkMsgno成功");
                                    // reponum=xhr.responseText;
                                    // console.log(reponum);
                                }
                            }
                    
                            var url = "B-reportSession.php";
                            xhr.open("post", url, true);
                            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                            
                            var data_info = "jsonStr=" + JSON.stringify( checkMsgno );
                            xhr.send(data_info);
                    
                            // 開背景黑幕
                            $('.MB-report .popup__wrap').fadeIn(100);
                            // 換class名稱
                            $('.MB-report .popup__box').removeClass('transform--out').addClass('transform--in');
                    
                        });
    
                        //等事件註冊完再建立跳刪除燈箱
                        $('.delete__btn').click(function(e) {
                            var checkMsgno=$(this).parents('.class__comments').find('.comment--text').text();
                            // console.log(checkMsgno);
                    
                            var xhr = new XMLHttpRequest();
                            
                            xhr.onload = function (){ //測試用
                                if( xhr.responseText == "錯誤"){
                                    alert("checkMsgno系統錯誤");
                                }else{
                                    // alert("checkMsgno成功");
                                    // reponum=xhr.responseText;
                                    // console.log(reponum);
                                }
                            }
                    
                            var url = "B-reportSession.php";
                            xhr.open("post", url, true);
                            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                            
                            var data_info = "jsonStr=" + JSON.stringify( checkMsgno );
                            xhr.send(data_info);
    
                            $('.MB-delete .popup__wrap').fadeIn(100);
                            $('.MB-delete .popup__box').removeClass('transform--out').addClass('transform--in');
                        }); 
                       
                    }  
                    listStop+=4; 

                };
                // 當起始<終止變數(全域變數)
      
            }else{
                alert(xhr.status);
            }   
        };

    var url = "B-comment.php";
    xhr.open("post", url, true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    var counternum=counter;
    var data_info = "jsonStr=" + JSON.stringify( counternum );  
    xhr.send(data_info);
    // console('cut'+counter);

    }

    commentList();
    
});