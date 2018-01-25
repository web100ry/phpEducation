<?php
	////////// PROCEDURE /////////////////////
	// �������� ���� SQLite
	$db = sqlite_open("test.db");
	// �������� �������
	$sql = "CREATE TABLE users(
	                          id INTEGER PRIMARY KEY,
	                          username TEXT,
	                          login TEXT,
	                          password TEXT
	          )";
	sqlite_query($sql, $db);
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");
	$sql = "CREATE TABLE users(
	                          id INTEGER PRIMARY KEY,
	                          username TEXT,
	                          login TEXT,
	                          password TEXT
	          )";

	$db->query($sql);
	unset($db);
?>