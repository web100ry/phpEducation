<?php
	////////// PROCEDURE /////////////////////
	// ��������� ���� SQLite
	$db = sqlite_open("test.db");	
	
	$sql = "SELECT * FROM users";
	$result = sqlite_array_query($sql, $db);
	
	foreach ($result as $row) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	echo "<p>����� ������� - ", sqlite_num_rows($result);
	echo "<p>����� ����� - ", sqlite_num_fields($result);
	sqlite_close($db);
	////////// OOP /////////////////////
	$db = new SQLiteDatabase("test1.db");	
	$sql = "SELECT * FROM users";
	$result = $db->arrayQuery($sql);
	
	foreach ($result as $row) {
		echo "<p>id=", $row[0];	
		echo "<p>username=", $row[1];	
		echo "<p>login=", $row[2];	
		echo "<p>password=", $row[3];	
	}
	echo "<p>����� ������� - ", $result->numRows();
	echo "<p>����� ����� - ", $result->numFields();	
	unset($db);
?>