<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>���������� � ������� �������</title>
</head>

<body>
<h1>���������� � ������� �������</h1>
<?
define("url", "http://localhost/files/time-server.php");
$lines = @file(url);
if ($lines) {
	echo "����� ������ " . url . ": " . $lines[0];
}
?>
</body>
</html>
