<? session_start();
$name = $_SESSION["name"];
$age = $_SESSION["age"];
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>���� ������</title>
</head>
<body>
<h1>���� ������</h1>
<a href="session-1.php">������������ ������</a><br>
<a href="session_destroy.php">������� ������</a><br><br>
<?
if ($name and $age) {	
	if ($name and $age) {
		echo "<h1>������, $name</h1>";
		echo "<h3>���� $age ���</h3>";
	}
	else {
		print "<h3>��������� ��� ����!</h3>";
	}
}
?>
</body>
</html>
