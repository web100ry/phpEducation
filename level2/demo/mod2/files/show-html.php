<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>�������� �������� ���</title>
</head>
<body>
<h1>�������� �������� ���</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	������� URL: <em>http://</em>
	<input type="text" name="url" value="localhost/primer/mod2/files/yandex">
	<input type="submit" value="��������">
</form>
<?
$url = strtolower($_GET["url"]);
if (substr($url, 0, 7) != "http://") $url = "http://" . $url;

$lines = @file($url);
if ($lines) {
	echo "<hr><pre>\n";
	foreach($lines as $line) {
		echo htmlspecialchars($line);
	}
	echo "</pre>\n";
}
?>

</body>
</html>
