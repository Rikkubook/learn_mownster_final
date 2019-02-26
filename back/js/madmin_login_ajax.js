function $id(id) {
  return document.getElementById(id);
}
function $class(className) {
  return document.getElementsByClassName(className);
}
function $all(all) {
  return document.querySelectorAll(all);
} 
$id('login-erroMsg').style.color = 'red';//錯誤訊息紅色
//登入
function sendForm(){
  var xhr = new XMLHttpRequest(); 
  if($id('adminId').value == ''){
      $id('adminId').focus();
      $id('login-erroMsg').innerHTML = '請輸入帳號!';
  }else if($id('adminPsw').value == ''){
      $id('adminPsw').focus();
      $id('login-erroMsg').innerHTML = '請輸入密碼!';
  }else{
  xhr.onload = function (){//=====使用Ajax 回server端
    if( xhr.responseText == "not found"){
      $id('adminId').value = '';
      $id('adminPsw').value = '';
      $id('adminId').focus();
      $id('login-erroMsg').innerHTML = '帳號密碼錯誤!';
    }else if(xhr.responseText == "stop"){
      $id('adminId').value = '';
      $id('adminPsw').value = '';
      $id('adminId').focus();
      $id('login-erroMsg').innerHTML = '此帳號已停權!';
    }else if(xhr.responseText == "error"){
      $id('adminId').value = '';
      $id('adminPsw').value = '';
      $id('adminId').focus();
      $id('login-erroMsg').innerHTML = '系統錯誤!';
    }else{ //帳密登入成功
      $id('adminId').value = '';
      $id('adminPsw').value = '';
      window.location.replace("mownster_index.php");
    }
  }
  var url = "madmin_login_ajax.php";
  xhr.open("post", url, true);
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");  
  var madmin = {};
  madmin.adminId = document.getElementById("adminId").value;
  madmin.adminPsw = document.getElementById("adminPsw").value;
  var data_info = "jsonStr=" + JSON.stringify( madmin );
  xhr.send(data_info);

  }
}//登入結束