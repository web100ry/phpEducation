<?php

	function __autoload($class_name) {
		echo "<p>������� ������� ������ ��������������� ������ - ",
		$class_name;
		include($class_name.".class");
	}

	$obj = new MyClass();
?>