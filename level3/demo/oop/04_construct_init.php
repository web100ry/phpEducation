<?php
	class MyClass {
		// ��������
		public $property;
		// ����������� ������
		function __construct($var1, $var2, $var3) {
			$this->property = $var1;
		}
	}
	
	$obj = new MyClass(1, 2, 3);
	$obj1 = new MyClass(4, 5, 6);
	echo $obj->property;
?>