<?php
	// �������� ������
	class MyClass {
		// ����������� ������� ������
		public $property = 1;
		// ����������� ������� ������	
		function myMethod() {
			echo $this->property;	
		}
	}
	
	// �������� ���������� ������ (������ �� ������ ������)
	$obj = new MyClass();
	
	// ����� ������
	$obj->myMethod();
?>