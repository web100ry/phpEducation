<?php
	class MyClass {
		// ��������� ������
		static $counter = 0;
		public $id;
		function __construct() {
			$this->id = ++self::$counter;	
		}
	}
	
	$obj1 = new MyClass();
	$obj2 = new MyClass();
	$obj3 = new MyClass();
	
	echo "<p>������ \$obj1 ����� id=", $obj1->id;
	echo "<p>������ \$obj2 ����� id=", $obj2->id;
	echo "<p>������ \$obj3 ����� id=", $obj3->id;
	echo "<p>����� �������� - ", MyClass::$counter;
?>