<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=cd104g2;charset=utf8";//使用本機的SQL資料庫裡面的books;
	$user = "cd104g2";
	$password = "cd104g2";

	$options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
	$pdo = new PDO($dsn ,$user , $password, $options);
;?>