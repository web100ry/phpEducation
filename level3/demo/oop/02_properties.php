<?php
	// �������� ������
	class MyClass {
		// ����������� ������� ������
		public $property = 1;
		// ����������� ������� ������	
	}
	
	// �������� ���������� ������ (������ �� ������ ������)
	$obj = new MyClass();
	$obj1 = new MyClass();
	
	// ����� �������� ��������
	echo $obj->property;
	echo $obj1->property;
	
	// ��������� �������� ��������
	$obj->property = 2;

	// ����� �������� ��������
	echo $obj->property;
	echo $obj1->property;
?>