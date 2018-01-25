<?php 
	class MathException extends Exception {
		function __construct($message) {
			parent::__construct($message);	
		}
	}	
	try {
		$a = 1;
		$b = 0;
		if ($b==0) throw new MathException("������� �� 0!");
		echo $a/$b;
	} catch (MathException $e) {
		echo "��������� �������������� ������ ", $e->getMessage(),
		" � ������ ", $e->getLine(), 
		" ����� ", $e->getFile();	
	} catch (Exception $e) {
		echo "��������� ������������ ������ ", $e->getMessage(),
		" � ������ ", $e->getLine(), 
		" ����� ", $e->getFile();	
	}
?>