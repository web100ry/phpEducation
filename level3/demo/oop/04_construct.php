<?php
	class MyClass{
		// ����������� ������
		function __construct() {
			echo "������ �����������";
		}
		
		// ����������
		function __destruct() {
			echo "������ ����������";	
		}
	}
	
	$obj = new MyClass();
	unset($obj);
	echo "<p>����� ��������";
?>