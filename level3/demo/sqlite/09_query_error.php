<?php
	// ��������� ���� SQLite
	$db = @sqlite_open("test.db", 0666, $sqlite_error) or die($sqlite_error);	
	
	$sql = "SELECT * FROM users";
	
	$result = sqlite_query($sql, $db) or die(sqlite_error_string(sqlite_last_error($db)));
	
	//...���-�� ������...
	
	sqlite_close($db);
?>