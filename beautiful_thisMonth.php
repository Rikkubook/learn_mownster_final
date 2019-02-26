<?php
session_start();
try{
  require_once("connectCD104.php");
  $sql = "select * from showitems  order by showItemVote DESC limit 5; ";
  $showItemVote = $pdo->prepare($sql); 
  $showItemVote ->execute();

  $votes = $showItemVote->fetchAll();
  if($showItemVote->rowCount()==0){ //not found
  	echo "<center>查無此人</center>";
  }else{//如果找得資料，取回資料，送出xml文件
    foreach( $votes as $vote => $data){
      // 得票數
      echo $votes[$vote][4]."cccsacq";
      // 標題
      echo $votes[$vote][2]."cccsacq";
      // 圖片連結
      echo $votes[$vote][5]."cccsacq";
      // 會員ID
      echo $votes[$vote][1]."cccsacq";


    }
  }
  // 如果有登入，印會員資料
  if( isset($_SESSION["memName"]) ){ 
    $sql2 = "select * from showitems where memNo={$_SESSION["memNo"]};";
    
    $showItemVote2 = $pdo->prepare($sql2);
    $showItemVote2 ->execute();

    // 如果找不到投稿紀錄回傳預設值
    if($showItemVote2->rowCount()==0){ //not found
        
        echo 0;
        echo "cccsacq";
        echo $_SESSION["memName"];
        echo "cccsacq"; 
        
        if($_SESSION["memImg"]){
          echo $_SESSION["memImg"];
        }else{
          echo "img/member/egg.png";
        }
        echo "cccsacq";
        echo $_SESSION["memNo"];
        echo "cccsacq";


    }else{//如果找得資料，取回資料，送出xml文件
       while($row = $showItemVote2->fetchObject()){
        // 得票數
        echo $row->showItemVote;
        echo "cccsacq";
        // 標題
        echo $row->showItemName;
        echo "cccsacq";
        // 圖片連結
        echo $row->showItemImg;
        echo "cccsacq";
        // 會員ID
        echo $row->memNo;
        echo "cccsacq";
        

       }
      }
  // 未登入印預設值
  }else{
    echo 0;
    echo "cccsacq";
    echo "訪客";
    echo "cccsacq"; 
    echo "img/member/egg.png";
    echo "cccsacq";
    echo "100";
    echo "cccsacq";

  }
}catch(PDOException $e){
 echo "錯誤原因 : ", $e->getMessage(), "<br>";
  echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>
