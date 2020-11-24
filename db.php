<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// ("DB주소", "DB계정아이디", "DB계정비밀번호", "DB이름")
    $db = new mysqli("127.0.0.1","dbadmin","galaxy95@","GimalBoard");
	$db->set_charset("utf8");

	if ($db->connect_error) {
        die('conn Connect Error!');
    }

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>