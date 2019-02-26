
<?php 
$geItemType = $_POST["geItemType"];
$geItemName = $_POST["geItemName"];
$geItemSize = $_POST["geItemSize"];
$geItemColor = $_POST["geItemColor"];
$geItemPrice = $_POST["geItemPrice"];
$geItemImg = count($_FILES["geItemImg"]["name"]);
$imgStr = "";

for ($i = 0; $i < $geItemImg; $i++) {
  # 檢查檔案是否上傳成功
  if ($_FILES['geItemImg']['error'][$i] === UPLOAD_ERR_OK){

    # 檢查檔案是否已經存在
    if (file_exists('../img/shop-img/' . $_FILES['geItemImg']['name'][$i])){
      echo '檔案已存在。<br/>';
    } else {
      $file = $_FILES['geItemImg']['tmp_name'][$i];
      $dest = '../img/shop-img/' . $_FILES['geItemImg']['name'][$i];
      if($i<$geItemImg -1){
        $imgStr .= $_FILES['geItemImg']['name'][$i] . ',';
      }else if($i == $geItemImg - 1){
        $imgStr .= $_FILES['geItemImg']['name'][$i];
      }
      # 將檔案移至指定位置
      move_uploaded_file($file, $dest);
    }
  } else {
    echo '錯誤代碼：' . $_FILES['geItemImg']['error'] . '<br/>';
  }
}
?>
<?php
try{
  require_once("connectCD104.php");
  $sql = "insert into generalitems (geItemType,geItemName,geItemSize,geItemColor,geItemPrice,geItemImg) values(:geItemType,:geItemName,:geItemSize,:geItemColor,:geItemPrice,:geItemImg)";
  $madmin = $pdo->prepare($sql);
  $madmin->bindValue(":geItemType", $geItemType);
  $madmin->bindValue(":geItemName", $geItemName);
  $madmin->bindValue(":geItemSize", $geItemSize);
  $madmin->bindValue(":geItemColor", $geItemColor);
  $madmin->bindValue(":geItemPrice", $geItemPrice);
  $madmin->bindValue(":geItemImg", $imgStr);
  $madmin->execute();

  header('location:back_items.php');
}catch(PDOException $e){
  echo "error";
}
?>