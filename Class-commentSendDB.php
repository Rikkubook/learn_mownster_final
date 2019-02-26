<?php 
ob_start();
session_start();

var_dump($_REQUEST);
var_dump($_FILES);
var_dump($_FILES["uploadPic"]["type"]);

$message = $_REQUEST["textareaMessage"];
$msgType = $_REQUEST["messageType"];
$classMsgImg = "";
$date=date("Y-m-d H:i:s", time());
$timeStamp= time();

switch( $_FILES["uploadPic"]["error"]){
    case UPLOAD_ERR_OK : 
      if( file_exists("img/class-img/message-Pics") === false){
        mkdir("img/class-img/message-Pics"); //make directory
      }
      $path_parts = pathinfo($_FILES["uploadPic"]["name"] );
      echo "dirname : ", $path_parts['dirname'], "<br>";
      echo "basename : ", $path_parts['basename'], "<br>";
      echo "extension : ", $path_parts['extension'], "<br>";
      echo "filename : ", $path_parts['filename'], "<br>";
      // exit();
      // $oldImgName = $_FILES["uploadPic"]["name"];
      // echo "舊檔案名：".$oldImgName;
      // $oldImgName = str_replace($_FILES["uploadPic"]["type"], '', $oldImgName);
      // $sendFileName = $timeStamp.'.'.$path_parts['extension'];
      $sendFileName = $path_parts['filename'].'-'.$_SESSION["memNo"].'-'.$_SESSION["memId"].'-'.$timeStamp.'.'.$path_parts['extension'];
      echo "檔案名：".$sendFileName;
      $from = $_FILES["uploadPic"]["tmp_name"];
      $to = "img/class-img/message-Pics/{$sendFileName}";
      $classMsgImg = "img/class-img/message-Pics/{$sendFileName}";
      //$to = "images/" . time(). "." . $path_parts['extension'] ;  //8
      copy($from, $to);	
      echo "上傳success<br>";
      break;
    case 1 :
        echo "上傳檔案太大, 不得超過", ini_get("max_file_size"),"<br>";
        $classMsgImg = "";
        break;
    case 2 :
        echo "上傳檔案太大, 不得超過", $_POST["MAX_FILE_SIZE"],"位元組(bytes)<br>";
        $classMsgImg = "";
        break;
    case 3 :
        echo "上傳檔案不完整";
        $classMsgImg = "";
        break;
    case 4 : 
      echo "檔案没選";
      $classMsgImg = "";
}

// $jsonStr = $_REQUEST["jsonStr"]; 
// //接字串
// $classMsgInfo = json_decode($jsonStr); 
//轉為php可讀

try{
  require_once("connectCD104.php");
  $sql = "insert into classmessage(memNo,classMsgImg,classMsgName,classMsgContent,classType, classMsgDate,memImg) value(:memNo,:classMsgImg,:classMsgName,:classMsgContent,:classType, now(),:memImg)";
  $classMsg = $pdo->prepare($sql);
  $classMsg->bindValue(":memNo", $_SESSION["memNo"]);
  $classMsg->bindValue(":classMsgImg", $classMsgImg);
  $classMsg->bindValue(":classMsgName", $_SESSION["memName"]);
  $classMsg->bindValue(":classMsgContent", $message);
  $classMsg->bindValue(":classType", $msgType);
  $classMsg->bindValue(":memImg", $_SESSION["memImg"]);
  $classMsg->execute();
  echo "成功";

}catch(PDOException $e){
    $errMsg ="錯誤原因 : " . $e->getMessage(). "<br>".   "錯誤行號 : ". $e->getLine(). "<br>";
    echo $errMsg;
} 

?>
