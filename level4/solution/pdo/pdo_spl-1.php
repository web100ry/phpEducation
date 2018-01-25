<?php
// check for errors
error_reporting(E_ALL);

try {
	$dsn = new PDO("sqlite2:users.db");

	$stmt = $dsn->prepare('SELECT * FROM user ORDER BY id');

	$stmt->execute();

	$it = new IteratorIterator($stmt);

	// $it ������ �������� ��������� ��������.
	// ������ ������ �������� ��������� �������.
	foreach($it as $row){
		// ������ array ������
		$arrayObj = new ArrayObject($row);
		// ����� �� �������
		for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
			// output the key and current array value
			echo $iterator->current() . '<br />';
		}
		echo '<hr />';
	}

	$dsn = null;

}catch (PDOException $e){
	print "Error!: " . $e->getMessage() . "<br />";
}
?>