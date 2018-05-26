<?php

  header('Content-Type: text/html; charset=utf-8');
  $db_host = "localhost" ;
  $db_user = "root" ;
  $db_password = "root" ;
  $db_name = "DBTermProject" ;

	$db = new mysqli($db_host, $db_user, $db_password, $db_name);

	if($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
	}
	$db->set_charset('utf8');
	session_start();

  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>

