<?php
	////////// PROCEDURE /////////////////////
	// ��������� ���� SQLite
	$db = sqlite_open("test.db");	
	$username = sqlite_escape_string("John");
	$login = sqlite_escape_string("admin");
	$password = sqlite_escape_string("1234");	
	$sql = "INSERT INTO users(
				 username,
				 login,
				 password
		       ) VALUES (
				'$username',
				'$login',
				'$password'			
			)";
	sqlite_query($sql, $db);
	echo "��������� ������ � id=", sqlite_last_insert_rowid($db);
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");	
	$username = sqlite_escape_string("John");
	$login = sqlite_escape_string("admin");
	$password = sqlite_escape_string("1234");	
	$sql = "INSERT INTO users(
				 username,
				 login,
				 password
		       ) VALUES (
				'$username',
				'$login',
				'$password'			
			)";
	$db->query($sql);
	echo "<p>��������� ������ � id=", $db->lastInsertRowid();
	unset($db);
?>