<?php 
	try {
		$a = 1;
		$b = 0;
		if ($b==0) throw new MathException("������� �� 0!");
		echo $a/$b;
	} catch (Exception $e) {
		echo "��������� ������������ ������ ", $e->getMessage(),
		" � ������ ", $e->getLine(), 
		" ����� ", $e->getFile();	
	}
?>