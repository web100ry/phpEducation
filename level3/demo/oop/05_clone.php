<?php
	// �������� ������
	class MyClass {
		// ����������� ������� ������
		public $property = 1;	
	}
	
	// �������� ���������� ������ (������ �� ������ ������)
	$obj1 = new MyClass();
	$obj2 = clone $obj1;
	$obj1->property = 2;
	
	// ����� �������� ��������
	echo $obj1->property;
	echo $obj2->property;
?>