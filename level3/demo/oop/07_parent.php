<?php
	class MyClass {
		public $property = 1;
		function myMethod() {
			echo $this->property;	
		}	
	}
	
	// ������������
	class NewClass extends MyClass {
		public $new_property = 2;
		function newMethod() {
			echo $this->new_property;	
		}
		function myMethod() {
			parent::myMethod()
		}	
	}
	
	$obj = new NewClass();
	$obj->myMethod();
	$obj->newMethod();
?>