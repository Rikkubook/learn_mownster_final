<script>
  //取得HTML標籤
  function $id(id) {
    return document.getElementById(id);
  }
  function $class(className) {
    return document.getElementsByClassName(className);
  }
  function $all(all) {
    return document.querySelectorAll(all);
  }//取得標籤結束
  //是否修改密碼判斷
  if($id('memPswOld').value == $id('memPswNow').value &&
     $id('memPswChange').value == $id('memPswCheck').value){
  }else{
    $id('member-center').disabled = false;
  }//判斷結束




<?php //取得會員中心-會員資訊裡面的資料並修改
$memNo = $_POST['memNo'];
$memName = $_POST['memName'];
$memPsw = $_POST['memPsw'];
$memEmail = $_POST['memEmail'];
$memTel = $_POST['memTel'];
try{
  require_once("connectCD104.php");
  $sql = "update member set memPsw=:memPsw,memName=:memName,memPsw=:memPsw,memEmail=:memEmail,memTel =:memTel where memNo=".$memNo;
  $member = $pdo->prepare($sql);
  $member->bindValue(":memName",$memName);
  $member->bindValue(":memPsw", $memPsw);
  $member->bindValue(":memEmail",$memEmail);
  $member->bindValue(":memTel",$memTel);
  $member->execute();
  header("Location:member.php");
}catch(PDOException $e){
  echo "error";
}
?> //修改結束
<?php //將修改後的資料存取成新的SESSION
ob_start();
session_start(); 
$memNo = $_POST['memNo'];
try{
  require_once("connectCD104.php");
  $sql = "select * from member where memNo=".$memNo;
  $member = $pdo->query($sql);
    //自資料庫中取回資料
    $memRow = $member->fetchObject();
    //寫入session
    $_SESSION["memNo"] = $memRow->memNo;
    $_SESSION["memId"] = $memRow->memId;
    $_SESSION["memName"] = $memRow->memName;
    $_SESSION["memEmail"] = $memRow->memEmail;
    $_SESSION["memTel"] = $memRow->memTel;
    $_SESSION["memImg"] = $memRow->memImg;
    $_SESSION["memPsw"] = $memRow->memPsw;
    header("Location:member.php");
}catch(PDOException $e){
  echo "error";
}
?> //存取SESSION結束


</script>