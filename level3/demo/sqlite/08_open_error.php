<?php
	// ��������� ���� SQLite
	$db = @sqlite_open("test.db", 0666, $sqlite_error) or die($sqlite_error);	
	
	//...���-�� ������...
	
	sqlite_close($db);
?>