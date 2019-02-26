function $id(id) {
  return document.getElementById(id);
}
function $class(className) {
  return document.getElementsByClassName(className);
}
function $all(all) {
  return document.querySelectorAll(all);
}
$id('modify-erroMsg').style.color = 'red';//錯誤訊息紅色
function ModifyForm(){
    //=====使用Ajax 回server端
    var xhr = new XMLHttpRequest();
    if($id('modify-memPswChange').value != ''){
      //沒有輸入新密碼的狀態
      if($id('modify-memName').value == ''){
        $id('modify-memName').focus();
        $id('modify-erroMsg').innerHTML = '姓名不能空白!';
      }else if($id('modify-memPswOld').value != $id('modify-memPsw').value){
        $id('modify-erroMsg').innerHTML = '舊密碼錯誤!';
      }else if($id('modify-memPswChange').value.length <3 ||$id('modify-memPswChange').value.length >10){
        $id('modify-memPswChange').focus();
        $id('modify-memPswChange').value = '';
        $id('modify-memPswCheck').value = '';
        $id('modify-erroMsg').innerHTML = '密碼請大於 3 碼，或是小於10碼!';
      }else if($id('modify-memPswChange').value != $id('modify-memPswCheck').value){
        $id('modify-memPswChange').focus();
        $id('modify-memPswChange').value = '';
        $id('modify-memPswCheck').value = '';
        $id('modify-erroMsg').innerHTML = '確認密碼不一致!';
      }else if($id('modify-memTel').value == '' || $id('modify-memTel').value.length < 9){
        $id('modify-memTel').focus();
        $id('modify-memTel').value = '';
        $id('modify-erroMsg').innerHTML = '請輸入正確電話!';
      }else if($id('modify-memEmail').value =='' || $id('modify-memEmail').value.indexOf("@") < 1 && $id('modify-memEmail').value.indexOf(".com") < 3 ){
        $id('modify-memEmail').focus();
        $id('modify-erroMsg').innerHTML = '請輸入正確信箱!';
      }else{
        xhr.onload = function (){
            $('.modifysuccess_popup .popup__wrap').fadeIn(100);//註冊成功出現
            $('.modifysuccess_popup .popup__box').removeClass('transform--out').addClass('transform--in');
            setTimeout(function(){
              $('.modifysuccess_popup .popup__wrap').fadeOut(100);//註冊成功關閉
              $('.modifysuccess_popup .popup__box').removeClass('transform--in').addClass('transform--out');
            },1000);
            $id('modify-memPswChange').value = '';
            $id('modify-memPswCheck').value = '';
          history.go(0);
           //成功
        }//xhrload結束
          var url = "ajaxMember_JSON.php";
          xhr.open("post", url, true);
          xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
          var member = {};

          member.memNo = document.getElementById("modify-memNo").value;
          member.memName = document.getElementById("modify-memName").value;
          member.memPsw = document.getElementById("modify-memPswCheck").value;
          member.memEmail = document.getElementById("modify-memEmail").value;
          member.memTel = document.getElementById("modify-memTel").value;
          var data_info = "jsonStr=" + JSON.stringify( member );
          xhr.send(data_info);
      }
      //沒有輸入新密碼狀態結束
    }else{
        if($id('modify-memName').value == ''){
        $id('modify-memName').focus();
        $id('modify-erroMsg').innerHTML = '姓名不能空白!';
      }else if($id('modify-memPswOld').value != $id('modify-memPsw').value){
        $id('modify-erroMsg').innerHTML = '舊密碼錯誤!';
      }else if($id('modify-memTel').value == '' || $id('modify-memTel').value.length < 9){
        $id('modify-memTel').focus();
        $id('modify-memTel').value = '';
        $id('modify-erroMsg').innerHTML = '請輸入正確電話!';
      }else if($id('modify-memEmail').value=='' || $id('modify-memEmail').value.indexOf("@") < 1 || $id('modify-memEmail').value.indexOf(".com") < 3 ){
        $id('modify-memEmail').focus();
        $id('modify-erroMsg').innerHTML = '請輸入正確信箱!';
      }else{
        xhr.onload = function (){
            $('.modifysuccess_popup .popup__wrap').fadeIn(100);//註冊成功出現
            $('.modifysuccess_popup .popup__box').removeClass('transform--out').addClass('transform--in');
            setTimeout(function(){
              $('.modifysuccess_popup .popup__wrap').fadeOut(100);//註冊成功關閉
              $('.modifysuccess_popup .popup__box').removeClass('transform--in').addClass('transform--out');
            },1000);
            $id('modify-memPsw').value = '';
            history.go(0);
           //成功
        }//xhrload結束
          var url = "ajaxMember_JSON.php";
          xhr.open("post", url, true);
          xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
          var member = {};

          member.memNo = document.getElementById("modify-memNo").value;
          member.memName = document.getElementById("modify-memName").value;
          member.memPsw = document.getElementById("modify-memPsw").value;
          member.memEmail = document.getElementById("modify-memEmail").value;
          member.memTel = document.getElementById("modify-memTel").value;
          console.log(member.memEmail);
          var data_info = "jsonStr=" + JSON.stringify( member );
          xhr.send(data_info);
        }
      }

    
  }//function結束