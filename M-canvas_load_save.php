<?php session_start();?> 
<?php
$upload_dir = "Mimages//";
if( ! file_exists($upload_dir ))
  mkdir($upload_dir);
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$data = base64_decode($img);
$fileName = time();
$file = $upload_dir . $fileName . ".png";
$success = file_put_contents($file, $data);
$_SESSION["customer"] = $upload_dir . $fileName . ".png";
$_SESSION["time"] = $fileName;
echo $success ? $file : 'Unable to save the file.';
?>
