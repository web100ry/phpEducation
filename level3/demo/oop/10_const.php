<?php
	class MyClass {
		// ��������� ������
		const MYCONSTANT = 1;
		function myMethod() {
			echo self::MYCONSTANT;	
		}
	}
	class NewClass extends MyClass {
		function myMethod() {
			parent::myMethod();	
		}	
	}
	
	echo MyClass::MYCONSTANT;
	$obj = new NewClass();
	$obj->myMethod();
?>