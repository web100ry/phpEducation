<?php
	class MyClass {
		// ������������� ��������
		public $public = 1;	
		final function myMethod() {
			echo $this->public;	
		}
	}
	
	class NewClass extends MyClass {
		function myMethod() {
			echo "2";
		}	
	}
?>