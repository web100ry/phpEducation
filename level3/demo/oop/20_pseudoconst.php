<?php
	class MyClass {
		function myMethod() {
			echo "<p>����� - ", __CLASS__;
			echo "<p>����� - ", __METHOD__;	
		}	
	}
	
	$obj = new MyClass();
	$obj->myMethod();
?>